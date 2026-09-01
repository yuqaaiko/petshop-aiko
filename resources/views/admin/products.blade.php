@extends('layouts.customer')

@section('title', 'Data Produk - Admin ThePetHouse')

@section('content')

<style>
    .admin-page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .admin-page-header h1 {
        margin-bottom: 8px;
    }

    .admin-page-header p {
        color: #666666;
    }

    .add-button {
        display: inline-block;
        padding: 10px 16px;
        background-color: #333333;
        color: #ffffff;
        text-decoration: none;
        border-radius: 6px;
    }

    .add-button:hover {
        background-color: #555555;
    }

    .product-table-wrapper {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        overflow-x: auto;
    }

    .product-table {
        width: 100%;
        border-collapse: collapse;
    }

    .product-table th,
    .product-table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #eeeeee;
    }

    .product-table th {
        background-color: #f8f9fa;
    }

    .action-button {
        display: inline-block;
        padding: 6px 10px;
        margin-right: 5px;
        text-decoration: none;
        border-radius: 5px;
        color: #ffffff;
        background-color: #333333;
    }

    .action-button:hover {
        background-color: #555555;
    }

    .delete-button {
        border: none;
        padding: 6px 10px;
        border-radius: 5px;
        background-color: #333333;
        color: #ffffff;
        cursor: pointer;
    }

    .delete-button:hover {
        background-color: #555555;
    }
</style>

<section>

    <div class="admin-page-header">

        <div>
            <h1>📦 Data Produk</h1>

            <p>
                Kelola data produk ThePetHouse.
            </p>
        </div>

        <a href="{{ route('produk.create') }}" class="add-button">
            + Tambah Produk
        </a>

    </div>


    <div class="product-table-wrapper">

        <table class="product-table">

            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($products as $product)

                    <tr>

                        <td>
                            {{ $product->nama_produk }}
                        </td>

                        <td>
                            Rp{{ number_format($product->harga, 0, ',', '.') }}
                        </td>

                        <td>
                            {{ $product->stok }}
                        </td>

                        <td>

                            <a
                                href="{{ route('produk.show', ['produk' => $product]) }}"
                                class="action-button"
                            >
                                Detail
                            </a>

                            <a
                                href="{{ route('produk.edit', ['produk' => $product]) }}"
                                class="action-button"
                            >
                                Edit
                            </a>

                            <form
                                action="{{ route('produk.destroy', ['produk' => $product]) }}"
                                method="POST"
                                style="display: inline;"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="delete-button"
                                >
                                    Hapus
                                </button>
                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="4">
                            Belum ada produk.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</section>

@endsection