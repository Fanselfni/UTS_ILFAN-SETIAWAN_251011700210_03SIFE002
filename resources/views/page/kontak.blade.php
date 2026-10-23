@extends('layouts.app')

@section('title', 'Hubungi Kami - Craftos')

@section('content')
<div class="container py-5 flex-grow-1 d-flex flex-column justify-content-center align-items-center">
    <div class="card border-0 shadow-sm p-4 p-lg-5 rounded-4 bg-white w-100" style="max-width: 800px;">
        <div class="text-center mb-4">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 fw-semibold mb-2 rounded-pill">Layanan Bantuan</span>
            <h2 class="fw-bold text-dark">Hubungi Kami</h2>
            <p class="text-muted">
                Jika Anda memiliki pertanyaan seputar produk kerajinan, kolaborasi pengrajin, atau kendala transaksi, silakan hubungi tim Craftos melalui informasi di bawah ini.
            </p>
        </div>

        <div class="row g-4 mt-2">
            <!-- Informasi Kontak -->
            <div class="col-md-12">
                <ul class="list-unstyled text-secondary ps-0 mb-0">
                    <li class="d-flex align-items-start mb-3">
                        <div class="rounded-circle p-3 me-3 text-primary bg-primary bg-opacity-10">
                            <i class="bi bi-geo-alt-fill fs-5"></i>
                        </div>
                        <div>
                            <strong class="text-dark d-block">Alamat Galeri Utama:</strong>
                            <span>Craftos Gallery, Jl. MH Thamrin No. 10, Jakarta Pusat, Indonesia</span>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <div class="rounded-circle p-3 me-3 text-primary bg-primary bg-opacity-10">
                            <i class="bi bi-envelope-fill fs-5"></i>
                        </div>
                        <div>
                            <strong class="text-dark d-block">Email Resmi:</strong>
                            <a href="mailto:support@craftos.com" class="text-decoration-none text-primary">support@craftos.com</a>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <div class="rounded-circle p-3 me-3 text-primary bg-primary bg-opacity-10">
                            <i class="bi bi-telephone-fill fs-5"></i>
                        </div>
                        <div>
                            <strong class="text-dark d-block">Telepon / WhatsApp:</strong>
                            <span>+62 812-3456-7890</span>
                        </div>
                    </li>
                    <li class="d-flex align-items-start">
                        <div class="rounded-circle p-3 me-3 text-primary bg-primary bg-opacity-10">
                            <i class="bi bi-clock-fill fs-5"></i>
                        </div>
                        <div>
                            <strong class="text-dark d-block">Jam Operasional:</strong>
                            <span>Senin - Jumat: 09:00 - 17:00 WIB<br>Sabtu: 09:00 - 15:00 WIB</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Tombol Kembali ke Beranda -->
        <div class="text-center mt-5 pt-3 border-top">
            <a href="{{ url('/') }}" class="btn btn-outline-primary rounded-pill px-4 fw-semibold">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
@endsection