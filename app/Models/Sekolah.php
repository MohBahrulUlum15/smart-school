<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sekolah extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'npsn', 'alamat'];

    public function siswas(): HasMany
    {
        return $this->hasMany(Siswa::class);
    }

    public function requestEditSiswas(): HasMany
    {
        return $this->hasMany(RequestEditSiswa::class);
    }

    public function admin(): HasMany
    {
        return $this->hasMany(Admin::class);
    }

    public function operator(): HasMany
    {
        return $this->hasMany(Operator::class);
    }
}
