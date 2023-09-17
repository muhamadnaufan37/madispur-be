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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
=======
            $table->string('email')->unique();
            $table->string('username', 255)->unique();
            $table->string('password');
            $table->string('nama_lengkap', 255);
            $table->bigInteger('no_handphone');
            $table->enum('gender', ['Pria', 'Wanita']);
            $table->string('alamat_lengkap', 255);
            $table->bigInteger('NIK');
            $table->string('nama_kampus/sekolah', 255);
            $table->string('NIM', 255);
            $table->string('NISN', 255);
            $table->string('jurusan/prodi', 13);
            $table->bigInteger('kelas/semester');
            $table->string('Keperluan');
            $table->enum('status', ['Aktif', 'Tidak Aktif']);
            $table->bigInteger('role_id');
            $table->timestamp('login_terakhir');
            $table->timestamp('email_verified_at')->nullable();
>>>>>>> bb27095f70afd44f61cef44f68bae7d966f90c2a
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
