<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
           
            $table->string('nim')->primary();

            $table->string('nama');
            $table->unsignedBigInteger('id_kelas')->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
