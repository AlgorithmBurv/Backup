<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Booking Details - AKANTHRA</title>
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
            padding: 50px 0 20px;
        }

        .footer a {
            text-decoration: none;
            color: #fff;
            font-size: 0.9rem;
            line-height: 1.8;
        }

        .footer a:hover {
            text-decoration: underline;
            color: #ccc;
        }

        .footer h6 {
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .footer h1 {
            font-size: 3.5rem;
            letter-spacing: 2px;
            line-height: 1.1;
            text-transform: uppercase;
            margin-top: 0;
        }

        .footer .top-text,
        .footer .bottom-links {
            font-size: 0.9rem;
            text-transform: uppercase;
            font-weight: 500;
        }

        .footer .bottom-links a {
            font-weight: 500;
            margin: 0 10px;
        }

        .footer .bottom-section {
            padding-top: 20px;
            margin-top: 20px;
        }

        .card {
            border: 1px solid #eee;
            border-radius: 8px;
        }

        .list-group-item {
            background-color: transparent;
        }

        .badge {
            font-size: 0.9em;
        }

        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        body.dark-mode .navbar {
            background-color: #1f1f1f !important;
            border-bottom-color: #333;
        }

        body.dark-mode .navbar .search-form {
            border: 1px solid #444;
        }

        body.dark-mode .navbar .search-form input {
            background-color: #333;
            color: #fff;
        }

        body.dark-mode .navbar .search-form input::placeholder {
            color: #aaa;
        }

        body.dark-mode .navbar .search-form button {
            background-color: #fff;
            color: #000;
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
        body.dark-mode .text-muted,
        body.dark-mode .list-group-item {
            color: #bbb !important;
        }

        body.dark-mode .card {
            background-color: #1f1f1f;
            border: 1px solid #333;
        }

        body.dark-mode .list-group-item {
            border-color: #333 !important;
        }

        body.dark-mode .btn-dark {
            background-color: #fff;
            color: #000;
            border-color: #fff;
        }

        body.dark-mode .btn-outline-dark {
            color: #fff;
            border-color: #fff;
        }

        body.dark-mode .btn-outline-dark:hover {
            background-color: #fff;
            color: #000;
        }

        body.dark-mode #theme-toggle {
            color: #ffffff;
            border-color: #444;
        }

        body.dark-mode #theme-toggle:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    {{-- Navbar Standar dengan Tombol Mode Gelap --}}
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

    {{-- Konten Utama Halaman Booking Details --}}
    <main class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold h2 mb-0">Booking Details</h1>
            <a href="{{ route('front.check_booking') }}" class="btn btn-outline-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-left" viewBox="0 0 16 16" style="vertical-align: -2px;">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z">
                    </path>
                </svg>
                Find Another Booking
            </a>
        </div>

        <div class="row g-4">
            {{-- Kolom Kiri: Rincian Pesanan --}}
            <div class="col-lg-7">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title fw-bold mb-0">Your Order</h4>
                            @if ($orderDetails->is_paid)
                                <span class="badge bg-success">SUCCESS</span>
                            @else
                                <span class="badge bg-warning text-dark">PENDING</span>
                            @endif
                        </div>

                        <div class="d-flex align-items-center p-3 mb-3 bg-light rounded"
                            @if (session('dark-mode')) style="background-color: #333 !important;" @endif>
                            <img src="{{ Storage::url($orderDetails->shoe->photos()->latest()->first()->photo) }}"
                                alt="shoe thumbnail"
                                style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px;"
                                class="me-3">
                            <h5 class="fw-bold mb-0">{{ $orderDetails->shoe->name }}</h5>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between"><span>Brand:</span> <span
                                    class="fw-bold">{{ $orderDetails->shoe->brand->name }}</span></li>
                            <li class="list-group-item d-flex justify-content-between"><span>Item Price:</span> <span>Rp
                                    {{ number_format($orderDetails->shoe->price, 0, ',', '.') }}</span></li>
                            <li class="list-group-item d-flex justify-content-between"><span>Quantity:</span>
                                <span>{{ $orderDetails->quantity }} Pcs</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between"><span>Size:</span>
                                <span>{{ $orderDetails->shoeSize->size }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between"><span>Checkout Time:</span>
                                <span>{{ $orderDetails->created_at->format('d M Y, H:i') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between h5 fw-bold mt-3"><span>Grand
                                    Total:</span> <span>Rp
                                    {{ number_format($orderDetails->grand_total_amount, 0, ',', '.') }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Kolom Kanan: Rincian Pelanggan --}}
            <div class="col-lg-5">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="card-title fw-bold mb-3">Customer & Shipping</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between"><span>Booking ID:</span> <span
                                    class="fw-bold">{{ $orderDetails->booking_trx_id }}</span></li>
                            <li class="list-group-item d-flex justify-content-between"><span>Name:</span>
                                <span>{{ $orderDetails->name }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between"><span>Phone:</span>
                                <span>{{ $orderDetails->phone }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between"><span>Email:</span>
                                <span>{{ $orderDetails->email }}</span>
                            </li>
                            <li class="list-group-item">
                                <div class="fw-bold">Shipping Address:</div>
                                <p class="text-muted mb-0">{{ $orderDetails->address }}, {{ $orderDetails->city }},
                                    {{ $orderDetails->post_code }}</p>
                            </li>
                        </ul>
                        <div class="d-grid mt-4">
                            <a href="mailto:customerservice@akanthra.com" class="btn btn-dark">Contact Customer
                                Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- Footer Standar --}}
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

    {{-- SCRIPT UNTUK MODE GELAP/TERANG --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const themeToggleBtn = document.getElementById('theme-toggle');
            if (themeToggleBtn) {
                const darkIcon = document.getElementById('theme-toggle-dark-icon');
                const lightIcon = document.getElementById('theme-toggle-light-icon');
                const updateIcon = () => {
                    if (document.body.classList.contains('dark-mode')) {
                        darkIcon.style.display = 'block';
                        lightIcon.style.display = 'none';
                    } else {
                        darkIcon.style.display = 'none';
                        lightIcon.style.display = 'block';
                    }
                };
                themeToggleBtn.addEventListener('click', () => {
                    document.body.classList.toggle('dark-mode');
                    localStorage.setItem('theme', document.body.classList.contains('dark-mode') ? 'dark' :
                        'light');
                    updateIcon();
                });
                const savedTheme = localStorage.getItem('theme');
                if (savedTheme === 'dark') {
                    document.body.classList.add('dark-mode');
                }
                updateIcon();
            }
        });
    </script>
</body>

</html>
