<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
    use HasFactory;

    public $table = "kuesioner";

    public $fillable = [
        'kategori',
        // 'periode',
        'aspek',
        'pertanyaan',
    ];

    public function jawabans()
    {
        return $this->hasMany(Jawaban::class, 'kategori', 'kategori')->where('jawaban', 'like', '%' . $this->id . '%');
    }
}
