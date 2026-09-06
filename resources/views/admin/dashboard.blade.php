@extends('layouts.admin')

@section('title', 'Admin Dashboard - ThePetHouse')

@section('content')

<style>
    .admin-header {
        margin-bottom: 30px;
    }

    .admin-header h1 {
        margin-bottom: 10px;
    }

    .admin-header p {
        color: #666666;
    }

    .admin-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 20px;
        margin-top: 25px;
        margin-bottom: 35px;
    }

    .stat-card {
        background-color: #ffffff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        text-align: center;
    }

    .stat-card h2 {
        margin-bottom: 10px;
    }

    .stat-card p {
        color: #666666;
    }

    .admin-menu {
        margin-top: 30px;
    }

    .admin-menu h2 {
        margin-bottom: 20px;
    }

    .menu-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

.menu-card {
    display: block;
    background-color: #ffffff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    text-decoration: none;
    color: #333333;
    }

    .menu-card:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .menu-card h3 {
        margin-bottom: 10px;
    }

    .menu-card p {
        color: #666666;
    }

    .low-stock {
        margin-top: 35px;
        background-color: #ffffff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .low-stock h2 {
        margin-bottom: 15px;
    }
</style>

<section class="admin-header">

    <h1>Admin Dashboard 🐾</h1>

    <p>
        Selamat datang di halaman Admin ThePetHouse.
    </p>

</section>


<section class="admin-stats">

    <div class="stat-card">
        <h2>📦 20</h2>
        <p>Total Produk</p>
    </div>

    <div class="stat-card">
        <h2>🏷️ 5</h2>
        <p>Total Kategori</p>
    </div>

    <div class="stat-card">
        <h2>🚚 8</h2>
        <p>Total Supplier</p>
    </div>

    <div class="stat-card">
        <h2>👥 15</h2>
        <p>Total Pelanggan</p>
    </div>

    <div class="stat-card">
        <h2>🧾 12</h2>
        <p>Total Transaksi</p>
    </div>

</section>


<section class="admin-menu">

    <h2>Data Master</h2>

    <div class="menu-list">

    <a href="{{ route('admin.products') }}" class="menu-card">
        <h3>📦 Produk</h3>
        <p>Kelola data produk ThePetHouse.</p>
    </a>

<a href="{{ route('admin.categories') }}" class="menu-card">
    <h3>🏷️ Kategori</h3>
    <p>Kelola kategori produk.</p>
</a>

<a href="{{ route('admin.suppliers') }}" class="menu-card">
    <h3>🚚 Supplier</h3>
    <p>Kelola data supplier.</p>
</a>

<a href="{{ route('admin.customers') }}" class="menu-card">
    <h3>👥 Pelanggan</h3>
    <p>Kelola data pelanggan.</p>
</a>

<a href="{{ route('transaksi.index') }}" class="menu-card">
    <h3>🧾 Transaksi</h3>
    <p>Kelola data transaksi.</p>
</a>

    </div>

</section>


<section class="low-stock">

    <h2>⚠️ Stok Menipis</h2>

    <p>
        Belum ada data stok menipis.
    </p>

</section>

@endsection
