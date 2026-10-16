# Portal TU SMPN 1 Citra Raya

Portal administrasi sekolah berbasis Laravel untuk menampilkan ringkasan data simulasi siswa, surat masuk/keluar, dan arsip sekolah.

## Menjalankan aplikasi

```bash
composer install
npm install
php artisan migrate --seed
npm run build
php artisan serve
```

Buka `http://127.0.0.1:8000`. Bootstrap disertakan sebagai dependensi lokal melalui NPM, bukan CDN.

## Menu

- **Dashboard** — ringkasan jumlah data dan surat terbaru.
- **Data Siswa** — daftar siswa simulasi untuk demonstrasi.
- **Persuratan** — contoh surat masuk dan surat keluar.
- **Arsip** — daftar dokumen administrasi sekolah.

Data siswa dan dokumen pada seeder hanyalah data simulasi. Jangan gunakan situs demo tanpa autentikasi untuk menyimpan atau menampilkan data pribadi siswa sungguhan.
