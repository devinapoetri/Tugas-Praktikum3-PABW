<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [   'name'  => 'Wahyudi',
                'major' => 'Informatika',
                'age'   => 22,
                'course' => ['Pemrograman Web', 'Database', 'Cloud Computing']
            ],
        
            ['name'  => 'Siti', 
                'major' => 'Sistem Informasi',
                'age'   => 21,
                'course' => ['UI/UX Design', 'Manajemen Proyek', 'IoT']
            ],
        ];

        return view('students.index', compact('students'));
    }
}
