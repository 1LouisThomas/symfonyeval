<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditerController extends AbstractController
{
    #[Route("/editer", name: "app_editer")]
    public function articles(): Response
    {
        return $this->render('editer/index.html.twig');
    }
}