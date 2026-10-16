@extends('layouts.app')

@section('title', 'Arsip')

@section('content')
    <section class="py-4 py-lg-5">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
                <div>
                    <p class="text-uppercase text-success fw-semibold small mb-2">Dokumentasi</p>
                    <h1 class="h2 page-heading mb-1">Arsip Sekolah</h1>
                    <p class="text-secondary mb-0">Daftar contoh arsip administrasi berdasarkan kategori.</p>
                </div>
                <span class="badge rounded-pill text-bg-success fs-6">{{ $archives->total() }} dokumen</span>
            </div>

            <div class="row g-4">
                @forelse ($archives as $archive)
                    <div class="col-md-6 col-xl-4">
                        <article class="card h-100 border-0 shadow-sm overflow-hidden">
                            <img src="{{ $archive->image }}" alt="Ilustrasi {{ $archive->title }}" class="record-image">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-center gap-2 mb-3">
                                    <span class="badge text-bg-success">{{ $archive->category }}</span>
                                    <span class="small text-secondary">{{ $archive->school_year }}</span>
                                </div>
                                <p class="small text-secondary mb-1">{{ $archive->archive_number }}</p>
                                <h2 class="h5">{{ $archive->title }}</h2>
                                <p class="text-secondary">{{ $archive->description }}</p>
                                <div class="mt-auto pt-2">
                                    <span class="small text-secondary">Nama berkas</span>
                                    <div class="fw-semibold text-break">{{ $archive->file_name }}</div>
                                </div>
                            </div>
                        </article>
                    </div>
                @empty
                    <div class="col-12"><div class="alert alert-info">Belum ada data arsip.</div></div>
                @endforelse
            </div>

            @if ($archives->hasPages())
                <div class="mt-4">{{ $archives->links() }}</div>
            @endif
        </div>
    </section>
@endsection
