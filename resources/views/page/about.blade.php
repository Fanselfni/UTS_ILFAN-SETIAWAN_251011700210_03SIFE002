@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container py-5">
    <div class="card border-0 shadow-sm p-4 mb-5 rounded-4 bg-white">
        <div class="card-body text-center">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 fw-semibold mb-3">Tentang Kami</span>
            <h2 class="fw-bold text-dark mb-4">eARTh.ly</h2>
            <p class="fs-5 text-muted mx-auto" style="max-width: 900px; line-height: 1.8;">
                eARTh.ly adalah website gallery     
            </p>
        </div>
    </div>

    <div class="text-center mb-4">
        <h2 class="fw-bold text-dark">Visi & Misi</h2>
        <p class="text-muted">Arah dan komitmen kami dalam menghadirkan solusi teknologi terbaik.</p>
    </div>      

    <div class="row g-4 justify-content-center">
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm h-100 p-4 rounded-4" style="border-top: 4px solid #00138e !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle p-3 me-3" style="background-color: rgba(0, 19, 142, 0.1); color: #00138e;">
                            <i class="bi bi-eye-fill fs-3"></i>
                        </div>
                        <h3 class="fw-bold mb-0 text-dark">Visi</h3>
                    </div>
                    <p class="text-secondary fs-6" style="line-height: 1.7;">
                        Menjadi penyedia solusi teknologi informasi terdepan dan terpercaya yang mendorong transformasi digital 
                        serta memberikan nilai tambah berkelanjutan bagi bisnis di era global.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card border-0 shadow-sm h-100 p-4 rounded-4" style="border-top: 4px solid #00138e !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle p-3 me-3" style="background-color: rgba(0, 19, 142, 0.1); color: #00138e;">
                            <i class="bi bi-rocket-takeoff-fill fs-3"></i>
                        </div>
                        <h3 class="fw-bold mb-0 text-dark">Misi</h3>
                    </div>
                    <ul class="text-secondary ps-3 mb-0" style="line-height: 1.7;">
                        <li class="mb-2"><strong>Inovasi Berkelanjutan:</strong> Mengembangkan produk dan layanan IT berkualitas tinggi 
                        yang fleksibel serta sesuai dengan kebutuhan perkembangan industri.</li>
                        <li class="mb-2"><strong>Kepuasan Klien:</strong> Memberikan solusi teknologi yang tepat guna, efisien, 
                        dan aman dengan standar layanan terbaik.</li>
                        <li><strong>Pengembangan Talenta:</strong> Membangun tim ahli yang profesional, berintegritas, dan berdedikasi 
                        tinggi dalam menjawab tantangan teknologi.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection