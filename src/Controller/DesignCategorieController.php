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
   
    public function index(ManagerRegistry $manager,Request $request, DesignCategorie $categorie=null): Response
    {
        dump($categorie);
        die;
        if ($request->get("id")>1) {
            $index = (intval($request->get("id"))-1)*4;
         } else {
            $index = 0;
         }
        return $this->render('design/index.html.twig', [
            //'DesignCategorieList' => $manager->getRepository(DesignCategorie::class)->find(),
            'GraphismCategorieList' => $manager->getRepository(GraphismCategorie::class)->findAll(),
        ]);
    }
}
