<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Contracts\DeletesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Actions\ConfirmPassword;
use Illuminate\Validation\ValidationException;

class DeleteAccountsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, StatefulGuard $guard)
    {
        $confirmed = app(ConfirmPassword::class)($guard, $request->user(), $request->password);

        if (!$confirmed) {
            throw ValidationException::withMessages([
                'password' => __('The password is incorrect.'),
            ]);
        }

        app(DeletesUsers::class)->delete($request->user()->fresh());

        $guard->logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return Inertia::location(url('/'));
    }
}
