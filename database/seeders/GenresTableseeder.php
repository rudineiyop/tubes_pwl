<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('genres')->truncate();

        \DB::table('genres')->insert([
            [
                'name' => "Horror",
                'slug' => "horror",
            ],
            [
                'name' => "Fantasy",
                'slug' => "fantasy",
            ],
            [
                'name' => "Comedy",
                'slug' => "comedy",
            ],
            [
                'name' => "Romance",
                'slug' => "romance",
            ],
            [
                'name' => "Adventure",
                'slug' => "adventure",
            ],
            [
                'name' => "History",
                'slug' => "history",
            ],
        ]);
    }
}
