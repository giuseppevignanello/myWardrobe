@extends('layouts.app')
@section('content')
    <div class="container welcome-container">
        <div class="welcome-title">Welcome to myWardrobe!</div>
        <a href="{{ route('login') }}" class="btn bg_main text-white btn-login-register">Login</a>
        <a href="{{ route('register') }}" class="btn bg_secondary text-white btn-login-register">Register</a>
    </div>
@endsection
