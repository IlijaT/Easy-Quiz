<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function test() 
    {
        return $this->belongsTo(Test::class);
    
    }

    public function answers() 
    {
        return $this->hasMany(QuestionAnswer::class);
    
    }

    public function saveAnswers($answers, $correctAnswer) 
    {

        foreach ($answers as $key => $answer) {
            $this->answers()->create([
                'solution' => $answer,
                'is_correct' => $key == $correctAnswer ? true : false,
            ]);
        }
    
    }
}
