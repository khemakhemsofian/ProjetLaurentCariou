<?php

namespace App\Controller;

use App\Entity\DesignCategorie;
use App\Entity\GraphismCategorie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
   

    #[Route('/', name:'app_main')]
    public function index(ManagerRegistry $manager): Response
    {
        return $this->render('main/index.html.twig', [
            'DesignCategorieList' => $manager->getRepository(DesignCategorie::class)->findAll(),
            'GraphismCategorieList' => $manager->getRepository(GraphismCategorie::class)->findAll(),
        ]);
    }
 
}
