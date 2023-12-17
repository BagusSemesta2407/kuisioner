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
        Schema::create('kuesioner', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori',['Tata Pamong','Kemahasiswaan','Sarana Prasana','Keuangan','Pendidikan','Penelitian']);
            $table->enum('aspek',['tangibles', 'reliability', 'responsiveness', 'assurance', 'empathy']);
            $table->text('pertanyaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
