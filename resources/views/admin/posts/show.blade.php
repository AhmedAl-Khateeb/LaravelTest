@extends('layouts.admin')

@section('content')
    <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="container col-md-6">
            <h5 class="card-title"><a href="{{route('post.showall')}}" class="text-danger text-center">Show_All</a></h5>

            <div class="card">

                <div class="card-body text-center">
                    <h1 class="display-1 text-success">Post: {{ $post->postID }}</h1>
                    <br>
                    <h5>Title: {{ $post->title }}</h5>
                    <br>
                    <h5>Content: {{ $post->content }}</h5>
                    <br>
                    <h5>Author: {{ $post->author }}</h5>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
