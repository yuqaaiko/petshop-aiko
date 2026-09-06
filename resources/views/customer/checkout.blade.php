@extends('layouts.customer')

@section('title', 'Checkout - ThePetHouse')

@section('content')

<section>

    <h1>Checkout 🛒</h1>

    <p>Periksa kembali pesanan kamu sebelum membuat transaksi.</p>

    @if(empty($cart))

        <p>
            Keranjang kamu masih kosong.
        </p>

        <a href="{{ route('produk.index') }}">
            ← Kembali ke Produk
        </a>

    @else

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

                @php
                    $total = 0;
                @endphp

                @foreach($cart as $id => $item)

                    @php
                        $subtotal = $item['harga'] * $item['jumlah'];
                        $total += $subtotal;
                    @endphp

                    <tr>

                        <td>
                            {{ $item['nama_produk'] }}
                        </td>

                        <td>
                            Rp {{ number_format($item['harga'], 0, ',', '.') }}
                        </td>

                        <td>
                            {{ $item['jumlah'] }}
                        </td>

                        <td>
                            Rp {{ number_format($subtotal, 0, ',', '.') }}
                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

        <h2>
            Total: Rp {{ number_format($total, 0, ',', '.') }}
        </h2>

        <hr>

        <h2>Data Pelanggan</h2>
            <form action="{{ route('checkout.process') }}" method="POST">

            @csrf

            <p>
                <label>Nama Pelanggan</label><br>
                <input type="text" name="nama_pelanggan">
            </p>

            <p>
                <label>Alamat</label><br>
                <textarea name="alamat"></textarea>
            </p>

            <p>
                <label>Nomor Telepon</label><br>
                <input type="text" name="nomor_telepon">
            </p>

            <h2>Metode Pembayaran</h2>

            <p>
                <label>
                    <input type="radio" name="metode_pembayaran" value="tunai" checked>
                    Bayar di Toko
                </label>
            </p>

            <button type="submit">
                Buat Pesanan
            </button>

        </form>

    @endif

</section>

@endsection
