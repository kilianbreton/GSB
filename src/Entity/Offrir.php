<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Offrir
 *
 * @ORM\Table(name="offrir", indexes={@ORM\Index(name="VIS_MATRICULE", columns={"VIS_MATRICULE", "RAP_NUM"}), @ORM\Index(name="MED_DEPOTLEGAL", columns={"MED_DEPOTLEGAL"})})
 * @ORM\Entity
 */
class Offrir
{
    /**
     * @var string
     *
     * @ORM\Column(name="VIS_MATRICULE", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="App\Entity\RapportVisite", inversedBy="VIS_Matricule")
     *
     */
    private $visMatricule;

    /**
     * @var int
     *
     * @ORM\Column(name="RAP_NUM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="RapportVisite", inversedBy="RAP_NUM")
     * @JoinColumn(name="RAP_NUM", referencedColumnName="RAP_NUM")
     */
    private $rapNum;

    /**
     * @var string
     *
     * @ORM\Column(name="MED_DEPOTLEGAL", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="App\Entity\Medicament", inversedBy="medDepotlegal")
     */
    private $medDepotlegal;

    /**
    * @ORM\ManyToOne(targetEntity=Medicament::class)
    */
    private $offQte;

    public function getVisMatricule(): ?string
    {
        return $this->visMatricule;
    }

    public function getRapNum(): ?int
    {
        return $this->rapNum;
    }

    public function getMedDepotlegal(): ?string
    {
        return $this->medDepotlegal;
    }

    public function getOffQte(): ?int
    {
        return $this->offQte;
    }

    public function setOffQte(?int $offQte): self
    {
        $this->offQte = $offQte;

        return $this;
    }


}
