<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DepController extends AbstractController
{
    #[Route("/departements", name:"app_dep")]
    public function dep()
    {
        $departements =  [
            [
                'nom' => 'Métiers du Multimédia et de l\'internet',
                'sigle' => 'MMI',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_191.jpg',
                'presentation' => 'Le département Métiers de l’Internet et du Multimédia (anciennement Services et Réseaux de Communication) forme les acteurs de l’Internet, des médias numériques, de la communication plurimédia, de la création graphique.',
                'responsable' => 'Florent Libbrecht',
                'mail_responsable' => 'florent.libbrecht@univ-reims.fr'
            ],
            [
                'nom' => 'Carrière Juridique',
                'sigle' => 'CJ',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_196.jpg',
                'presentation' => 'Le département Carrières Juridiques prépare les étudiants à devenir des techniciens du droit dans des domaines variés : études de notaires, d’huissiers mais aussi des cabinets d’expert-comptable ou des services de ressources humaines.',
                'responsable' => 'Gilles Darmon',
                'mail_responsable' => 'gilles.darmon@univ-reims.fr'
            ]
        ];
        

        return $this->render(
            'dep.html.twig',
            [
                'departements' => $departements,
            ]
        );
        
    }
}
