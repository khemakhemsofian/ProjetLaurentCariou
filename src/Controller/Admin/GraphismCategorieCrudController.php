<?php

namespace App\Controller\Admin;

use App\Entity\GraphismCategorie;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class GraphismCategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return GraphismCategorie::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('categorieName'),
            AssociationField::new('graphisms'),
        ];
    }
    
}
