@extends('layouts.customer')

@section('title', 'Detail Produk - ThePetHouse')

@section('content')

```
<style>
    .detail-header {
        margin-bottom: 30px;
    }

    .detail-card {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        max-width: 600px;
    }

    .detail-card h2 {
        margin-bottom: 20px;
    }

    .detail-card p {
        margin-bottom: 12px;
    }

    .back-button {
        display: inline-block;
        margin-top: 15px;
        padding: 8px 14px;
        background-color: #333333;
        color: #ffffff;
        text-decoration: none;
        border-radius: 5px;
    }
</style>

<section class="detail-header">
    <h1>Detail Produk</h1>

    <p>
        Informasi lengkap mengenai produk yang dipilih.
    </p>
</section>

<section>
    <div class="detail-card">

        <h2>{{ $product->nama_produk }}</h2>

        <p>
            Harga:
            Rp{{ number_format($product->harga, 0, ',', '.') }}
        </p>

        <p>
            Stok:
            {{ $product->stok }}
        </p>

        <a href="{{ route('produk.index') }}" class="back-button">
            ← Kembali ke Produk
        </a>

    </div>
</section>
```

@endsection
