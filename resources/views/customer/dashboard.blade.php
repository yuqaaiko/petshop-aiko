@extends('layouts.customer')

@section('title', 'Beranda - ThePetHouse')

@section('content')

    <section>
        <h1>Selamat Datang di ThePetHouse 🐾</h1>

        <p>
            Temukan berbagai kebutuhan terbaik untuk hewan peliharaan Anda.
        </p>
    </section>

    <section>
        <h2>Produk Kami</h2>

        <p>
            Kami menyediakan berbagai kebutuhan untuk hewan peliharaan Anda.
        </p>

        <a href="{{ route('produk.index') }}">Lihat Produk</a>
    </section>

    <section>
        <h2>Tentang ThePetHouse</h2>

        <p>
            ThePetHouse merupakan sistem informasi pet shop
            yang menyediakan berbagai produk kebutuhan hewan peliharaan.
        </p>
    </section>

@endsection
