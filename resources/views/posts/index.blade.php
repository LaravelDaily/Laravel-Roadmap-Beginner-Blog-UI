@extends('layouts.guest')
@section('content')
<section class="latest-posts"> 
    <div class="container">
      <header> 
        <h2>Blog posts</h2>
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
                </div><a href="{{ route('posts.show', $post) }}">
                    <h3 class="h4">{{ $post->title }}</h3></a>
                <p class="text-muted">{{ $post->post }}</p>
                </div>
            </div>
          @endforeach
      </div>
      {{ $posts->links() }}
    </div>
</section>
@endsection