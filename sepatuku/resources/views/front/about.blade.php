<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About - AKANTHRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="images/PNG.png" />

    <style>
        body {
            font-family: "Helvetica Neue", Arial, sans-serif;
            background-color: #fff;
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
        }

        .section-title {
            font-weight: bold;
            text-transform: uppercase;
        }

        .page-header {
            background-color: #f8f9fa;
        }

        .value-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .timeline {
            position: relative;
            padding-left: 2rem;
            border-left: 2px solid #eee;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
        }

        .timeline-dot {
            position: absolute;
            left: -33px;
            /* Adjust based on icon size and line position */
            top: 0;
            width: 24px;
            height: 24px;
            background-color: #fff;
            border: 2px solid #000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .timeline-dot::after {
            content: '';
            width: 8px;
            height: 8px;
            background-color: #000;
            border-radius: 50%;
        }

        /* DARK MODE STYLES */
        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        body.dark-mode .navbar,
        body.dark-mode .page-header,
        body.dark-mode .values-section {
            background-color: #1f1f1f !important;
            border-color: #333;
        }

        body.dark-mode .navbar-brand,
        body.dark-mode .nav-link,
        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: #fff !important;
        }

        body.dark-mode .text-muted,
        body.dark-mode p {
            color: #bbb !important;
        }

        body.dark-mode .card {
            background-color: #2a2a2a;
            border-color: #333;
        }

        body.dark-mode .timeline {
            border-left-color: #333;
        }

        body.dark-mode .timeline-dot {
            background-color: #1f1f1f;
            border-color: #fff;
        }

        body.dark-mode .timeline-dot::after {
            background-color: #fff;
        }

        body.dark-mode #theme-toggle {
            color: #fff;
        }

        body.dark-mode .navbar .search-form {
            border-color: #444;
        }

        body.dark-mode .navbar .search-form input {
            background-color: #333;
            color: #fff;
        }

        body.dark-mode .navbar .search-form button {
            background-color: #fff;
            color: #000;
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

    <main>
        <section class="page-header text-center py-5">
            <div class="container">
                <h1 class="display-3 fw-bold">CRAFTING THE FUTURE OF STYLE</h1>
                <p class="lead col-lg-8 mx-auto text-muted">AKANTHRA is more than a brand; it's a statement on the
                    beauty of simplicity and the power of detail.</p>
            </div>
        </section>

        <section class="mission-section py-5">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <img src="https://images.unsplash.com/photo-1600269452125-97341e98d90d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="img-fluid rounded shadow-sm" alt="Pair of White Sneakers" />
                    </div>
                    <div class="col-lg-6">
                        <h2 class="section-title text-start ms-0 ps-0 mb-3">OUR MISSION</h2>
                        <p class="text-muted">Our mission is to create timeless apparel that empowers individuals to
                            express themselves with confidence. We believe in sustainable fashion, where every thread is
                            woven with purpose and every design is built to last.</p>
                        <p class="text-muted">From the first sketch to the final stitch, we are committed to
                            uncompromising quality.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="values-section py-5">
            <div class="container">
                <h2 class="section-title mb-5">OUR VALUES</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 text-center shadow-sm value-card p-3">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    fill="currentColor" class="bi bi-gem mb-3 text-dark" viewBox="0 0 16 16">
                                    <path
                                        d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.199.224.458.224.726v1.442a.5.5 0 0 1-.3.45l-6.154 3.077a.5.5 0 0 1-.4 0L.3 8.292a.5.5 0 0 1-.3-.45V6.4c0-.268.075-.527.224-.726L3.1.7zM1.5 6.912l6.154 3.076a.5.5 0 0 0 .4 0l6.154-3.076-2.205-1.47-1.335.89a.5.5 0 0 1-.6-.05L8 5.382 6.581 6.273a.5.5 0 0 1-.6.05l-1.335-.89L1.5 6.912z" />
                                </svg>
                                <h5 class="card-title fw-bold">Timeless Design</h5>
                                <p class="card-text text-muted">We focus on classic silhouettes and modern cuts that
                                    transcend fleeting trends.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 text-center shadow-sm value-card p-3">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    fill="currentColor" class="bi bi-shield-check mb-3 text-dark"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.06.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.95-1.025-2.237-1.15-2.837-.856C9.256 1.5,8.639 1.5,8 1.5c-.639 0-1.256 0-1.662.09z" />
                                    <path
                                        d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                </svg>
                                <h5 class="card-title fw-bold">Premium Quality</h5>
                                <p class="card-text text-muted">Every material is carefully selected, and every product
                                    is crafted by expert artisans.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 text-center shadow-sm value-card p-3">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                    fill="currentColor" class="bi bi-tree mb-3 text-dark" viewBox="0 0 16 16">
                                    <path
                                        d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.5h3.126L8 1.77 6.437 4.5zM11.69 9.5l1.036 2.071H8.455L10.22 9.5h1.47zM4.78 11.571L5.815 9.5H4.34L3.274 7.429 4.78 11.571z" />
                                </svg>
                                <h5 class="card-title fw-bold">Sustainable Fashion</h5>
                                <p class="card-text text-muted">We are committed to eco-friendly practices throughout
                                    our entire supply chain.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="timeline-section py-5">
            <div class="container">
                <h2 class="section-title mb-5">OUR JOURNEY</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <h5 class="fw-bold">2020 - The Beginning</h5>
                                    <p class="text-muted mb-0">AKANTHRA was founded on a simple idea: to create fashion
                                        with meaning. It started in a small studio with a big passion.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <h5 class="fw-bold">2022 - First Collection</h5>
                                    <p class="text-muted mb-0">Launched our debut collection, "Genesis," which received
                                        acclaim for its unique quality and design.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <h5 class="fw-bold">2024 - Global Expansion</h5>
                                    <p class="text-muted mb-0">Opened our international online store, reaching fashion
                                        lovers worldwide and building a global community.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <h5 class="fw-bold">The Future</h5>
                                    <p class="text-muted mb-0">To continue innovating and pushing the boundaries of
                                        conscious fashion for generations to come.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        document.addEventListener("DOMContentLoaded", () => {
            const themeToggleBtn = document.getElementById("theme-toggle");

            const updateThemeUI = () => {
                const isDarkMode = localStorage.getItem("theme") === "dark";
                document.body.classList.toggle("dark-mode", isDarkMode);
                // Control icon visibility based on the current theme
                document.getElementById("theme-toggle-dark-icon").style.display = isDarkMode ? "block" : "none";
                document.getElementById("theme-toggle-light-icon").style.display = isDarkMode ? "none" :
                    "block";
            };

            themeToggleBtn.addEventListener("click", () => {
                // Toggle theme state
                let theme = localStorage.getItem("theme") === "dark" ? "light" : "dark";
                localStorage.setItem("theme", theme);
                updateThemeUI();
            });

            // Apply theme on initial load
            updateThemeUI();
        });
    </script>
</body>

</html>
