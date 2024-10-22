<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'superadmin'],
            ['name' => 'admin'],
            ['name' => 'operator'],
        ];

        foreach ($data as $item) {
            \App\Models\Role::create($item);
        }
    }
}
