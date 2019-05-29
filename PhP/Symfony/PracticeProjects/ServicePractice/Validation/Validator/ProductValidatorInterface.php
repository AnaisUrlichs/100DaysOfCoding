<?php

namespace App\Validation\Validator;

use App\Entity\Product;

interface ProductValidatorInterface{

    public function validate(Product $product);
}
