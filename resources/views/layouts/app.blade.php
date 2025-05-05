<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') MyMovieList </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .login-box {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-box h1 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .login-box label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #555;
        }

        .login-box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-box button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .login-box button:hover {
            background-color: #0056b3;
        }

        .footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

    </style>

</head>
<body>
    @if (!isset($showLayout) || $showLayout)
    @include('components.navbar')
    @endif

    @yield('content')

    @if (!isset($showLayout) || $showLayout)
    @include('components.footer')
@endif

</body>
</html>
