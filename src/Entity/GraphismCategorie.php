<?php

namespace App\Entity;

use App\Repository\GraphismCategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GraphismCategorieRepository::class)]
class GraphismCategorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $categorieName;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Graphism::class)]
    private $graphisms;

    public function __construct()
    {
        $this->graphisms = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorieName(): ?string
    {
        return $this->categorieName;
    }

    public function setCategorieName(string $categorieName): self
    {
        $this->categorieName = $categorieName;

        return $this;
    }

    public function __toString()
    {
    return $this->id;
    }


    /**
     * @return Collection<int, Graphism>
     */
    public function getGraphisms(): Collection
    {
        return $this->graphisms;
    }

    public function addGraphism(Graphism $graphism): self
    {
        if (!$this->graphisms->contains($graphism)) {
            $this->graphisms[] = $graphism;
            $graphism->setCategorie($this);
        }

        return $this;
    }

    public function removeGraphism(Graphism $graphism): self
    {
        if ($this->graphisms->removeElement($graphism)) {
            // set the owning side to null (unless already changed)
            if ($graphism->getCategorie() === $this) {
                $graphism->setCategorie(null);
            }
        }

        return $this;
    }
}
