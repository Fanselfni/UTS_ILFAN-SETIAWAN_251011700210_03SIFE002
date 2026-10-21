@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Gallery</h2>
        <p class="text-muted">Daftar karya seni terkini dari seniman global</p>
    </div>
    <div class="row g-4">
        @foreach ($galleries as $gallery)
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                <!-- Menyesuaikan dengan kolom 'image' di database migrasi Anda -->
                <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top" alt="{{ $gallery->title }}" style="height: 220px; object-fit: cover;">
                
                <div class="card-body d-flex flex-column">
                    <!-- Menyesuaikan dengan kolom 'title' -->
                    <h5 class="card-title fw-bold text-dark">{{ $gallery->title }}</h5>
                    
                    <!-- Menampilkan informasi tambahan dari database Anda -->
                    <p class="card-text text-muted small mb-2">Seniman: {{ $gallery->artist }}</p>
                    
                    <!-- Tombol Detail Art yang mengarah ke gallery-detail.blade.php via Route -->
                    <div class="mt-auto pt-3">
                        <a href="{{ route('gallery.show', $gallery->id) }}" class="btn btn-outline-primary w-100 rounded-pill fw-semibold">
                            Detail Art
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection