@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="mx-auto" style="max-width:400px;">

        <h2 class="text-center mb-4">Create Account</h2>

        <form action="{{ route('register.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button class="btn btn-success w-100">Register</button>
        </form>

        <p class="text-center mt-3">
            Already registered? <a href="{{ route('login') }}">Login</a>
        </p>

    </div>
</div>
@endsection
