<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
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
        Schema::defaultStringLength(191);
        
        Model::unguard();

        Gate::define('admin', function (User $user) {
            return $user->isAdmin();
        });

        Gate::define('seller', function (User $user) {
            return $user->isSeller() && $user->is_active != 0;
        });

        Gate::define('customer', function (User $user) {
            return $user->isCustomer() && $user->is_active != 0;
        });
    }
}
