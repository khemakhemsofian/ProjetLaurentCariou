<?php

namespace App\Entity;

use App\Repository\GraphismRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GraphismRepository::class)]
class Graphism
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $title;

    #[ORM\Column(type: 'string', length: 10000)]
    private $description;

    #[ORM\Column(type: 'string', length: 255)]
    private $media;

    #[ORM\ManyToOne(targetEntity: GraphismCategorie::class, inversedBy: 'graphisms')]
    private $categorie;

    #[ORM\Column(type: 'string', length: 255)]
    private $media2;

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


    public function getCategorie(): ?GraphismCategorie
    {
        return $this->categorie;
    }

    public function setCategorie(?GraphismCategorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getMedia2(): ?string
    {
        return $this->media2;
    }

    public function setMedia2(string $media2): self
    {
        $this->media2 = $media2;

        return $this;
    }
   
}
