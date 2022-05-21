<?php

namespace App\Providers;

use App\Contracts\DeletesUsers;
use App\Actions\Auth\DeleteUser;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton(DeletesUsers::class, DeleteUser::class);
    }


    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
