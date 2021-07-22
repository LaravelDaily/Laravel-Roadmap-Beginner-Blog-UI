@extends('layouts.guest')
@section('content')
<!-- Hero Section-->
<section style="background: url(https://d19m59y37dris4.cloudfront.net/blog/1-2-1/img/hero.jpg); background-size: cover; background-position: center center" class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <h1>Laravel Roadmap: Beginner Project Blog</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- Latest Posts -->

<section class="latest-posts"> 
    <div class="container">
      <header> 
        <h2>Latest from the blog</h2>
        <p class="text-big">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </header>
      <div class="row">
          @foreach ($posts as $post)
            <div class="post col-md-4">
                <div class="post-thumbnail"><a href="{{ route('posts.show', $post) }}">
                    @if($post->image)
                        <img src="{{ asset('uploads/' . $post->image) }}" width="100" height="100" class="img-fluid">
                    @else
                        <img src="{{ asset('no_image.jpg') }}" width="100" height="100" class="img-fluid">
                    @endif
                </a></div>
                <div class="post-details">
                    <div class="post-meta d-flex justify-content-between">
                        <div class="date">{{ $post->created_at->format('d F Y') }}</div>
                        <div class="category"><a href="#">{{ $post->category->name }}</a></div>
                    </div>
                    <a href="{{ route('posts.show', $post) }}">
                        <h3 class="h4">{{ $post->title }}</h3>
                    </a>
                    <p class="text-muted">{{ $post->post }}</p>
                </div>
            </div>
          @endforeach
      </div>
    </div>
</section>
@endsection