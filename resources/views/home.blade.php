@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h3>Your Posts</h3>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{!! $post->body !!}</td>
                                <td>
                                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a>
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'Post', 'onsubmit' => 'return confirm("Are you sure ?")']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="/posts/create" class="btn btn-primary">Create a new Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
