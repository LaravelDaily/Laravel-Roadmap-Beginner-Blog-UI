@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $post->title }}</div>

                    <div class="card-body">
                        <div class="">
                            @if($post->image)
                                <img src="{{ asset('uploads/' . $post->image) }}" width="100" height="100"
                                     class="img-fluid">
                            @else
                                <img src="{{ asset('no_image.jpg') }}" width="100" height="100" class="img-fluid">
                            @endif
                        </div>

                        <div class="my-5">{!! nl2br($post->post) !!}</div>

                        @foreach ($post->tags as $tag)
                            <a href="#" class="btn btn-outline-secondary">#{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
