@extends('layouts.customer')

@section('title', 'Admin Access - ThePetHouse')

@section('content')

<style>
    .admin-access {
        min-height: 60vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .admin-card {
        width: 100%;
        max-width: 420px;
        background-color: #ffffff;
        padding: 35px;
        border-radius: 12px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        text-align: center;
    }

    .admin-card h1 {
        margin-bottom: 10px;
    }

    .admin-card p {
        margin-bottom: 25px;
        color: #666666;
    }

    .admin-card label {
        display: block;
        text-align: left;
        margin-bottom: 8px;
        font-weight: bold;
    }

    .admin-card input {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 6px;
        margin-bottom: 15px;
    }

    .admin-button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 6px;
        background-color: #333333;
        color: #ffffff;
        cursor: pointer;
    }

    .admin-button:hover {
        background-color: #555555;
    }

    .back-home {
        display: inline-block;
        margin-top: 15px;
        color: #333333;
        text-decoration: none;
    }
</style>

<section class="admin-access">

    <div class="admin-card">

        <h1>🔐 Admin Access</h1>

<p>
    Masukkan password untuk mengakses halaman Admin ThePetHouse.
</p>

@if (session('error'))
    <p style="color: red; margin-bottom: 15px;">
        {{ session('error') }}
    </p>
@endif

<form action="{{ route('admin.check') }}" method="POST">
    @csrf

    <input type="password" name="password">

    <button type="submit">
        Masuk Admin
    </button>
</form>
        <a href="/" class="back-home">
            ← Kembali ke Beranda
        </a>

    </div>

</section>

@endsection
