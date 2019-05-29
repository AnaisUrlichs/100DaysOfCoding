<?php

namespace App\Validation;

use App\Entity\Product;

interface ProductValidationInterface {

    public function isValid(Product $product);


}