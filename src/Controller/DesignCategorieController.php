<?php

namespace App\Controller;

use App\Entity\DesignCategorie;
use App\Entity\GraphismCategorie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DesignCategorieController extends AbstractController
{
   
    public function index(ManagerRegistry $manager): Response
    {
        
      
     
        return $this->render('design/index.html.twig', [
            'DesignCategorieList' => $manager->getRepository(DesignCategorie::class)->findAll(),
            'GraphismCategorieList' => $manager->getRepository(GraphismCategorie::class)->findAll(),
        ]);
    }
}
