<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'role_id' => 1,
                'master_id' => 1,
                'create' => 1,
                'read' => 1,
                'update' => 1,
                'delete' => 1,
            ],

            [
                'role_id' => 1,
                'master_id' => 2,
                'create' => 1,
                'read' => 1,
                'update' => 1,
                'delete' => 1,
            ],

            [
                'role_id' => 1,
                'master_id' => 3,
                'create' => 1,
                'read' => 1,
                'update' => 1,
                'delete' => 1,
            ],

            [
                'role_id' => 1,
                'master_id' => 4,
                'create' => 1,
                'read' => 1,
                'update' => 1,
                'delete' => 1,
            ],

            [
                'role_id' => 1,
                'master_id' => 5,
                'create' => 1,
                'read' => 1,
                'update' => 1,
                'delete' => 1,
            ],

            [
                'role_id' => 1,
                'master_id' => 6,
                'create' => 1,
                'read' => 1,
                'update' => 1,
                'delete' => 1,
            ],

            [
                'role_id' => 1,
                'master_id' => 7,
                'create' => 1,
                'read' => 1,
                'update' => 1,
                'delete' => 1,
            ],

            [
                'role_id' => 1,
                'master_id' => 8,
                'create' => 1,
                'read' => 1,
                'update' => 1,
                'delete' => 1,
            ],

        ];

        foreach ($data as $item) {
            \App\Models\UserRole::create($item);
        }
    }
}
