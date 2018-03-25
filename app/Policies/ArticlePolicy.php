<?php

namespace App\Policies;

use App\Article;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     * 32 урок
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function add(User $user)
    {
        foreach($user->roles as $role){
            if($role->name === 'admin'){
                return TRUE;
            }
        }

        return FALSE;
    }

    public function update(User $user, Article $article)
    {
        foreach ($user->roles as $role) {
            if($role->name === 'admin'){
                if($user->id == $article->user_id){
                    return true;
                }
            }
        }
        return false;
    }

    public function before(User $user)
    {
        foreach($user->roles as $role){
            if($role->name === 'admin'){
                return TRUE;
            }
        }

        return FALSE;
    }
}
