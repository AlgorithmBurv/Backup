<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Review & Payment - AKANTHRA</title>
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
            padding: 0.375rem 0.75rem;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        .footer {
            background-color: #000;
            color: #fff;
        }

        .accordion-button:not(.collapsed) {
            background-color: #f8f9fa;
            color: #000;
            font-weight: bold;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0, 0, 0, .125);
        }

        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        body.dark-mode .navbar,
        body.dark-mode .accordion-item,
        body.dark-mode .accordion-button {
            background-color: #1f1f1f !important;
            color: #fff;
            border-color: #333;
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
        body.dark-mode .text-muted,
        body.dark-mode .form-label,
        body.dark-mode .list-group-item {
            color: #bbb !important;
        }

        body.dark-mode .list-group-item {
            background-color: #1f1f1f;
        }

        body.dark-mode .accordion-button:not(.collapsed) {
            background-color: #333;
        }

        body.dark-mode .form-control {
            background-color: #333;
            border-color: #444;
            color: #fff;
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

    {{-- Konten Utama Halaman Payment --}}
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">

                <div class="text-center mb-5">
                    <h1 class="fw-bold text-uppercase">Review & Payment</h1>
                    <p class="text-muted">Please review all details before confirming your payment.</p>
                </div>

                <form method="POST" enctype="multipart/form-data" action="{{ route('front.payment_confirm') }}">
                    @csrf

                    <div class="accordion shadow-sm" id="paymentAccordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOrder" aria-expanded="true" aria-controls="collapseOrder">
                                    1. Your Order
                                </button>
                            </h2>
                            <div id="collapseOrder" class="accordion-collapse collapse show"
                                data-bs-parent="#paymentAccordion">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center">
                                            <img src="{{ Storage::url($shoe->thumbnail) }}" alt="{{ $shoe->name }}"
                                                style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;"
                                                class="me-3">
                                            <span class="fw-bold">{{ $shoe->name }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between"><span>Brand</span>
                                            <span class="fw-bold">{{ $shoe->brand->name }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between"><span>Price</span>
                                            <span class="fw-bold">Rp
                                                {{ number_format($shoe->price, 0, ',', '.') }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Quantity</span>
                                            <span class="fw-bold">{{ $orderData['quantity'] }} Pcs</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between"><span>Shoe
                                                Size</span> <span class="fw-bold">{{ $orderData['shoe_size'] }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseCustomer" aria-expanded="false"
                                    aria-controls="collapseCustomer">
                                    2. Customer & Shipping
                                </button>
                            </h2>
                            <div id="collapseCustomer" class="accordion-collapse collapse"
                                data-bs-parent="#paymentAccordion">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between"><span>Name</span>
                                            <span class="fw-bold">{{ $orderData['name'] }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between"><span>Phone
                                                No.</span> <span class="fw-bold">{{ $orderData['phone'] }}</span></li>
                                        <li class="list-group-item d-flex justify-content-between"><span>Email</span>
                                            <span class="fw-bold">{{ $orderData['email'] }}</span>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="fw-bold mb-1">Delivery Address</div>
                                            <p class="mb-0 text-muted">{{ $orderData['address'] }} -
                                                {{ $orderData['city'] }}, {{ $orderData['post_code'] }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsePayment" aria-expanded="false"
                                    aria-controls="collapsePayment">
                                    3. Payment Details
                                </button>
                            </h2>
                            <div id="collapsePayment" class="accordion-collapse collapse"
                                data-bs-parent="#paymentAccordion">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between"><span>Sub
                                                Total</span> <span>Rp
                                                {{ number_format($orderData['sub_total_amount'], 0, ',', '.') }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between"><span>Promo
                                                Code</span> <span>{{ $orderData['promo_code'] ?? '-' }}</span></li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Discount</span>
                                            <span class="text-danger">- Rp
                                                {{ number_format($orderData['total_discount_amount'], 0, ',', '.') }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between"><span>PPN 11%</span>
                                            <span>Rp {{ number_format($orderData['total_tax'], 0, ',', '.') }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Delivery</span>
                                            <span>Free</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between fw-bold h5">
                                            <span>Grand Total</span> <span class="text-success">Rp
                                                {{ number_format($orderData['grand_total_amount'], 0, ',', '.') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTransfer" aria-expanded="false"
                                    aria-controls="collapseTransfer">
                                    4. Send Payment & Upload Proof
                                </button>
                            </h2>
                            <div id="collapseTransfer" class="accordion-collapse collapse"
                                data-bs-parent="#paymentAccordion">
                                <div class="accordion-body">
                                    <p class="fw-bold">Please send payment to one of the accounts below:</p>
                                    <div class="d-flex align-items-center p-3 border rounded mb-3">
                                        <img src="{{ asset('assets/images/logos/bca-bank-central-asia 1.svg') }}"
                                            alt="BCA" style="height: 25px;" class="me-3">
                                        <div>
                                            <div class="fw-bold">Bank Central Asia (BCA)</div>
                                            <div class="text-muted">A/N Sepatuku - 8008129839</div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-3 border rounded mb-4">
                                        <img src="{{ asset('assets/images/logos/bank-mandiri 1.svg') }}"
                                            alt="Mandiri" style="height: 25px;" class="me-3">
                                        <div>
                                            <div class="fw-bold">Bank Mandiri</div>
                                            <div class="text-muted">A/N Sepatuku - 12379834983281</div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="mt-4">
                                        <label for="proof" class="form-label fw-bold">Upload Proof of
                                            Transfer</label>
                                        <input type="file" name="proof" id="proof" class="form-control"
                                            required>
                                        <div class="form-text">Please upload a screenshot or photo of your transfer
                                            receipt.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="d-grid gap-2 mt-5">
                        <button type="submit" class="btn btn-dark btn-lg">Confirm Now</button>
                        <a href="{{ route('front.customer_data') }}" class="btn btn-outline-secondary">Back</a>
                    </div>

                </form>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
