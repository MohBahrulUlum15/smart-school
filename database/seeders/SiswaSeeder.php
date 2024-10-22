<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = [
            [
                'nis' => '1234567890',
                'nama' => 'John Doe',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2000-01-01',
                'alamat' => 'Jl. Jend. Sudirman No. 1',
                'jenis_kelamin' => 'L',
                'agama' => 'Islam',
                'nama_ibu' => 'Jane Doe',
                'nama_ayah' => 'Jack Doe',
                'kelas' => 'XII',
                'no_telp' => '081234567890',
                'foto' => 'john_doe.jpg',
                'sekolah_id' => 1,
                'jurusan_id' => 1,
                'status' => 'verified',
            ],
            [
                'nis' => '0987654321',
                'nama' => 'Jane Doe',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '2000-01-02',
                'alamat' => 'Jl. Jend. Sudirman No. 2',
                'jenis_kelamin' => 'P',
                'agama' => 'Kristen Protestan',
                'nama_ibu' => 'Jill Doe',
                'nama_ayah' => 'Jim Doe',
                'kelas' => 'XII',
                'no_telp' => '089876543210',
                'foto' => 'jane_doe.jpg',
                'sekolah_id' => 1,
                'jurusan_id' => 2,
                'status' => 'verified',
            ],
            [
                'nis' => '1357924680',
                'nama' => 'Jack Doe',
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => '2000-01-03',
                'alamat' => 'Jl. Jend. Sudirman No. 3',
                'jenis_kelamin' => 'L',
                'agama' => 'Kristen Katholik',
                'nama_ibu' => 'Judy Doe',
                'nama_ayah' => 'Joe Doe',
                'kelas' => 'XII',
                'no_telp' => '081357924680',
                'foto' => 'jack_doe.jpg',
                'sekolah_id' => 1,
                'jurusan_id' => 3,
                'status' => 'verified',
            ]
        ];

        foreach ($siswa as $data) {
            \App\Models\Siswa::create($data);
        }
    }
}
