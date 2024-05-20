<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keyboard;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(KeyboardSeeder::class);
    }
}
