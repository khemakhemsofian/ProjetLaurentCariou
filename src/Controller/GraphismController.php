<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GraphismController extends AbstractController
{
    #[Route('/graphism', name: 'app_graphism')]
    public function index(): Response
    {
        return $this->render('graphism/index.html.twig', [
            'controller_name' => 'GraphismController',
        ]);
    }
}
