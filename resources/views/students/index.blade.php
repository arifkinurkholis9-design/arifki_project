@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')
    <section class="py-4 py-lg-5">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
                <div>
                    <p class="text-uppercase text-success fw-semibold small mb-2">Kesiswaan</p>
                    <h1 class="h2 page-heading mb-1">Data Siswa</h1>
                    <p class="text-secondary mb-0">Daftar contoh untuk demonstrasi administrasi sekolah.</p>
                </div>
                <span class="badge rounded-pill text-bg-success fs-6">{{ $students->total() }} data</span>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4">Foto</th>
                                <th>Nomor Demo</th>
                                <th>Nama Tampilan</th>
                                <th>Kelas</th>
                                <th>Program</th>
                                <th>Tahun Masuk</th>
                                <th class="pe-4">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                                <tr>
                                    <td class="ps-4"><img src="{{ $student->image }}" alt="Ilustrasi {{ $student->display_name }}" class="table-image"></td>
                                    <td class="fw-semibold">{{ $student->student_code }}</td>
                                    <td>{{ $student->display_name }}</td>
                                    <td>{{ $student->class_name }}</td>
                                    <td>{{ $student->program }}</td>
                                    <td>{{ $student->enrollment_year }}</td>
                                    <td class="pe-4"><span class="badge text-bg-success">{{ $student->status }}</span></td>
                                </tr>
                            @empty
                                <tr><td colspan="7" class="text-center py-4">Belum ada data siswa.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if ($students->hasPages())
                    <div class="card-footer bg-white border-0">{{ $students->links() }}</div>
                @endif
            </div>
        </div>
    </section>
@endsection
