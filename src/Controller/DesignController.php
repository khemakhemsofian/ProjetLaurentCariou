<?php

namespace App\Controller;

use App\Entity\Design;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DesignController extends AbstractController
{
   
    #[Route('/design', name: 'app_design')]
    public function index(ManagerRegistry $manager): Response
    {
        return $this->render('base.html.twig', [
            'DesignList' => $manager->getRepository(Design::class)->findAll(),
        ]);
    }
}
