<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
       /* Config::set('mail.host', $settings->smtp_host);
        Config::set('mail.port', $settings->smtp_port);
        Config::set('mail.from.address', $settings->email_sender);
        Config::set('mail.encryption', $settings->smtp_encryption);
        Config::set('mail.username', $settings->smtp_username);
        Config::set('mail.password', $settings->smtp_password); */
    }
}
