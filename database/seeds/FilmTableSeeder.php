<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $film = array(
            array(
                'name' => 'Tangled',
                'description' => 'Rapunzel, an innocent, young girl, is locked up by her overly protective mother. Her wish to escape into the world outside finally comes true when she meets the good-hearted thief, Flynn.',
                'release_date' => '2011-01-21',
                'rating' => '3',
                'ticket_price' => '20.0',
                'country' => 'United States of America',
                'photo' => 'test',
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Wonder',
                'description' => 'WONDER tells the incredibly inspiring and heartwarming story of August Pullman, a boy with facial differences.',
                'release_date' => '2017-11-14',
                'rating' => '4',
                'ticket_price' => '22.50',
                'country' => 'United States of America',
                'photo' => 'test',
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Titanic',
                'description' => 'Seventeen-year-old Rose hails from an aristocratic family and is set to be married. When she boards the Titanic, she meets Jack Dawson, an artist, and falls in love with him.',
                'release_date' => '1997-11-18',
                'rating' => '3',
                'ticket_price' => '12.50',
                'country' => 'United States of America',
                'photo' => 'test',
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            )
        );
        DB::table('films')->insert($film);
    }
}
