<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'sapi',
                'description' => 'Daging sapi segar dan berkualitas',
            ],
            [
                'name' => 'ayam',
                'description' => 'Daging ayam segar dan berkualitas',
            ],
            [
                'name' => 'ikan',
                'description' => 'Daging ikan segar dan berkualitas',
            ],
            [
                'name' => 'snacks',
                'description' => 'Bermacam snacks untuk pendamping BBQ',
            ],
        ]);
    }
}
