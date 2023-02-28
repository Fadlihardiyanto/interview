@extends('app')
@section('content')
@auth

<div class="row">
    <div class="col-lg-4 mx-auto">
    <p>Welcome <b>{{ Auth::user()->name }}</b></p>
    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
    </div>
</div>

@endauth
@guest
<h1>Home</h1>
<div class="row">
    <div class="col-lg-4 mx-auto">
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary m-2" href="{{ route('login') }}">Login</a>
            <a class="btn btn-secondary m-2" href="{{ route('register') }}">Register</a>
        </div>
    </div>
</div>

@endguest
@endsection