<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::query()->delete();

        $students = [
            ['student_code' => 'DEMO-001', 'display_name' => 'Siswa Simulasi 01', 'class_name' => 'X-A', 'program' => 'Reguler', 'enrollment_year' => 2024, 'status' => 'Aktif', 'image' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80'],
            ['student_code' => 'DEMO-002', 'display_name' => 'Siswa Simulasi 02', 'class_name' => 'X-B', 'program' => 'Reguler', 'enrollment_year' => 2024, 'status' => 'Aktif', 'image' => 'https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=800&q=80'],
            ['student_code' => 'DEMO-003', 'display_name' => 'Siswa Simulasi 03', 'class_name' => 'XI-A', 'program' => 'Reguler', 'enrollment_year' => 2023, 'status' => 'Aktif', 'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80'],
            ['student_code' => 'DEMO-004', 'display_name' => 'Siswa Simulasi 04', 'class_name' => 'XI-B', 'program' => 'Reguler', 'enrollment_year' => 2023, 'status' => 'Aktif', 'image' => 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=800&q=80'],
            ['student_code' => 'DEMO-005', 'display_name' => 'Siswa Simulasi 05', 'class_name' => 'XII-A', 'program' => 'Reguler', 'enrollment_year' => 2022, 'status' => 'Aktif', 'image' => 'https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=800&q=80'],
            ['student_code' => 'DEMO-006', 'display_name' => 'Siswa Simulasi 06', 'class_name' => 'XII-B', 'program' => 'Reguler', 'enrollment_year' => 2022, 'status' => 'Aktif', 'image' => 'https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?auto=format&fit=crop&w=800&q=80'],
            ['student_code' => 'DEMO-007', 'display_name' => 'Siswa Simulasi 07', 'class_name' => 'X-A', 'program' => 'Reguler', 'enrollment_year' => 2024, 'status' => 'Aktif', 'image' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=800&q=80'],
            ['student_code' => 'DEMO-008', 'display_name' => 'Siswa Simulasi 08', 'class_name' => 'X-B', 'program' => 'Reguler', 'enrollment_year' => 2024, 'status' => 'Aktif', 'image' => 'https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=800&q=80'],
            ['student_code' => 'DEMO-009', 'display_name' => 'Siswa Simulasi 09', 'class_name' => 'XI-A', 'program' => 'Reguler', 'enrollment_year' => 2023, 'status' => 'Aktif', 'image' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&fit=crop&w=800&q=80'],
            ['student_code' => 'DEMO-010', 'display_name' => 'Siswa Simulasi 10', 'class_name' => 'XI-B', 'program' => 'Reguler', 'enrollment_year' => 2023, 'status' => 'Aktif', 'image' => 'https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=800&q=80'],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
