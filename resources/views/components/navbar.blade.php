<header>
    <style>
        header {
            background-color: #2e51a2;
            border-bottom: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .navbar {
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: bold;
            font-size: 20px;
            color: white;
            text-decoration: none;
        }

        .logo img {
            height: 30px;
            width: auto;
        }

        nav {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        nav form {
            display: inline;
        }

        nav button {
            background-color: rgb(255, 4, 4);
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        nav button:hover {
            background-color: rgb(255, 0, 0);
        }

        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            nav {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
                margin-top: 10px;
            }
        }
    </style>

    <div class="navbar">
        <a href="/" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 60px;">
            MyMovieList
        </a>
        <nav>
            <a href="/dashboard">Dashboard</a>
            <a href="/profile">Profile</a>
            <a href="/pengelolaan">Pengelolaan</a>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </nav>
    </div>
</header>
