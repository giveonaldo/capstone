<?php

namespace Database\Seeders;

use App\Models\Investor;
use App\Models\Petani;
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
        // User::factory(10)->create();

        Petani::factory(50)->create();
        Investor::factory(20)->create();
    }
}
