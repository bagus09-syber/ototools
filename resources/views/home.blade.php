@extends('layouts.app')

@section('content')

<section class="hero">

    <div class="container text-center">

        <div class="mb-3"
             style="font-size:60px;">

            🛵

        </div>

        <h1 class="display-4">
            Tools Otomotif Gratis
        </h1>

        <p class="lead mt-3">

            Hitung CC, bore up, kompresi,
            cari ukuran ban dan data motor.

        </p>

        <a
            href="{{ route('cc') }}"
            class="btn btn-light btn-lg mt-3">

            🔧 Mulai Menghitung

        </a>

    </div>

</section>


<div class="container py-5">

    <div class="text-center mb-5">

        <h2 class="fw-bold">
            Tools Otomotif
        </h2>

        <p class="text-muted">

            Semua tools dapat digunakan secara gratis.

        </p>

    </div>


    <div class="row g-4">


        {{-- CC --}}

        <div class="col-md-6 col-lg-3">

            <div
                class="card tool-card shadow-sm h-100">

                <div
                    class="card-body text-center p-4">

                    <div class="tool-icon">
                        🔧
                    </div>

                    <h4 class="mt-3">
                        Kalkulator CC
                    </h4>

                    <p class="text-muted">

                        Hitung kapasitas mesin
                        berdasarkan bore dan stroke.

                    </p>

                    <a
                        href="{{ route('cc') }}"
                        class="btn btn-dark">

                        Buka

                    </a>

                </div>

            </div>

        </div>


        {{-- Bore Up --}}

        <div class="col-md-6 col-lg-3">

            <div
                class="card tool-card shadow-sm h-100">

                <div
                    class="card-body text-center p-4">

                    <div class="tool-icon">
                        🔥
                    </div>

                    <h4 class="mt-3">
                        Bore Up
                    </h4>

                    <p class="text-muted">

                        Hitung perubahan kapasitas
                        setelah bore up.

                    </p>

                    <a
                        href="{{ route('boreup') }}"
                        class="btn btn-dark">

                        Buka

                    </a>

                </div>

            </div>

        </div>


        {{-- Kompresi --}}

        <div class="col-md-6 col-lg-3">

            <div
                class="card tool-card shadow-sm h-100">

                <div
                    class="card-body text-center p-4">

                    <div class="tool-icon">
                        ⚙️
                    </div>

                    <h4 class="mt-3">
                        Kompresi
                    </h4>

                    <p class="text-muted">

                        Hitung rasio kompresi
                        mesin.

                    </p>

                    <a
                        href="{{ route('kompresi') }}"
                        class="btn btn-dark">

                        Buka

                    </a>

                </div>

            </div>

        </div>


        {{-- Ban --}}

        <div class="col-md-6 col-lg-3">

            <div
                class="card tool-card shadow-sm h-100">

                <div
                    class="card-body text-center p-4">

                    <div class="tool-icon">
                        🛞
                    </div>

                    <h4 class="mt-3">
                        Ukuran Ban
                    </h4>

                    <p class="text-muted">

                        Cari ukuran ban
                        berdasarkan motor.

                    </p>

                    <a
                        href="{{ route('ban') }}"
                        class="btn btn-dark">

                        Buka

                    </a>

                </div>

            </div>

        </div>


    </div>


    <div
        class="card border-0 shadow-sm mt-5">

        <div
            class="card-body text-center p-5">

            <h3>
                🏍️ Database Motor
            </h3>

            <p class="text-muted">

                Saat ini terdapat
                <strong>{{ $jumlahMotor }}</strong>
                data motor.

            </p>

            <a
                href="{{ route('motor') }}"
                class="btn btn-outline-dark">

                Lihat Database

            </a>

        </div>

    </div>

</div>

@endsection