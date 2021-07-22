@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-primary">
            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                <div>
                    <div class="text-value-lg">{{ $postsCount }}</div>
                    <div>Posts</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection