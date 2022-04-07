<?php

namespace App\Controller\Admin;

use App\Entity\Design;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\File;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DesignCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Design::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
           
            TextField::new('title'),
            TextEditorField::new('description'),
           /* ImageField::new('media')->setUploadDir('public/upload')->setBasePath('upload/'),*/
           ImageField:: new('media')
           ->setBasePath('upload/')
           ->setUploadDir('public/upload/')
           ->setUploadedFileNamePattern('[randomhash].[extension]'),
            AssociationField::new('categorie'),
        ];
    }
    
   /* public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $image = new File ($entityInstance->getMedia());
        $imageName = md5(uniqid()) . '.' .$image->guessExtension();
        $image->move(
             $this->getParameter('upload_files'),
            $imageName
        );
        
        $entityInstance->setMedia($imageName);
        $entityManager->persist($entityInstance);
        $entityManager->flush();
    }
   
     public function UpdateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if ($entityInstance->getMedia()) {
            $entityInstance->setMedia(
                new File($this->getParameter('upload_files') . '/' . $entityInstance->getMedia())
            );
        }
        $image = new File ($entityInstance->getMedia());
         $imageName = md5(uniqid()) . '.' . $image->guessExtension();
        $image->move(
            $this->getParameter('upload_files'),
            $imageName
        );
        $entityInstance->setMedia($imageName);
        $entityManager->persist($entityInstance);
        $entityManager->flush();
        
    }*/
}
