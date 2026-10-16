<?php

namespace Database\Seeders;

use App\Models\OfficeLetter;
use Illuminate\Database\Seeder;

class OfficeLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OfficeLetter::query()->delete();

        $letters = [
            ['reference_number' => 'SM/001/2026', 'letter_type' => 'Surat Masuk', 'subject' => 'Undangan rapat koordinasi sekolah', 'sender' => 'Dinas Pendidikan', 'recipient' => 'Kepala Sekolah', 'letter_date' => '2026-01-12', 'status' => 'Ditindaklanjuti', 'image' => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=800&q=80'],
            ['reference_number' => 'SK/001/2026', 'letter_type' => 'Surat Keluar', 'subject' => 'Permohonan narasumber kegiatan', 'sender' => 'Tata Usaha', 'recipient' => 'Puskesmas Kecamatan', 'letter_date' => '2026-01-15', 'status' => 'Terkirim', 'image' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?auto=format&fit=crop&w=800&q=80'],
            ['reference_number' => 'SM/002/2026', 'letter_type' => 'Surat Masuk', 'subject' => 'Informasi pendataan sekolah', 'sender' => 'Cabang Dinas Pendidikan', 'recipient' => 'Operator Sekolah', 'letter_date' => '2026-02-03', 'status' => 'Selesai', 'image' => 'https://images.unsplash.com/photo-1517842645767-c639042777db?auto=format&fit=crop&w=800&q=80'],
            ['reference_number' => 'SK/002/2026', 'letter_type' => 'Surat Keluar', 'subject' => 'Surat keterangan aktif mengajar', 'sender' => 'Tata Usaha', 'recipient' => 'Guru Pemohon', 'letter_date' => '2026-02-10', 'status' => 'Terkirim', 'image' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&fit=crop&w=800&q=80'],
            ['reference_number' => 'SM/003/2026', 'letter_type' => 'Surat Masuk', 'subject' => 'Pemberitahuan jadwal asesmen', 'sender' => 'Dinas Pendidikan', 'recipient' => 'Wakil Kepala Sekolah', 'letter_date' => '2026-03-02', 'status' => 'Ditindaklanjuti', 'image' => 'https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?auto=format&fit=crop&w=800&q=80'],
            ['reference_number' => 'SK/003/2026', 'letter_type' => 'Surat Keluar', 'subject' => 'Permohonan peminjaman fasilitas', 'sender' => 'Tata Usaha', 'recipient' => 'Kelurahan Setempat', 'letter_date' => '2026-03-09', 'status' => 'Terkirim', 'image' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=800&q=80'],
            ['reference_number' => 'SM/004/2026', 'letter_type' => 'Surat Masuk', 'subject' => 'Undangan sosialisasi kurikulum', 'sender' => 'Balai Guru dan Tenaga Kependidikan', 'recipient' => 'Kepala Sekolah', 'letter_date' => '2026-04-06', 'status' => 'Selesai', 'image' => 'https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=800&q=80'],
            ['reference_number' => 'SK/004/2026', 'letter_type' => 'Surat Keluar', 'subject' => 'Pemberitahuan kegiatan sekolah', 'sender' => 'Tata Usaha', 'recipient' => 'Orang Tua/Wali', 'letter_date' => '2026-04-14', 'status' => 'Terkirim', 'image' => 'https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=800&q=80'],
            ['reference_number' => 'SM/005/2026', 'letter_type' => 'Surat Masuk', 'subject' => 'Pembaruan data satuan pendidikan', 'sender' => 'Pusat Data Pendidikan', 'recipient' => 'Operator Sekolah', 'letter_date' => '2026-05-05', 'status' => 'Ditindaklanjuti', 'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80'],
            ['reference_number' => 'SK/005/2026', 'letter_type' => 'Surat Keluar', 'subject' => 'Surat pengantar dokumen sekolah', 'sender' => 'Tata Usaha', 'recipient' => 'Dinas Pendidikan', 'letter_date' => '2026-05-18', 'status' => 'Terkirim', 'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80'],
        ];

        foreach ($letters as $letter) {
            OfficeLetter::create($letter);
        }
    }
}
