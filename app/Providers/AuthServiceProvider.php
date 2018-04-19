<?php

namespace App\Providers;

use App\Evenement;
use App\Policies\EvenementPolicy;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Evenement::class => EvenementPolicy::class,
        Commentaire::class => CommentairePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('permission',function(User $user){
            return $user->rang_utilisateur->intitule == 'MembreBDE';
        });

    }
}
