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
        $film = array(
            array(
                'name' => 'Tangled',
                'description' => 'Rapunzel, an innocent, young girl, is locked up by her overly protective mother. Her wish to escape into the world outside finally comes true when she meets the good-hearted thief, Flynn.',
                'release_date' => '01-21-2011',
                'rating' => '3',
                'ticket_price' => '20.0',
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
