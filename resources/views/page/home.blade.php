@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<div class="p-5 mb-4 bg-light rounded-4 shadow-sm border text-center">
    <div class="container-fluid py-3">
        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 fw-semibold mb-3">Welcome to eARTh.ly</span>
        <h1 class="display-5 fw-bold text-dark mb-3">Jelajahi Dunia Seni Kreatif</h1>
        <p class="fs-5 text-muted mx-auto mb-4" style="max-width: 700px;">
            Platform galeri digital terbaik untuk menemukan, membagikan, dan mengapresiasi berbagai karya seni inovatif dari seniman global.
        </p>
        <a href="{{ url('/gallery') }}" class="btn btn-primary btn-lg px-4 gap-3 shadow-sm" style="background-color: #00138e; border-color: #00138e;">Jelajahi Galeri</a>
    </div>
</div>

<!-- Main Content Section -->
<div class="container py-3">
    <div class="card border-0 shadow-sm p-4 mb-5 rounded-4 bg-white">
        <div class="card-body text-center">
            <h2 class="fw-bold text-dark mb-4">Tentang eARTh.ly</h2>
            <p class="fs-5 text-muted mx-auto" style="max-width: 900px; line-height: 1.8;">
                eARTh.ly adalah website gallery yang menampilkan berbagai karya seni digital dan 
                konten kreatif dari berbagai seniman dan kreator. Kami berkomitmen untuk menyediakan 
                platform yang mendukung pertumbuhan komunitas kreatif serta mempromosikan karya-karya 
                inovatif kepada audiens global. Anda dapat menemukan berbagai kategori karya seni, mulai dari ilustrasi, 
                fotografi, desain grafis, hingga animasi dan video kreatif. Kami juga menyediakan fitur interaktif yang 
                memungkinkan pengguna untuk berinteraksi dengan seniman, memberikan feedback, dan berbagi karya favorit 
                mereka di media sosial. Dengan misi untuk menginspirasi dan memberdayakan komunitas kreatif, eARTh.ly terus 
                berupaya menghadirkan pengalaman galeri digital yang menarik dan bermanfaat bagi semua pengunjung.
            </p>
        </div>
    </div>
</div>
@endsection