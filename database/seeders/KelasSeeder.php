<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = ['2TRPLA', '2TRPLB', '2TRPLC', '2TRPLD', '2TRPLE'];
        foreach ($kelas as $k) {
            DB::table('kelas')->insert([
                'nama_kelas' => $k,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
