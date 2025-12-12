@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="mx-auto" style="max-width:400px;">

        <h2 class="text-center mb-4">Login</h2>

        <form action="{{ route('login.attempt') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100">Login</button>
        </form>

        <p class="text-center mt-3">
            No account? <a href="{{ route('register') }}">Register</a>
        </p>
    </div>
</div>
@endsection
