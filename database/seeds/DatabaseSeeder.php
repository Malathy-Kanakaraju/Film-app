<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(GenreTableSeeder::class);
        $this->call(FilmTableSeeder::class);
        $this->call(FilmGenreTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        
    }
}
