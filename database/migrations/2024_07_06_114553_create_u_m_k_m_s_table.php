<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('u_m_k_m_s', function (Blueprint $table) {
            $table->id(); // bigint unsigned, primary key, auto increment
            $table->string('nama', 100);
            $table->double('modal')->nullable();
            $table->string('pemilik', 45);
            $table->string('alamat', 100);
            $table->string('website', 45);
            $table->string('email', 45);
            $table->unsignedBigInteger('kabkota_id'); // bigint unsigned
            $table->integer('rating')->nullable();
            $table->unsignedBigInteger('kategori_umkm_id'); // bigint unsigned
            $table->unsignedBigInteger('pembina_id'); // bigint unsigned
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('u_m_k_m_s');
    }
};
