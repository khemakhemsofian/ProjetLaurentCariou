<?php

namespace App\Controller\Admin;

use App\Entity\About;
use App\Entity\Admin;
use App\Entity\Design;
use App\Entity\Contact;
use App\Entity\Graphism;
use App\Entity\DesignCategorie;
use App\Entity\GraphismCategorie;
use App\Controller\Admin\AdminCrudController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        if ( $this->IsGranted("ROLE_ADMIN")) {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(AdminCrudController::class)->generateUrl());
        return parent::index();
    }
        

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
       

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        //return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Project');
    }

    public function configureMenuItems(): iterable
    {
        if($this->getUser() && $this->isGranted('ROLE_ADMIN') ) {
            yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
            yield MenuItem::linkToCrud('admin', 'fas fa-list', Admin::class);
            yield MenuItem::linkToCrud('graphism', 'fas fa-list', Graphism::class);
            yield MenuItem::linkToCrud('graphismCategorie', 'fas fa-list', GraphismCategorie::class);
            yield MenuItem::linkToCrud('design', 'fas fa-list', Design::class);
            yield MenuItem::linkToCrud('designCategorie', 'fas fa-list', DesignCategorie::class);
            yield MenuItem::linkToCrud('contact', 'fas fa-list', Contact::class);  
            yield MenuItem::linkToCrud('about me', 'fas fa-list', About::class);
        }
        
    }
}
