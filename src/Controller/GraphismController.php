<?php

namespace App\Controller;


use App\Entity\Graphism;
use App\Entity\DesignCategorie;
use App\Entity\GraphismCategorie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GraphismController extends AbstractController
{
    #[Route('/graphism', name: 'app_graphism')]
    public function index(ManagerRegistry $manager, Request $request): Response
    {
        if ($request->get("page")>1) {
            $index = (intval($request->get("page"))-1)*4;
         } else {
            $index = 0;
         }
        return $this->render('graphism/index.html.twig', [
            'GraphismList'=> $manager->getRepository(Graphism::class)->findByGraphismId($index),
            'GraphismCategorieList' => $manager->getRepository(GraphismCategorie::class)->findAll(),
            'DesignCategorieList' => $manager->getRepository(DesignCategorie::class)->findAll(),
        ]);
    }
}
