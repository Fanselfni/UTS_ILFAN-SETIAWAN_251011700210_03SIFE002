@extends('layouts.app')

@section('title', 'Home - Craftos')

@section('content')
<!-- Hero Section -->
<div class="py-5 mb-5 rounded-4 shadow-sm text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #d39e00 0%, #ffc107 100%);">
    <div class="container py-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-7 text-center text-lg-start">
                <span class="badge bg-white bg-opacity-25 text-white px-3 py-2 fw-semibold mb-3 rounded-pill">
                    ✨ Marketplace Kerajinan Tangan Lokal
                </span>
                <h1 class="display-4 fw-bold mb-3">Temukan Karya Seni & Kerajinan Unik di Craftos</h1>
                <p class="fs-5 text-white-50 mb-4" style="line-height: 1.8;">
                    Craftos adalah platform galeri dan marketplace terkurasi yang menghubungkan para pengrajin lokal berbakat dengan pencinta seni dan kerajinan tangan autentik di seluruh dunia.
                </p>
                <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                    <a href="{{ url('/galeri') }}" class="btn btn-light btn-lg px-4 fw-semibold text-dark rounded-pill shadow-sm">
                        Jelajahi Katalog
                    </a>
                    <a href="{{ url('/about') }}" class="btn btn-outline-light btn-lg px-4 fw-semibold rounded-pill">
                        Tentang Kami
                    </a>
                </div>
            </div>
            <div class="col-lg-5 text-center mt-4 mt-lg-0">
                <!-- Ilustrasi/Card Dekoratif Modern -->
                <div class="p-4 bg-white bg-opacity-10 backdrop-blur rounded-4 border border-light border-opacity-25 shadow-lg">
                    <h3 class="fw-bold mb-2">🎨 100% Handmade</h3>
                    <p class="text-white-50 small mb-0">Setiap produk dibuat dengan ketelitian tinggi, dedikasi, dan sentuhan personal dari tangan pengrajin asli.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Keunggulan / Fitur Singkat -->
<div class="container mb-5">
    <div class="row g-4 text-center">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4 h-100 rounded-4" style="border-top: 4px solid #ffc107 !important;">
                <div class="card-body">
                    <div class="rounded-circle p-3 d-inline-block mb-3" style="background-color: rgba(0, 19, 142, 0.1); color: #00138e;">
                        <i class="bi bi-shield-check fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark">Kualitas Terkurasi</h5>
                    <p class="text-muted small">Produk kerajinan diseleksi secara ketat untuk memastikan standar estetika dan ketahanan terbaik.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4 h-100 rounded-4" style="border-top: 4px solid #ffc107 !important;">
                <div class="card-body">
                    <div class="rounded-circle p-3 d-inline-block mb-3" style="background-color: rgba(0, 19, 142, 0.1); color: #00138e;">
                        <i class="bi bi-people-fill fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark">Dukung Pengrajin Lokal</h5>
                    <p class="text-muted small">Setiap pembelian Anda membantu perekonomian dan kelestarian seni budaya pengrajin lokal.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4 h-100 rounded-4" style="border-top: 4px solid #ffc107 !important;">
                <div class="card-body">
                    <div class="rounded-circle p-3 d-inline-block mb-3" style="background-color: rgba(0, 19, 142, 0.1); color: #00138e;">
                        <i class="bi bi-gem fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark">Desain Eksklusif</h5>
                    <p class="text-muted small">Sebagian besar karya bersifat unik (*one-of-a-kind*) dan tidak diproduksi secara massal di pabrik.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Informasi Singkat Brand / CTA -->
<div class="container mb-5">
    <div class="card border-0 shadow-sm p-5 rounded-4 bg-white text-center">
        <div class="card-body mx-auto" style="max-width: 800px;">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 fw-semibold mb-3">Mulai Berkreasi & Koleksi</span>
            <h2 class="fw-bold text-dark mb-3">Siap Menemukan Mahakarya Favorit Anda?</h2>
            <p class="text-muted mb-4" style="line-height: 1.8;">
                Jelajahi berbagai kategori kerajinan mulai dari dekorasi rumah estetik, aksesoris fesyen tenun, hingga gerabah keramik unik langsung dari galeri Craftos.
            </p>
            <a href="{{ url('/galeri') }}" class="btn btn-primary btn-lg px-5 rounded-pill fw-semibold shadow-sm" style="background-color: #00138e; border-color: #00138e;">
                Lihat Katalog Sekarang
            </a>
        </div>
    </div>
</div>
@endsection