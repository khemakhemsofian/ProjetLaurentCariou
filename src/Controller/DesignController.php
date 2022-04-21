<?php

namespace App\Controller;



use App\Entity\Design;
use App\Entity\DesignCategorie;
use App\Entity\GraphismCategorie;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DesignController extends AbstractController
{
    /*
    -crée une methode single dans dessing categorie controller
    -récupérer l'id de la catégorie
    -utiliser la méthode find(id de design categorie)
    */ 
    #[Route('/design', name: 'app_design')]
    public function index(ManagerRegistry $manager, Request $request,): Response
    {
       
        if ($request->get("page")>1) {
            $index = (intval($request->get("page"))-1)*4;
         } else {
            $index = 0;
         }
      
       
        
        return $this->render('design/index.html.twig', [
            'DesignList' => $manager->getRepository(Design::class)->findByDesignId($index),
            'GraphismCategorieList' => $manager->getRepository(GraphismCategorie::class)->findAll(),
            'DesignCategorieList' => $manager->getRepository(DesignCategorie::class)->findAll(),
        ]);
    }
  
}
