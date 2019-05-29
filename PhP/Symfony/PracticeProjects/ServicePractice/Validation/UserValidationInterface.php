<?php

namespace App\Validation;

use App\Entity\User;

interface UserValidationInterface {

    public function isValid(User $user);


}