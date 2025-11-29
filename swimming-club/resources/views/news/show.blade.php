@extends('layouts.app')

@section('content')
    <style>
        /* CSS dipaksa langsung di halaman ini */
        .news-detail-image {
            width: 100% !important;
            max-height: 500px !important;
            object-fit: cover !important;
            border-radius: 0.5rem !important;
            object-position: 50% 30%;
        }

        .content-text {
            line-height: 1.7 !important;
            text-align: justify !important;
        }
    </style>

    <div class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                {{-- Kolom utama untuk konten berita --}}
                <main class="col-lg-8">
                    <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                        <h1 class="fw-bolder mb-3 display-5 text-center">{{ $news->title }}</h1>

                        <div class="d-flex align-items-center justify-content-center mb-4 text-muted small">
                            <i class="bi bi-calendar-event me-2"></i>
                            @if ($news->published_at)
                                Published on {{ $news->published_at->format('d F Y') }}
                            @else
                                Not published
                            @endif
                        </div>

                        <figure class="mb-4 text-center">
                            <img src="{{ Storage::url($news->image) }}" class="news-detail-image" alt="{{ $news->title }}">
                        </figure>

                        <section class="mb-5 fs-5 content-text">
                            {!! $news->content !!}
                        </section>
                    </div>
                    {{-- Tombol Kembali --}}
                    <div class="mt-4 text-start"> {{-- rata kiri --}}
                        <a href="{{ route('home') }}"
                            class="btn btn-outline-primary px-4 py-2 rounded-pill shadow-sm d-inline-flex align-items-center">
                            <i class="bi bi-arrow-left-circle me-2"></i> Back to Home
                        </a>
                    </div>

                </main>
            </div>

        </div>



    </div>
@endsection
