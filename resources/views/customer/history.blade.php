@extends('layouts.customer')

@section('title', 'Riwayat Pesanan - ThePetHouse')

@section('content')

<section>

    <h1>📋 Riwayat Pesanan</h1>

    <p>
        Berikut adalah riwayat pesanan kamu dalam 1 bulan terakhir.
    </p>

    <hr>

    @if($transactions->isEmpty())

        <h2>😿 Pesanan Tidak Ditemukan</h2>

        <p>
            Kami tidak menemukan pesanan dengan nama dan nomor telepon tersebut
            dalam 1 bulan terakhir.
        </p>

        <p>
            Silakan periksa kembali nama dan nomor telepon yang kamu masukkan.
        </p>

    @else

        @foreach($transactions as $transaction)

            <div style="margin-bottom: 30px;">

                <h2>
                    🧾 Transaksi #{{ $transaction->id_transaksi }}
                </h2>

                <p>
                    <strong>Tanggal:</strong>
                    {{ $transaction->tanggal }}
                </p>

                <p>
                    <strong>Status:</strong>
                    {{ $transaction->status }}
                </p>

                <p>
                    <strong>Alamat:</strong>
                    {{ $transaction->customer->alamat }}
                </p>

                <table border="1" cellpadding="10" cellspacing="0" width="100%">

                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($transaction->details as $detail)

                            <tr>

                                <td>
                                    {{ $detail->product->nama_produk }}
                                </td>

                                <td>
                                    {{ $detail->qty }}
                                </td>

                                <td>
                                    Rp {{ number_format($detail->subtotal, 0, ',', '.') }}
                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

                <h3>
                    Total:
                    Rp {{ number_format($transaction->total, 0, ',', '.') }}
                </h3>

                <a href="{{ route('customer.detail', $transaction->id_transaksi) }}">
                    Lihat Bukti Pemesanan →
                </a>

            </div>

            <hr>

        @endforeach

    @endif

    <br>

    <a href="{{ route('customer.history.search') }}">
        ← Cari Riwayat Lagi
    </a>

</section>

@endsection
