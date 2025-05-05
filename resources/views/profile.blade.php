@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<style>
    .profile-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 75vh;
        text-align: center;
        padding: 40px 20px;
    }

    .profile-wrapper h2 {
        font-size: 28px;
        margin-bottom: 10px;
    }

    .profile-wrapper p {
        font-size: 16px;
        color: #555;
        max-width: 600px;
        margin-bottom: 30px;
    }

    .favorite-list {
        list-style-type: none;
        padding: 0;
        max-width: 600px;
        margin: 0 auto;
    }

    .favorite-list li {
        background-color: #fff;
        margin-bottom: 10px;
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        text-align: left;
    }

    .favorite-list li span {
        font-weight: bold;
    }

    .section-title {
        font-size: 20px;
        margin-bottom: 10px;
        color: #333;
    }
</style>

<div class="profile-wrapper">
    <h2>Halo, {{ session('username') }}! 👤</h2>
    <p>Ini adalah halaman profilmu di MyMovieList. Di sini kamu bisa melihat informasi akun dan daftar film favoritmu.</p>

    <div class="favorites">
        <h3 class="section-title">🎬 Daftar Film Favorit</h3>
        <ul class="favorite-list">
            @foreach ($favorites as $film)
                <li style="display: flex; gap: 15px; align-items: center;">
                    <img src="{{ $film['image'] }}" alt="{{ $film['title'] }}" style="width: 60px; height: 90px; object-fit: cover; border-radius: 4px;">
                    <div>
                        <span>{{ $film['title'] }}</span><br>
                        <small>{{ $film['genre'] }}</small>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
