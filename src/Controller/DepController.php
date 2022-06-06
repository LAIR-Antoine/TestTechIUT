<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DepController extends AbstractController
{
    #[Route("/", name:"app_dep")]
    public function dep()
    {

        return $this->render(
            'dep.html.twig'
        );
        
    }
}
