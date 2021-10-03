<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrimoController extends AbstractController
{
    #[Route('/primo', name: 'primo')]
    public function index(): Response
    {
        return $this->render('primo/index.html.twig', [
            'controller_name' => 'PrimoController',
        ]);
    }
}
