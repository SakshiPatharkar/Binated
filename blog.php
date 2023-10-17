@extends('layouts.app') <!-- Use a layout or extend a master layout -->

@section('content')
    <div class="container">
        <h1>Create a New Blog Post</h1>
        <form method="post" action="{{ route('admin.blog.create') }}">
            @csrf <!-- CSRF Token -->

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create Blog Post</button>
        </form>
    </div>
@endsection
