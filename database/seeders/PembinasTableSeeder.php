<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembinas')->insert([
            [
                'nama' => 'Nicola Indy Ariana',
                'gender' => 'P',
                'tgl_lahir' => '1980-01-01',
                'tmp_lahir' => 'Jakarta',
                'keahlian' => 'Pemerdayaan Perempuan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ataya Dwi',
                'gender' => 'L',
                'tgl_lahir' => '1985-05-15',
                'tmp_lahir' => 'Bandung',
                'keahlian' => 'Pengembangan Komunitas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
