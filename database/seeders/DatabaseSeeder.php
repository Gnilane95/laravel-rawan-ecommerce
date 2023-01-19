<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AbayaHomme;
use App\Models\Bijou;
use App\Models\VetementEnfant;
use App\Models\VetementFemme;
use Illuminate\Database\Seeder;

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
        Bijou::factory(20)->create();
        VetementFemme::factory(20)->create();
        AbayaHomme::factory(20)->create();
        VetementEnfant::factory(20)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
