@extends('layouts.app')

@section('title', 'Katalog Kerajinan - Craftos')

@section('content')
<div class="container py-5 flex-grow-1">
    <!-- Header Katalog -->
    <div class="text-center mb-5">
        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 fw-semibold mb-2 rounded-pill">Katalog Produk</span>
        <h2 class="fw-bold text-dark">Kerajinan Tangan Pilihan</h2>
        <p class="text-muted">Temukan berbagai karya seni kerajinan tangan autentik langsung dari para pengrajin lokal.</p>
    </div>

    <!-- Grid Card Produk -->
    <div class="row g-4">
        @foreach ($crafts as $craft)
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden d-flex flex-column">
                <!-- Gambar Produk -->
                <div class="position-relative" style="height: 220px; background-color: #f8f9fa;">
                    <img src="{{ asset('images/' . $craft->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $craft->name }}">
                    <span class="position-absolute top-0 end-0 m-3 badge bg-dark bg-opacity-75 text-white px-3 py-2 rounded-pill">
                        Rp {{ number_format($craft->price, 0, ',', '.') }}
                    </span>
                </div>

                <!-- Card Body -->
                <div class="card-body d-flex flex-column p-4">
                    <h5 class="card-title fw-bold text-dark mb-2">{{ $craft->name }}</h5>
                    
                    <!-- Informasi Kolom Sesuai Ketentuan -->
                    <p class="text-muted small mb-1"><strong>Pengrajin:</strong> {{ $craft->artisan }}</p>
                    <p class="text-muted small mb-3"><strong>Bahan:</strong> {{ $craft->material }}</p>
                    
                    <p class="card-text text-secondary small" style="line-height: 1.6;">
                        {{ Str::limit($craft->description, 80) }}
                    </p>

                    <!-- Tombol Detail Art -->
                    <div class="mt-auto pt-3">
                        <a href="{{ route('craft.show', $craft->id) }}" class="btn btn-outline-primary w-100 rounded-pill fw-semibold py-2">
                            Detail Craft
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4 bg-outline-primary bg-opacity-10 rounded-4 p-3">
        {{ $crafts->links() }}
    </div>
</div>
@endsection