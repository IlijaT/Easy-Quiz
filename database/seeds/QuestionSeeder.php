<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'query' => 'What is the body of water that borders Greece, Turkey and Southern Italy?',
            'test_id' => 1
        ]);

        Question::create([
            'query' => 'Which European country was reunified in 1990?',
            'test_id' => 1
        ]); 

        Question::create([
            'query' => ' What is the formal language of Libya?',
            'test_id' => 1
        ]);  
        Question::create([
            'query' => 'What is the capital of South Korea?',
            'test_id' => 1
        ]);

        Question::create([
            'query' => 'How many countries in South America',
            'test_id' => 1
        ]);



 


    }
}
