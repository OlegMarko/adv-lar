<?php

namespace App\Providers;

use App\Policies\SubscribePolicy;
use App\User;
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
        User::class => SubscribePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('subscribe-only', 'App\Policies\SubscribePolicy@subscribeOnly');

//        Gate::resource('post', 'PostPolicy', [
//            'post.premium' => 'updatePhoto'
//        ]);
    }
}
