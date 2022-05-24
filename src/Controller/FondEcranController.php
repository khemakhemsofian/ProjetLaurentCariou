<?php

namespace App\Controller;


use App\Entity\FondEcran;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FondEcranController extends AbstractController
{
    #[Route('/fond/ecran', name: 'app_fond_ecran')]
    public function index(ManagerRegistry $manager): Response
    {
      $fondEcran = $manager->getRepository(FondEcran::class)->findAll();
      // dd($fondEcran);

      // return new JsonResponse(
      //   $fondEcran
      // );
      return $this->json([
          $fondEcran
      ]);
  }
}
