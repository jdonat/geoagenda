<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GreetingsController extends AbstractController
{
    #[Route('/', name: 'app_greetings')]
    public function index(): Response
    {
        return $this->render('greetings/index.html.twig', [
            'controller_name' => 'GreetingsController',
        ]);
    }
}
