<?php

namespace Database\Seeders;

use App\Models\Investor;
use App\Models\Petani;
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
        $adminRole = Role::create(['name' => 'admin']);
        $petaniRole = Role::create(['name' => 'petani']);

        User::factory()->create([
            'role_id' => $adminRole->id,
            'email' => 'giveonaldo@gmail.com'
        ]);

        User::factory()->create([
            'email' => 'nayla@gmail.com',
            'role_id' => $petaniRole->id
        ]);
    }
}
