<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'ThePetHouse')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        nav {
            background-color: #ffffff;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-menu {
            display: flex;
            gap: 20px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
        }

        .content {
            padding: 30px 40px;
        }

        footer {
            margin-top: 50px;
            padding: 20px;
            text-align: center;
            background-color: #ffffff;
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">
            ThePetHouse
        </div>

        <div class="nav-menu">
            <a href="/">Beranda</a>
            <a href="{{ route('produk.index') }}">Produk</a> 
            <a href="{{ route('about') }}">Tentang Kami</a>
        </div>
    </nav>

    <main class="content">
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} ThePetHouse</p>
    </footer>

</body>
</html>
