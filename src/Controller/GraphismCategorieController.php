<?php

namespace App\Controller;

use App\Entity\DesignCategorie;
use App\Entity\GraphismCategorie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GraphismCategorieController extends AbstractController
{
    #[Route('/graphism', name: 'app_graphism')]
    public function index(ManagerRegistry $manager): Response
    {
        return $this->render('graphism/index.html.twig', [
            'GraphismCategorieList' => $manager->getRepository(GraphismCategorie::class)->findAll(),
            'DesignCategorieList' => $manager->getRepository(DesignCategorie::class)->findAll(),
        ]);
    }
}
