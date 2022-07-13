<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Gate;

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
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        VerifyEmail::toMailUsing(function ($norifiliable, $url) {
            return (new MailMessage)
                ->subject('Verificar Cuenta')
                ->line('Tu cuenta ya esta lista, solo debes presionar el siguiente enlace')
                ->action('Confirmar Cuenta', $url)
                ->line('Si no create esta cuenta, puedes ignorar este mensaje');
        });
    }
}
