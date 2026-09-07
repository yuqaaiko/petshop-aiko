@extends('layouts.admin')

@section('title', 'Edit Kategori - Admin ThePetHouse')

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
        max-width: 600px;
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

    .form-group input {
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

        <h1>✏️ Edit Kategori</h1>

        <p>
            Ubah informasi kategori produk ThePetHouse.
        </p>

    </div>

    <div class="form-card">

        <form
            action="{{ route('kategori.update', ['kategori' => $category]) }}"
            method="POST"
        >

            @csrf
            @method('PUT')

            <div class="form-group">

                <label for="nama_kategori">
                    Nama Kategori
                </label>

                <input
                    type="text"
                    id="nama_kategori"
                    name="nama_kategori"
                    value="{{ old('nama_kategori', $category->nama_kategori) }}"
                    required
                >

                @error('nama_kategori')

                    <div class="error-message">
                        {{ $message }}
                    </div>

                @enderror

            </div>

            <div class="form-actions">

                <button type="submit" class="save-button">
                    Simpan Perubahan
                </button>

                <a
                    href="{{ route('admin.categories') }}"
                    class="back-button"
                >
                    ← Kembali
                </a>

            </div>

        </form>

    </div>

</section>

@endsection