<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VisiteurRepository")
 */
class Visiteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $VIS_MATRICULE;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVISMATRICULE(): ?string
    {
        return $this->VIS_MATRICULE;
    }

    public function setVISMATRICULE(string $VIS_MATRICULE): self
    {
        $this->VIS_MATRICULE = $VIS_MATRICULE;

        return $this;
    }
}
