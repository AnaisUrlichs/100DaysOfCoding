<?php

namespace App\Validation\Validator;

use App\Entity\User;

class UserValidator implements UserValidatorInterface, ValidatorInterface {

    protected $errors = [];

    public function getErrors() {
        return $this->errors;
    }


    public function validate(User $user) {
        if(empty($user->getFirstName())){
            $this->errors[] = 'Please add a first name';
        }

        if(empty($user->getLastName())){
            $this->errors[] = 'Please add a first name';
        }

        return $this->errors;
    }
}