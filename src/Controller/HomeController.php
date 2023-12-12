<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Video;

class HomeController extends AbstractController
{
    #[Route("/home", name: "app_home")]
    public function articles(EntityManagerInterface $entityManager)
{
    $post = new Post(); // initialise l'entité
    $post->setTitle('Mon titre'); // on set les différents champs
    $post->setEnable(true);
    $post->setDateCreated(new \Datetime);

    $entityManager->persist( $post ); // on déclare une modification de type persist et la génération des différents liens entre entité
    $entityManager->flush(); // on effectue les différentes modifications sur la base de données 
    // réelle

    return new Response('Sauvegarde OK sur : ' . $post->getId() );
}
}