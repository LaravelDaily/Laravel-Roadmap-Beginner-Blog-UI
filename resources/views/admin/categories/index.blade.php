@extends('layouts.app')
@section('content')
    <div class="container">

        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.categories.create') }}">
                    Add category
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-header"><i class="fa fa-align-justify"></i> Categories list</div>
            <div class="card-body">
                @if (session('errors'))
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a class="btn btn-xs btn-info"
                                   href="{{ route('admin.categories.edit', $category->id) }}">
                                    Edit
                                </a>

                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
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

                {{ $categories->links() }}

            </div>
        </div>

    </div>
@endsection
