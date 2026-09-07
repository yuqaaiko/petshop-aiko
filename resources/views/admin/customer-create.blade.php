@extends('layouts.admin')

@section('title', 'Tambah Pelanggan - Admin ThePetHouse')

@section('content')

<style>

    .form-container {
        max-width: 700px;
        margin: auto;
    }

    .form-card {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .form-group {
        margin-bottom: 18px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 6px;
    }

    .form-group textarea {
        min-height: 100px;
        resize: vertical;
    }

    .form-actions {
        display: flex;
        gap: 10px;
        margin-top: 25px;
    }

    .save-button {
        padding: 10px 16px;
        border: none;
        border-radius: 6px;
        background-color: #333333;
        color: #ffffff;
        cursor: pointer;
    }

    .back-button {
        padding: 10px 16px;
        border-radius: 6px;
        background-color: #eeeeee;
        color: #333333;
        text-decoration: none;
    }

</style>


<section class="form-container">

    <h1>Tambah Pelanggan</h1>

    <p style="margin-bottom: 25px;">
        Tambahkan data pelanggan baru.
    </p>


    <div class="form-card">

        <form method="POST" action="{{ route('pelanggan.store') }}">

            @csrf


            <div class="form-group">

                <label for="nama_pelanggan">
                    Nama Pelanggan
                </label>

                <input
                    type="text"
                    id="nama_pelanggan"
                    name="nama_pelanggan"
                    value="{{ old('nama_pelanggan') }}"
                    required
                >

            </div>


            <div class="form-group">

                <label for="alamat">
                    Alamat
                </label>

                <textarea
                    id="alamat"
                    name="alamat"
                    required
                >{{ old('alamat') }}</textarea>

            </div>


            <div class="form-group">

                <label for="nomor_telepon">
                    Nomor Telepon
                </label>

                <input
                    type="text"
                    id="nomor_telepon"
                    name="nomor_telepon"
                    value="{{ old('nomor_telepon') }}"
                    required
                >

            </div>


            <div class="form-actions">

                <button type="submit" class="save-button">
                    Simpan Pelanggan
                </button>


                <a
                    href="{{ route('admin.customers') }}"
                    class="back-button"
                >
                    Batal
                </a>

            </div>

        </form>

    </div>

</section>

@endsection