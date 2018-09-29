<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = array(
            array(
                'name' => 'Comedy',
                'description' => 'Comedy',
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Action',
                'description' => 'Action',
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Drama',
                'description' => 'Drama',
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Romance',
                'description' => 'Romance',
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Animation',
                'description' => 'Animation',
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            )
        );
        DB::table('genres')->insert($genres);
    }
}
