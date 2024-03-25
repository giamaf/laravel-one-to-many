<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //! DURANTE LO SVILUPPO UTILIZZO QUESTE CREDENZIALI
        \App\Models\User::factory()->create([
            'name' => 'Gianluca',
            'email' => 'gianluca@maffucci.it',
        ]);

        //! CREO 10 FAKE PROJECT
        \App\Models\Project::factory(30)->create();

        // Inserisco il seeder
        $this->call(TypeSeeder::class);
    }
}
