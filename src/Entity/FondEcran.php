<?php

namespace App\Entity;

use App\Repository\FondEcranRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FondEcranRepository::class)]
class FondEcran
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $imageEcran;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageEcran(): ?string
    {
        return $this->imageEcran;
    }

    public function setImageEcran(string $imageEcran): self
    {
        $this->imageEcran = $imageEcran;

        return $this;
    }
}
