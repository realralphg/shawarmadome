@extends('Layouts.layout')

@section('content')
    <div class="welcome full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="welcome-content">
            <img src="/img/shawarma.jpg" alt="brand logo">
            <div class="title m-b-md">
                Shawarma Dome
            </div>

            <p>{{ session('mssg') }}</p>
            <a href="{{ route('shawarmas.create') }}"> Order a Shawarma </a>
        </div>
    </div>
@endsection
