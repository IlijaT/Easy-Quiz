<?php

namespace App\Policies;

use App\Result;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResultPolicy
{
    use HandlesAuthorization;

   
    public function view(User $user, Result $result)
    {
        return $user->isAdmin() || $user->id === $result->user_id;
    }

   
}
