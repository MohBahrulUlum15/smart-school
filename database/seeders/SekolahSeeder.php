<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sekolah = [
            [
                'name' => 'SMAN 1 Situbondo',
                'npsn' => '20532234',
                'alamat' => 'Jl. Raya Situbondo'
            ],
            [
                'name' => 'SMAN 2 Situbondo',
                'npsn' => '20532235',
                'alamat' => 'Jl. Raya Situbondo'
            ],
            [
                'name' => 'SMAN 2 Situbondo',
                'npsn' => '20532236',
                'alamat' => 'Jl. Raya Situbondo'
            ],
            [
                'name' => 'SMAN 1 Panji',
                'npsn' => '20532237',
                'alamat' => 'Jl. Raya Panji'

            ],
            ['name' => 'MAN 1 Situbondo', 'npsn' => '20532238', 'alamat' => 'Jl. Raya Situbondo'],
            ['name' => 'MAN 2 Situbondo', 'npsn' => '20532239', 'alamat' => 'Jl. Raya Situbondo'],
            ['name' => 'SMK 1 Situbondo', 'npsn' => '20532240', 'alamat' => 'Jl. Raya Situbondo'],
            ['name' => 'SMK 2 Situbondo', 'npsn' => '20532241', 'alamat' => 'Jl. Raya Situbondo'],
            ['name' => 'SMKN 1 Panji', 'npsn' => '20532242', 'alamat' => 'Jl. Raya Panji'],
        ];

        foreach ($sekolah as $data) {
            \App\Models\Sekolah::create($data);
        }
    }
}
