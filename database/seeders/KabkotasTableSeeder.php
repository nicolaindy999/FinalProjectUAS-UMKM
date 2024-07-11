<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabkotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kabkotas')->insert([
            [
                'nama' => 'Bandung',
                'latitude' => -6.917464,
                'longitude' => 107.619123,
                'provinsi_id' => 1, // Asumsikan id 1 untuk Jawa Barat
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Semarang',
                'latitude' => -6.966667,
                'longitude' => 110.416664,
                'provinsi_id' => 2, // Asumsikan id 2 untuk Jawa Tengah
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Surabaya',
                'latitude' => -7.257472,
                'longitude' => 112.752090,
                'provinsi_id' => 3, // Asumsikan id 3 untuk Jawa Timur
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
