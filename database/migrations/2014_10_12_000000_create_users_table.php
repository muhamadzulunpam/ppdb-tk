<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel users.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('username'); // Nama pengguna
            $table->string('password'); // Password
            $table->enum('role', ['admin', 'pendaftar']); // Role pengguna
            $table->rememberToken(); // Token sesi
            $table->timestamps(); // Waktu pembuatan dan pembaruan
        });
    }


    /**
     * Membatalkan migration dan menghapus tabel users.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
