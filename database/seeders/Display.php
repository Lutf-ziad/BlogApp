<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

 use App\Models\Car as ModelsPrize;
use App\Models\Display as ModelsDisplay;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class Display extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        return  ModelsDisplay::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
