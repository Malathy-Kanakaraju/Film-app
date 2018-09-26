<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = array(
            array(
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => '$2y$10$lmDyuXItXgP.v8w9wd5JAOEUg.jrKHtK8sS6sqMAiUvL9t.5bxOM.',
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            )
        );
        DB::table('users')->insert($user);
    }
}
