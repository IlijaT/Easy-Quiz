<?php

use Illuminate\Database\Seeder;
use App\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::create([
            'title' => 'Geography quiz',
            'description' => 'Level Medium',
            'creator_id' => 1
        ]);

        Test::create([
            'title' => 'Film quiz',
            'description' => 'Easy Level',
            'creator_id' => 1
        ]);

        Test::create([
            'title' => 'Quiz About Serbia',
            'description' => 'Interesting quiz about Serbia',
            'creator_id' => 1
        ]);
    }
}
