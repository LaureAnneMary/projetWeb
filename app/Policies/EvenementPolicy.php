<?php

namespace App\Policies;

use App\User;
use App\Evenement;
use Illuminate\Auth\Access\HandlesAuthorization;

class EvenementPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the evenement.
     *
     * @param  \App\User  $user
     * @param  \App\Evenement  $evenement
     * @return mixed
     */
    public function view(User $user, Evenement $evenement)
    {
        return true;
    }

    /**
     * Determine whether the user can create evenements.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the evenement.
     *
     * @param  \App\User  $user
     * @param  \App\Evenement  $evenement
     * @return mixed
     */
    public function update(User $user, Evenement $evenement)
    {
        return $user->rang_utilisateur->intitule == 'MembreBDE';
    }

    /**
     * Determine whether the user can delete the evenement.
     *
     * @param  \App\User  $user
     * @param  \App\Evenement  $evenement
     * @return mixed
     */
    public function delete(User $user, Evenement $evenement)
    {
        return $user->rang_utilisateur->intitule == 'MembreBDE';
    }
}
