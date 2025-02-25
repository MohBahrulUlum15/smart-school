<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            MasterSeeder::class,
            RolesSeeder::class,
            // UserRolesSeeder::class,
            SekolahSeeder::class,
            JurusanSeeder::class,
            SiswaSeeder::class,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('super1234'),
            'role_id' => 1,
        ]);
    }
}
