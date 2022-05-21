<?php

namespace App\Actions\Auth;

use App\Contracts\DeletesUsers;
use Illuminate\Support\Facades\DB;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     *
     * @param  mixed  $user
     * @return void
     */
    public function delete($user)
    {
        DB::transaction(function () use ($user) {
            $user->tokens->each->delete();
            $user->delete();
        });
    }
}
