<?php
// file: app/database/seeds/PollsTableSeeder.php

use Faker\Factory as Faker;

class PollsTableSeeder extends Seeder {

    public function run()
    {
        // going 'Faker' :) on the polls table.
        $faker = Faker::create();
        for($i = 1; $i <= 15 ; $i++)
        {
            $poll = new Poll;
            $poll->question = preg_replace('/\.$/', '?', $faker->sentence());
            $poll->save();
            foreach ($faker->words as $option) {
                $stat = new Stat;
                $stat->option = $option;
                $stat->vote_count = 0;
                $poll->stats()->save($stat);
            }
        }
    }

}
