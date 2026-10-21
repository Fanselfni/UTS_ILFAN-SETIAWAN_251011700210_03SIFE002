@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container my-5">
    <div class="row align-items-center mb-5 py-4">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <span class="badge bg-primary bg-opacity-10 text-primary mb-2 px-3 py-2 fw-semibold">Gallery Art</span>
            <h1 class="display-4 fw-bold text-dark mb-3">Selamat Datang di <span style="color: #00138e;">eARTh.ly</span></h1>
            <p class="lead text-secondary mb-4">
                Kami 
            </p>
            <div class="d-flex gap-3">
                <a class="btn btn-primary btn-lg px-4" style="background-color: #00138e; border-color: #00138e;" href="{{ url('/about') }}">
                    Tentang Gallery
                </a>
                <a class="btn btn-outline-secondary btn-lg px-4" href="{{ url('/berita') }}">
                    Catalog Gallery
                </a>
            </div>
        </div>
    </div>
@endsection