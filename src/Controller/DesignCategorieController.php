<?php

namespace App\Controller;

use App\Entity\DesignCategorie;
use App\Entity\GraphismCategorie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DesignCategorieController extends AbstractController
{
    #[Route('/design/{id}', name: 'app_design')]
    public function index(ManagerRegistry $manager, $id): Response
    {
        return $this->render('design/index.html.twig', [
            'DesignCategorieList' => $manager->getRepository(DesignCategorie::class)->find($id),
            'GraphismCategorieList' => $manager->getRepository(GraphismCategorie::class)->findAll(),
        ]);
    }
}
