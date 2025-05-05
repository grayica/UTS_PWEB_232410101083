<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function doLogin(Request $request) {
        $username = $request->input('username');
        $request->session()->put('username', $username);
        return redirect()->to('/dashboard');
    }

    public function dashboard(Request $request) {
        $username = $request->session()->get('username');
        return view('dashboard', compact('username'));
    }

    public function profile()
    {
        $username = session('username');

        $favorites = [
            [
                'title' => 'The Shawshank Redemption',
                'genre' => 'Drama',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/8/81/ShawshankRedemptionMoviePoster.jpg'
            ],
            [
                'title' => 'Interstellar',
                'genre' => 'Sci-Fi / Adventure',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/b/bc/Interstellar_film_poster.jpg'
            ],
        ];

        return view('profile', compact('username', 'favorites'));
    }

    public function pengelolaan() {
        $films = [
            [
                'judul' => 'The Shawshank Redemption',
                'genre' => 'Drama',
                'tahun' => '1994',
                'image' => asset('images/ShawshankRedemptionMoviePoster.jpg'),
            ],
            [
                'judul' => 'Bohemian Rhapsody',
                'genre' => 'Biography / Music',
                'tahun' => '2018',
                'image' => asset('images\Bohemian_Rhapsody_poster.png'),
            ],
            [
                'judul' => 'Interstellar',
                'genre' => 'Sci-Fi / Adventure',
                'tahun' => '2014',
                'image' => asset('images/Interstellar_film_poster.jpg'),
            ],
            [
                'judul' => 'Inception',
                'genre' => 'Sci-Fi / Thriller',
                'tahun' => '2010',
                'image' => asset('images/Inception.jpg'),
            ],
            [
                'judul' => 'The Dark Knight',
                'genre' => 'Action / Crime',
                'tahun' => '2008',
                'image' => asset('images/Dark_Knight.jpg'),
            ],
            [
                'judul' => 'The Godfather',
                'genre' => 'Crime / Drama',
                'tahun' => '1972',
                'image' => asset('images/TheGodFather.jpg'),
            ],
            [
                'judul' => 'Titanic',
                'genre' => 'Romance / Drama',
                'tahun' => '1997',
                'image' => asset('images/Titanic.jpg'),
            ],
            [
                'judul' => 'The Matrix',
                'genre' => 'Sci-Fi / Action',
                'tahun' => '1999',
                'image' => asset('images/The_Matrix_Poster.jpg'),
            ],
            [
                'judul' => 'Pulp Fiction',
                'genre' => 'Crime / Drama',
                'tahun' => '1994',
                'image' => asset('images/Pulp_Fiction_(1994)_poster.jpg'),
            ],
            [
                'judul' => 'Forrest Gump',
                'genre' => 'Drama / Romance',
                'tahun' => '1994',
                'image' => asset('images\Forrest_Gump_poster.jpg'),
            ],
    ];
    return view('pengelolaan', compact('films'));
    }
}


