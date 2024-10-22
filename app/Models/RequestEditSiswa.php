<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestEditSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'nis',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'agama',
        'nama_ibu',
        'nama_ayah',
        'kelas',
        'no_telp',
        'foto',
        'sekolah_id',
        'jurusan_id',
        'status',
    ];

    public function sekolah(): BelongsTo
    {
        return $this->belongsTo(Sekolah::class);
    }

    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Jurusan::class);
    }
}
