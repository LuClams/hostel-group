<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    //#[Route('/home', name: 'app_home')]
    public function app_home(): Response
    {
        return //new Response('<body><h1>Welcome at Home !</h1></body>');
            $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
