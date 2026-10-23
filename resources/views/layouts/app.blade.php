<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script> 
    <style>
       /* =================================
   CUSTOM HEADER & NAVBAR (Mustard Theme)
   ================================= */
.custom-header {
    background-color: transparent !important;
    backdrop-filter: blur(10px); /* Efek kaca transparan modern */
    -webkit-backdrop-filter: blur(10px);
    transition: background-color 0.3s ease;
}

.custom-header .navbar-brand {
    color: #212529 !important;
    font-weight: 700;
    letter-spacing: 0.5px;
}

.custom-header .navbar-nav .nav-link {
    color: #212529 !important; /* Warna teks awal */
    position: relative; 
    padding-bottom: 5px; 
    font-weight: 500;
    transition: color 0.3s ease;
}

/* Warna saat kursor diarahkan ke menu (hover) - Berubah jadi Kuning Mustard / Golden */
.custom-header .navbar-nav .nav-link:hover,
.custom-header .navbar-nav .nav-link.active {
    color: #d39e00 !important; /* Kuning mustard versi tegas */
}

/* Animasi Garis Bawah Navbar */
.custom-header .nav-link::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background-color: #ffc107; /* Warna garis bawah kuning mustard cerah */
    transition: width 0.3s ease-in-out; 
    position: absolute;
    bottom: 0;
    left: 0;
}

.custom-header .nav-link:hover::after,
.custom-header .nav-link.active::after {
    width: 100%; /* Garis bawah melebar penuh saat di-hover */
}


/* =================================
   CUSTOM FOOTER (Transparent & Clean)
   ================================= */
.custom-footer {
    background-color: transparent !important;
    color: #6c757d !important;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
    padding: 2rem 0;
}


/* =================================
   TAMBAHAN ELEMEN PENDUKUNG (Opsional)
   ================================= */
/* Styling Card & Tombol dengan aksen Kuning Mustard */
.btn-primary, .bg-primary {
    background-color: #ffc107 !important;
    border-color: #ffc107 !important;
    color: #212529 !important; /* Teks gelap agar kontras dan terbaca jelas di atas kuning */
    font-weight: 600;
}

.btn-primary:hover {
    background-color: #d39e00 !important;
    border-color: #d39e00 !important;
    color: #fff !important;
}

.badge.bg-primary {
    background-color: rgba(255, 193, 7, 0.15) !important;
    color: #d39e00 !important;
}
.btn-outline-primary {
    color: #d39e00 !important;
    border-color: #d39e00 !important;
    background-color: transparent !important;
    transition: all 0.3s ease-in-out; /* Menambahkan efek transisi mulus */
}

.btn-outline-primary:hover,
.btn-outline-primary:focus {
    background-color: #ffc107 !important; /* Kuning mustard saat disentuh/hover */
    border-color: #ffc107 !important;
    color: #212529 !important; /* Teks berubah menjadi gelap agar kontras dan mudah dibaca */
}

/* Mengubah warna teks pada link paginasi biasa */
.pagination .page-item .page-link {
    color: #d39e00 !important;
    border-color: #dee2e6 !important;
    background-color: #fff !important;
}

/* Mengubah latar belakang dan teks tombol halaman yang sedang aktif (angka 1) */
.pagination .page-item.active .page-link {
    background-color: #ffc107 !important;
    border-color: #ffc107 !important;
    color: #212529 !important; /* Teks gelap agar kontras dan mudah dibaca */
    font-weight: bold;
}

/* Efek saat tombol paginasi di-hover */
.pagination .page-item .page-link:hover {
    background-color: #ffc107 !important;
    border-color: #ffc107 !important;
    color: #212529 !important;
}
    </style>
</head>
<body>
    <body class="bg-light d-flex flex-column min-vh-100">
        <header>
            @include('partials.header')
        </header>
        <main>
            @yield('content')
        </main>
            @include('partials.footer')
    </body>
</body>
</html>