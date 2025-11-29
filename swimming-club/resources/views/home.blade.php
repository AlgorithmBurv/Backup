@extends('layouts.app') {{-- Memberitahu Blade untuk menggunakan layout app.blade.php --}}

@section('content')
    <section class="hero">
        <div class="hero-content">
            <h1>
                Learn to swim with<br />your <span class="highlight">OWN PARENTS</span><br />and have fun
            </h1>
            <a href="#" class="btn btn-primary mt-4">Get Started Now</a>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <div class="container text-center">
            <h2 class="fw-bold">Your child should be able to swim!</h2>
            <p class="text-muted">Nothing helps. Nobody knows better than you.</p>
            <div class="row mt-5">
                <div class="col-md-6 mb-4">
                    <div class="info-box text-start">
                        <h5 class="fw-bold">Swimming course</h5>
                        <ul>
                            <li>No swimming lessons available at the moment?</li>
                            <li>Are there long waiting lists?</li>
                            <li>Do the times not fit?</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="info-box text-start">
                        <h5 class="fw-bold">Self-teaching</h5>
                        <ul>
                            <li>Are you afraid of doing something wrong?</li>
                            <li>Can't think of a strategy?</li>
                            <li>
                                Are you worried that your children don't want to be taught by
                                you?
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Playing Together Section -->
    <section class="play-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Video -->
                {{-- <div class="col-md-6 text-center mb-4 mb-md-0">
                    <div class="play-video ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/cfBStPLe8Bg" title="Playing Together Video"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div> --}}
                <div class="video-container col-md-6 text-center mb-4 mb-md-0">
                    <!-- Player -->
                    <div class="plyr__video-embed" id="player">
                        <iframe src="https://www.youtube.com/watch?v=cfBStPLe8Bg" allowfullscreen allowtransparency
                            allow="autoplay">
                        </iframe>
                    </div>
                </div>



                <!-- Text -->
                <div class="col-md-6">
                    <h4 class="fw-bold">Playing together</h4>
                    <p>
                        Your fears that your children don't want to learn anything from
                        you are unfounded. What your children don't want are the teaching
                        methods that you have already suffered from. The opposite will
                        happen. You will both love what you do.
                    </p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Important Information Section -->
    <section class="info-section">
        <div class="container text-center">
            <h2 class="fw-bold">Important Information</h2>
            <div class="row mt-5 g-4">
                <div class="col-md-4">
                    <div class="info-box text-start">
                        <h5 class="fw-bold">Time & Date</h5>
                        <p>
                            Saturdays or Sundays, 4 hours total (2 in morning, 2 in
                            afternoon).
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box text-start">
                        <h5 class="fw-bold">Course Participants</h5>
                        <p>Min: 5 people<br />Max: 35 people.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box text-start">
                        <h5 class="fw-bold">Course Locations</h5>
                        <p>Local swimming pools across southern Germany.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box text-start">
                        <h5 class="fw-bold">Online-Coaching</h5>
                        <p>Video tutorial, scripts, 6-month follow-up. €129.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box text-start">
                        <h5 class="fw-bold">Live-Coaching</h5>
                        <p>Includes Online coaching package for €299.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box text-start">
                        <h5 class="fw-bold">Course Content</h5>
                        <p>Basic knowledge, exercises, techniques, aftercare.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box text-start">
                        <h5 class="fw-bold">Required Equipment</h5>
                        <p>Bring swimwear, towel, flip-flops, goggles (optional).</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box text-start">
                        <h5 class="fw-bold">Age Requirement</h5>
                        <p>8+ years old. Under 14 with adult.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Extra Swimming Info -->
    <section class="extra-info-section">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <p>
                        Swimming is one of the most vital skills for human survival and is
                        usually learned in childhood.
                    </p>
                    <p>
                        In the past, swimming clubs and school sports were often the
                        swimming teachers. However, cost pressures and outdated swimming
                        pools are increasingly leading to the closure of municipal
                        swimming pools.
                    </p>
                    <p>
                        And in schools, teachers are also allowed to teach swimming as
                        part of physical education classes. Swimming and sports clubs,
                        like swimming schools, also fail due to a lack of suitable staff.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/together.png') }}" alt="Swimming lesson"
                        class="img-fluid rounded-3 shadow-sm" />
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="{{ asset('images/together2.png') }}" alt="Swimming with parent"
                        class="img-fluid rounded-3 shadow-sm" />
                </div>

                <div class="col-md-6">
                    <p>
                        In addition, the times at which swimming lessons can take place in
                        public swimming pools are significantly limited. The result is
                        that swimming clubs have long waiting lists and swimming lessons
                        in school sports are cancelled altogether for a variety of
                        reasons.
                    </p>
                    <p>
                        Not much remains of the original ways of learning to swim. One
                        thing leads to another. And the result - too many non-swimmers,
                        which the swimming associations report to us every year. And too
                        many deaths reported by the press.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Swimming Course Section -->
    <section id="swimming-course" class="swimming-course-section py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Swimming Course</h2>
            <p class="text-center text-muted mb-5">
                Choose the class that best suits your needs. All classes are taught by
                certified instructors.
            </p>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">Class Type</th>
                            <th scope="col">Pool Location</th>
                            <th scope="col">Training Schedule</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course['name'] }}</td>
                                <td>{{ $course['location'] }}</td>
                                <td>{{ $course['schedule'] }}</td>
                                <td>{{ $course['price'] }}</td>
                                <td>{{ $course['description'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Coach Section -->
    <section class="coach-section text-center">
        <div class="container">
            <h2 class="fw-bold mb-4">Meet Our Coaches</h2>
            <p class="text-muted mb-5">
                Professional, certified, and passionate about teaching swimming.
            </p>
            <div class="row g-4">
                <!-- Coach 1 -->
                <div class="row g-4">
                    @foreach ($coaches as $coach)
                        {{-- @php dd($coach) @endphp --}}
                        <div class="col-md-4">
                            <div class="card shadow-sm h-100" data-bs-toggle="modal"
                                data-bs-target="#coachModal{{ $coach->id }}">
                                <img src="{{ Storage::url($coach->photo) }}" class="card-img-top" alt="{{ $coach->name }}">

                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $coach->name }}</h5>
                                    <p class="card-text">
                                        {{ $coach->bio }} Specializes in {{ $coach->specialization }}.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Modal untuk masing-masing coach -->
                        <div class="modal fade" id="coachModal{{ $coach->id }}" tabindex="-1"
                            aria-labelledby="coachLabel{{ $coach->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

                                    <div
                                        class="modal-header d-flex flex-column align-items-center text-center p-4 p-md-5 border-0 bg-light">

                                        {{-- ✅ DIUBAH: Tombol 'X' diberi style inline untuk warna merah --}}
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"
                                            style="background-image: url(&quot;data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23dc3545'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e&quot;);">
                                        </button>

                                        <img src="{{ Storage::url($coach->photo) }}"
                                            class="rounded-circle mb-4 border border-4 border-white shadow"
                                            alt="{{ $coach->name }}" width="150" height="150"
                                            style="object-fit: cover;">
                                        <h3 class="modal-title fw-bolder text-dark" id="coachLabel{{ $coach->id }}">
                                            {{ $coach->name }}
                                        </h3>

                                        {{-- KEMBALI KE BIRU --}}
                                        <p class="text-primary fw-bold mb-0">{{ $coach->specialization }}</p>
                                    </div>

                                    <div class="modal-body p-4 p-md-5">
                                        <ul class="list-unstyled">
                                            <li class="d-flex align-items-center ">
                                                <i class="bi bi-person-vcard fs-4 me-2 text-primary"></i>
                                                <strong class="d-block text-dark">Experience & Bio</strong>
                                            </li>
                                            <div>
                                                <p class="mb-0 text-secondary" style="text-align: justify;">
                                                    {{ $coach->bio }}
                                                </p>

                                            </div>

                                            <li class="d-flex align-items-center">
                                                {{-- KEMBALI KE BIRU --}}
                                                <i class="bi bi-patch-check-fill fs-4 me-2 text-primary"></i>
                                                <strong class="d-block text-dark">Certification</strong>

                                            </li>
                                            <div>
                                                <p class="mb-0 text-secondary" style="text-align: justify;">
                                                    {{ $coach->certification }}</p>
                                            </div>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                        @push('styles')
                            <link rel="stylesheet"
                                href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
                        @endpush
                    @endforeach
                </div>

            </div>
    </section>




    <!-- News Section -->
    <section id="news" class="news-section py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Latest News</h2>
            <div class="row g-4">
                @foreach ($news as $item)
                    {{-- @php
                        dd($item);
                    @endphp --}}
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ Storage::url($item->image) }}" class="card-img-top" alt="{{ $item->title }}">


                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $item->title }}</h5>
                                <p class="card-text text-muted">{{ $item->excerpt }}</p>
                                <a href="{{ route('news.show', $item->slug) }}" class="btn btn-primary btn-sm">
                                    Read More
                                </a>
                            </div>
                            <div class="card-footer text-muted small">
                                @if ($item->published_at)
                                    Published {{ $item->published_at->format('d M Y') }}
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Our Promise -->
    <section class="promise-section text-center">
        <div class="container promise-content">
            <h3 class="fw-bold">Our promise</h3>
            <p>
                Our partner swimming schools are all certified and tested. Every
                swimming instructor is obliged to receive training directly from us in
                order to guarantee the quality standard.
            </p>
            <button class="promise-btn mt-3">Show swimming schools</button>
        </div>
    </section>
@endsection {{-- Akhiri bagian konten --}}
