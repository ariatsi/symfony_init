<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        //return new Response('Bienvenue sur ma première page Symfony ! (index)');

        return $this->render('accueil.html.twig', ['message' => 'Bienvenue sur ma première page Symfony!']);
         
        /*
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);*/
    }
}
