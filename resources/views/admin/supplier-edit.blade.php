@extends('layouts.admin')

@section('title', 'Edit Supplier - Admin ThePetHouse')

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
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 6px;
        font-family: Arial, sans-serif;
    }

    .form-group textarea {
        min-height: 100px;
        resize: vertical;
    }

    .error-message {
        color: red;
        margin-top: 5px;
        font-size: 14px;
    }

    .form-actions {
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

    .save-button:hover {
        background-color: #555555;
    }

    .back-button {
        display: inline-block;
        margin-left: 8px;
        padding: 10px 16px;
        border-radius: 6px;
        background-color: #eeeeee;
        color: #333333;
        text-decoration: none;
    }

</style>


<section>

    <div class="form-header">

        <h1>✏️ Edit Supplier</h1>

        <p>
            Ubah informasi supplier ThePetHouse.
        </p>

    </div>


    <div class="form-card">

        <form
            action="{{ route('supplier.update', $supplier->id_supplier) }}"
            method="POST"
        >

            @csrf

            @method('PUT')


            {{-- Nama Supplier --}}

            <div class="form-group">

                <label for="nama_supplier">
                    Nama Supplier
                </label>

                <input
                    type="text"
                    id="nama_supplier"
                    name="nama_supplier"
                    value="{{ old('nama_supplier', $supplier->nama_supplier) }}"
                    required
                >

                @error('nama_supplier')

                    <div class="error-message">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- Alamat --}}

            <div class="form-group">

                <label for="alamat">
                    Alamat
                </label>

                <textarea
                    id="alamat"
                    name="alamat"
                    required
                >{{ old('alamat', $supplier->alamat) }}</textarea>

                @error('alamat')

                    <div class="error-message">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- Nomor Telepon --}}

            <div class="form-group">

                <label for="telepon">
                    Nomor Telepon
                </label>

                <input
                    type="text"
                    id="telepon"
                    name="telepon"
                    value="{{ old('telepon', $supplier->nomor_telepon) }}"
                    required
                >

                @error('telepon')

                    <div class="error-message">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <div class="form-actions">

                <button
                    type="submit"
                    class="save-button"
                >
                    Simpan Perubahan
                </button>


                <a
                    href="{{ route('admin.suppliers') }}"
                    class="back-button"
                >
                    ← Kembali
                </a>

            </div>

        </form>

    </div>

</section>

@endsection