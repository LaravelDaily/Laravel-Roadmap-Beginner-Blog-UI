@extends('layouts.guest')
@section('content')
<main class="post blog-post"> 
    <div class="container">
      <div class="post-single">
        <div class="">
            @if($post->image)
                <img src="{{ asset('uploads/' . $post->image) }}" width="100" height="100" class="img-fluid">
            @else
                <img src="{{ asset('no_image.jpg') }}" width="100" height="100" class="img-fluid">
            @endif
        </div>
        <div class="post-details">
          <div class="post-meta d-flex justify-content-between">
            <div class="category">{{ $post->category->name }}</div>
          </div>
          <h1>{{ $post->title }}</h1>
          <div class="post-footer d-flex align-items-center flex-column flex-sm-row">
            <div class="d-flex align-items-center flex-wrap">       
              <div class="date"><i class="icon-clock"></i>{{ $post->created_at->format('d F Y') }}</div>
            </div>
          </div>
          <div class="post-body">
            {!! nl2br($post->post) !!}
          </div>
          <div class="post-tags">
              @foreach ($post->tags as $tag)
                <a href="#" class="tag">#{{ $tag->name }}</a>
              @endforeach
            </div>
        </div>
      </div>
    </div>
  </main>
@endsection