<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal tata usaha SMPN 1 Citra Raya">
    <title>@yield('title', 'Portal TU') - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark portal-navbar sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('dashboard') }}">
                <span class="brand-mark">TU</span>
                <span>SMPN 1 Citra Raya</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-lg-2">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('students.*') ? 'active' : '' }}" href="{{ route('students.index') }}">Data Siswa</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('letters.*') ? 'active' : '' }}" href="{{ route('letters.index') }}">Persuratan</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('archives.*') ? 'active' : '' }}" href="{{ route('archives.index') }}">Arsip</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container pt-3">
            <div class="demo-notice">
                <strong>Mode demo:</strong> seluruh data yang ditampilkan adalah data simulasi. Jangan masukkan data pribadi siswa sungguhan ke website demo ini.
            </div>
        </div>
        @yield('content')
    </main>

    <footer class="portal-footer text-white py-4 mt-5">
        <div class="container text-center text-md-start">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h5 class="fw-bold mb-1">SMPN 1 Citra Raya</h5>
                    <p class="mb-0 text-light-emphasis">Portal layanan tata usaha sekolah.</p>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <span class="text-light-emphasis">© {{ date('Y') }} SMPN 1 Citra Raya</span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
