@extends('layouts.app')

@section('content')
        <h1>Posts</h1>
        @if(count($posts))
    <ul>
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:80%;" src="/storage/cover_images/{{ $post->cover_image }}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                        <hr>
                        <p><b>{!! $post->body !!}</b></p>
                        <hr>
                        <small>Written on {{ $post->created_at }} by <strong>{{ $post->user->name }}</strong></small>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    </ul>
        @else
         <h3>No posts found</h3>
        @endif
@endsection