<?php

namespace App\Entity;

use App\Repository\DesignRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DesignRepository::class)]
class Design
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $meca;

    #[ORM\Column(type: 'string', length: 50)]
    private $car;

    #[ORM\Column(type: 'string', length: 50)]
    private $guns;

    #[ORM\OneToMany(mappedBy: 'design', targetEntity: Annonce::class)]
    private $annonces;

    public function __construct()
    {
        $this->annonces = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMeca(): ?string
    {
        return $this->meca;
    }

    public function setMeca(string $meca): self
    {
        $this->meca = $meca;

        return $this;
    }

    public function getCar(): ?string
    {
        return $this->car;
    }

    public function setCar(string $car): self
    {
        $this->car = $car;

        return $this;
    }

    public function getGuns(): ?string
    {
        return $this->guns;
    }

    public function setGuns(string $guns): self
    {
        $this->guns = $guns;

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
            $annonce->setDesign($this);
        }

        return $this;
    }

    public function removeAnnonce(Annonce $annonce): self
    {
        if ($this->annonces->removeElement($annonce)) {
            // set the owning side to null (unless already changed)
            if ($annonce->getDesign() === $this) {
                $annonce->setDesign(null);
            }
        }

        return $this;
    }
}
