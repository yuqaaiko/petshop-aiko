<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'ThePetHouse')
    </title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #222;
        }

        /* NAVBAR */

        .navbar {
            background-color: #ffffff;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-menu {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .navbar-menu a {
            text-decoration: none;
            color: #222;
        }

        .navbar-menu a:hover {
            color: #6b4f7a;
        }

        /* CONTENT */

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 35px 40px;
            min-height: 500px;
        }

        /* FOOTER */

        .footer {
            background-color: #ffffff;
            text-align: center;
            padding: 25px;
            margin-top: 30px;
            box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.05);
        }

        .footer a {
            color: #222;
            text-decoration: none;
            font-weight: bold;
        }

    </style>

</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar">

        <div class="navbar-menu">

            <a href="{{ url('/') }}">
                Beranda
            </a>

            <a href="{{ route('produk.index') }}">
                Produk
            </a>

            <a href="{{ route('customer.history.search') }}">
                 Riwayat Pesanan
            </a>

            <a href="{{ route('cart.index') }}">
                 Keranjang
            </a>

            <a href="{{ route('about') }}">
                Tentang Kami
            </a>

        </div>

    </nav>


    <!-- CONTENT -->

    <main class="container">

        @yield('content')

    </main>


    <!-- FOOTER -->

    <footer class="footer">

        <p>
            © {{ date('Y') }} ThePetHouse
        </p>

        <a href="{{ route('admin.access') }}">
            Admin
        </a>

    </footer>

</body>

</html>
