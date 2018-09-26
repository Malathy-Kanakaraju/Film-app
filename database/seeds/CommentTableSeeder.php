<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $comments = array(
            array(
                'name' => 'user1',
                'comment' => 'Its a relief to see that Disney can still conjure up a princess movie to rival its all-time greats. ',
                'film_id' => 1,
                'user_id' => 1,
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'user1',
                'comment' => 'You wont mind seeing the Titanic sink all over again - in 3D exactly a hundred years from the moment it actually happened',
                'film_id' => 3,
                'user_id' => 1,
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'user1',
                'comment' => 'Well-balanced, extremely relevant and combined with a strong message, Wonder is a wholesome family entertainer that is worth your time',
                'film_id' => 2,
                'user_id' => 1,
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_by' => 1,
                'updated_at' => Carbon::now()
            )
        );
        DB::table('comments')->insert($comments);
    }

}
