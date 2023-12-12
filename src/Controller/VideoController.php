<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoController extends AbstractController
{
    #[Route("/video", name: "app_video")]
    public function articles(): Response
    {
        $articles = [
            [
                'title' => 'Premier Article',
                'text' => 'Ceci est le texte du premier article.',
                'date' => new \DateTime('2023-01-01'),
            ],
            [
                'title' => 'Deuxième Article',
                'text' => 'Voici le contenu du deuxième article.',
                'date' => new \DateTime('2023-02-01'),
            ],
            [
                'title' => 'Troisième Article',
                'text' => 'Le troisième article a du texte ici.',
                'date' => new \DateTime('2023-03-01'),
            ],
        ];

        return $this->render('video/index.html.twig', ['articles' => $articles]);
    }
}