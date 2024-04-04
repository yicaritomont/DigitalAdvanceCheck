<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;

class Sendemail
{
    public static function Send($datos, $plantilla)
    {
        Mail::send($plantilla,array('datos'=>$datos), function($message) use ($datos)
        {
            $message->to($datos['email'], $datos['name'])->subject($datos['subject']);
        });
    }
}
