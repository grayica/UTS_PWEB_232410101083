@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<style>
    html, body {
        height: 100%;
        margin: 0;
    }

    .page-wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        background-color: #f4f4f4;
    }

    .main-content {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .main-content h2 {
        font-size: 2.5rem;
        color: #222;
        margin-bottom: 1rem;
    }

    .main-content p {
        font-size: 1.2rem;
        color: #555;
    }

    footer {
        background-color: #222;
        color: white;
        padding: 1rem;
        text-align: center;
    }
</style>

<div class="page-wrapper">
    <main class="main-content">
        <div>
            <h2>Selamat datang, {{ session('username') }}! 👋</h2>
            <p>Selamat datang di <strong>MyMovieList</strong>! 🎬</p>
            <p>MyMovieList adalah tempat yang tepat untuk kamu yang suka banget nonton film.</p>
            <p>Mulai jelajahi dunia filmmu sekarang juga!</p>
        </div>
    </main>
@endsection

