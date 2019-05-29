<?php

namespace App\Validation;

use App\Entity\User;
use App\Validation\Validator\ValidatorInterface;

class UserValidation implements UserValidationInterface, ValidationInterface {

    /**
     * @var ValidatorInterface
     */
    private $userValidator;

    public function __construct(ValidatorInterface $userValidator){
        $this->userValidator = $userValidator;
    }

    public function getErrors(){
        return $this->userValidator->getErrors();
    }

    public function isValid(User $user){

        $errors = $this->userValidator->validate($user);
        return (count($errors)>0) ? false : true;
    }
 }