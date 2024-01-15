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
        \App\Models\User::factory(5)->create();
        \App\Models\Task::factory(5)->create();
//        \App\Models\Task::factory()->create([
//            'name' => 'Tasca 1',
//            'description' => 'tasca PHP',
//            'completed' => true,
//        ]);
    }
}
