<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route("/", name:"app_home")]
    public function home()
    {
        $test = "It's Working !";

        return new Response(
            'Test : '.$test
        );
    }
}
