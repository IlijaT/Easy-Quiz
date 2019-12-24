<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $guarded = [];


    public function questions() 
    {
        return $this->hasMany(Question::class);
    
    }

    public function addQuestion($query) 
    {
        return $this->questions()->create([
            'query' => $query,
        ]);
    
    }

    public function numberOfQuestions() 
    {

        return $this->questions->count();
    }

    // users that participate in test
    public function users()
    {
        return $this->belongsToMany('App\Test', 'test_user')->withTimestamps();;
    }


    public function numberOfParticipants() 
    {
        return $this->users->count();
    
    }

    
}
