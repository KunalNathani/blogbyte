@extends('admin.layouts.app')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="float-right mb-3">
                <a href="#" class="btn btn-primary">Add New Post</a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Excerpt</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>
                                        <img src="{{ asset("frontend/assets/img/$post->image") }}" class="img-responsive" width="100px">
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->excerpt }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
