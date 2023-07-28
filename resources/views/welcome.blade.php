@extends('layouts.app')
@section('content')
    <div class="banner text-center mt-5 bg_secondary">
        <img src="{{ asset('img/logo1.png') }}" alt="logo">
    </div>
    <div class="container welcome-container mt-5">
        <div class="welcome-title">Welcome to myWardrobe!</div>
        <a href="{{ route('login') }}" class="btn btn-primary btn-login-register">Login</a>
        <a href="{{ route('register') }}" class="btn btn-secondary btn-login-register">Register</a>
    </div>
@endsection
