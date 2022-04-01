<?php

namespace App\Controller;



use App\Entity\Design;
use App\Entity\DesignCategorie;
use App\Entity\GraphismCategorie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DesignController extends AbstractController
{
    #[Route('/design', name: 'app_design')]
    public function index(ManagerRegistry $manager): Response
    {
        return $this->render('design/index.html.twig', [
            'DesignList' => $manager->getRepository(Design::class)->findAll(),
            'GraphismCategorieList' => $manager->getRepository(GraphismCategorie::class)->findAll(),
            'DesignCategorieList' => $manager->getRepository(DesignCategorie::class)->findAll(),
        ]);
    }
  
}
