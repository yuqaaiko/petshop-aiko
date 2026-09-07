@extends('layouts.admin')

@section('title', 'Transaksi Admin - ThePetHouse')

@section('content')

<style>
    .transaction-header {
        margin-bottom: 30px;
    }

    .transaction-table {
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

    th, td {
        padding: 12px;
        border: 1px solid #dddddd;
        text-align: left;
    }

    th {
        background-color: #f5f5f5;
    }

    .status-menunggu {
        color: orange;
        font-weight: bold;
    }

    .status-disetujui {
        color: green;
        font-weight: bold;
    }

    .status-ditolak {
        color: red;
        font-weight: bold;
    }

    .action-form {
        display: inline;
    }

    .action-button {
        padding: 7px 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<section class="transaction-header">

    <h1>🧾 Daftar Transaksi</h1>

    <p>
        Kelola dan periksa transaksi pelanggan ThePetHouse.
    </p>

</section>

@if(session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

@if(session('error'))
    <p style="color: red;">
        {{ session('error') }}
    </p>
@endif

<section class="transaction-table">

    @if($transactions->count() > 0)

        <table>

            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>ID Pelanggan</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach($transactions as $transaction)

                    <tr>

                        <td>{{ $transaction->id_transaksi }}</td>

                        <td>{{ $transaction->id_pelanggan }}</td>

                        <td>{{ $transaction->tanggal }}</td>

                        <td>
                            Rp {{ number_format($transaction->total, 0, ',', '.') }}
                        </td>

                        <td>
                            @if($transaction->status === 'Menunggu Persetujuan')

                                <span class="status-menunggu">
                                    Menunggu Persetujuan
                                </span>

                            @elseif($transaction->status === 'Disetujui')

                                <span class="status-disetujui">
                                    Disetujui
                                </span>

                            @elseif($transaction->status === 'Ditolak')

                                <span class="status-ditolak">
                                    Ditolak
                                </span>

                            @endif
                        </td>

                        <td>

                            @if($transaction->status === 'Menunggu Persetujuan')

                                <form
                                    action="{{ route('transaksi.approve', $transaction->id_transaksi) }}"
                                    method="POST"
                                    class="action-form"
                                >
                                    @csrf

                                    <button type="submit" class="action-button">
                                        ✅ Setujui
                                    </button>
                                </form>

                                <form
                                    action="{{ route('transaksi.reject', $transaction->id_transaksi) }}"
                                    method="POST"
                                    class="action-form"
                                >
                                    @csrf

                                    <button type="submit" class="action-button">
                                        ❌ Tolak
                                    </button>
                                </form>

                            @else

                                <span>-</span>

                            @endif

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    @else

        <p>Belum ada transaksi.</p>

    @endif

</section>

@endsection
