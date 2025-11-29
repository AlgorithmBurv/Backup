<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Check My Order - AKANTHRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('images/PNG.png') }}" />

    {{-- CSS KONSISTEN DARI HALAMAN HOME --}}
    <style>
        body,
        html {
            height: 100%;
        }

        body {
            font-family: "Helvetica Neue", Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        .footer {
            flex-shrink: 0;
            background-color: #000;
            /* Menambahkan background hitam pada footer */
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

        .card {
            border: 1px solid #eee;
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

        body.dark-mode #theme-toggle {
            color: #ffffff;
            border-color: #444;
        }

        body.dark-mode #theme-toggle:hover {
            background-color: #333;
        }

        body.dark-mode p,
        body.dark-mode .text-muted,
        body.dark-mode .form-label {
            color: #bbb !important;
        }

        body.dark-mode .card {
            background-color: #1f1f1f;
            border: 1px solid #333;
        }

        body.dark-mode .form-control,
        body.dark-mode .input-group-text {
            background-color: #333;
            border-color: #444;
            color: #fff;
        }

        body.dark-mode .btn-dark {
            background-color: #fff;
            color: #000;
            border-color: #fff;
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

    {{-- Konten Utama Halaman Check Booking --}}
    <main class="container d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card shadow-sm">
                    <div class="card-body p-4 p-md-5 text-center">
                        <img src="{{ asset('assets/images/icons/3d-cube-search.svg') }}" class="mb-4"
                            style="width: 80px; height: 80px;" alt="icon">

                        <h1 class="h3 fw-bold">Check My Order</h1>
                        <p class="text-muted mb-4">Enter your booking ID and phone number to find your order.</p>

                        <form method="POST" action="{{ route('front.check_booking_details') }}">
                            @csrf
                            <div class="text-start">
                                <div class="mb-3">
                                    <label for="booking-id" class="form-label">Booking ID</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
                                                <path
                                                    d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0L11 1.293l.646-.647a.5.5 0 0 1 .708 0L13 1.293l.646-.647a.5.5 0 0 1 .638.057l.545.545a.5.5 0 0 1 0 .708L14.293 2l.647.646a.5.5 0 0 1 0 .708L14.293 4l.647.646a.5.5 0 0 1 0 .708L14.293 6l.647.646a.5.5 0 0 1 0 .708L14.293 8l.647.646a.5.5 0 0 1 0 .708L14.293 10l.647.646a.5.5 0 0 1 0 .708L14.293 12l.647.646a.5.5 0 0 1 0 .708l-.545.545a.5.5 0 0 1-.707 0L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.708 0l-.545-.545a.5.5 0 0 1 .057-.638L2 14.293l-.646-.647a.5.5 0 0 1 0-.708L2 12.293l-.646-.647a.5.5 0 0 1 0-.708L2 10.293l-.646-.647a.5.5 0 0 1 0-.708L2 8.293l-.646-.647a.5.5 0 0 1 0-.708L2 6.293l-.646-.647a.5.5 0 0 1 0-.708L2 4.293l-.646-.647a.5.5 0 0 1 0-.708l.545-.545a.5.5 0 0 1 .14-.434L.51 1.92a.5.5 0 0 1 .14-.434L1.293 1 1.94.353a.5.5 0 0 1 .434-.148zM4 3.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5z" />
                                            </svg>
                                        </span>
                                        <input type="text" name="booking_trx_id" id="booking-id" class="form-control"
                                            placeholder="What’s your booking ID" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.612l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                        </span>
                                        <input type="tel" name="phone" id="phone" class="form-control"
                                            placeholder="What’s your number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-dark btn-lg">Find Booking</button>
                            </div>
                        </form>
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
