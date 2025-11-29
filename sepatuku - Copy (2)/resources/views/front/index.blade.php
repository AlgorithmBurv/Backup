<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AKANTHRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="images/PNG.png" />

    <style>
        /* =================================
           1. General & Body Styles
           ================================= */
        body {
            font-family: "Helvetica Neue", Arial, sans-serif;
            background-color: #fff;
        }

        .section-title {
            text-align: center;
            margin: 60px 0 30px;
            font-size: 2rem;
            font-weight: bold;
            text-transform: uppercase;
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
           3. Hero Section
           ================================= */
        .hero-section {
            padding: 80px 20px 40px;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 800;
            text-transform: uppercase;
            line-height: 1.1;
        }

        .hero-section p {
            font-size: 1.1rem;
            color: #555;
            margin-top: 15px;
        }

        .hero-images {
            position: relative;
            min-height: 350px;
        }

        .hero-images .image-1 {
            background-color: #ffc700;
            padding: 30px;
            transform: rotate(-10deg);
            top: 0;
            left: 0;
            z-index: 2;
            width: 300px;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .hero-images .image-2 {
            background-color: #7aff00;
            padding: 30px;
            transform: rotate(10deg);
            top: 40px;
            left: 150px;
            z-index: 1;
            width: 300px;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .hero-images .image-1 img,
        .hero-images .image-2 img {
            position: static;
            transform: none !important;
            width: 100%;
            height: 100%;
            object-fit: contain;
            box-shadow: none;
        }

        /* Responsive Hero */
        @media (max-width: 768px) {
            .hero-images {
                margin-top: 40px;
                min-height: 300px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .hero-images .image-1,
            .hero-images .image-2 {
                position: relative;
                transform: none !important;
                left: 0 !important;
                top: 0 !important;
                margin: 5px;
                display: inline-block;
                width: 45%;
                height: 250px;
                padding: 20px;
            }

            .hero-images .image-1 img,
            .hero-images .image-2 img {
                width: 100%;
                height: 100%;
            }
        }

        /* =================================
           4. Filter Buttons & Product Cards
           ================================= */
        .filter-buttons .btn {
            border-radius: 0;
            font-size: 0.9rem;
            text-transform: uppercase;
            margin: 0 5px 10px;
            color: #000;
            border: 1px solid #000;
            transition: all 0.2s;
        }

        .filter-buttons .btn.active {
            background-color: #000;
            color: #fff;
        }

        .filter-buttons .btn:hover:not(.active) {
            background-color: #f0f0f0;
            color: #000;
        }

        .product-card {
            border-radius: 8px;
        }

        .product-card img {
            border-radius: 8px;
            object-fit: cover;
        }

        .product-card .card-body {
            padding-top: 5px;
        }

        .product-card h5 {
            margin-top: 10px;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .product-card p.text-muted {
            margin: 0;
            color: #878785 !important;
            font-size: 0.9rem;
        }

        .product-card p.fw-bold {
            color: #0d6efd !important;
            font-size: 1.2rem;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        .product-card .btn-outline-dark {
            border-radius: 4px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* =================================
           5. Perfect Match Section
           ================================= */
        .perfect-match-section h2 {
            font-size: 3rem;
            line-height: 1.1;
            font-weight: 800;
            text-transform: uppercase;
        }

        .perfect-match-section p {
            font-size: 1rem;
            color: #555;
        }

        .perfect-match-section h4 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0px;
        }

        .perfect-match-section small {
            color: #878785 !important;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* =================================
           6. Recommendation Section & Scroller
           ================================= */
        /* Light Mode Styling */
        .recommendation-section .product-item {
            background-color: #ffffff;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 15px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .recommendation-section a.text-dark {
            color: #212529 !important;
        }

        .recommendation-section h6 {
            color: #212529;
            font-weight: 600;
        }

        .recommendation-section p.text-muted {
            color: #6c757d !important;
        }

        /* Scroller Animation */
        .scroller {
            max-width: 100%;
            overflow: hidden;
            -webkit-mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
            mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
        }

        .scroller__inner {
            padding-left: 0;
            margin: 0;
            display: flex;
            flex-wrap: nowrap;
            width: max-content;
            animation: scroll 40s linear infinite;
        }

        .scroller:hover .scroller__inner {
            animation-play-state: paused;
        }

        .scroller__inner li {
            list-style: none;
            margin: 0 1rem;
            width: 280px;
            flex-shrink: 0;
        }

        @keyframes scroll {
            to {
                transform: translateX(-50%);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .scroller__inner {
                animation: none;
            }
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

        /* =================================
           8. Dark Mode Styles
           ================================= */
        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Dark Mode: Navbar */
        body.dark-mode .navbar {
            background-color: #1f1f1f !important;
            border-bottom: 1px solid #333;
        }

        body.dark-mode .navbar .navbar-brand,
        body.dark-mode .navbar .nav-link {
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

        /* Dark Mode: General Text & Headings */
        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: #fff;
        }

        body.dark-mode p,
        body.dark-mode .hero-section p,
        body.dark-mode .perfect-match-section p {
            color: #bbb;
        }

        /* Dark Mode: Filter Buttons */
        body.dark-mode .filter-buttons .btn {
            color: #fff;
            border: 1px solid #fff;
        }

        body.dark-mode .filter-buttons .btn.active {
            background-color: #fff;
            color: #000;
        }

        body.dark-mode .filter-buttons .btn:hover:not(.active) {
            background-color: #333;
        }

        /* Dark Mode: Product Cards */
        body.dark-mode .product-card {
            background-color: #1f1f1f;
            border-radius: 8px;
        }

        body.dark-mode .product-card a {
            color: #fff !important;
        }

        body.dark-mode .product-card .btn-outline-dark {
            border-color: #fff;
            color: #fff;
        }

        body.dark-mode .product-card .btn-outline-dark:hover {
            background-color: #fff;
            color: #000;
        }

        /* Dark Mode: Perfect Match Section */
        body.dark-mode .perfect-match-section small {
            color: #aaa !important;
        }

        /* Dark Mode: Recommendation Section */
        body.dark-mode .recommendation-section .product-item {
            background-color: #1f1f1f;
            border-color: #333;
        }

        body.dark-mode .recommendation-section a.text-dark,
        body.dark-mode .recommendation-section h6 {
            color: #ffffff !important;
        }

        body.dark-mode .recommendation-section p.text-muted {
            color: #aaa !important;
        }

        /* Dark Mode: Theme Toggle Button */
        body.dark-mode #theme-toggle {
            color: #ffffff;
            border-color: #444;
        }

        body.dark-mode #theme-toggle:hover {
            background-color: #333;
        }

        /* Dark Mode: Horizontal Rule */
        body.dark-mode hr {
            border-top: 1px solid #333;
        }
    </style>
</head>

<body>
    @if ($errors->has('error'))
        <div class="alert alert-danger bg-red-500 text-white p-3 rounded-md">
            <strong>Error:</strong> {{ $errors->first('error') }}
        </div>
    @endif

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

    <section class="hero-section container">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-1 order-2">
                <h1>
                    OUR LATEST<br />
                    OFFERINGS
                </h1>
                <p>
                    Discover our latest offerings, featuring cutting-edge designs and premium quality.
                </p>
            </div>
            <div class="col-md-6 order-md-2 order-1 hero-images d-flex justify-content-center">
                <div class="image-1">
                    <img src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8c2hvZXxlbnwwfHwwfHx8MA%3D%3D"
                        alt="Sepatu Merah" />
                </div>
                <div class="image-2">
                    <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8c2hvZXxlbnwwfHwwfHx8MA%3D%3D"
                        alt="Sepatu Hijau" />
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <hr class="my-4">
    </div>

    <section class="container">
        <h2 class="section-title">OUR PRODUCT</h2>

        <div class="d-flex justify-content-center flex-wrap filter-buttons mb-5">
            <button class="btn btn-outline-dark active">All</button>
            @forelse ($categories as $itemCategory)
                <a href="{{ route('front.category', $itemCategory->slug) }}"
                    class="btn btn-outline-dark">{{ $itemCategory->name }}</a>
            @empty
                <button class="btn btn-outline-dark">Outwear</button>
                <button class="btn btn-outline-dark">Headwear</button>
            @endforelse
        </div>

        <div class="row g-4 justify-content-center">
            @forelse ($popularShoes as $itemPopularShoe)
                <div class="col-md-4 col-sm-6">
                    <a href="{{ route('front.details', $itemPopularShoe->slug) }}"
                        class="text-decoration-none text-dark d-block h-100">
                        <div class="card product-card border-0 h-100 text-center">
                            <img src="{{ Storage::url($itemPopularShoe->thumbnail) }}" class="card-img-top"
                                alt="{{ $itemPopularShoe->name }}" style="height: 350px;" />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $itemPopularShoe->name }}</h5>
                                <p class="card-text text-muted">
                                    We’ve done it carefully and simply.
                                </p>
                                <p class="fw-bold text-primary">Rp
                                    {{ number_format($itemPopularShoe->price, 0, ',', '.') }}</p>
                                <span class="btn btn-outline-dark w-100">Learn More</span>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-md-4 col-sm-6">
                    <div class="card product-card border-0 h-100 text-center">
                        <img src="https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?w=600&auto=format&fit=crop&q=60"
                            class="card-img-top" alt="Electric shoes single battery" style="height: 350px;" />
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Electric shoes single battery</h5>
                            <p class="card-text text-muted">
                                We’ve done it carefully and simply.
                            </p>
                            <p class="fw-bold text-primary">Rp 1.200.000</p>
                            <a href="#" class="btn btn-outline-dark w-100">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card product-card border-0 h-100 text-center">
                        <img src="https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?w=600&auto=format&fit=crop&q=60"
                            class="card-img-top" alt="Electric shoes double battery" style="height: 350px;" />
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Electric shoes double battery</h5>
                            <p class="card-text text-muted">
                                We’ve done it carefully and simply.
                            </p>
                            <p class="fw-bold text-primary">Rp 1.800.000</p>
                            <a href="#" class="btn btn-outline-dark w-100">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card product-card border-0 h-100 text-center">
                        <img src="https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?w=600&auto=format&fit=crop&q=60"
                            class="card-img-top" alt="Electric shoes triple battery" style="height: 350px;" />
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Electric shoes triple battery</h5>
                            <p class="card-text text-muted">
                                We’ve done it carefully and simply.
                            </p>
                            <p class="fw-bold text-primary">Rp 2.500.000</p>
                            <a href="#" class="btn btn-outline-dark w-100">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </section>

    <hr class="my-5">

    <section class="perfect-match-section container my-5">
        <div class="row align-items-center">
            <div class="col-md-7 mb-4 mb-md-0">
                <div class="ratio ratio-16x9 rounded">
                    <iframe
                        src="https://www.youtube.com/embed/iWI_uBH6R1g?autoplay=1&mute=1&loop=1&playlist=iWI_uBH6R1g&controls=0"
                        title="Iklan Sepatu adidas" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <div class="col-md-5">
                <h2 class="display-4">PERFECT<br />MATCH</h2>
                <p class="mt-3">
                    Explore our curated collection of fashion items designed to suit
                    your unique style. From trendy outfits to essential accessories,
                    you're sure to find the perfect match for every occasion.
                </p>

                <div class="row text-center mt-5 g-3">
                    <div class="col-6 col-md-3">
                        <h4>700+</h4>
                        <small class="text-uppercase">Collection</small>
                    </div>
                    <div class="col-6 col-md-3">
                        <h4>8</h4>
                        <small class="text-uppercase">Category</small>
                    </div>
                    <div class="col-6 col-md-3">
                        <h4>5+</h4>
                        <small class="text-uppercase">Collaboration</small>
                    </div>
                    <div class="col-6 col-md-3">
                        <h4>380</h4>
                        <small class="text-uppercase">Trends</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-5">

    <section class="recommendation-section container my-5">
        <h2 class="text-center fw-bold text-uppercase mb-5">RECOMMENDATION</h2>
        <div class="scroller" data-speed="slow">
            <ul class="tag-list scroller__inner">
                {{-- Original product block --}}
                @forelse ($newShoes as $itemNewShoe)
                    <li>
                        <a href="{{ route('front.details', $itemNewShoe->slug) }}"
                            class="text-decoration-none text-dark d-block">
                            <div class="product-item">
                                <img src="{{ Storage::url($itemNewShoe->thumbnail) }}"
                                    alt="{{ $itemNewShoe->name }}" class="img-fluid"
                                    style="height: 300px; width: 100%; object-fit: cover;" />
                                <h6 class="mt-3">{{ $itemNewShoe->name }}</h6>
                                <p class="text-muted">Rp {{ number_format($itemNewShoe->price, 0, ',', '.') }}</p>
                            </div>
                        </a>
                    </li>
                @empty
                    <li>Data produk tidak ditemukan.</li>
                @endforelse

                {{-- Duplicated product block for seamless animation --}}
                @forelse ($newShoes as $itemNewShoe)
                    <li>
                        <a href="{{ route('front.details', $itemNewShoe->slug) }}"
                            class="text-decoration-none text-dark d-block">
                            <div class="product-item">
                                <img src="{{ Storage::url($itemNewShoe->thumbnail) }}"
                                    alt="{{ $itemNewShoe->name }}" class="img-fluid"
                                    style="height: 300px; width: 100%; object-fit: cover;" />
                                <h6 class="mt-3">{{ $itemNewShoe->name }}</h6>
                                <p class="text-muted">Rp {{ number_format($itemNewShoe->price, 0, ',', '.') }}</p>
                            </div>
                        </a>
                    </li>
                @empty
                    <li>Data produk tidak ditemukan.</li>
                @endforelse
            </ul>
        </div>
    </section>

    <hr class="my-5">

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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>

    <script>
        // --- Theme (Dark/Light Mode) Toggle Functionality --- //
        document.addEventListener('DOMContentLoaded', () => {
            const themeToggleBtn = document.getElementById('theme-toggle');
            const darkIcon = document.getElementById('theme-toggle-dark-icon');
            const lightIcon = document.getElementById('theme-toggle-light-icon');

            // Function to update the icon based on the current theme
            const updateIcon = () => {
                if (document.body.classList.contains('dark-mode')) {
                    darkIcon.style.display = 'block';
                    lightIcon.style.display = 'none';
                } else {
                    darkIcon.style.display = 'none';
                    lightIcon.style.display = 'block';
                }
            };

            // Event listener for the theme toggle button
            themeToggleBtn.addEventListener('click', () => {
                // Toggle the .dark-mode class on the body
                document.body.classList.toggle('dark-mode');

                // Save the user's preference in localStorage
                if (document.body.classList.contains('dark-mode')) {
                    localStorage.setItem('theme', 'dark');
                } else {
                    localStorage.setItem('theme', 'light');
                }

                // Update the icon to reflect the change
                updateIcon();
            });

            // Check for a saved theme preference in localStorage when the page loads
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.body.classList.add('dark-mode');
            }

            // Set the correct icon on initial page load
            updateIcon();
        });
    </script>
</body>

</html>
