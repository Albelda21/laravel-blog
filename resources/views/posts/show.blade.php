@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Return to all Posts</a>
    <h1>{{ $post->title }}</h1>
    <hr>
         <img style="width:100%;" src="/storage/cover_images/{{ $post->cover_image }}" alt=""><br><br>
        <div>
            {!! $post->body !!}
        </div>
             <hr>
    <small>Written on <i>{{ $post->created_at }} by <strong>{{ $post->user->name }}</strong></i></small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'Post', 'onsubmit' => 'return confirmDelete()']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
        @endif
    @endif
@endsection

<script>
function confirmDelete() {
var result = confirm('Are you sure you want to delete this post?');

if (result) {
        return true;
    } else {
        return false;
    }
}
</script>﻿
