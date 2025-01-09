<?php

namespace Database\Seeders;

use App\Models\Investor;
use App\Models\Petani;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Define Role
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'petani']);

        User::factory()->create([
            'firstName' => 'Abriansyah',
            'lastName' => 'Adam',
            'email' => 'giveonaldo@gmail.com',
            'role_id' => 1,
            'password' => 'admin'
        ]);
    }
}
