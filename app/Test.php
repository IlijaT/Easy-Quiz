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

    
}
