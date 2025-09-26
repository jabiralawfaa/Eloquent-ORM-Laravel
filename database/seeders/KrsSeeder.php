<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswas = Mahasiswa::all();
        $matkuls = MataKuliah::pluck('kode_matkul')->toArray();

        foreach ($mahasiswas as $mahasiswa) {
            // Ambil 3 sampai 6 mata kuliah secara acak
            $jumlahMatkul = rand(3, 6);
            $matkulPilihan = array_rand(array_flip($matkuls), $jumlahMatkul);

            foreach ($matkulPilihan as $kode_matkul) {
                DB::table('krs')->insert([
                    'nim' => $mahasiswa->nim,
                    'kode_matkul' => $kode_matkul,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
