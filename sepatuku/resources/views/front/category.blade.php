<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $category->name ?? 'Category' }} - AKANTHRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link href="{{ asset('output.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            background-color: #fff;
        }

        /* =================== NAVBAR STYLING (SERAGAM DENGAN HOME) =================== */
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

        /* =================== CATEGORY HEADER STYLING =================== */
        .category-header {
            padding: 50px 0 20px;
            border-bottom: 2px solid #000;
            margin-bottom: 40px;
        }

        .category-header h1 {
            font-weight: 800;
            font-size: 2.5rem;
            text-transform: uppercase;
        }

        .category-header p {
            color: #878785;
            font-size: 1rem;
        }

        /* =================== PRODUCT GRID STYLING (SERAGAM DENGAN HOME) =================== */
        .product-card {
            border-radius: 8px;
            text-align: center;
            border: none;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: translateY(-3px);
        }

        .product-card img {
            border-radius: 8px;
            object-fit: cover;
            width: 100%;
            height: 300px;
            /* Tinggi seragam untuk tampilan grid */
        }

        .product-card .card-body {
            padding-top: 5px;
        }

        .product-card h5 {
            margin-top: 10px;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .product-card .rating-info {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        .product-card .rating-info img {
            width: 18px;
            height: 18px;
        }

        .product-card .rating-info span {
            font-weight: 600;
            font-size: 0.9rem;
        }

        .product-card p.text-muted {
            color: #878785 !important;
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        .product-card .btn-learn-more {
            border-radius: 4px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #000;
            border: 1px solid #000;
            padding: 8px 15px;
            display: block;
            margin-top: 15px;
        }

        .empty-result {
            font-size: 1.2rem;
            color: #555;
            text-align: center;
            padding: 50px 0;
        }
    </style>
</head>

<body>
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

    <div class="container">

        <div class="mt-4">
            <a href="{{ route('front.index') }}" class="text-decoration-none text-secondary d-flex align-items-center">
                <img src="{{ asset('assets/images/icons/back.svg') }}" class="w-5 h-5 me-2" alt="icon">
                Back to Home
            </a>
        </div>

        <div class="category-header d-flex justify-content-between align-items-end">
            <div>
                <h1>{{ $category->name }}</h1>
                <p>{{ $category->shoes->count() }} Shoes available</p>
            </div>
            {{-- <img src="{{ Storage::url($category->icon) }}" style="width: 80px; height: 80px; object-fit: contain;" alt="Category Icon"> --}}
        </div>

        <section id="category-products" class="mb-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold fs-5 mb-0">Products in this Category</h2>
                <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                    View All
                </a>
            </div>

            <div class="row g-4">
                @forelse ($category->shoes as $itemShoe)
                    <div class="col-md-4 col-sm-6">
                        <a href="{{ route('front.details', $itemShoe->slug) }}"
                            class="text-decoration-none text-dark d-block h-100">
                            <div class="card product-card">
                                <img src="{{ Storage::url($itemShoe->photos()->latest()->first()->photo) }}"
                                    class="card-img-top" alt="{{ $itemShoe->name }}">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $itemShoe->name }}</h5>
                                    <p class="card-text text-muted mb-2">{{ $itemShoe->category->name }}</p>

                                    <span class="btn-learn-more text-center">Learn More</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="empty-result">No shoes found in the {{ $category->name }} category.</p>
                    </div>
                @endforelse
            </div>
        </section>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
