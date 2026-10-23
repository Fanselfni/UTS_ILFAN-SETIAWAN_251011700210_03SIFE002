@extends('layouts.app')

@section('title', 'Detail Kerajinan - ' . $craft->name)

@section('content')
<div class="container py-5 flex-grow-1">
    <!-- Tombol Kembali -->
    <div class="mb-4">
        <a href="{{ route('craft.index') }}" class="btn btn-outline-secondary rounded-pill px-4 shadow-sm">
            &larr; Kembali ke Katalog
        </a>
    </div>

    <!-- Judul Header Halaman -->
    <div class="text-center mb-5">
        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 fw-semibold mb-2 rounded-pill">Detail Produk</span>
        <h2 class="fw-bold text-dark">Informasi Kerajinan</h2>
        <p class="text-muted">Kenali lebih dekat detail karya dan pengrajin di balik produk ini.</p>
    </div>

    <!-- Layout Detail Produk -->
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white">
                <div class="row g-0">
                    <!-- Kolom Gambar Produk -->
                    <div class="col-md-6 bg-light d-flex align-items-center justify-content-center p-3">
                        <img src="{{ asset('images/' . $craft->image) }}" alt="{{ $craft->name }}" class="img-fluid rounded-4 shadow-sm w-100" style="max-height: 450px; object-fit: cover;">
                    </div>

                    <!-- Kolom Informasi Detail -->
                    <div class="col-md-6 d-flex flex-column p-4 p-lg-5">
                        <div class="mb-3">
                            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 fw-semibold rounded-pill">Tersedia</span>
                        </div>

                        <h3 class="fw-bold text-dark mb-3">{{ $craft->name }}</h3>
                        
                        <!-- Harga Produk -->
                        <h4 class="text-primary fw-bold mb-4">
                            Rp {{ number_format($craft->price, 0, ',', '.') }}
                        </h4>

                        <!-- Atribut Sesuai Kolom Database -->
                        <div class="mb-4 border-top border-bottom py-3">
                            <div class="row mb-2">
                                <div class="col-4 text-muted small fw-semibold">Pengrajin</div>
                                <div class="col-8 text-dark fw-medium">: {{ $craft->artisan }}</div>
                            </div>
                            <div class="row">
                                <div class="col-4 text-muted small fw-semibold">Bahan Utama</div>
                                <div class="col-8 text-dark fw-medium">: {{ $craft->material }}</div>
                            </div>
                        </div>

                        <!-- Deskripsi Produk -->
                        <div class="mb-4">
                            <h6 class="fw-bold text-dark mb-2">Deskripsi Karya:</h6>
                            <p class="text-secondary" style="line-height: 1.8;">
                                {{ $craft->description }}
                            </p>
                        </div>

                        <!-- Tombol Aksi / Pemesanan / Kontak -->
                        <div class="mt-auto pt-3">
                            <a href="#" class="btn btn-primary w-100 py-3 rounded-pill fw-semibold shadow-sm" style="background-color: #00138e; border-color: #00138e;">
                                Pesan / Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection