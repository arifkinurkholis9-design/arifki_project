@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <section class="py-4 py-lg-5">
        <div class="container">
            <div class="row align-items-center g-4 mb-4">
                <div class="col-lg-8">
                    <span class="badge rounded-pill text-bg-success mb-3">ADMINISTRASI SEKOLAH</span>
                    <h1 class="display-5 fw-bold page-heading mb-2">Selamat datang di Portal TU</h1>
                    <p class="lead text-secondary mb-0">Ringkasan administrasi siswa, persuratan, dan arsip sekolah dalam satu tempat.</p>
                </div>
                <div class="col-lg-4">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1000&q=80" alt="Suasana sekolah" class="img-fluid rounded-4 shadow-sm" style="height: 220px; width: 100%; object-fit: cover;">
                </div>
            </div>

            <div class="row g-3 mb-5">
                <div class="col-6 col-lg-3">
                    <a href="{{ route('students.index') }}" class="card metric-card h-100 text-decoration-none">
                        <div class="card-body p-4">
                            <div class="metric-label">Data Siswa</div>
                            <div class="metric-value">{{ $studentCount }}</div>
                            <small class="text-secondary">Data simulasi</small>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a href="{{ route('letters.index') }}" class="card metric-card h-100 text-decoration-none">
                        <div class="card-body p-4">
                            <div class="metric-label">Surat Masuk</div>
                            <div class="metric-value">{{ $incomingCount }}</div>
                            <small class="text-secondary">Register persuratan</small>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a href="{{ route('letters.index') }}" class="card metric-card h-100 text-decoration-none">
                        <div class="card-body p-4">
                            <div class="metric-label">Surat Keluar</div>
                            <div class="metric-value">{{ $outgoingCount }}</div>
                            <small class="text-secondary">Register persuratan</small>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a href="{{ route('archives.index') }}" class="card metric-card h-100 text-decoration-none">
                        <div class="card-body p-4">
                            <div class="metric-label">Arsip</div>
                            <div class="metric-value">{{ $archiveCount }}</div>
                            <small class="text-secondary">Dokumen simulasi</small>
                        </div>
                    </a>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex justify-content-between align-items-center p-4">
                        <div>
                            <p class="text-uppercase text-secondary fw-semibold small mb-1">Aktivitas</p>
                            <h2 class="h4 mb-0">Surat terbaru</h2>
                        </div>
                        <a href="{{ route('letters.index') }}" class="btn btn-outline-success btn-sm">Lihat semua</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">Nomor</th>
                                    <th>Perihal</th>
                                    <th>Jenis</th>
                                    <th>Tanggal</th>
                                    <th class="pe-4">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($recentLetters as $letter)
                                    <tr>
                                        <td class="ps-4 fw-semibold">{{ $letter->reference_number }}</td>
                                        <td>{{ $letter->subject }}</td>
                                        <td>{{ $letter->letter_type }}</td>
                                        <td>{{ $letter->letter_date->format('d M Y') }}</td>
                                        <td class="pe-4"><span class="badge text-bg-success">{{ $letter->status }}</span></td>
                                    </tr>
                                @empty
                                    <tr><td colspan="5" class="text-center py-4">Belum ada data surat.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
