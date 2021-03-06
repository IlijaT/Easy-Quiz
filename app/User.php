<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'role_id', 'password', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role() 
    {
        return $this->belongsTo(Role::class);
    
    }

    public function questionAnswers()
    {
        return $this->belongsToMany('App\QuestionAnswer', 'user_question_answer')->withTimestamps();
    }

    // tests that user participate in
    public function tests()
    {
        return $this->belongsToMany('App\Test', 'test_user')->withTimestamps();
    }



    public function submitAnswers($questionWithAnswers) 
    {

        $test = Question::findOrFail(array_key_first($questionWithAnswers))->test;
        $numberOfCorrectAnswers = 0;
        
        foreach ($questionWithAnswers as $questionId => $answerId) {
            
            if (QuestionAnswer::find($answerId)->is_correct) $numberOfCorrectAnswers ++;
            
            $this->questionAnswers()->attach($answerId, 
                [
                    'question_id' => $questionId,
                    'test_id' => $test->id
                ]);
        }
        
        $numberOfQuestions = count($questionWithAnswers);
        $score = ($numberOfCorrectAnswers / $test->numberOfQuestions()) * 100;
        $this->tests()->attach($test->id, ['score' => $score]);
        
        return $score;
    }


    public function isAdmin() 
    {
        if(! $this->role) {
            return false;
        }
        
        return $this->role->name == 'admin';
    
    }
}
