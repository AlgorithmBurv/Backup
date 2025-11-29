{{-- resources/views/layouts/app.blade.php --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SiripBiru Swimming Club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    {{-- ... Kode Navbar Anda di sini ... --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <div class="container">
            <img src="{{ asset('images/logo.jpg') }}" style="width: 100px; height: 100px;" alt="">
            <a class="navbar-brand" href="#">
                <span class="brand-name">Sirip<span class="biru">Biru</span></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
                    <li class="nav-item">
                        <a class="nav-link text-primary fw-bold" href="#swimming-course">Swimming course</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#swimming-course">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
                </ul>
                <a href="https://wa.me/6285693051191?text=Halo%20saya%20ingin%20bertanya%20tentang%20kursus%20renang"
                    target="_blank">
                    <button
                        style="background-color: #fbc02d; color: black; padding: 10px 20px; border-radius: 25px; border: none; cursor: pointer;">
                        Contact us
                    </button>
                </a>

            </div>
        </div>
    </nav>

    {{-- Ini adalah tempat konten spesifik dari setiap halaman akan dimuat --}}
    <main>
        @yield('content')
    </main>

    {{-- ... Kode Footer Anda di sini ... --}}
    <footer id="footer">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3">
                    <h6>Generally</h6>
                    <a href="#">Home</a><br /><a href="#">About us</a><br /><a href="#">Swimming
                        course</a><br /><a href="#">Pricing</a><br /><a href="#">News</a>
                </div>
                <div class="col-md-3">
                    <h6>Business</h6>
                    <a href="#">Blog</a><br /><a href="#">Shop</a><br /><a href="#">Contact</a>
                </div>
                <div class="col-md-3">
                    <h6>Security</h6>
                    <a href="#">Privacy policy</a><br /><a href="#">Terms & Conditions</a><br /><a
                        href="#">FAQ</a>
                </div>
                <div class="col-md-3">
                    <h6>Kontakt aufnehmen</h6>
                    <p>📞 +358 170 – 7088015</p>
                    <p>📍 Studentenby 10, 87448</p>
                    <p>
                        ✉ <a
                            href="mailto:hi@swimsko.co?subject=Info%20Swimming%20Course&body=Halo%20saya%20ingin%20tahu%20lebih%20lanjut%20tentang%20kursus%20renang.">
                            hi@swimsko.co
                        </a>
                    </p>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            All rights are reserved @Swimsko 2024
            <div class="social-icons mt-2">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <script>
        const player = new Plyr('#player', {
            autoplay: false,
            controls: [
                'play-large', // Tombol play besar di tengah
                'play',
                'progress',
                'current-time',
                'mute',
                'volume',
                'captions',
                'settings',
                'fullscreen'
            ]
        });
    </script>
</body>

</html>
