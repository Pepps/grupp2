<?php
// file: app/database/seeds/quizsTableSeeder.php

use Faker\Factory as Faker;

class QuizTableSeeder extends Seeder {

    public function run()
    {
        // going 'Faker' :) on the quiz table.
        $faker = Faker::create();
        for($i = 1; $i <= 15 ; $i++)
        {
            $quiz = new Quiz;
            $quiz->question = preg_replace('/\.$/', '?', $faker->sentence());
            $quiz->save();
            foreach ($faker->words as $option) {
                $stat = new Stat;
                $stat->option = $option;
                $stat->vote_count = 0;
                $quiz->stats()->save($stat);
            }
        }
    }

}
