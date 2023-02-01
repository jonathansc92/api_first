<?php

namespace App\Validations;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class BookValidator extends LaravelValidator {

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'title' => 'required',
            'description'  => 'required',
            'author_id'=> 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'title' => 'required',
            'description'  => 'required',
            'author_id'=> 'required'        ]
   ];

}