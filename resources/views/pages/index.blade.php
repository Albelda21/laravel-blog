@extends('layouts.app')

@section('content')

    @if(Auth::guest())
    <div class="jumbotron text-center">
        <h1>Welcome To Laravel!</h1>
        <p>This is the laravel application from the "Laravel From Scratch" YouTube series</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
    @else
        <div class="container">
      <h1>Hello, Mr. {{ ucfirst(Auth::user()->name) }}, how are you doing today?</h1>
        </div>
    @endif
@endsection