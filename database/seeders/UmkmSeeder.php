<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('u_m_k_m_s')->insert([
            [
                'nama' => 'Toko Sumber Rejeki',
                'modal' => 5000000,
                'pemilik' => 'Budi Santoso',
                'alamat' => 'Jl. Merdeka No.1, Jakarta',
                'website' => 'sumberrejeki.com',
                'email' => 'contact@sumberrejeki.com',
                'kabkota_id' => 1,
                'rating' => 4,
                'kategori_umkm_id' => 1,
                'pembina_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Warung Siti',
                'modal' => 3000000,
                'pemilik' => 'Siti Aminah',
                'alamat' => 'Jl. Sudirman No.2, Bandung',
                'website' => 'warungsiti.com',
                'email' => 'contact@warungsiti.com',
                'kabkota_id' => 2,
                'rating' => 5,
                'kategori_umkm_id' => 2,
                'pembina_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Toko Andi Jaya',
                'modal' => 7000000,
                'pemilik' => 'Andi Prasetyo',
                'alamat' => 'Jl. Thamrin No.3, Surabaya',
                'website' => 'andijaya.com',
                'email' => 'contact@andijaya.com',
                'kabkota_id' => 3,
                'rating' => 3,
                'kategori_umkm_id' => 3,
                'pembina_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Toko Dewi Lestari',
                'modal' => 6000000,
                'pemilik' => 'Dewi Lestari',
                'alamat' => 'Jl. Gatot Subroto No.4, Medan',
                'website' => 'dewilestrai.com',
                'email' => 'contact@dewilestrai.com',
                'kabkota_id' => 4,
                'rating' => 4,
                'kategori_umkm_id' => 4,
                'pembina_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Eko Wijaya Shop',
                'modal' => 8000000,
                'pemilik' => 'Eko Wijaya',
                'alamat' => 'Jl. Sudirman No.5, Yogyakarta',
                'website' => 'ekowijayashop.com',
                'email' => 'contact@ekowijayashop.com',
                'kabkota_id' => 5,
                'rating' => 5,
                'kategori_umkm_id' => 5,
                'pembina_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}