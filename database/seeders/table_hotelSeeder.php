<?php

namespace Database\Seeders;

use App\Models\table_hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class table_hotelSeeder extends Seeder
{

    public function run(): void
    {
        $hotels = collect([
            [
                'Hetel_name'=>"Greeb Navaj",
                'address'=>'bhilad',
                'phone'=>'9104045985',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Hetel_name'=>"Greeraj",
                'address'=>'vasai',
                'phone'=>'8495726483',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Hetel_name'=>"Gatway",
                'address'=>'virar',
                'phone'=>'9285034285',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Hetel_name'=>"Taj Hottel",
                'address'=>'mumbai',
                'phone'=>'4859375395',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Hetel_name'=>"Bhnushali",
                'address'=>'CSMT',
                'phone'=>'4820593853',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'Hetel_name'=>"Gulshan",
                'address'=>'Charchgate',
                'phone'=>'9485736583',
                'created_at' => now(),
                'updated_at' => now()
            ]
            ]);

            $hotels->each(function($hotel){
                table_hotel::insert($hotel);
            });
        // table_hotel::create([
        //     'Hetel_name'=>"Gribnavaj",
        //     'address'=>'bhilad',
        //     'phone'=>'9104045985'
        // ]);
    }
}
