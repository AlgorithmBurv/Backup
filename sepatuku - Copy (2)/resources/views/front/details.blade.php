<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AKANTHRA - {{ $shoe->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('images/PNG.png') }}" />

    {{-- ====================================================================== --}}
    {{--                              STYLESHEET                                --}}
    {{-- ====================================================================== --}}
    <style>
        /* |--------------------------------------------------------------------------
        | 1. General & Body Styles
        |--------------------------------------------------------------------------
        */
        body {
            font-family: "Helvetica Neue", Arial, sans-serif;
            background-color: #fff;
        }

        /* |--------------------------------------------------------------------------
        | 2. Navbar
        |--------------------------------------------------------------------------
        */
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

        /* |--------------------------------------------------------------------------
        | 3. Product Details Page Styles
        |--------------------------------------------------------------------------
        */
        .main-image-container {
            border: 1px solid #eee;
            padding: 1rem;
            border-radius: 8px;
        }

        #main-thumbnail {
            width: 100%;
            height: 450px;
            object-fit: contain;
            border-radius: 8px;
        }

        .thumbnail-gallery {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
            overflow-x: auto;
        }

        .thumbnail-item {
            width: 80px;
            height: 80px;
            border: 2px solid transparent;
            border-radius: 8px;
            cursor: pointer;
            transition: border-color 0.3s ease;
            flex-shrink: 0;
            /* Mencegah thumbnail menyusut di flex container */
        }

        .thumbnail-item:hover,
        .thumbnail-item.active {
            border-color: #000;
        }

        .thumbnail-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 6px;
        }

        .product-price {
            font-size: 2rem;
            font-weight: bold;
        }

        .brand-logo-container {
            width: 60px;
            height: 60px;
            padding: 5px;
            border-radius: 8px;
            background-color: #f8f9fa;
        }

        .rating-star {
            width: 20px;
            height: 20px;
            color: #ffc107;
        }

        /* Custom styles for the size selector buttons */
        .size-selector .btn-check:checked+.btn-outline-dark {
            background-color: #000;
            color: #fff;
        }

        /* |--------------------------------------------------------------------------
        | 4. Footer
        |--------------------------------------------------------------------------
        */
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
            transition: color 0.3s;
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

        /* |--------------------------------------------------------------------------
        | 5. Dark Mode Overrides
        |--------------------------------------------------------------------------
        */
        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
            transition: background-color 0.3s, color 0.3s;
        }

        body.dark-mode .navbar {
            background-color: #1f1f1f !important;
            border-bottom: 1px solid #333;
        }

        body.dark-mode .navbar .navbar-brand,
        body.dark-mode .navbar .nav-link,
        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: #fff !important;
        }

        body.dark-mode p,
        body.dark-mode .text-muted {
            color: #bbb !important;
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

        body.dark-mode .product-details-card,
        body.dark-mode .main-image-container {
            background-color: #1f1f1f;
            border-color: #333;
        }

        body.dark-mode .product-price {
            color: #58a6ff !important;
            /* Warna biru cerah untuk kontras */
        }

        body.dark-mode .brand-logo-container {
            background-color: #333;
        }

        body.dark-mode .thumbnail-item {
            border-color: #444;
        }

        body.dark-mode .thumbnail-item:hover,
        body.dark-mode .thumbnail-item.active {
            border-color: #fff;
            /* Border thumbnail aktif menjadi putih */
        }

        body.dark-mode .btn-check:checked+.btn-outline-dark {
            background-color: #fff;
            color: #000;
        }

        body.dark-mode .btn-outline-dark {
            color: #fff;
            border-color: #fff;
        }

        body.dark-mode #theme-toggle {
            color: #ffffff;
            border-color: #444;
        }

        body.dark-mode #theme-toggle:hover {
            background-color: #333;
        }

        body.dark-mode hr {
            border-top: 1px solid #333;
        }
    </style>
</head>

<body>

    <header>
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

                <form action="{{ route('front.search') }}" class="d-flex search-form ms-lg-3 mt-2 mt-lg-0"
                    role="search">
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
    </header>

    <main class="container my-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="main-image-container mb-3">
                    <img id="main-thumbnail" src="{{ Storage::url($shoe->photos()->latest()->first()->photo) }}"
                        alt="Product image">
                </div>
                <div class="thumbnail-gallery">
                    @foreach ($shoe->photos as $itemPhoto)
                        <div class="thumbnail-item">
                            <img src="{{ Storage::url($itemPhoto->photo) }}" alt="Product thumbnail">
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-5">
                <div class="product-details-card">
                    <h1 class="fw-bold mb-2">{{ $shoe->name }}</h1>

                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="rating-star">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.006z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="fw-semibold ms-1">4.5</span>
                        </div>
                        <p class="text-muted mb-0">(18,485 reviews)</p>
                    </div>

                    <p class="product-price text-primary mb-4">Rp {{ number_format($shoe->price, 0, ',', '.') }}</p>

                    <p class="text-muted mb-4">{{ $shoe->about }}</p>

                    <hr>

                    <div class="d-flex align-items-center my-4">
                        <div class="brand-logo-container me-3">
                            <img src="{{ Storage::url($shoe->brand->logo) }}" class="img-fluid"
                                alt="{{ $shoe->brand->name }}">
                        </div>
                        <div>
                            <p class="text-muted mb-0">Brand</p>
                            <h5 class="fw-bold mb-0">{{ $shoe->brand->name }}</h5>
                        </div>
                    </div>

                    <form action="{{ route('front.save_order', $shoe->slug) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <h6 class="fw-bold">Choose Size</h6>
                            <div class="d-flex flex-wrap gap-2 size-selector">
                                @foreach ($shoe->sizes as $itemSize)
                                    <input type="radio" class="btn-check" name="shoe_size"
                                        id="size-{{ $itemSize->id }}" value="{{ $itemSize->size }}"
                                        data-size-id="{{ $itemSize->id }}" autocomplete="off" required>
                                    <label class="btn btn-outline-dark"
                                        for="size-{{ $itemSize->id }}">{{ $itemSize->size }}</label>
                                @endforeach
                            </div>
                            <input type="hidden" name="size_id" id="size_id" value="">
                        </div>

                        <button type="submit" class="btn btn-dark btn-lg w-100 py-3">Buy Now</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer mt-5">
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

    {{-- ====================================================================== --}}
    {{--                              JAVASCRIPT                                --}}
    {{-- ====================================================================== --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            /**
             * Initializes the theme (dark/light mode) functionality.
             * It handles theme toggling on button click and loads the saved theme from localStorage.
             */
            function initThemeToggle() {
                const themeToggleBtn = document.getElementById('theme-toggle');
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

                // Apply saved theme on initial load
                const savedTheme = localStorage.getItem('theme');
                if (savedTheme === 'dark') {
                    document.body.classList.add('dark-mode');
                }
                updateIcon();
            }

            /**
             * Initializes the product image gallery.
             * Clicking a thumbnail updates the main image and highlights the active thumbnail.
             */
            function initProductGallery() {
                const mainThumbnail = document.getElementById('main-thumbnail');
                const thumbnailItems = document.querySelectorAll('.thumbnail-item');

                if (!mainThumbnail || thumbnailItems.length === 0) return;

                thumbnailItems.forEach((item, index) => {
                    // Set the first thumbnail as active by default
                    if (index === 0) {
                        item.classList.add('active');
                    }

                    item.addEventListener('click', () => {
                        const imgElement = item.querySelector('img');
                        if (imgElement) {
                            mainThumbnail.src = imgElement.src;
                        }

                        // Update active state for all thumbnails
                        thumbnailItems.forEach(i => i.classList.remove('active'));
                        item.classList.add('active');
                    });
                });
            }

            /**
             * Initializes the size selection logic.
             * When a size is chosen, it updates a hidden input field with the corresponding size ID.
             */
            function initSizeSelector() {
                const sizeRadios = document.querySelectorAll('input[name="shoe_size"]');
                const sizeIdInput = document.getElementById('size_id');

                if (sizeRadios.length === 0 || !sizeIdInput) return;

                sizeRadios.forEach(radio => {
                    radio.addEventListener('change', function() {
                        const selectedSizeId = this.getAttribute('data-size-id');
                        sizeIdInput.value = selectedSizeId;
                    });
                });
            }

            // Initialize all functionalities
            initThemeToggle();
            initProductGallery();
            initSizeSelector();
        });
    </script>

</body>

</html>
