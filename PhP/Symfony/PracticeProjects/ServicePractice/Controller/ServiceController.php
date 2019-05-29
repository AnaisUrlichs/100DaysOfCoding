<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\User;
use App\Validation\ProductValidation;
use App\Validation\UserValidation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(Request $request, UserValidation $userValidation, ProductValidation $productValidation)
    {
        $html = '';

        $user = new User();
        $user->setFirstName('Peter')
            ->setLastName('Fisher')
            ->setPassword('abc')
        ;

        $product = new Product();
        $product->setTitle('Foo')
        ->setDescription('This is a foo product')
            ->setPrice('1.99')
        ;

        $userValidation->isValid($user);
        $html .='IS USER VALID: '. json_encode($userValidation->isValid($user)). '</br>';

        if(false === $userValidation->isValid($user)){
            foreach($userValidation->getErrors() as $error){
                $html .= $error. '<br />';
            }
        }

        $productValidation->isValid($product);
        $html .='IS PRODUCT VALID: '. json_encode($productValidation->isValid($product)). '</br>';

        return $this->render('service/index.html.twig', [
            'html'=> $html
        ]);
    }
}
