@extends('layouts.customer')

@section('title', 'Beranda - ThePetHouse')

@section('content')

<style>
    .hero {
        background-color: #f3f0f7;
        padding: 50px 40px;
        border-radius: 15px;
        margin-bottom: 35px;
        text-align: center;
    }

    .hero h1 {
        font-size: 36px;
        margin-bottom: 12px;
    }

    .hero p {
        font-size: 17px;
        margin-bottom: 25px;
    }

    .hero-buttons {
        margin-top: 20px;
    }

    .hero-button {
        display: inline-block;
        padding: 11px 18px;
        margin: 5px;
        background-color: #333333;
        color: white;
        text-decoration: none;
        border-radius: 6px;
    }

    .section-title {
        text-align: center;
        margin-bottom: 25px;
    }

    .feature-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }

    .feature-card {
        background-color: #ffffff;
        padding: 25px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .feature-card h3 {
        margin-bottom: 10px;
    }

    .about-section {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        margin-bottom: 30px;
    }
</style>


<section class="hero">

    <h1>Selamat Datang di ThePetHouse 🐾</h1>

    <p>
        Temukan berbagai kebutuhan terbaik
        untuk hewan peliharaan kesayangan Anda.
    </p>

    <div class="hero-buttons">

        <a href="{{ route('produk.index') }}" class="hero-button">
            🛍️ Lihat Produk
        </a>

        <a href="{{ route('cart.index') }}" class="hero-button">
            🛒 Lihat Keranjang
        </a>

    </div>

</section>


<section>

    <h2 class="section-title">
        Kenapa Belanja di ThePetHouse? 🐶🐱
    </h2>

    <div class="feature-list">

        <div class="feature-card">

            <h3>🐾 Produk Pilihan</h3>

            <p>
                Menyediakan berbagai kebutuhan
                untuk hewan peliharaan Anda.
            </p>

        </div>


        <div class="feature-card">

            <h3>🛒 Mudah Berbelanja</h3>

            <p>
                Pilih produk dan masukkan
                ke dalam keranjang dengan mudah.
            </p>

        </div>


        <div class="feature-card">

            <h3>💗 Untuk Hewan Kesayangan</h3>

            <p>
                Membantu Anda memenuhi kebutuhan
                hewan peliharaan tercinta.
            </p>

        </div>

    </div>

</section>


<section class="about-section">

    <h2>Tentang ThePetHouse</h2>

    <p>
        ThePetHouse merupakan sistem informasi pet shop
        yang menyediakan berbagai produk kebutuhan
        hewan peliharaan.
    </p>

    <p>
        Kami hadir untuk membantu pemilik hewan
        menemukan berbagai kebutuhan peliharaan
        dengan lebih mudah.
    </p>

</section>

@endsection
