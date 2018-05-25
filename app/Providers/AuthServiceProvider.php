<?php

namespace App\Providers;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
use App\Article;
use App\Policies\ArticlePolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',
        //32 урок
        Article::class => ArticlePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();

        //31 урок
        //$gate->define('add-article', ClassName@func);
        $gate->define('add-article', function(User $user){
            foreach($user->roles as $role){
                if($role->name === 'admin'){
                    return TRUE;
                }
            }

            return FALSE;
        });
/*
        $gate->define('update-article', function(User $user, $article){
            foreach ($user->roles as $role) {
                if($role->name === 'admin'){
                    if($user->id == $article->user_id){
                        return true;
                    }
                }
            }
            return false;
        });*/
    }
}
