<?php

namespace App\Http\Controllers;

use App\Models\OfficeLetter;
use App\Models\SchoolArchive;
use App\Models\Student;

class OfficePortalController extends Controller
{
    public function dashboard()
    {
        return view('dashboard', [
            'studentCount' => Student::count(),
            'incomingCount' => OfficeLetter::where('letter_type', 'Surat Masuk')->count(),
            'outgoingCount' => OfficeLetter::where('letter_type', 'Surat Keluar')->count(),
            'archiveCount' => SchoolArchive::count(),
            'recentLetters' => OfficeLetter::latest('letter_date')->take(5)->get(),
        ]);
    }

    public function students()
    {
        return view('students.index', [
            'students' => Student::orderBy('student_code')->paginate(10),
        ]);
    }

    public function letters()
    {
        return view('letters.index', [
            'letters' => OfficeLetter::latest('letter_date')->paginate(10),
        ]);
    }

    public function archives()
    {
        return view('archives.index', [
            'archives' => SchoolArchive::orderBy('archive_number')->paginate(10),
        ]);
    }
}
