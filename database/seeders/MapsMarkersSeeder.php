<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapsMarkersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('maps_markers')->insert([
            [
                'name' => 'Gateway of India',
                'description' => 'Historic monument in Mumbai',
                'image' => null,
                'latitude' => '18.921984',
                'longitude' => '72.834654',
                'type' => 'Monument',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'India Gate',
                'description' => 'Famous war memorial in Delhi',
                'image' => null,
                'latitude' => '28.612912',
                'longitude' => '77.229509',
                'type' => 'Monument',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Charminar',
                'description' => 'Iconic structure in Hyderabad',
                'image' => null,
                'latitude' => '17.3616',
                'longitude' => '78.4747',
                'type' => 'Monument',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Taj Mahal',
                'description' => 'Famous mausoleum in Agra',
                'image' => null,
                'latitude' => '27.1751',
                'longitude' => '78.0421',
                'type' => 'Monument',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bangalore Palace',
                'description' => 'Historic palace in Bangalore',
                'image' => null,
                'latitude' => '12.9987',
                'longitude' => '77.5920',
                'type' => 'Palace',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

