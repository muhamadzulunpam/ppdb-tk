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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            
            // Langkah 1 - Data Anak
            $table->string('nama_anak');
            $table->string('jenis_kelamin');
            $table->string('ttl');
            $table->string('agama');
            $table->text('alamat');

            // Langkah 2 - Orang Tua/Wali
            $table->string('nama_ortu');
            $table->string('pekerjaan');
            $table->string('no_hp');
            $table->string('email');

            // Langkah 3 - Upload Berkas
            $table->string('foto');
            $table->string('akta');
            $table->string('kk');
            $table->string('kesehatan')->nullable();

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
