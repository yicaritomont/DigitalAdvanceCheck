<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Config;

class MailConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
         // Debe consultar las variables para el correo
         $MAIL_DRIVER        = "smtp";
         $MAIL_HOST          = "smtp.gmail.com";
         $MAIL_PORT          = 587;
         $MAIL_USERNAME      = "y.carolina.montes@gmail.com";
         $MAIL_PASSWORD      = "12xAmable!";
         $MAIL_FROM_ADDRESS  = "notificaciones@mediciondigital.com";


            $config = array(
                'driver'     => $MAIL_DRIVER->valor,
                'mailer'     => $MAIL_DRIVER->valor,
                'host'       => $MAIL_HOST->valor,
                'port'       => $MAIL_PORT->valor,
                'username'   => $MAIL_USERNAME->valor,
                'password'   => $MAIL_PASSWORD->valor,
                'encryption' => 'tls',
                'from'       => array('address' => $MAIL_FROM_ADDRESS->valor, 'name' => 'MMD'),
                'sendmail'   => '/usr/sbin/sendmail -bs',
                'pretend'    => false,
            );

            Config::set('mail', $config);
        
    }
}
