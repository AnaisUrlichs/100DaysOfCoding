<?php

namespace App\Validation\Validator;

use App\Entity\Product;

class ProductValidator implements ProductValidatorInterface, ValidatorInterface {

    private $errors = [];

    public function getErrors() {
        return $this->errors;
    }


    public function validate(Product $product) {

        if(empty($product->getTitle())){
            $this->errors[] = 'Please add the product title';
        }

        if(empty($product->getDescription())){
            $this->errors[] = 'Please add the product description';
        }

        if(empty($product->getPrice())){
            $this->errors[] = 'Please add a price';
        }

        return $this->errors;
    }
}