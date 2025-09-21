<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // membuat tabel students
        Schema::create('students', function (Blueprint $table) {
            // membuat kolom nim (agar kolom nim menjadi primary key, maka gunakan method primary())
            $table->string('nim', 12)->unique()->primary();

            // membuat kolom nama
            $table->string('nama',25);        
            // membuat kolom jurusan
            $table->string('jurusan', 50);
            // membuat kolom alamat
            $table->text('alamat');

            // membuat kolom pencatatan waktu
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
