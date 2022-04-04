<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use App\Repository\DesignCategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;


#[ORM\Entity(repositoryClass: DesignCategorieRepository::class)]
class DesignCategorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $categorieName;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Design::class)]
    private $designs;

    public function __construct()
    {
        $this->designs = new ArrayCollection();
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
     * @return Collection<int, Design>
     */
    public function getDesigns(): Collection
    {
        return $this->designs;
    }

    public function addDesign(Design $design): self
    {
        if (!$this->designs->contains($design)) {
           
            $this->designs[] = $design;
            $design->setCategorie($this);
        }

        return $this;
    }

    public function removeDesign(Design $design): self
    {
        if ($this->designs->removeElement($design)) {
            // set the owning side to null (unless already changed)
            if ($design->getCategorie() === $this) {
                $design->setCategorie(null);
            }
        }

        return $this;
    }
}
