<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
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
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Tradução emails

        // VerifyEmail::toMailUsing(function($notifiable, $url){
        //     return (new MailMessage)
        //     ->subject('Verifique seu E-mail')
        //     ->line('Por favor clique no link abaixo para verificar seu e-mail')
        //     ->action('Verifique seu e-mail', $url)
        //     ->line('Se você não criou uma conta, nenhuma ação é requerida!');
        // });

        // ResetPassword::toMailUsing(function($notifiable, $url){
        //     return (new MailMessage)
        //     ->subject('Notificação de reset de senha')
        //     ->line(Lang::get('Please click the button below to verify your email address.'))
        //     ->action(Lang::get('Verify Email Address'), $url)
        //     ->line(Lang::get('If you did not create an account, no further action is required.'));
        //     ->line(Lang::get('If you did not create an account, no further action is required.'));
        // });
    }
}
