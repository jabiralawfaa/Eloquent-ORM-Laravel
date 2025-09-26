<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matkuls = [
            ['kode_matkul' => 'IF001', 'nama_matkul' => 'Pemrograman Web Lanjut'],
            ['kode_matkul' => 'IF002', 'nama_matkul' => 'Struktur Data dan Algoritma'],
            ['kode_matkul' => 'IF003', 'nama_matkul' => 'Basis Data'],
            ['kode_matkul' => 'IF004', 'nama_matkul' => 'Sistem Operasi'],
            ['kode_matkul' => 'IF005', 'nama_matkul' => 'Jaringan Komputer'],
            ['kode_matkul' => 'IF006', 'nama_matkul' => 'Analisis & Desain Berorientasi Objek'],
            ['kode_matkul' => 'IF007', 'nama_matkul' => 'Kecerdasan Buatan'],
            ['kode_matkul' => 'IF008', 'nama_matkul' => 'Interaksi Manusia dan Komputer'],
            ['kode_matkul' => 'IF009', 'nama_matkul' => 'Metodologi Penelitian'],
            ['kode_matkul' => 'IF010', 'nama_matkul' => 'Statistika'],
        ];

        foreach ($matkuls as $matkul) {
            DB::table('mata_kuliah')->insert(array_merge($matkul, ['created_at' => now(), 'updated_at' => now()]));
        }
    }
}
