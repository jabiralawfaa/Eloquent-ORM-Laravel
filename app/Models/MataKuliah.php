<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliah';
    protected $primaryKey = 'kode_matkul';
    public $incrementing = false;
    protected $keyType = 'string';

    public function mahasiswa() {
        return $this->belongsToMany(Mahasiswa::class, 'krs', 'kode_matkul', 'nim');
    }
}
