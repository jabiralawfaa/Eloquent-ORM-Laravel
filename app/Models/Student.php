<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // menentukan tabel yang digunakan
    protected $fillable = ['nama', 'nim', 'jurusan', 'alamat'];

    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';
}
