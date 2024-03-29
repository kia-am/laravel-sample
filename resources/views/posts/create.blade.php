
@extends('layouts.layout')

@section('content')

    <div class="col-sm-8 blog-main">

        <h1>
            Create a Posts
        </h1>

        <hr>

        <form method="post" action="posts" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" >
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea  name="body" class="form-control tinymce"></textarea>
            </div>
            <div class="form-group">
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

            @include('layouts.errors')
        </form>
    </div>

@endsection