<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController {

    public function hello() {
        return new Response("Hello World !");
    }

    public function goodBye() {
        return $this->redirectToRoute('accueil');

    }

    public function redirectToGoogle() {
        return $this->redirect('https://google.com');
        
    }

    public function showtemplate() {
        return $this->render('base.html.twig',[]);
    }

    public function showProducts(Request $request) {
        $parameter = $request->query->get('product');
        $parameters = $request->query->all();
        dump($parameters);
        return new Response($parameter);
    }
}