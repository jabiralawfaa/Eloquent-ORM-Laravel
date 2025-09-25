<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';

    // One to One → Mahasiswa punya satu KTM
    public function ktm() {
        return $this->hasOne(Ktm::class, 'nim', 'nim');
    }

    // One to Many → Mahasiswa milik satu kelas
    public function kelas() {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id_kelas');
    }

    // Many to Many → Mahasiswa bisa ambil banyak mata kuliah
    public function mataKuliah() {
        return $this->belongsToMany(MataKuliah::class, 'krs', 'nim', 'kode_matkul');
    }
}
