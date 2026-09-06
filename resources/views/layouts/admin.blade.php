<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin - ThePetHouse')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #222222;
        }

        .admin-navbar {
            background-color: #ffffff;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        }

        .admin-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .admin-menu {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .admin-menu a {
            text-decoration: none;
            color: #222222;
        }

        .admin-menu a:hover {
            color: #6b4f7a;
        }

        .admin-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 35px 40px;
            min-height: 500px;
        }

        .admin-footer {
            background-color: #ffffff;
            text-align: center;
            padding: 25px;
            margin-top: 30px;
            box-shadow: 0 -2px 6px rgba(0,0,0,0.05);
        }

        .admin-footer a {
            color: #222222;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <nav class="admin-navbar">

        <div class="admin-brand">
            ThePetHouse Admin
        </div>

        <div class="admin-menu">

            <a href="{{ route('admin.dashboard') }}">
                Dashboard
            </a>

            <a href="{{ route('admin.products') }}">
                Produk
            </a>

            <a href="{{ route('admin.categories') }}">
                Kategori
            </a>

            <a href="{{ route('admin.suppliers') }}">
                Supplier
            </a>

            <a href="{{ route('admin.customers') }}">
                Pelanggan
            </a>

            <a href="{{ route('transaksi.index') }}">
                🧾 Transaksi
            </a>

        </div>

    </nav>


    <main class="admin-container">

        @yield('content')

    </main>


    <footer class="admin-footer">

        <p>
            © {{ date('Y') }} ThePetHouse Admin
        </p>

        <a href="{{ url('/') }}">
            Kembali ke Customer
        </a>

    </footer>

</body>
</html>
