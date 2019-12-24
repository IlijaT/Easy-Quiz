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
        // Geography questions
        $geoQuestion1 = Question::create([
            'query' => 'What is the body of water that borders Greece, Turkey and Southern Italy?',
            'test_id' => 1
        ]);

        $geoQuestion1->saveAnswers(['Red Sea', 'Mediterranean Sea', 'Aegean Sea', 'Black Sea'], 2);


        $geoQuestion2 = Question::create([
            'query' => 'Which European country was reunified in 1990?',
            'test_id' => 1
        ]);

        $geoQuestion2->saveAnswers(['Austria', 'Russia', 'Yugoslavia', 'Germany'], 3);

        $geoQuestion3 = Question::create([
            'query' => 'What is the formal language of Libya?',
            'test_id' => 1
        ]);

        $geoQuestion3->saveAnswers(['Arabic', 'Turkish', 'Spanish', 'Dutch'], 0);


        $geoQuestion4 = Question::create([
            'query' => 'What is the capital of South Korea?',
            'test_id' => 1
        ]);

        $geoQuestion4->saveAnswers(['Beijing', 'Seoul', 'Phnom Penh', 'Tokio'], 1);

        $geoQuestion5 = Question::create([
            'query' => 'How many countries in South America?',
            'test_id' => 1
        ]);

        $geoQuestion5->saveAnswers(['15', '14', '20', '9'], 0);
       
 
        // Film questions
        $movieQuestion1 = Question::create([
            'query' => 'Who is director of “Schindler’s List”?',
            'test_id' => 2
        ]);

        
        $movieQuestion1->saveAnswers(['Martin Scorsese', 'Steven Spielberg', 'Terrence Malick', 'David Lynch'], 1);
        
        $movieQuestion2 = Question::create([
            'query' => 'Where did Harry Potter go to school??',
            'test_id' => 2
        ]);
                
        $movieQuestion2->saveAnswers(['Neverland', 'Dreamland', 'Hogwarts', 'Mordor'], 2);


        $movieQuestion3 = Question::create([
            'query' => 'What island is Jurassic Park on?',
            'test_id' => 2
        ]);

        $movieQuestion3->saveAnswers(['Isla Cruces', 'Isla Fisher', 'Isla Fritos', 'Isla Nublar'], 3);

        $movieQuestion4 = Question::create([
            'query' => 'Who plays the Joker in The Dark Knight?',
            'test_id' => 2
        ]);

        $movieQuestion4->saveAnswers(['Joaquin Phoenix', 'Pete Holmes', 'Heath Ledger', 'Jake Gyllenhaal'], 2);

        $movieQuestion5 = Question::create([
            'query' => 'Which movie was Edward Norton in?',
            'test_id' => 2
        ]);
        $movieQuestion5->saveAnswers(['Fight Club', 'The Big Lebowski', 'The Sixth Sense', 'Jurassic Park'], 0);
 
        

    }
}
