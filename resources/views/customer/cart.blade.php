@extends('layouts.customer')

@section('title', 'Keranjang - ThePetHouse')

@section('content')

<section>

    <h1>Keranjang Belanja 🛒</h1>

    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    @if(empty($cart))

        <p>
            Keranjang kamu masih kosong.
        </p>

        <a href="{{ route('produk.index') }}">
            Belanja Produk
        </a>

    @else

        <table border="1" cellpadding="10" cellspacing="0" width="100%">

            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                    <th>Aksi</th>
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

        <form action="{{ route('cart.decrease', $id) }}"
              method="POST"
              style="display: inline;">

            @csrf

            <button type="submit">
                ➖
            </button>

        </form>


        <span style="margin: 0 10px;">

            {{ $item['jumlah'] }}

        </span>


        <form action="{{ route('cart.increase', $id) }}"
              method="POST"
              style="display: inline;">

            @csrf

            <button type="submit">
                ➕
            </button>

        </form>

    </td>

    <td>
        Rp {{ number_format($subtotal, 0, ',', '.') }}
    </td>

    <td>

        <form action="{{ route('cart.remove', $id) }}" method="POST">

            @csrf

            @method('DELETE')

            <button type="submit">
                Hapus
            </button>

        </form>

    </td>

</tr>

                @endforeach

            </tbody>

        </table>


        <h2>
            Total: Rp {{ number_format($total, 0, ',', '.') }}
        </h2>


        <a href="{{ route('produk.index') }}">
            ← Lanjut Belanja
        </a>


        {{-- Checkout nanti kita buat setelah keranjang selesai --}}
        <br><br>

        <a href="#">
            Checkout
        </a>

    @endif

</section>

@endsection