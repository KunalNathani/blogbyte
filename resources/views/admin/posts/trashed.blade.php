@extends('admin.layouts.app')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="float-right mb-3">
                <a href="{{ route('posts.index') }}" class="btn btn-primary">View All Posts</a>
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
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>
                                    <img src="{{ asset("storage/$post->image") }}" class="img-responsive" width="100px">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->excerpt }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                    @if ($post->is_owner)
                                    <a href="{{ route('posts.restore', $post->id) }}" class="btn btn-info btn-sm">Restore</a>
                                    <button class="btn btn-danger btn-sm delete" data-bs-toggle="modal" data-bs-target="#deleteModal" data-post-id="{{ $post->id }}">Permanent Delete</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete permanently?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form method="POST" id="deleteForm">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Yes, Delete</button>
            </form>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    document.querySelectorAll('.delete').forEach(function (btn) {
        btn.addEventListener('click', handleDeleteClick);
    });

    function handleDeleteClick(evt) {
        const postId = evt.target.dataset.postId;
        const URL = `/posts/delete/${postId}`;
        document.getElementById('deleteForm').setAttribute('action', URL);
    }
</script>
@endsection
