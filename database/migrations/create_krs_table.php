<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('krs', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('kode_matkul');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('krs');
    }
};
