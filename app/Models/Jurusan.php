<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jurusan extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get all of the programStudi for the Jurusan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programStudi(): HasMany
    {
        return $this->hasMany(ProgramStudi::class);
    }
}
