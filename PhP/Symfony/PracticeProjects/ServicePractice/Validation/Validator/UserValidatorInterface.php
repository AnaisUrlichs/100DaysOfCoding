<?php

namespace App\Validation\Validator;

use App\Entity\User;

interface UserValidatorInterface{

    public function validate(User $user);
}
