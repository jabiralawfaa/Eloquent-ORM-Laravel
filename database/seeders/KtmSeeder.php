<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use Faker\Factory as Faker;

class KtmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $mahasiswas = Mahasiswa::all();

        foreach ($mahasiswas as $mahasiswa) {
            DB::table('ktm')->insert([
                'nim' => $mahasiswa->nim,
                'no_ktm' => $faker->unique()->numerify('KTM-########'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
