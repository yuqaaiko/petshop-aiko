@extends('layouts.customer')

@section('title', 'Data Supplier - Admin ThePetHouse')

@section('content')

<style>
    .supplier-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .supplier-header h1 {
        margin-bottom: 8px;
    }

    .supplier-header p {
        color: #666666;
    }

    .add-button {
        padding: 10px 16px;
        background-color: #333333;
        color: #ffffff;
        text-decoration: none;
        border-radius: 6px;
    }

    .add-button:hover {
        background-color: #555555;
    }

    .supplier-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #ffffff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .supplier-table th,
    .supplier-table td {
        padding: 12px;
        border-bottom: 1px solid #eeeeee;
        text-align: left;
    }

    .supplier-table th {
        background-color: #f3f3f3;
    }

    .edit-button {
        display: inline-block;
        padding: 7px 12px;
        background-color: #eeeeee;
        color: #333333;
        text-decoration: none;
        border-radius: 5px;
        margin-right: 5px;
    }

    .delete-button {
        padding: 7px 12px;
        border: none;
        border-radius: 5px;
        background-color: #dc3545;
        color: #ffffff;
        cursor: pointer;
    }

    .success-message {
        margin-bottom: 15px;
        padding: 10px;
        background-color: #e8f5e9;
        border-radius: 5px;
    }
</style>

<section>

    <div class="supplier-header">

        <div>

            <h1>🚚 Data Supplier</h1>

            <p>
                Kelola data supplier ThePetHouse.
            </p>

        </div>

        <a
            href="{{ route('supplier.create') }}"
            class="add-button"
        >
            + Tambah Supplier
        </a>

    </div>


    @if (session('success'))

        <div class="success-message">

            {{ session('success') }}

        </div>

    @endif


    @if ($suppliers->count() > 0)

        <table class="supplier-table">

            <thead>

                <tr>

                    <th>No</th>

                    <th>Nama Supplier</th>

                    <th>Alamat</th>

                    <th>Nomor Telepon</th>

                    <th>Aksi</th>

                </tr>

            </thead>


            <tbody>

                @foreach ($suppliers as $supplier)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $supplier->nama_supplier }}
                        </td>

                        <td>
                            {{ $supplier->alamat }}
                        </td>

                        <td>
                            {{ $supplier->telepon }}
                        </td>

                        <td>

                            <a
                                href="{{ route('supplier.edit', $supplier->id_supplier) }}"
                                class="edit-button"
                            >
                                Edit
                            </a>

                            <form
                                action="{{ route('supplier.destroy', $supplier->id_supplier) }}"
                                method="POST"
                                style="display: inline;"
                            >

                                @csrf

                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="delete-button"
                                    onclick="return confirm('Yakin ingin menghapus supplier ini?')"
                                >
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    @else

        <p>
            Belum ada data supplier.
        </p>

    @endif

</section>

@endsection