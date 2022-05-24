<?php

namespace App\Controller;


use App\Entity\Graphism;
use App\Entity\DesignCategorie;
use App\Entity\GraphismCategorie;
use App\Repository\GraphismRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GraphismController extends AbstractController
{
    #[Route('/graphism', name: 'app_graphism')]
    #[Route('/graphism/{categorieName}', name: 'app_graphism')]
    public function index(ManagerRegistry $manager,PaginatorInterface $paginator,GraphismRepository $graphismRepository, Request $request,$categorieName=null): Response
    {
        $data =  $graphismRepository->findByGraphismCatégorie($categorieName);
        $graphismPage = $paginator->paginate(
            $data,
            $request->query->getInt('page',1),4
        );
        return $this->render('graphism/index.html.twig', [
            'GraphismPage'=> $graphismPage,
            //'fondEcranList'=>$manager->getRepository(FondEcran::class)->findAll(),
            'GraphismCategorieList' => $manager->getRepository(GraphismCategorie::class)->findAll(),
            'DesignCategorieList' => $manager->getRepository(DesignCategorie::class)->findAll(),
        ]);
    }
}
