<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'title' => 'The Shawshank Redemption',
                'genre' => 'Drama',
                'director' => 'Frank Darabont',
                'release_year' => '1994',
                'rating' => '9.3',
            ],
            [
                'title' => 'The Godfather',
                'genre' => 'Crime, Drama',
                'director' => 'Francis Ford Coppola',
                'release_year' => '1972',
                'rating' => '9.2',
            ],
            [
                'title' => 'Forrest Gump',
                'genre' => 'Romantic, Drama',
                'director' => 'Robert Zemeckis',
                'release_year' => '1994',
                'rating' => '8.8',
            ],
            [
                'title' => 'Triangle',
                'genre' => 'Thriller, Misteri',
                'director' => 'Christopher Smith',
                'release_year' => '2009',
                'rating' => '6.9',
            ],
            [
                'title' => 'The Hottie and the Nottie',
                'genre' => 'Comedy, Romantic',
                'director' => 'Tom Putnam',
                'release_year' => '2008',
                'rating' => '2.0',
            ],
        ]);
    }
}