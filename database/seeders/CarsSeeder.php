<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cars::create([
        //     'photo' => null,
        //     'model' => 'Test Model 1',
        //     'title' => 'Test title 1',
        //     'price' => '20000$',
        //     'description' => 'Lorem ipsum dolor sit amet'
        // ]); 
        // Cars::create([
        //     'photo' => null,
        //     'model' => 'Test Model 2',
        //     'title' => 'Test title 2',
        //     'price' => '20000$',
        //     'description' => 'Lorem ipsum dolor sit amet'
        // ]); 

        Cars::factory()->count(10)->create();
    }
}
