@extends('layouts.app')

@section('content')
    <h1>Edit a Post</h1>
    <a href="/posts/{{ $post->id }}" class="btn btn-default">Back to Post</a>
    <hr>

    <img style="width:30%;" src="/storage/cover_images/{{ $post->cover_image }}" alt=""> <br><br>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body',  $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body']) }}
    </div>
    {{ Form::hidden('_method', 'PUT') }}
    <div class="form-group">
        {{ Form::file('cover_image') }}
    </div>
    {{ Form::submit('Update Post', ['class' => 'btn btn-success']) }}
    {!! Form::close() !!}

    <p style="margin-bottom: 140px"></p>   {{--}})))))))))))))))))))))))--}}
@endsection