<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function siswas(): HasMany
    {
        return $this->hasMany(Siswa::class);
    }

    public function requestEditSiswas(): HasMany
    {
        return $this->hasMany(RequestEditSiswa::class);
    }
}
