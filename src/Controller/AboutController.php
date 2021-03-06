<?php

namespace App\Controller;

use App\Entity\About;
use App\Entity\DesignCategorie;
use App\Entity\GraphismCategorie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function index(ManagerRegistry $manager): Response
    {
      
        return $this->render('about/index.html.twig', [
            'aboutPage'=>$manager->getRepository(About::class)->findAll(),
            //'fondEcranList'=>$manager->getRepository(FondEcran::class)->findAll(),
            'GraphismCategorieList' => $manager->getRepository(GraphismCategorie::class)->findAll(),
            'DesignCategorieList' => $manager->getRepository(DesignCategorie::class)->findAll(),
        ]);
    }
}
