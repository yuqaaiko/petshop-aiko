@extends('layouts.admin')

@section('title', 'Data Kategori - Admin ThePetHouse')

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

    .category-table-wrapper {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        overflow-x: auto;
    }

    .category-table {
        width: 100%;
        border-collapse: collapse;
    }

    .category-table th,
    .category-table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #eeeeee;
    }

    .category-table th {
        background-color: #f8f9fa;
    }

    .action-button {
        display: inline-block;
        padding: 6px 10px;
        margin-right: 5px;
        text-decoration: none;
        border-radius: 5px;
        background-color: #333333;
        color: #ffffff;
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
            <h1>🏷️ Data Kategori</h1>

            <p>
                Kelola kategori produk ThePetHouse.
            </p>
        </div>

        <a href="{{ route('kategori.create') }}" class="add-button">
            + Tambah Kategori
        </a>

    </div>


    <div class="category-table-wrapper">

        <table class="category-table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($categories as $category)

                    <tr>

                        <td>
                            {{ $category->id }}
                        </td>

                        <td>
                            {{ $category->nama_kategori }}
                        </td>

                        <td>

                            <a
                                href="{{ route('kategori.show', ['kategori' => $category]) }}"
                                class="action-button"
                            >
                                Detail
                            </a>

                            <a
                                href="{{ route('kategori.edit', ['kategori' => $category]) }}"
                                class="action-button"
                            >
                                Edit
                            </a>

                            <form
                                action="{{ route('kategori.destroy', ['kategori' => $category]) }}"
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
                        <td colspan="3">
                            Belum ada kategori.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</section>

@endsection