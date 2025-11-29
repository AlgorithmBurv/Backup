<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Order - AKANTHRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('images/PNG.png') }}" />

    @livewireStyles

    <style>
        /* =================================
        1. General & Body Styles
        ================================= */
        body {
            font-family: "Helvetica Neue", Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* =================================
        2. Navbar
        ================================= */
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
            padding: 0.375rem 0.75rem;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        /* =================================
        7. Footer
        ================================= */
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

        /* =================================
        8. Dark Mode Styles
        ================================= */
        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        body.dark-mode .navbar {
            background-color: #1f1f1f !important;
            border-bottom-color: #333;
        }

        body.dark-mode .navbar .navbar-brand,
        body.dark-mode .navbar .nav-link {
            color: #fff !important;
        }

        body.dark-mode .navbar .search-form {
            border-color: #444;
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

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: #fff;
        }

        body.dark-mode p,
        body.dark-mode .text-muted {
            color: #bbb !important;
        }

        body.dark-mode .card {
            background-color: #1f1f1f;
            border: 1px solid #333;
        }

        body.dark-mode hr {
            border-top-color: #333;
        }

        body.dark-mode #theme-toggle {
            color: #fff;
            border-color: #444;
        }

        body.dark-mode .input-group-text,
        body.dark-mode .btn-outline-secondary {
            background-color: #333;
            border-color: #444;
            color: #fff;
        }

        /* =================================
        10. Order Page Specific Styles
        ================================= */
        .order-summary-card .product-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }

        .order-summary-card .price {
            font-size: 1.25rem;
            font-weight: bold;
            color: #0d6efd;
        }

        body.dark-mode .order-summary-card .price {
            color: #3e8bff;
        }
    </style>
</head>

<body>
    {{-- NAVBAR LENGKAP DENGAN TOMBOL MODE TEMA --}}
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

    <main class="container my-5">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-6 col-md-8">
                <h2 class="fw-bold mb-4">Shipping & Payment</h2>
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        @livewire('order-form', ['shoe' => $shoe, 'orderData' => $orderData])
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <h2 class="fw-bold mb-4">Your Order</h2>
                <div class="card shadow-sm">
                    <div class="card-body p-4 text-center order-summary-card">
                        <img src="{{ Storage::url($shoe->thumbnail) }}" alt="{{ $shoe->name }}"
                            class="product-image mb-3 mx-auto d-block">
                        <h4 class="fw-bold mb-1">{{ $shoe->name }}</h4>
                        <p class="text-muted mb-3">Size: {{ $orderData['shoe_size'] }}</p>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold h5">
                            <p class="mb-0">Price</p>
                            <p class="mb-0 price">Rp {{ number_format($shoe->price) }}</p>
                        </div>

                    </div>
                </div>
                <div class="d-grid">
                    <a href="{{ route('front.details', $shoe->slug) }}" class="btn btn-outline-dark mt-4">
                        Back to Details
                    </a>
                </div>
            </div>
        </div>
    </main>

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

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- SCRIPT UNTUK MODE TEMA DIKEMBALIKAN --}}
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
