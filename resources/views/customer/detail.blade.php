@extends('layouts.customer')

@section('title', 'Bukti Pemesanan - ThePetHouse')

@section('content')

<section>

    <h1>🧾 Bukti Pemesanan</h1>

    <p>Pesanan kamu berhasil dibuat.</p>

    <hr>

    <h2>Informasi Pesanan</h2>

    <p>
        <strong>Nomor Transaksi:</strong>
        {{ $transaction->id_transaksi }}
    </p>

    <p>
        <strong>Tanggal:</strong>
        {{ $transaction->tanggal }}
    </p>

    <p>
        <strong>Status:</strong>
        {{ $transaction->status }}
    </p>

    <hr>

    <h2>Data Pelanggan</h2>

    <p>
        <strong>Nama:</strong>
        {{ $transaction->customer->nama }}
    </p>

    <p>
        <strong>Nomor Telepon:</strong>
        {{ $transaction->customer->telepon }}
    </p>

    <p>
        <strong>Alamat:</strong>
        {{ $transaction->customer->alamat }}
    </p>

    <hr>

    <h2>Detail Pesanan</h2>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">

        <thead>
            <tr>
                <th>Produk</th>
                <th>Harga</th>
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
                        Rp
                        {{ number_format(
                            $detail->qty > 0
                                ? $detail->subtotal / $detail->qty
                                : 0,
                            0,
                            ',',
                            '.'
                        ) }}
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

    <h2>
        Total:
        Rp {{ number_format($transaction->total, 0, ',', '.') }}
    </h2>

    <hr>

    @if($transaction->status === 'Menunggu Persetujuan')

        <p>
            ⏳ Pesanan kamu sedang menunggu persetujuan admin.
        </p>
        <p>Silahkan refresh ya!! tunggu satu menit dulu!</p>

    @elseif($transaction->status === 'Disetujui')

        <p>
            ✅ Pesanan kamu telah disetujui admin.
        </p>

    @elseif($transaction->status === 'Ditolak')

        <p>
            ❌ Pesanan kamu ditolak admin.
        </p>

    @endif

    <br>

    <a href="{{ url('/') }}">
        ← Kembali ke Beranda
    </a>

</section>

@endsection
