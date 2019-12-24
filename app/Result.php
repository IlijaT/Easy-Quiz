<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'test_user';

    public function user() 
    
    {
        return $this->belongsTo(User::class);
    
    }

    public function test() 
    {
        return $this->belongsTo(Test::class);
    
    }
}
