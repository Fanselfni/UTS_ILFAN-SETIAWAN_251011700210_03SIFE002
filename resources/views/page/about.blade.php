@extends('layouts.app')

@section('title', 'Tentang Kami - Craftos')

@section('content')
<div class="container py-5">
    <!-- Header Tentang Kami -->
    <div class="card border-0 shadow-sm p-4 mb-5 rounded-4 bg-white">
        <div class="card-body text-center">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 fw-semibold mb-3">Tentang Kami</span>
            <h2 class="fw-bold text-dark mb-4">Craftos</h2>
            <p class="fs-5 text-muted mx-auto" style="max-width: 900px; line-height: 1.8;">
                Craftos adalah marketplace dan galeri digital terkurasi yang didedikasikan untuk mengangkat dan memasarkan karya seni kerajinan tangan autentik. Kami menghubungkan pengrajin lokal berbakat langsung dengan pencinta seni di seluruh dunia untuk melestarikan warisan budaya dan kreativitas tanpa batas.
            </p>
        </div>
    </div>

    <!-- Bagian Visi & Misi -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-dark">Visi & Misi</h2>
        <p class="text-muted">Arah dan komitmen kami dalam membangun ekosistem kerajinan lokal yang mandiri dan mendunia.</p>
    </div>      

    <div class="row g-4 justify-content-center">
        <!-- Visi -->
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm h-100 p-4 rounded-4" style="border-top: 4px solid #ffc107 !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle p-3 me-3" style="background-color: rgba(0, 19, 142, 0.1); color: #ffc107;">
                            <i class="bi bi-eye-fill fs-3"></i>
                        </div>
                        <h3 class="fw-bold mb-0 text-dark">Visi</h3>
                    </div>
                    <p class="text-secondary fs-6" style="line-height: 1.7;">
                        Menjadi platform marketplace kerajinan tangan terdepan yang mengangkat karya pengrajin lokal ke kancah global melalui inovasi digital dan apresiasi seni yang berkelanjutan.
                    </p>
                </div>
            </div>
        </div>

        <!-- Misi -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm h-100 p-4 rounded-4" style="border-top: 4px solid #ffc107 !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle p-3 me-3" style="background-color: rgba(0, 19, 142, 0.1); color: #ffc107;">
                            <i class="bi bi-rocket-takeoff-fill fs-3"></i>
                        </div>
                        <h3 class="fw-bold mb-0 text-dark">Misi</h3>
                    </div>
                    <ul class="text-secondary ps-3 mb-0" style="line-height: 1.7;">
                        <li class="mb-2"><strong>Pemberdayaan Pengrajin:</strong> Memberikan wadah digital yang layak bagi pengrajin lokal untuk memperluas jangkauan pasar dan meningkatkan taraf hidup mereka.</li>
                        <li class="mb-2"><strong>Kualitas Autentik:</strong> Menghadirkan katalog produk kerajinan tangan yang terkurasi tinggi dengan menjaga standar keaslian bahan dan estetika seni.</li>
                        <li><strong>Kepuasan Pelanggan:</strong> Menyediakan pengalaman bertransaksi yang aman, mudah, dan transparan bagi setiap pencinta karya kerajinan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection