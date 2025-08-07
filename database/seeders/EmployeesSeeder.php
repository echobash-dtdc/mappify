<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'name' => 'Ali Anwar',
                'description' => 'DEV',
                'image' => null,
                'latitude' => '18.921984',
                'longitude' => '72.834654',
                'type' => 'Platform',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kritika Thakur',
                'description' => 'DEV',
                'image' => null,
                'latitude' => '28.612912',
                'longitude' => '77.229509',
                'type' => 'Platform',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aditya Rathi',
                'description' => 'DEV',
                'image' => null,
                'latitude' => '17.3616',
                'longitude' => '78.4747',
                'type' => 'Platform',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chandan',
                'description' => 'DEV',
                'image' => null,
                'latitude' => '27.1751',
                'longitude' => '78.0421',
                'type' => 'Platform',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Puneet',
                'description' => 'DEV',
                'image' => null,
                'latitude' => '12.9987',
                'longitude' => '77.5920',
                'type' => 'Platform',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Satyam',
                'description' => 'QA',
                'image' => null,
                'latitude' => '12.9987',
                'longitude' => '77.5920',
                'type' => 'Platform',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ritika',
                'description' => 'QA',
                'image' => null,
                'latitude' => '12.9987',
                'longitude' => '77.5920',
                'type' => 'Platform',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Anulekha',
                'description' => 'Product',
                'image' => null,
                'latitude' => '12.9987',
                'longitude' => '77.5920',
                'type' => 'Platform',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vijay',
                'description' => 'Product',
                'image' => null,
                'latitude' => '12.9987',
                'longitude' => '77.5920',
                'type' => 'Platform',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Suhail',
                'description' => 'Product',
                'image' => null,
                'latitude' => '12.9987',
                'longitude' => '77.5920',
                'type' => 'Platform',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
