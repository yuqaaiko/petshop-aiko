@extends('layouts.admin')

@section('title', 'Tambah Produk - Admin ThePetHouse')

@section('content')

<style>
    .form-header {
        margin-bottom: 25px;
    }

    .form-header h1 {
        margin-bottom: 8px;
    }

    .form-header p {
        color: #666666;
    }

    .form-card {
        max-width: 650px;
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
        margin-bottom: 7px;
        font-weight: bold;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 6px;
    }

    .error-message {
        color: red;
        margin-top: 5px;
        font-size: 14px;
    }

    .form-actions {
        margin-top: 25px;
    }

    .save-button,
    .back-button {
        display: inline-block;
        padding: 10px 16px;
        border-radius: 6px;
        text-decoration: none;
        cursor: pointer;
    }

    .save-button {
        border: none;
        background-color: #333333;
        color: #ffffff;
    }

    .save-button:hover {
        background-color: #555555;
    }

    .back-button {
        margin-left: 8px;
        color: #333333;
        background-color: #eeeeee;
    }
</style>

<section>

    <div class="form-header">

        <h1>➕ Tambah Produk</h1>

        <p>
            Tambahkan produk baru ke dalam data ThePetHouse.
        </p>

    </div>


    <div class="form-card">

        <form action="{{ route('produk.store') }}" method="POST">

            @csrf

            <div class="form-group">

                <label for="nama_produk">
                    Nama Produk
                </label>

                <input
                    type="text"
                    id="nama_produk"
                    name="nama_produk"
                    value="{{ old('nama_produk') }}"
                    placeholder="Masukkan nama produk"
                    required
                >

                @error('nama_produk')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label for="harga">
                    Harga
                </label>

                <input
                    type="number"
                    id="harga"
                    name="harga"
                    value="{{ old('harga') }}"
                    placeholder="Masukkan harga"
                    min="0"
                    required
                >

                @error('harga')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label for="stok">
                    Stok
                </label>

                <input
                    type="number"
                    id="stok"
                    name="stok"
                    value="{{ old('stok') }}"
                    placeholder="Masukkan stok"
                    min="0"
                    required
                >

                @error('stok')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label for="id_kategori">
                    Kategori
                </label>

                <select
                    id="id_kategori"
                    name="id_kategori"
                    required
                >

                    <option value="">
                        -- Pilih Kategori --
                    </option>

                    @foreach ($categories as $category)

                        <option
                            value="{{ $category->id_kategori }}"
                            {{ old('id_kategori') == $category->id ? 'selected' : '' }}
                        >
                            {{ $category->nama_kategori }}
                        </option>

                    @endforeach

                </select>

                @error('id_kategori')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label for="id_supplier">
                    Supplier
                </label>

                <select
                    id="id_supplier"
                    name="id_supplier"
                    required
                >

                    <option value="">
                        -- Pilih Supplier --
                    </option>

                    @foreach ($suppliers as $supplier)

                        <option
                            value="{{ $supplier->id_supplier }}"
                            {{ old('id_supplier') == $supplier->id ? 'selected' : '' }}
                        >
                            {{ $supplier->nama_supplier }}
                        </option>

                    @endforeach

                </select>

                @error('id_supplier')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-actions">

                <button type="submit" class="save-button">
                    Simpan Produk
                </button>

                <a
                    href="{{ route('admin.products') }}"
                    class="back-button"
                >
                    ← Kembali
                </a>

            </div>

        </form>

    </div>

</section>

@endsection