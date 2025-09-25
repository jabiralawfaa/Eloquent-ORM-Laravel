<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ktm extends Model
{
    protected $table = 'ktm';

    public function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }
}
