<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FilmGenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $film_genre = array(
            array(
                'film_id' => 1,
                'genre_id' => 5,
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            ),
            array(
                'film_id' => 1,
                'genre_id' => 4,
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            ),
            array(
                'film_id' => 2,
                'genre_id' => 3,
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            ),
            array(
                'film_id' => 3,
                'genre_id' => 3,
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            ),
            array(
                'film_id' => 3,
                'genre_id' => 4,
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            )
        );
        DB::table('film_genre')->insert($film_genre);
    }
}
