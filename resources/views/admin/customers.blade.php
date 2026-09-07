@extends('layouts.admin')

@section('title', 'Data Pelanggan - Admin ThePetHouse')

@section('content')

<style>

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .add-button {
        display: inline-block;
        padding: 10px 16px;
        background-color: #333333;
        color: #ffffff;
        text-decoration: none;
        border-radius: 6px;
    }

    .data-card {
        background-color: #ffffff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 12px;
        border-bottom: 1px solid #dddddd;
        text-align: left;
    }

    th {
        background-color: #f3f3f3;
    }

    .action-buttons {
        display: flex;
        gap: 8px;
    }

    .edit-button {
        padding: 7px 12px;
        background-color: #333333;
        color: #ffffff;
        text-decoration: none;
        border-radius: 5px;
    }

    .delete-button {
        padding: 7px 12px;
        border: none;
        background-color: #cc3333;
        color: #ffffff;
        border-radius: 5px;
        cursor: pointer;
    }

    .success-message {
        margin-bottom: 20px;
        padding: 12px;
        background-color: #e8f5e9;
        color: #2e7d32;
        border-radius: 6px;
    }

</style>


<section>

    <div class="page-header">

        <div>
            <h1>Data Pelanggan</h1>

            <p>
                Kelola data pelanggan ThePetHouse.
            </p>
        </div>

            <a href="{{ route('pelanggan.create') }}" class="add-button">
                + Tambah Pelanggan
            </a>

    </div>


    @if (session('success'))

        <div class="success-message">

            {{ session('success') }}

        </div>

    @endif


    <div class="data-card">

        <table>

            <thead>

                <tr>

                    <th>No</th>

                    <th>Nama Pelanggan</th>

                    <th>Alamat</th>

                    <th>Nomor Telepon</th>

                    <th>Aksi</th>

                </tr>

            </thead>


            <tbody>

                @forelse ($customers as $customer)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $customer->nama_pelanggan }}
                        </td>

                        <td>
                            {{ $customer->alamat }}
                        </td>

                        <td>
                            {{ $customer->nomor_telepon }}
                        </td>

                        <td>

                            <div class="action-buttons">

                                <a
                                    href="{{ route('pelanggan.edit', $customer->id_pelanggan) }}"
                                    class="edit-button"
                                >
                                    Edit
                                </a>


                                <form
                                    action="{{ route('pelanggan.destroy', $customer->id_pelanggan) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus pelanggan ini?')"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="delete-button">
                                        Hapus
                                    </button>
                                </form>
                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="5">

                            Belum ada data pelanggan.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</section>

@endsection