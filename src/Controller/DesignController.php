<?php

namespace App\Controller;



use App\Entity\Design;
use App\Entity\DesignCategorie;
use App\Entity\GraphismCategorie;
use App\Repository\DesignRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DesignController extends AbstractController
{
   
    #[Route('/design', name: 'app_design')]
    #[Route('/design/{categorieName}', name: 'app_design')]
    public function index(ManagerRegistry $manager,PaginatorInterface $paginator,DesignRepository $designRepository,Request $request, $categorieName=null): Response
    {
        $data = $designRepository->findAll();
        $designPage = $paginator->paginate(
            $data,
            $request->query->getInt('page',1),4
        );
        $designPage->findByDesignCategorie($categorieName);
       
    
      
       
        
        return $this->render('design/index.html.twig', [
            'DesignPage'=> $designPage,
            'DesignList' => $manager->getRepository(Design::class)->findByDesignCategorie($categorieName),
            'GraphismCategorieList' => $manager->getRepository(GraphismCategorie::class)->findAll(),
            'DesignCategorieList' => $manager->getRepository(DesignCategorie::class)->findAll(),
        ]);
    }
  
}
