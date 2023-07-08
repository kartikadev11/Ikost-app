@extends('layouts/loginapp')

@section('content')
    <div class="w-60 center border rounded px-10 py-50 mx-auto">
        <div class="row justify-content-center">
            <div class="col-md-5">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <main class="form-signin">
                    <form action="/sesi/login" method="POST">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

                        <div class="form-floating mb-3">
                            <input type="email" name="email"
                                class="form-control @error('email')
                            is-invalid
                        @enderror"
                                id="email" placeholder="name@example.com" autofocus required
                                value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password"
                                class="form-control @error('password')
                            is-invalid
                        @enderror"
                                id="password" placeholder="Password" required ">
                                                        <label for="password">Password</label>
                                                        @error('password')
        <div class="invalid-feedback">
                                                                {{ $message }}
                                                                </div>
    @enderror
                                                    </div>
                                                
                                                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                                                </form>
                                                <small class="d-block text-center mt-2">Not Registered? <a href="/sesi/register">Register Now!</a></small>
                                            </main>
                                        </div>
                                    </div>
@endsection
</div>
