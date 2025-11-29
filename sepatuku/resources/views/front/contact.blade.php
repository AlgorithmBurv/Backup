<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact - AKANTHRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="images/PNG.png" />

    <style>
        /*
        * File: style.css (Combined)
        * Description: Custom styles for AKANTHRA Website.
        */

        /* ---------------------------------- */
        /* 1. Global & Variables              */
        /* ---------------------------------- */
        :root {
            --font-primary: "Helvetica Neue", Arial, sans-serif;
            --color-text: #212529;
            --color-text-muted: #555;
            --color-primary: #0d6efd;
            --color-light-bg: #fff;
            --color-dark-bg: #121212;
            --color-dark-surface: #1f1f1f;
            --color-light-border: #eee;
            --color-dark-border: #333;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-primary);
            background-color: var(--color-light-bg);
            color: var(--color-text);
            transition: background-color 0.3s, color 0.3s;
        }

        hr {
            border-top: 1px solid var(--color-light-border);
        }

        .section-title {
            text-align: center;
            margin: 60px 0 30px;
            font-size: 2rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* ---------------------------------- */
        /* 2. Navbar & Header                 */
        /* ---------------------------------- */
        .navbar {
            background-color: var(--color-light-bg);
            border-bottom: 1px solid var(--color-light-border);
        }

        .navbar-brand {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 1.5rem;
            color: var(--color-text);
        }

        .nav-link {
            color: var(--color-text);
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.9rem;
            margin: 0 10px;
        }

        .search-form {
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-form input {
            border: none;
            box-shadow: none !important;
        }

        .search-form button {
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 0 4px 4px 0;
            padding: 0.375rem 0.75rem;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        .theme-icon {
            width: 20px;
            height: 20px;
        }

        #theme-toggle-dark-icon {
            display: none;
        }

        /* ---------------------------------- */
        /* 3. Sections                        */
        /* ---------------------------------- */
        /* Hero Section */
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
            color: var(--color-text-muted);
            margin-top: 15px;
        }

        .hero-images {
            position: relative;
            min-height: 350px;
        }

        .hero-images .image-1,
        .hero-images .image-2 {
            padding: 30px;
            width: 300px;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .hero-images .image-1 {
            background-color: #ffc700;
            transform: rotate(-10deg);
            top: 0;
            left: 0;
            z-index: 2;
        }

        .hero-images .image-2 {
            background-color: #7aff00;
            transform: rotate(10deg);
            top: 40px;
            left: 150px;
            z-index: 1;
        }

        .hero-images img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        /* Products Section */
        .filter-buttons .btn {
            border-radius: 0;
            font-size: 0.9rem;
            text-transform: uppercase;
            margin: 0 5px 10px;
            color: var(--color-text);
            border: 1px solid var(--color-text);
            transition: all 0.2s;
        }

        .filter-buttons .btn.active {
            background-color: var(--color-text);
            color: var(--color-light-bg);
        }

        .filter-buttons .btn:hover:not(.active) {
            background-color: #f0f0f0;
            color: var(--color-text);
        }

        .product-card-img {
            height: 350px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-card .card-body {
            padding-top: 5px;
        }

        .product-card .card-title {
            margin-top: 10px;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .product-card p.text-muted {
            margin: 0;
            color: #878785;
            font-size: 0.9rem;
        }

        .product-card p.fw-bold {
            color: var(--color-primary);
            font-size: 1.2rem;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        /* Perfect Match Section */
        .perfect-match-section h2 {
            font-size: 3rem;
            line-height: 1.1;
            font-weight: 800;
            text-transform: uppercase;
        }

        .perfect-match-section p {
            font-size: 1rem;
            color: var(--color-text-muted);
        }

        .perfect-match-section h4 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0px;
        }

        .perfect-match-section small {
            color: #878785;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Recommendation Section */
        .recommendation-item-img {
            height: 300px;
            width: 100%;
            object-fit: cover;
        }

        .product-item {
            background-color: var(--color-light-bg);
            border: 1px solid var(--color-light-border);
            border-radius: 8px;
            padding: 15px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .product-item h6 {
            color: var(--color-text);
            font-weight: 600;
        }

        .product-item p.text-muted {
            color: #6c757d;
        }

        /* Recommendation Scroller Animation */
        .scroller {
            max-width: 100%;
            overflow: hidden;
            -webkit-mask: linear-gradient(90deg,
                    transparent,
                    white 20%,
                    white 80%,
                    transparent);
            mask: linear-gradient(90deg,
                    transparent,
                    white 20%,
                    white 80%,
                    transparent);
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

        /* ---------------------------------- */
        /* About Page Sections              */
        /* ---------------------------------- */
        .page-header {
            padding: 6rem 0;
            background-color: #f8f9fa;
        }

        .page-header h1 {
            font-weight: 800;
        }

        .mission-section .section-title {
            margin-top: 0;
        }

        .mission-section img {
            object-fit: cover;
            height: 100%;
            max-height: 450px;
        }

        .values-section {
            background-color: #f8f9fa;
            padding: 6rem 0;
        }

        .value-card {
            background-color: var(--color-light-bg);
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
            border: 1px solid var(--color-light-border);
            height: 100%;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .value-icon {
            color: var(--color-text);
        }

        .timeline-section {
            padding: 6rem 0;
        }

        .timeline-container {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-container::after {
            content: "";
            position: absolute;
            width: 2px;
            background-color: var(--color-light-border);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
            text-align: right;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
            text-align: left;
        }

        .timeline-dot {
            content: "";
            position: absolute;
            width: 16px;
            height: 16px;
            background-color: var(--color-light-bg);
            border: 3px solid var(--color-text);
            top: 24px;
            border-radius: 50%;
            z-index: 1;
        }

        .timeline-item:nth-child(odd) .timeline-dot {
            right: -8px;
        }

        .timeline-item:nth-child(even) .timeline-dot {
            left: -8px;
        }

        .timeline-content {
            padding: 20px 30px;
            background-color: #f8f9fa;
            border-radius: 6px;
        }

        .timeline-content h5 {
            font-weight: 700;
        }

        /* ---------------------------------- */
        /* Contact Page Styles              */
        /* ---------------------------------- */
        .contact-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            min-height: 400px;
        }

        .social-links {
            padding-left: 0;
        }

        .social-links li {
            list-style: none;
            margin-bottom: 1rem;
        }

        .social-links a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: var(--color-text-muted);
            transition: color 0.3s;
            font-weight: 500;
        }

        .social-links a:hover {
            color: var(--color-text);
        }

        .social-links svg {
            width: 24px;
            height: 24px;
            margin-right: 1rem;
            color: var(--color-primary);
        }

        .form-control {
            padding: 0.85rem 1rem;
            border: 1px solid var(--color-light-border);
        }

        .form-control:focus {
            border-color: var(--color-primary);
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        /* ---------------------------------- */
        /* 4. Footer                          */
        /* ---------------------------------- */
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

        /* ---------------------------------- */
        /* 5. Dark Mode                       */
        /* ---------------------------------- */
        :root.dark-mode {
            --color-text: #e0e0e0;
            --color-light-bg: var(--color-dark-bg);
            --color-light-border: var(--color-dark-border);
        }

        .dark-mode hr {
            border-top-color: var(--color-dark-border);
        }

        .dark-mode .navbar,
        .dark-mode .product-card,
        .dark-mode .product-item {
            background-color: var(--color-dark-surface);
        }

        .dark-mode .navbar-brand,
        .dark-mode .nav-link {
            color: #fff;
        }

        .dark-mode .section-title,
        .dark-mode h1,
        .dark-mode h2,
        .dark-mode h4,
        .dark-mode h5,
        .dark-mode h6,
        .dark-mode .product-card a {
            color: #fff;
        }

        .dark-mode p,
        .dark-mode .hero-section p,
        .dark-mode .perfect-match-section p {
            color: #bbb;
        }

        .dark-mode .search-form {
            border-color: #444;
        }

        .dark-mode .search-form input {
            background-color: #333;
            color: #fff;
        }

        .dark-mode .search-form input::placeholder {
            color: #aaa;
        }

        .dark-mode .search-form button {
            background-color: #fff;
            color: #000;
        }

        .dark-mode #theme-toggle {
            color: #fff;
            border-color: #444;
        }

        .dark-mode #theme-toggle:hover {
            background-color: #333;
        }

        .dark-mode .filter-buttons .btn {
            color: #fff;
            border-color: #fff;
        }

        .dark-mode .filter-buttons .btn.active {
            background-color: #fff;
            color: #000;
        }

        .dark-mode .filter-buttons .btn:hover:not(.active) {
            background-color: #333;
        }

        .dark-mode .product-card .btn-outline-dark {
            border-color: #fff;
            color: #fff;
        }

        .dark-mode .product-card .btn-outline-dark:hover {
            background-color: #fff;
            color: #000;
        }

        .dark-mode .perfect-match-section small {
            color: #aaa;
        }

        .dark-mode .product-item a.text-dark,
        .dark-mode .product-item h6 {
            color: #fff;
        }

        .dark-mode .product-item p.text-muted {
            color: #aaa;
        }

        .dark-mode .page-header,
        .dark-mode .values-section,
        .dark-mode .timeline-content {
            background-color: var(--color-dark-surface);
        }

        .dark-mode .value-card {
            background-color: #2a2a2a;
            border-color: var(--color-dark-border);
        }

        .dark-mode .value-card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .dark-mode .value-icon {
            color: #fff;
        }

        .dark-mode .timeline-container::after {
            background-color: var(--color-dark-border);
        }

        .dark-mode .timeline-dot {
            background-color: var(--color-dark-surface);
            border-color: #fff;
        }

        /* Dark mode for Contact Page */
        .dark-mode .social-links a {
            color: #bbb;
        }

        .dark-mode .social-links a:hover {
            color: #fff;
        }

        .dark-mode .form-control {
            background-color: var(--color-dark-surface);
            color: #fff;
            border-color: var(--color-dark-border);
        }

        .dark-mode .form-control::placeholder {
            color: #888;
        }

        .dark-mode .form-control:focus {
            background-color: var(--color-dark-surface);
            color: #fff;
            border-color: var(--color-primary);
        }

        .dark-mode .btn-dark {
            background-color: #fff;
            color: #000;
            border-color: #fff;
        }

        .dark-mode .btn-dark:hover {
            background-color: #222;
            color: #fff;
            border-color: #fff;
        }

        /* ---------------------------------- */
        /* 6. Responsive                      */
        /* ---------------------------------- */
        @media (max-width: 991px) {
            .contact-image {
                margin-top: 2rem;
            }
        }

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
        }

        @media (prefers-reduced-motion: reduce) {
            .scroller__inner {
                animation: none;
            }
        }
    </style>

    <script>
        const savedTheme = localStorage.getItem("theme");
        if (savedTheme === "dark") {
            document.documentElement.classList.add("dark-mode");
        }
    </script>
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

    <main>
        <div class="container py-5 my-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-3">CONTACT US</h1>
                    <p class="lead text-muted mb-4">
                        We're here to help and answer any question you might
                        have. We look forward to hearing from you.
                    </p>
                    <ul class="social-links">
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.282.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002z M8 11.815a3.815 3.815 0 1 1 0-7.63 3.815 3.815 0 0 1 0 7.63zM8 5.385a2.615 2.615 0 1 0 0 5.23 2.615 2.615 0 0 0 0-5.23z M12 4.135a1.185 1.185 0 1 1-2.37 0 1.185 1.185 0 0 1 2.37 0z" />
                                </svg>
                                <span>Follow us on Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pinterest"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.791.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z" />
                                </svg>
                                <span>See our inspirations on Pinterest</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg>
                                <span>contact@akanthra.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 order-first order-lg-last">
                    <img src="https://images.unsplash.com/photo-1587293852726-70cdb1557122?q=80&w=1974&auto=format&fit=crop"
                        class="img-fluid rounded shadow-sm contact-image" alt="Minimalist Interior" />
                </div>
            </div>

            <hr class="my-5" />

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="section-title">SEND US A MESSAGE</h2>
                    <form action="#">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="your-name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="your-name"
                                    placeholder="Enter your name" required />
                            </div>
                            <div class="col-md-6">
                                <label for="your-email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="your-email"
                                    placeholder="Enter your email address" required />
                            </div>
                            <div class="col-12">
                                <label for="your-message" class="form-label">Your Message</label>
                                <textarea class="form-control" id="your-message" rows="6" placeholder="How can we help you?" required></textarea>
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-dark btn-lg px-5">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        /**
         * File: script.js (Combined)
         * Description: Handles theme toggling and other interactive elements.
         */

        document.addEventListener("DOMContentLoaded", () => {
            const themeToggleBtn = document.getElementById("theme-toggle");

            if (themeToggleBtn) {
                // Initial UI setup based on the theme loaded by the head script
                updateThemeUI();

                // Attach event listener
                themeToggleBtn.addEventListener("click", handleThemeToggle);
            }
        });

        /**
         * Handles the click event on the theme toggle button.
         */
        function handleThemeToggle() {
            // Toggle the class on the root element
            const isDarkMode =
                document.documentElement.classList.toggle("dark-mode");

            // Save the preference to localStorage
            localStorage.setItem("theme", isDarkMode ? "dark" : "light");

            // Update the button icon
            updateThemeUI();
        }

        /**
         * Updates the theme toggle icon visibility based on the current theme.
         */
        function updateThemeUI() {
            const isDarkMode =
                document.documentElement.classList.contains("dark-mode");
            const darkIcon = document.getElementById(
                "theme-toggle-dark-icon"
            );
            const lightIcon = document.getElementById(
                "theme-toggle-light-icon"
            );

            if (darkIcon && lightIcon) {
                darkIcon.style.display = isDarkMode ? "block" : "none";
                lightIcon.style.display = isDarkMode ? "none" : "block";
            }
        }
    </script>
</body>

</html>
