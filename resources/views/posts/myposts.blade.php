@extends('layouts.layout')

@section('content')

    <div class="col-sm-8 blog-main">

        @foreach($posts as $post)

            @include('posts.mypost_post')

        @endforeach

    </div>

@endsection