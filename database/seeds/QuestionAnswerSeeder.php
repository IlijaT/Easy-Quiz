<?php

use Illuminate\Database\Seeder;
use App\QuestionAnswer;

class QuestionAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // question 1
        QuestionAnswer::create([
            'solution' => 'Red Sea',
            'question_id' => 1,
        ]);
        QuestionAnswer::create([
            'solution' => 'Mediterranean Sea',
            'question_id' => 1,
        ]);
        QuestionAnswer::create([
            'solution' => 'Aegean Sea',
            'question_id' => 1,
            'is_correct' => true
        ]);
        QuestionAnswer::create([
            'solution' => 'Black Sea',
            'question_id' => 1,
        ]); 

        // question 2
        QuestionAnswer::create([
            'solution' => 'Austria',
            'question_id' => 2,
        ]);

        QuestionAnswer::create([
            'solution' => 'Russia',
            'question_id' => 2,
        ]);
        
        QuestionAnswer::create([
            'solution' => 'Yugoslavia',
            'question_id' => 2,
        ]);
        
        QuestionAnswer::create([
            'solution' => 'Germany',
            'question_id' => 2,
            'is_correct' => true
        ]);

        // question 3
        QuestionAnswer::create([
            'solution' => 'Arabic',
            'question_id' => 3,
            'is_correct' => true
        ]);

        QuestionAnswer::create([
            'solution' => 'Serbian',
            'question_id' => 3,
        ]);

        QuestionAnswer::create([
            'solution' => 'Dutch',
            'question_id' => 3,
        ]);

        QuestionAnswer::create([
            'solution' => 'Spanish',
            'question_id' => 3,
        ]);


        // question 4
        QuestionAnswer::create([
            'solution' => 'Beijing',
            'question_id' => 4,
        ]);

        QuestionAnswer::create([
            'solution' => 'Seoul',
            'question_id' => 4,
            'is_correct' => true
        ]);

        QuestionAnswer::create([
            'solution' => 'Phnom Penh',
            'question_id' => 4,
        ]);

        QuestionAnswer::create([
            'solution' => 'Tokio',
            'question_id' => 4,
        ]);


        // question 5
        QuestionAnswer::create([
            'solution' => '20',
            'question_id' => 5,
        ]);

        QuestionAnswer::create([
            'solution' => '15',
            'question_id' => 5,
            'is_correct' => true
        ]);

        QuestionAnswer::create([
            'solution' => '14',
            'question_id' => 5,
        ]);

        QuestionAnswer::create([
            'solution' => '12',
            'question_id' => 5,
        ]);

    }
}
