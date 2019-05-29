<?php

namespace App\Validation\Validator;

use App\Entity\User;
use Monolog\Logger;

class AdminValidator extends UserValidator {

    /**
     * @var
     */
    private $minPasswordLength;

    /**
     * @var Logger
     */
    private $logger;

    public function setLogger(Logger $logger){
        $this->logger = $logger;
        return $this;
    }

    /**
     * AdminValidator constructor.
     * @param $minPasswordLength
     */
    public function __construct($minPasswordLength){
        $this->minPasswordLength = $minPasswordLength;
    }

    public function validate(User $user) {

        parent::validate($user);

        if(strlen($user->getPassword()) < $this->minPasswordLength){
            $message = 'Please have a better password';
            $this->errors[] = 'Your password is too short';
            $this->logger->info($message);
        }

        return $this->errors;
    }
}
