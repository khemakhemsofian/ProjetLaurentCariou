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
    private $graphismName;

    #[ORM\OneToMany(mappedBy: 'graphism', targetEntity: Annonce::class)]
    private $annonces;

 

    public function __construct()
    {
        $this->annonces = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGraphismName(): ?string
    {
        return $this->graphismName;
    }

    public function setGraphismName(string $graphismName): self
    {
        $this->graphismName = $graphismName;

        return $this;
    }

    /**
     * @return Collection<int, Annonce>
     */
    public function getAnnonces(): Collection
    {
        return $this->annonces;
    }

    public function addAnnonce(Annonce $annonce): self
    {
        if (!$this->annonces->contains($annonce)) {
            $this->annonces[] = $annonce;
            $annonce->setGraphism($this);
        }

        return $this;
    }

    public function removeAnnonce(Annonce $annonce): self
    {
        if ($this->annonces->removeElement($annonce)) {
            // set the owning side to null (unless already changed)
            if ($annonce->getGraphism() === $this) {
                $annonce->setGraphism(null);
            }
        }

        return $this;
    }

   
}
