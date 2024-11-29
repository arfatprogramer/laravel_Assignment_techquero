<?php

namespace Database\Seeders;

use App\Models\food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class foodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foo = collect([
            [
                'name' => "pizza",  // Simple name
                'category' => "pizza ",  // Categories like "Category 1" to "Category 5"
                'description' => "Description for pizza",  // Simple description
                'hotel_id' => 6  ,  // Hotel ID from 1 to 6
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);



        $foo->each(function($food){
            foods::insert($food);
        });


    }
}
