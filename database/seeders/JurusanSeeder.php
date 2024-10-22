<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusan = [
            ['name' => 'IPA'],
            ['name' => 'IPS'],
            ['name' => 'Bahasa Indonesia'],
            ['name' => 'Teknik Komputer & Jaringan'],
            ['name' => 'Rekayasa Perangkat Lunak'],
            ['name' => 'Akuntansi'],
            ['name' => 'Perkantoran']
        ];

        foreach ($jurusan as $j) {
            \App\Models\Jurusan::create($j);
        }
    }
}
