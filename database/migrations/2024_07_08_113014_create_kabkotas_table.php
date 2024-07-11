<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kabkotas', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->double('latitude');
            $table->double('longitude');
            $table->unsignedBigInteger('provinsi_id');
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('provinsi_id')->references('id')->on('provinsis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kabkotas');
    }
};
