@extends('app')
@section('content')

        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif


        <div class="row justify-content-center">
            <div class="col-md-5">
                <main class="form-signin w-100 m-auto">
                    <form action="{{ route('register.action') }}" method="post">
                        @csrf
                    
                        <div class="shadow p-3 mt-3 bg-body rounded">
                            <h6 class="mb-3 fw-semibold text-center lh-lg text-dark">Register</h6>   
                            <div class="form-floating">
                                <input type="name" style="margin-bottom: -1px;border-bottom-right-radius: 0;border-bottom-left-radius: 0;" class="form-control" id="name" name="name" placeholder="name" autofocus required value="{{ old('name') }}">
                                <label for="username">Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="username" style="margin-bottom: -1px;border-bottom-right-radius: 0;border-bottom-left-radius: 0;" class="form-control" id="username" name="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                            <label for="username">Username</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password_confirm" placeholder="Password Confirmation">
                                <label for="password">Password Confirmation</label>
                            </div>
                            <div>
                                <button class="w-100 btn btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem; background-color: #22569e; color:#fff" type="submit">Register</button>
                                <a  class="w-100 btn btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem; background-color: #9e2222; color:#fff"  href="{{ route('home') }}">Back</a>
                            </div>
                           
                        </div>
                    </form>
                </main>
            </div>
        </div>
@endsection