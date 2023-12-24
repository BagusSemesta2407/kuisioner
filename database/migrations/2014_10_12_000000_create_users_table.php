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
            $table->foreignId('jurusan_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('program_studi_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('username')->unique();
            $table->enum('role', ['admin', 'jurusan', 'mahasiswa', 'p4mp'])->default('mahasiswa');
            $table->string('tahun_masuk')->nullable();
            $table->string('tingkat')->nullable();
            // $table->string('jurusan')->nullable();
            // $table->string('prodi')->nullable();
            $table->string('password');
            $table->enum('status', ['Aktif', 'Tidak Aktif', 'Lulus']);
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
