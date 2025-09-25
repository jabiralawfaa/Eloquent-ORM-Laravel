<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';

    public function mahasiswa() {
        return $this->hasMany(Mahasiswa::class, 'id_kelas', 'id_kelas');
    }
}
