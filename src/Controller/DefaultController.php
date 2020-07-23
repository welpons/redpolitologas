<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function hello()
    {
        $def = 'hello';

        return new JsonResponse(['foo' => $def]);
    }
}