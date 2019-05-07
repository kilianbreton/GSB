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
     * @ORM\ManyToOne(targetEntity="App\Entity\RapportVisite", inversedBy="meds")
     *
     */
    private $visMatricule;

    /**
     * @var int
     *
     * @ORM\Column(name="RAP_NUM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="RapportVisite", inversedBy="meds")
     * @JoinColumn(name="RAP_NUM", referencedColumnName="RAP_NUM")
     */
    private $rapNum;

    /**
     *  @var Medicament|null
     *
     * @ORM\Column(name="MED_DEPOTLEGAL", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="RapportVisite", inversedBy="meds")
     */
    private $medDepotlegal;

    /**
     * @var int
     * @ORM\Column(name="OFF_QTE", type="integer")
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
    
    public function setMedDepotLegal(string $med) : self
    {
        $this->medDepotlegal = $med;
        return $this;
    }

    
    public function setVisMatricule(string $mat) : self
    {
        $this->visMatricule = $mat;
        return $this;
    }

    public function setRapNum(int $num) : self
    {
        $this->rapNum = $num;
        return $this;
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
