<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // impor model Student
        $students = \App\Models\Student::all(); // mengambil semua isi tabel

        return view('students.index', ['students' => $students]); // menampilkan isi tabel
    }


}
