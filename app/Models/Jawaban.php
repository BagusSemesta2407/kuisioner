<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    public $table = "jawaban";

    public $fillable = [
        'id_user',
        'kategori',
        // 'periode',
        'jawaban',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function scopeFilter($query, object $filter)
    {
        $query->when($filter->user->jurusan_id ?? false, fn($q, $jurusanId) => $q->where('jurusan_id', $jurusanId));
    }
}
