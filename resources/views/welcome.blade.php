@extends('layouts.app')
@section('content')
    <div class="container welcome-container">
        <div class="welcome-title">Welcome to myWardrobe!</div>
        <a href="{{ route('login') }}" class="btn btn-primary btn-login-register">Login</a>
        <a href="{{ route('register') }}" class="btn btn-secondary btn-login-register">Register</a>
    </div>
@endsection
