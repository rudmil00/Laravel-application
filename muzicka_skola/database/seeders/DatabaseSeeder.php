<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Termin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\ProfesorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(10)->create();
        (new ProfesorSeeder())->run();
        (new UcenikSeeder())->run();
        Termin::factory(10)->create();
    }
}
