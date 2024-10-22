<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'User'],
            ['name' => 'Roles'],
            ['name' => 'User Roles'],
            ['name' => 'Sekolah'],
            ['name' => 'Jurusan'],
            ['name' => 'Admin'],
            ['name' => 'Operator'],
            ['name' => 'Siswa'],
        ];

        foreach ($data as $item) {
            \App\Models\Master::create($item);
        }
    }
}
