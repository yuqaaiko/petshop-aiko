@extends('layouts.customer')

@section('title', 'Tambah Pelanggan - ThePetHouse')

@section('content')

<section>

    <h1>Tambah Pelanggan</h1>

    <form method="POST" action="{{ route('pelanggan.store') }}">

        @csrf

        <div>
            <label for="nama_pelanggan">
                Nama Pelanggan
            </label>

            <br>

            <input
                type="text"
                id="nama_pelanggan"
                name="nama_pelanggan"
                value="{{ old('nama_pelanggan') }}"
                required
            >
        </div>

        <br>

        <div>
            <label for="alamat">
                Alamat
            </label>

            <br>

            <textarea
                id="alamat"
                name="alamat"
                required
            >{{ old('alamat') }}</textarea>
        </div>

        <br>

        <div>
            <label for="nomor_telepon">
                Nomor Telepon
            </label>

            <br>

            <input
                type="text"
                id="nomor_telepon"
                name="nomor_telepon"
                value="{{ old('nomor_telepon') }}"
                required
            >
        </div>

        <br>

        <button type="submit">
            Simpan Pelanggan
        </button>

    </form>

    <br>

    <a href="{{ route('pelanggan.index') }}">
        ← Kembali ke Data Pelanggan
    </a>

</section>

@endsection