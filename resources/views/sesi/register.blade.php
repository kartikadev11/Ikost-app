@extends('layouts/loginapp')

@section('content')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        <form action="/sesi/register" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" value="{{ Session::get('name') }}"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="{{ Session::get('email') }}"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button type="submit" name="submit" class="btn btn-primary">REGISTER</button>
            </div>
        </form>
        <small class="d-block text-center mt-2">Already Registered? <a href="/sesi">Login</a></small>
    </div>
    
@endsection