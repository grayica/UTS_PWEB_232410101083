@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
    <h2>Daftar Film Favorit</h2>

    <table border="1" cellpadding="10" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($films as $film)
                <tr>
                    <td style="text-align: center;">
                        <img src="{{ $film['image'] }}" alt="{{ $film['judul'] }}" style="width: 80px; height: 120px; object-fit: cover; border-radius: 4px;">
                    </td>
                    <td>{{ $film['judul'] }}</td>
                    <td>{{ $film['genre'] }}</td>
                    <td>{{ $film['tahun'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <style>
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        thead {
            background-color: #007bff;
            color: white;
        }

        th, td {
            padding: 12px 16px;
            text-align: left;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #eef3ff;
        }

        td img {
            width: 80px;
            height: 120px;
            object-fit: cover;
            border-radius: 4px;
        }
    </style>

@endsection
