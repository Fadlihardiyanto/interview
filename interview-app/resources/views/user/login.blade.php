@extends('app')
@section('content')

    @if(session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
    @endif
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto">
                <form action="{{ route('login.action') }}" method="post">
                    @csrf
                    
                    <div class="shadow p-3 mt-3 bg-body rounded">
                        <h6 class="mb-3 fw-semibold text-center lh-lg text-dark">Login</h6>   
                        <div class="form-floating">
                            <input type="username" style="margin-bottom: -1px;border-bottom-right-radius: 0;border-bottom-left-radius: 0;" class="form-control" id="username" name="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        <div>
                            <button class="w-100 btn btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem; background-color: #22569e; color:#fff" type="submit">Sign in</button>
                            <a  class="w-100 btn btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem; background-color: #9e2222; color:#fff"  href="{{ route('home') }}">Back</a>
                    </div>
                </form>
            </main>
        </div>
    </div>
    

@endsection