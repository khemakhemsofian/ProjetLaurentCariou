<?php

namespace App\Controller\Admin;

use App\Entity\DesignCategorie;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class DesignCategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DesignCategorie::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('categorieName'),
            AssociationField::new('designs'),
        ];
    }
    
}
