@extends('layouts.app')

@section('title', 'Persuratan')

@section('content')
    <section class="py-4 py-lg-5">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
                <div>
                    <p class="text-uppercase text-success fw-semibold small mb-2">Tata Usaha</p>
                    <h1 class="h2 page-heading mb-1">Register Persuratan</h1>
                    <p class="text-secondary mb-0">Contoh pencatatan surat masuk dan surat keluar.</p>
                </div>
                <span class="badge rounded-pill text-bg-success fs-6">{{ $letters->total() }} surat</span>
            </div>

            <div class="row g-4">
                @forelse ($letters as $letter)
                    <div class="col-md-6 col-xl-4">
                        <article class="card h-100 border-0 shadow-sm overflow-hidden">
                            <img src="{{ $letter->image }}" alt="Ilustrasi dokumen {{ $letter->reference_number }}" class="record-image">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-center gap-2 mb-3">
                                    <span class="badge {{ $letter->letter_type === 'Surat Masuk' ? 'text-bg-primary' : 'text-bg-warning' }}">{{ $letter->letter_type }}</span>
                                    <span class="small text-secondary">{{ $letter->letter_date->format('d M Y') }}</span>
                                </div>
                                <p class="small text-secondary mb-1">{{ $letter->reference_number }}</p>
                                <h2 class="h5">{{ $letter->subject }}</h2>
                                <dl class="small mb-3">
                                    <dt class="text-secondary">Dari</dt><dd>{{ $letter->sender }}</dd>
                                    <dt class="text-secondary">Kepada</dt><dd>{{ $letter->recipient }}</dd>
                                </dl>
                                <div class="mt-auto"><span class="badge text-bg-success">{{ $letter->status }}</span></div>
                            </div>
                        </article>
                    </div>
                @empty
                    <div class="col-12"><div class="alert alert-info">Belum ada data surat.</div></div>
                @endforelse
            </div>

            @if ($letters->hasPages())
                <div class="mt-4">{{ $letters->links() }}</div>
            @endif
        </div>
    </section>
@endsection
