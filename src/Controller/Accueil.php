<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Accueil extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function indexAccueil(): Response
    {
        return $this->render('Accueil.html.twig');
    }
}

?>