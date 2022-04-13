<?php

namespace App\Entity;



use Doctrine\ORM\Mapping as ORM;
use App\Repository\DesignRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: DesignRepository::class)]
class Design
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $title;

    #[ORM\Column(type: 'string', length: 255)]
    private $description;

    #[ORM\Column(type: 'string', length: 255)]
    private $media;

    #[ORM\ManyToOne(targetEntity: DesignCategorie::class, inversedBy: 'designs')]
    private $categorie;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setMedia(string $media): self
    {
        $this->media = $media;

        return $this;
    }

    public function __toString()
    {
    return $this->id;
    }


    public function getCategorie(): ?DesignCategorie
    {
        return $this->categorie;
    }

    public function setCategorie(?DesignCategorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

   
}
