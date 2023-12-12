<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjouterController extends AbstractController
{
    #[Route("/ajouter", name: "app_ajouter")]
    public function articles(): Response
    {
        return $this->render('ajouter/ajouter.html.twig');
    }
}