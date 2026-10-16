<?php

namespace Database\Seeders;

use App\Models\SchoolArchive;
use Illuminate\Database\Seeder;

class SchoolArchiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SchoolArchive::query()->delete();

        $archives = [
            ['archive_number' => 'ARS-001-2026', 'title' => 'Buku induk peserta didik', 'category' => 'Kesiswaan', 'school_year' => '2025/2026', 'description' => 'Dokumen administrasi induk peserta didik. Simpan salinan asli di tempat terbatas.', 'file_name' => 'buku-induk-2025-2026.pdf', 'image' => 'https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=800&q=80'],
            ['archive_number' => 'ARS-002-2026', 'title' => 'Kalender pendidikan', 'category' => 'Akademik', 'school_year' => '2025/2026', 'description' => 'Kalender kegiatan akademik dan hari efektif sekolah.', 'file_name' => 'kalender-pendidikan-2025-2026.pdf', 'image' => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=800&q=80'],
            ['archive_number' => 'ARS-003-2026', 'title' => 'Dokumen kurikulum satuan pendidikan', 'category' => 'Akademik', 'school_year' => '2025/2026', 'description' => 'Dokumen kurikulum yang berlaku pada tahun ajaran berjalan.', 'file_name' => 'kurikulum-sekolah-2025-2026.pdf', 'image' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=800&q=80'],
            ['archive_number' => 'ARS-004-2026', 'title' => 'Program kerja tata usaha', 'category' => 'Tata Usaha', 'school_year' => '2025/2026', 'description' => 'Rencana kerja administrasi dan layanan ketatausahaan sekolah.', 'file_name' => 'program-kerja-tu-2025-2026.pdf', 'image' => 'https://images.unsplash.com/photo-1517842645767-c639042777db?auto=format&fit=crop&w=800&q=80'],
            ['archive_number' => 'ARS-005-2026', 'title' => 'Daftar inventaris sarana sekolah', 'category' => 'Sarana Prasarana', 'school_year' => '2025/2026', 'description' => 'Rekap inventaris sarana dan prasarana milik sekolah.', 'file_name' => 'inventaris-sekolah-2025-2026.pdf', 'image' => 'https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=800&q=80'],
            ['archive_number' => 'ARS-006-2026', 'title' => 'Notulen rapat komite sekolah', 'category' => 'Persuratan', 'school_year' => '2025/2026', 'description' => 'Ringkasan hasil rapat koordinasi bersama komite sekolah.', 'file_name' => 'notulen-komite-april-2026.pdf', 'image' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&fit=crop&w=800&q=80'],
            ['archive_number' => 'ARS-007-2026', 'title' => 'Laporan kegiatan sekolah', 'category' => 'Kegiatan', 'school_year' => '2025/2026', 'description' => 'Dokumentasi administrasi kegiatan sekolah semester genap.', 'file_name' => 'laporan-kegiatan-semester-genap.pdf', 'image' => 'https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?auto=format&fit=crop&w=800&q=80'],
            ['archive_number' => 'ARS-008-2026', 'title' => 'SOP pelayanan tata usaha', 'category' => 'Tata Usaha', 'school_year' => '2025/2026', 'description' => 'Standar operasional prosedur layanan administrasi sekolah.', 'file_name' => 'sop-pelayanan-tu-2025-2026.pdf', 'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80'],
            ['archive_number' => 'ARS-009-2026', 'title' => 'Rekap surat masuk dan keluar', 'category' => 'Persuratan', 'school_year' => '2025/2026', 'description' => 'Rekapitulasi surat masuk dan surat keluar tahun ajaran berjalan.', 'file_name' => 'rekap-persuratan-2025-2026.pdf', 'image' => 'https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=800&q=80'],
            ['archive_number' => 'ARS-010-2026', 'title' => 'Laporan penggunaan anggaran', 'category' => 'Keuangan', 'school_year' => '2025/2026', 'description' => 'Ringkasan pelaporan penggunaan anggaran sekolah.', 'file_name' => 'laporan-anggaran-2025-2026.pdf', 'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80'],
        ];

        foreach ($archives as $archive) {
            SchoolArchive::create($archive);
        }
    }
}
