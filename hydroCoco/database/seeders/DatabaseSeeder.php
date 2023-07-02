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
        
        // \App\Models\User::factory(5)->create();
        // \App\Models\Pipa::factory(5)->create();
        // \App\Models\Record::factory(5)->create();

        //This callback for generating time that will be increased by 5 minutes
        //by utilising configure function that has been made in RecordFactory
        \App\Models\Record::factory(5)->configure()->create();

        // $max = 6;
        // for($c=1; $c<=$max; $c++) {
        //     \App\Models\Pipa::factory()->create();
        // }
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
