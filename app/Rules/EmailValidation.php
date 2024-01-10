<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class EmailValidation implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        
        // Validate email
            if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                //$fail("$value est une adresse email valide");
            } else {
                $fail("$value n'est pas une adresse email valide");
            }
       
    }
}