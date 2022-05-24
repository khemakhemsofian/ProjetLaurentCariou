<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\DesignCategorie;
use App\Entity\GraphismCategorie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(ManagerRegistry $manager): Response
    {
        return $this->render('contact/index.html.twig', [
            'contactPage' => $manager->getRepository(Contact::class)->findAll(),
            //'fondEcranList'=>$manager->getRepository(FondEcran::class)->findAll(),
            'GraphismCategorieList' => $manager->getRepository(GraphismCategorie::class)->findAll(),
            'DesignCategorieList' => $manager->getRepository(DesignCategorie::class)->findAll(),
        ]);
    }
}
