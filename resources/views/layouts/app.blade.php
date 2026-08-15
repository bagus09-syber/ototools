<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="OtoTools adalah website tools otomotif gratis untuk menghitung CC, bore up, kompresi dan mencari data motor.">

    <meta name="keywords"
          content="otomotif, kalkulator cc, bore up, kompresi, motor, ukuran ban">

    <title>
        {{ $title ?? 'OtoTools - Tools Otomotif Gratis' }}
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>

        body {
            background: #f5f7fa;
            color: #212529;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 22px;
        }

        .hero {
            background:
                linear-gradient(
                    135deg,
                    #111827,
                    #374151
                );

            color: white;

            padding: 90px 20px;

            border-radius:
                0 0 35px 35px;
        }

        .hero h1 {
            font-weight: 800;
        }

        .tool-card {
            border: 0;
            border-radius: 20px;
            transition: .25s;
        }

        .tool-card:hover {
            transform: translateY(-7px);
        }

        .tool-icon {
            font-size: 45px;
        }

        .result-box {
            background: #eef6ff;
            border-radius: 16px;
            padding: 20px;
        }

        .page-title {
            font-weight: 800;
        }

        footer {
            margin-top: 80px;
            padding: 35px 0;
            background: #111827;
            color: white;
        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg bg-white shadow-sm">

    <div class="container">

        <a class="navbar-brand"
           href="{{ route('home') }}">

            🛵 OtoTools

        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div
            class="collapse navbar-collapse"
            id="navbarMenu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('home') }}">

                        Home

                    </a>

                </li>

                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        data-bs-toggle="dropdown">

                        Kalkulator

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route('cc') }}">

                                🔧 Kalkulator CC

                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route('boreup') }}">

                                🔥 Kalkulator Bore Up

                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route('kompresi') }}">

                                ⚙️ Kalkulator Kompresi

                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route('ban') }}">

                                🛞 Ukuran Ban

                            </a>
                        </li>

                    </ul>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('motor') }}">

                        🏍️ Database Motor

                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('tentang') }}">

                        Tentang

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>


@yield('content')


<footer>

    <div class="container text-center">

        <h5>🛵 OtoTools</h5>

        <p class="mb-0">
            Tools otomotif gratis untuk semua.
        </p>

        <small>
            © {{ date('Y') }} OtoTools
        </small>

    </div>

</footer>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

@yield('script')

</body>

</html>