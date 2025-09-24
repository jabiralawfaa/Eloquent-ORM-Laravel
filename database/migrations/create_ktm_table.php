<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('ktm', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('no_ktm');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('ktm');
    }
};
