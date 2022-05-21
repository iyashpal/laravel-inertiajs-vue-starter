<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Actions\ConfirmPassword;
use Illuminate\Validation\ValidationException;

class LogoutSessionsController extends Controller
{
    /**
     * Log out from other browser sessions.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request, StatefulGuard $guard)
    {
        $confirmed = app(ConfirmPassword::class)($guard, $request->user(), $request->password);

        if (!$confirmed) {
            throw ValidationException::withMessages(['password' => __('The password is incorrect.')]);
        }

        \optional($guard, fn ($authGuard) => $authGuard->logoutOtherDevices($request->password));

        $this->deleteOtherSessionRecords($request);

        return back(303);
    }


    /**
     * Delete the other browser session records from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function deleteOtherSessionRecords(Request $request)
    {
        if (config('session.driver') !== 'database') {
            return;
        }

        DB::connection(config('session.connection'))->table(config('session.table', 'sessions'))
            ->where('user_id', $request->user()->getAuthIdentifier())
            ->where('id', '!=', $request->session()->getId())
            ->delete();
    }
}
