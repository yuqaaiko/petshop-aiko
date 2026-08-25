@extends('layouts.customer')

@section('title', 'Produk - ThePetHouse')

@section('content')

    <section>
        <h1>Produk ThePetHouse</h1>

        <p>
            Berikut adalah produk yang tersedia untuk hewan peliharaan Anda.
        </p>
    </section>

    <section>
        <h2>Daftar Produk</h2>

        @if ($products->count() > 0)

            @foreach ($products as $product)

                <div>
                    <h3>{{ $product->nama_produk }}</h3>

                    <p>
                        Harga: Rp{{ number_format($product->harga, 0, ',', '.') }}
                    </p>

                    <p>
                        Stok: {{ $product->stok }}
                    </p>

                    <a href="{{ route('product.show', $product->id) }}">
                        Lihat Detail
                    </a>
                </div>

                <hr>

            @endforeach

        @else

            <p>
                Belum ada produk yang tersedia.
            </p>

        @endif

    </section>

@endsection
