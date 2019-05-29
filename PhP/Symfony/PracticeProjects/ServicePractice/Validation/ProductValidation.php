<?php

namespace App\Validation;

use App\Entity\Product;
use App\Validation\Validator\ValidatorInterface;

class ProductValidation implements ProductValidationInterface, ValidationInterface {

    /**
     * @var ValidatorInterface
     */
    private $productValidator;

    public function __construct(ValidatorInterface $productValidator){
        $this->productValidator = $productValidator;
    }

    public function getErrors() {
        return $this->productValidator->getErrors();
    }

    public function isValid(Product $product){

        $errors = $this->productValidator->validate($product);
        return (count($errors)>0) ? false : true;
    }
}