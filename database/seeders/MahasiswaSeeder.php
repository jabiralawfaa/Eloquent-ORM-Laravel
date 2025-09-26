<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Kelas;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $kelasIds = Kelas::pluck('id_kelas')->toArray();

        for ($i = 0; $i < 10; $i++) {
            DB::table('mahasiswa')->insert([
                'nim' => $faker->unique()->numerify('############'),
                'nama' => $faker->name,
                'id_kelas' => $faker->randomElement($kelasIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
