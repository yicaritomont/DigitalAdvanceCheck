<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ContainsAnswer implements Rule
{
    public function passes($attribute, $value)
    {
        // Verifica si al menos una clave contiene la palabra "answer"
        foreach ($value as $key => $item) {
            if (strpos($key, 'answer') !== false) {
                return true;
            }
        }
        return false;
    }

    public function message()
    {
        return 'Debe seleccionar al menos una respuesta.';
    }
}