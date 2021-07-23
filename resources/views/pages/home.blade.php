@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Latest posts</div>

                    <div class="card-body">
                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-md-4">
                                    <div>
                                        <a href="{{ route('posts.show', $post) }}">
                                            @if($post->image)
                                                <img src="{{ asset('uploads/' . $post->image) }}" width="100"
                                                     height="100" class="img-fluid">
                                            @else
                                                <img src="{{ asset('no_image.jpg') }}" width="100" height="100"
                                                     class="img-fluid">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="text-muted">{{ $post->created_at->format('d F Y') }}</div>
                                        <div class=""><a href="#"
                                                         class="font-weight-bolder text-info">{{ $post->category->name }}</a>
                                        </div>
                                    </div>
                                    <a href="{{ route('posts.show', $post) }}" class="font-weight-bold text-success">
                                        <h3 class=""">{{ $post->title }}</h3>
                                    </a>
                                    <p class="text-muted">{{ $post->post }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
