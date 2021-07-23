@extends('layouts.app')
@section('content')
    <div class="container">
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.tags.create') }}">
                    Add tag
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-header"><i class="fa fa-align-justify"></i> Tags list</div>
            <div class="card-body">
                <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->name }}</td>
                            <td>
                                <a class="btn btn-xs btn-info" href="{{ route('admin.tags.edit', $tag->id) }}">
                                    Edit
                                </a>

                                <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST"
                                      onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{ $tags->links() }}

            </div>
        </div>
    </div>
@endsection
