{{-- resources/views/layouts/premium.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wedding Website')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Page-specific CSS -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <style>
        /* Premium layout scoped styles */
        .premium-layout {
            --primary-purple: #6f2fa1;
            --secondary-purple: #9b59ff;
            --gold: #D4AF37;
            --bg-dark: #0b0710;
            background: var(--bg-dark);
            color: #f3eef8;
        }

        .premium-layout .navbar {
            background: linear-gradient(90deg, var(--primary-purple), var(--secondary-purple));
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        }

        .premium-layout .navbar .nav-link {
            color: #f3eef8 !important;
            font-weight: 500;
            transition: all 0.3s;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
        }

        .premium-layout .navbar .nav-link:hover {
            color: var(--gold) !important;
            background: rgba(212, 175, 55, 0.1);
        }

        .premium-layout .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #f3eef8 !important;
        }

        /* Footer */
        .premium-layout footer {
            background: linear-gradient(180deg, var(--bg-dark), #1a1330);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: inset 0 4px 8px rgba(0, 0, 0, 0.3);
            padding: 2.5rem 1rem;
        }

        .premium-layout footer a {
            color: var(--secondary-purple);
            text-decoration: none;
            transition: all 0.3s;
        }

        .premium-layout footer a:hover {
            color: var(--gold);
            transform: scale(1.2);
        }

        .premium-layout .footer-icons a {
            font-size: 1.2rem;
            margin: 0 0.5rem;
            display: inline-block;
        }

        #logo {
            padding-left: 30px
        }
    </style>
</head>

<body class="premium-layout d-flex flex-column min-vh-100">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a id="logo" class="navbar-brand fw-bold" href="/"><i
                    class="bi bi-heart-fill me-2"></i>AYOKE2025</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/upload" class="nav-link"><i class="bi bi-upload me-1"></i>Upload</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="/gallery" class="nav-link"><i class="bi bi-images me-1"></i>Gallery</a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="/blog" class="nav-link"><i class="bi bi-journal-text"></i>
                            Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="flex-grow-1">
        <div class="container py-4">
            @yield('content')
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="text-center text-white mt-auto">
        <div class="container">
            <p class="mb-2 small">© {{ date('Y') }} Wedding Website – Powered by Laravel</p>
            <p class="mb-2 small">+2348137047312</p>
            <p class="mb-2 small">Made with <i class="bi bi-heart-fill text-danger"></i> by Siteryx</p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/afolabitimilehin10?mibextid=LQQJ4d"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/timmyleey?igsh=OGQ5ZDc2ODk2ZA=="><i class="bi bi-instagram"></i></a>
                <a href="https://x.com/timmyleey?s=21"><i class="bi bi-twitter"></i></a>
                <a href="mailto:afolabitimilehin12@gmail.com"><i class="bi bi-envelope-fill"></i></a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
