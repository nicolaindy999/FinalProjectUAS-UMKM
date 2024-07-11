<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriUmkmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoriumkms')->insert([
            [
                'nama' => 'Kuliner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Teknologi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kerajinan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
