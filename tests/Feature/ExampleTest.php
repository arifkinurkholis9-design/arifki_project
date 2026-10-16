<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_portal_pages_return_successful_responses(): void
    {
        foreach (['/', '/siswa', '/persuratan', '/arsip'] as $path) {
            $this->get($path)->assertOk();
        }
    }

    public function test_seeded_portal_records_are_displayed(): void
    {
        $this->seed();

        $this->assertDatabaseCount('students', 10);
        $this->assertDatabaseCount('office_letters', 10);
        $this->assertDatabaseCount('school_archives', 10);
        $this->get('/siswa')->assertOk()->assertSee('Siswa Simulasi 01');
        $this->get('/persuratan')->assertOk()->assertSee('Register Persuratan');
        $this->get('/arsip')->assertOk()->assertSee('Arsip Sekolah');
    }
}
