<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'Sport',
                'description' => 'Sports news',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Theart',
                'description' => 'Theater news',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kitchen',
                'description' => 'Kitchen news',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Politics',
                'description' => 'Political news',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Games',
                'description' => 'Game news',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
