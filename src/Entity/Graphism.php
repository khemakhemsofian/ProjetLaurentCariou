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

    #[ORM\Column(type: 'string', length: 50)]
    private $stiker;

    #[ORM\Column(type: 'string', length: 50)]
    private $motion;

    #[ORM\Column(type: 'string', length: 50)]
    private $overlay;

    #[ORM\Column(type: 'string', length: 50)]
    private $logo;

    #[ORM\Column(type: 'string', length: 50)]
    private $banner;

    #[ORM\Column(type: 'string', length: 50)]
    private $custom_clothe;

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

    public function getStiker(): ?string
    {
        return $this->stiker;
    }

    public function setStiker(string $stiker): self
    {
        $this->stiker = $stiker;

        return $this;
    }

    public function getMotion(): ?string
    {
        return $this->motion;
    }

    public function setMotion(string $motion): self
    {
        $this->motion = $motion;

        return $this;
    }

    public function getOverlay(): ?string
    {
        return $this->overlay;
    }

    public function setOverlay(string $overlay): self
    {
        $this->overlay = $overlay;

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

    public function getBanner(): ?string
    {
        return $this->banner;
    }

    public function setBanner(string $banner): self
    {
        $this->banner = $banner;

        return $this;
    }

    public function getCustomClothe(): ?string
    {
        return $this->custom_clothe;
    }

    public function setCustomClothe(string $custom_clothe): self
    {
        $this->custom_clothe = $custom_clothe;

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
