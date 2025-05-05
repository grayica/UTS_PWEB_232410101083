@php $showLayout = false; @endphp
@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-box">
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</div>
@endsection
