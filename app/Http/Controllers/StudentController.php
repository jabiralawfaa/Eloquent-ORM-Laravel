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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan halaman create
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //mengambil data dari form
        $data = $request->all();

        // membuat record baru di tabel students
        Student::create($data);

        // mengalihkan halaman ke halaman students
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nim)
    {
        // mengambil 1 data student berdasarkan nim
        $student = Student::where('nim', $nim)->first();

        // mengirim data mahasiswa ke tampilan edit
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nim)
    {
        // mencari data mahasiswa berdasarkan nim
        $student = Student::where('nim', $nim)->first();

        // memperbarui data mahasiswa
        $student->update([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat,
        ]);

        // halamkan dialihkan ke halaman students
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // mengambil data mahasiswa berdasarkan nim
        $student = Student::where('nim', $id)->first();

        // menghapus data mahasiswa
        $student->delete();

        // halaman dialihkan ke halaman students
        return redirect()->route('students.index');
    }
}
