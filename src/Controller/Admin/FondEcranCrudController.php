<?php

namespace App\Controller\Admin;

use App\Entity\FondEcran;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FondEcranCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return FondEcran::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField:: new('imageEcran')
            ->setBasePath('upload/')
            ->setUploadDir('public/upload/')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
        ];
    }
    
}
