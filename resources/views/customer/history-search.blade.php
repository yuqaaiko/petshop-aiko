@extends('layouts.customer')

@section('title', 'Riwayat Pesanan - ThePetHouse')

@section('content')

<section>

    <h1>📋 Riwayat Pesanan</h1>

    <p>
        Masukkan nama dan nomor telepon yang digunakan saat melakukan
        pemesanan untuk melihat riwayat pesanan kamu.
    </p>

    <hr>

 <form action="{{ route('customer.history') }}" method="GET">

        <p>
            <label for="nama">
                <strong>Nama Pelanggan</strong>
            </label>
            <br>

            <input
                type="text"
                id="nama"
                name="nama"
                required
            >
        </p>

        <p>
            <label for="telepon">
                <strong>Nomor Telepon</strong>
            </label>
            <br>

            <input
                type="text"
                id="telepon"
                name="telepon"
                required
            >
        </p>

        <button type="submit">
            🔍 Cari Riwayat Pesanan
        </button>

    </form>

    <br>

    <a href="{{ url('/') }}">
        ← Kembali ke Beranda
    </a>

</section>

@endsection
