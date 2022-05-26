<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $titre;

    #[ORM\Column(type: 'string', length: 10000)]
    private $description;

    #[ORM\Column(type: 'string', length: 150)]
    private $lienreseau;

    #[ORM\Column(type: 'string', length: 100)]
    private $mail;

    #[ORM\Column(type: 'string', length: 255)]
    private $logo;

    public function getId(): ?int
    {
        return $this->id;
    }

  
    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLienReseau()
    {
        return $this->lienreseau;
    }
    public function setLienReseau($lienreseau): self
    {
        $this->lienreseau = $lienreseau;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

   
    

  
    
}
