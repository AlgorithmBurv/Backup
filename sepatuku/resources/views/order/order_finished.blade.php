<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Order Successful - AKANTHRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('images/PNG.png') }}" />

    {{-- CSS KONSISTEN DARI HALAMAN HOME --}}
    <style>
        body {
            font-family: "Helvetica Neue", Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #fff !important;
            border-bottom: 1px solid #eee;
        }

        .navbar .navbar-brand {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 1.5rem;
            color: #000 !important;
        }

        .navbar .nav-link {
            color: #000 !important;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.9rem;
            margin: 0 10px;
        }

        .navbar .search-form {
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .navbar .search-form input {
            border: none;
            box-shadow: none !important;
        }

        .navbar .search-form button {
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 0 4px 4px 0;
        }

        .footer {
            background-color: #000;
            color: #fff;
        }

        .card {
            border: 1px solid #eee;
            border-radius: 8px;
        }

        .booking-id-box {
            border: 2px dashed #0d6efd;
            border-radius: 8px;
        }

        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        body.dark-mode .navbar {
            background-color: #1f1f1f !important;
            border-bottom-color: #333;
        }

        body.dark-mode .navbar .navbar-brand,
        body.dark-mode .navbar .nav-link,
        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: #fff !important;
        }

        body.dark-mode p,
        body.dark-mode .text-muted {
            color: #bbb !important;
        }

        body.dark-mode .card {
            background-color: #1f1f1f;
            border: 1px solid #333;
        }

        body.dark-mode .booking-id-box {
            border-color: #3e8bff;
        }

        body.dark-mode .btn-outline-dark {
            color: #fff;
            border-color: #fff;
        }

        body.dark-mode .btn-outline-dark:hover {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>

<body>
    {{-- Navbar Konsisten --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-dark" href="#">AKANTRA</a>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('front.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.check_booking') }}">My Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('front.contact') }}">Contact</a>
                    </li>
                </ul>
            </div>

            <form action="{{ route('front.search') }}" class="d-flex search-form ms-lg-3 mt-2 mt-lg-0" role="search">
                <input class="form-control me-0 border-0" type="search" name="keyword" placeholder="Search"
                    aria-label="Search" />
                <button type="submit">Search</button>
            </form>

            <button id="theme-toggle" class="btn ms-2">
                <svg id="theme-toggle-dark-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" style="width: 20px; height: 20px; display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>
                <svg id="theme-toggle-light-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" style="width: 20px; height: 20px;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </button>

            <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    {{-- Konten Utama Halaman Sukses --}}
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-sm text-center">
                    <div class="card-body p-4 p-md-5">

                        {{-- Ikon Sukses --}}
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor"
                                class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </div>

                        {{-- Gambar Produk --}}
                        <img src="{{ Storage::url($productTransaction->shoe->photos()->latest()->first()->photo) }}"
                            class="mx-auto d-block my-4" alt="thumbnail"
                            style="max-height: 150px; object-fit: contain;">

                        {{-- Pesan Konfirmasi --}}
                        <h1 class="h3 fw-bold">Thank You for Your Order!</h1>
                        <p class="text-muted">Kami akan memeriksa pesanan Anda, silahkan cek order secara berkala.</p>

                        {{-- Booking ID --}}
                        <div class="booking-id-box p-3 my-4">
                            <p class="text-muted mb-1">BOOKING ID</p>
                            <h4 class="fw-bold mb-0" style="letter-spacing: 2px;">
                                {{ $productTransaction->booking_trx_id }}</h4>
                        </div>

                        {{-- Tombol Aksi --}}
                        <div class="d-grid gap-2 mt-4">
                            <a href="{{ route('front.check_booking') }}" class="btn btn-dark btn-lg">View My Booking</a>
                            <a href="{{ route('front.index') }}" class="btn btn-outline-dark">Order More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- Footer Konsisten --}}
    <footer class="footer">
        <div class="container">
            <div class="d-flex justify-content-between mb-5 top-text">
                <span>SOCIAL</span>
                <span>RESPONSIBILITY</span>
            </div>

            <h1 class="text-center fw-bold display-4 mb-5">
                BEYOND<br />BOUNDARIES
            </h1>

            <div class="d-flex justify-content-center text-center mb-5 gap-5 flex-wrap">
                <div>
                    <h6>INFORMATION</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Outlet</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Project</a></li>
                    </ul>
                </div>
                <div>
                    <h6>SHIPPING</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Legacy</a></li>
                    </ul>
                </div>
                <div>
                    <h6>CONTACT US</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Email</a></li>
                        <li><a href="#">Store</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between border-top bottom-section bottom-links">
                <div class="d-flex gap-4 justify-content-center justify-content-md-start mb-3 mb-md-0">
                    <a href="#">INSTAGRAM</a>
                    <a href="#">PINTEREST</a>
                    <a href="#">CONTACT</a>
                    <a href="#">LEGACY</a>
                </div>
                <div class="d-flex gap-4 justify-content-center justify-content-md-end">
                    <a href="#">RETURNS</a>
                    <a href="#">EMAIL</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
