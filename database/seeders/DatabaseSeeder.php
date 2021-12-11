<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instant;

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

        Instant::factory(10)->create();
        Instant::factory()->create([
            "title" => 'Goku Ultrainstinto',
            "imgURL" => 'https://www.cinemascomics.com/wp-content/uploads/2020/11/Dragon-Ball-Super.jpg'
        ]);
    }
}
