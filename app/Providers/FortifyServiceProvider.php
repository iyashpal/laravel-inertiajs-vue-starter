<?php

namespace App\Providers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use App\Actions\Auth\CreateNewUser;
use Illuminate\Support\Facades\Route;
use App\Actions\Auth\ResetUserPassword;
use Illuminate\Support\ServiceProvider;
use App\Actions\Auth\UpdateUserPassword;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use App\Actions\Auth\UpdateUserProfileInformation;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Fortify Actions
        $this->bootFortifyActions();

        if (config('fortify.stack') === 'inertia') {
            // Setup auth views for fortify.
            $this->bootInertia();
        }

        // Auth Rate Limiter
        $this->bootRouteRateLimiter();
    }

    protected function bootFortifyActions()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);
    }

    /**
     * Boot any Inertia related services.
     *
     * @return void
     */
    protected function bootInertia()
    {
        Fortify::loginView(function () {
            return Inertia::render('Auth/Login', [
                'canResetPassword' => Route::has('password.request'),
                'status' => session('status'),
            ]);
        });


        Fortify::registerView(function () {
            return Inertia::render('Auth/Register');
        });


        Fortify::verifyEmailView(function () {
            return Inertia::render('Auth/VerifyEmail', [
                'status' => session('status'),
            ]);
        });


        Fortify::resetPasswordView(function (Request $request) {
            return Inertia::render('Auth/ResetPassword', [
                'email' => $request->input('email'),
                'token' => $request->route('token'),
            ]);
        });


        Fortify::confirmPasswordView(function () {
            return Inertia::render('Auth/ConfirmPassword');
        });


        Fortify::twoFactorChallengeView(function () {
            return Inertia::render('Auth/TwoFactorChallenge');
        });


        Fortify::requestPasswordResetLinkView(function () {
            return Inertia::render('Auth/ForgotPassword', [
                'status' => session('status'),
            ]);
        });
    }



    /**
     * Boot fortify route rate limiter.
     * 
     * @return void
     */
    protected function bootRouteRateLimiter()
    {
        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email . $request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
