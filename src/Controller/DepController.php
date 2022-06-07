<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DepController extends AbstractController
{
    /* Route sous forme d'annotation */
    #[Route("/departements", name:"app_dep")]
    public function dep()
    {
        /* Tableau d'informations de la page départements */
        $departements =  [
            [
                'nom' => 'Métiers du Multimédia et de l\'Internet',
                'sigle' => 'MMI',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_191.jpg',
                'presentation' => 'Le département Métiers de l’Internet et du Multimédia (anciennement Services et Réseaux de Communication) forme les acteurs de l’Internet, des médias numériques, de la communication plurimédia, de la création graphique.',
                'responsable' => 'Florent Libbrecht',
                'mail_responsable' => 'florent.libbrecht@univ-reims.fr'
            ],
            [
                'nom' => 'Gestion des Entreprises et des Administrations',
                'sigle' => 'GEA',
                'logo' => 'http://www.iut-troyes.univ-reims.fr/assets/img/logo_192.jpg',
                'presentation' => 'Le département Gestion des Entreprises et des Administrations de l’IUT de Troyes forme les étudiants à la gestion d’une entreprise ou d’une administration dans différents aspects comme la gestion comptable, financière, gestion des ressources humaines, gestion juridique et fiscale, etc…',
                'responsable' => 'Damien Blaise',
                'mail_responsable' => 'damien.blaise@univ-reims.fr'
            ],
            [
                'nom' => 'Techniques de Commercialisation',
                'sigle' => 'TC',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_193.jpg',
                'presentation' => 'Le département Techniques de Commercialisation (TC) de l’IUT de Troyes forme les étudiants aux métiers liés au commerce et au marketing dans des secteurs variés : banque, grande distribution, assurances, etc...',
                'responsable' => 'Amanda Didier',
                'mail_responsable' => 'amanda.didier@univ-reims.fr'
            ],
            [
                'nom' => 'Génie Mécanique et Productique',
                'sigle' => 'GMP',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_194.jpg',
                'presentation' => 'Le département Génie Mécanique et Productique de l’IUT de Troyes a pour vocation de former des techniciens généralistes capables d’assurer le cycle de vie d’un produit industriel, de sa conception à sa mise en production.',
                'responsable' => 'Claire Barritault',
                'mail_responsable' => 'claire.barritault@univ-reims.fr'
            ],
            [
                'nom' => 'Génie Électrique et Informatique Industrielle',
                'sigle' => 'GEII',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_195.jpg',
                'presentation' => 'Le département Génie électrique et informatique industrielle (GEII) de l’IUT de Troyes forme les étudiants aux métiers liés à la gestion de l’énergie électrique, l’informatique industriel, l’électronique ou encore l’automatisme.',
                'responsable' => 'Frédéric Morain-Nicolier',
                'mail_responsable' => 'frederic.nicolier@univ-reims.fr'
            ],
            [
                'nom' => 'Carrière Juridique',
                'sigle' => 'CJ',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_196.jpg',
                'presentation' => 'Le département Carrières Juridiques prépare les étudiants à devenir des techniciens du droit dans des domaines variés : études de notaires, d’huissiers mais aussi des cabinets d’expert-comptable ou des services de ressources humaines.',
                'responsable' => 'Gilles Darmon',
                'mail_responsable' => 'gilles.darmon@univ-reims.fr'
            ],
            [
                'nom' => 'Métiers du Multimédia et de l\'internet',
                'sigle' => 'FC',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_197.jpg',
                'presentation' => 'Ce type de formation concerne ceux qui sont rentrés dans la vie active et ont donc quitté la formation initiale (études). Elle permet aux personnes qui sont déjà dans la vie active de pouvoir continuer à se former pour améliorer leurs compétences et de s\'adapter aux nouvelles technologies, pratiques ou méthodes appliqués en entreprise.',
                'responsable' => '',
                'mail_responsable' => ''
            ]
        ];
        

        return $this->render(
            'dep.html.twig',
            /* Import du tableau sous le noms departements -> récupéré en Twig sur la page dep.html.twig */
            [
                'departements' => $departements,
            ]
        );
        
    }
}
