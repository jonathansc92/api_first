<?php

namespace App\Validations;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class CategoryValidator extends LaravelValidator {

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'description'  => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'description'  => 'required'
        ]
   ];

}