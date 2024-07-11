<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsis')->insert([
            [
                'nama' => 'Jawa Barat',
                'ibukota' => 'Bandung',
                'latitude' => -6.914744,
                'longitude' => 107.609810,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Jawa Tengah',
                'ibukota' => 'Semarang',
                'latitude' => -6.966667,
                'longitude' => 110.416664,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Jawa Timur',
                'ibukota' => 'Surabaya',
                'latitude' => -7.257472,
                'longitude' => 112.752090,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
