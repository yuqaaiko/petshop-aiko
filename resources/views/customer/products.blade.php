@extends('layouts.customer')

@section('title', 'Produk - ThePetHouse')

@section('content')

```
<style>
    .product-header {
        margin-bottom: 30px;
    }

    .product-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .product-card {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .product-card h3 {
        margin-bottom: 10px;
    }

    .product-card p {
        margin-bottom: 8px;
    }

    .product-card a {
        display: inline-block;
        margin-top: 10px;
        padding: 8px 14px;
        background-color: #333333;
        color: #ffffff;
        text-decoration: none;
        border-radius: 5px;
    }
</style>

<section class="product-header">
    <h1>Produk ThePetHouse</h1>

    <p>
        Berikut adalah produk yang tersedia untuk hewan peliharaan Anda.
    </p>
</section>

<section>
    <h2>Daftar Produk</h2>

    @if ($products->count() > 0)

        <div class="product-list">

            @foreach ($products as $product)

                <div class="product-card">

                    <h3>{{ $product->nama_produk }}</h3>

                    <p>
                        Harga:
                        Rp{{ number_format($product->harga, 0, ',', '.') }}
                    </p>

                    <p>
                        Stok: {{ $product->stok }}
                    </p>

                    <a href="{{ route('produk.show', ['produk' => $product]) }}">
                        Lihat Detail
                    </a>

                </div>

            @endforeach

        </div>

    @else

        <p>
            Belum ada produk yang tersedia.
        </p>

    @endif

</section>
```

@endsection
