<?php

namespace App\Entity;

use App\Entity\Offrir;
use App\Entity\Visiteur;
use App\Entity\Praticien;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * RapportVisite
 *
 * @ORM\Table(name="rapport_visite", indexes={@ORM\Index(name="PRA_NUM", columns={"PRA_NUM"}), @ORM\Index(name="VIS_MATRICULE", columns={"VIS_MATRICULE"})})
 * @ORM\Entity
 */
class RapportVisite
{
    /**
     * @ManyToOne(targetEntity="Visiteur")
     * @JoinColumn(name="VIS_MATRICULE", referencedColumnName="VIS_MATRICULE")
     */
    private $visMatricule;

    /**
     * @var int
     *
     * @ORM\Column(name="RAP_NUM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToMany(targetEntity="App\Entity\Offrir", mappedBy="rapNum")
     */
    private $rapNum;
    /**
     * @var Praticien|null
     * @OneToOne(targetEntity="Praticien")
     * @JoinColumn(name="PRA_NUM", referencedColumnName="PRA_NUM")
     */
    private $praNum;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="RAP_DATE", type="datetime", nullable=true)
     */
    private $rapDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RAP_BILAN", type="string", length=255, nullable=true)
     */
    private $rapBilan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RAP_MOTIF", type="string", length=255, nullable=true)
     */
    private $rapMotif;
    
   /**
    * @var ArrayCollection
    * @ORM\OneToMany(targetEntity="Offrir", mappedBy="VIS_MATRICULE")
    */
    public $meds;
    /**
    * @var ArrayCollection
    * @ORM\OneToMany(targetEntity="Offrir", mappedBy="RAP_NUM")
    */
    public $meds2;


    public $totalmeds;

    public function getVisMatricule(): ?Visiteur
    {
        return $this->visMatricule;
    }

    public function getRapNum(): ?int
    {
        return $this->rapNum;
    }

    public function getPraNum(): ?Praticien
    {
        return $this->praNum;
    }

    public function setPraNum(int $praNum): self
    {
        $this->praNum = $praNum;

        return $this;
    }

    public function getRapDateStr(): string{
        return $this->rapDate->format('Y-m-d H:i:s');
    }

    public function getRapDate(): ?\DateTimeInterface
    {
        return $this->rapDate;
    }

    public function setRapDate(?\DateTimeInterface $rapDate): self
    {
        $this->rapDate = $rapDate;

        return $this;
    }

    public function getRapBilan(): ?string
    {
        return $this->rapBilan;
    }

    public function setRapBilan(?string $rapBilan): self
    {
        $this->rapBilan = $rapBilan;

        return $this;
    }

    public function getRapMotif(): ?string
    {
        return $this->rapMotif;
    }

    public function setRapMotif(?string $rapMotif): self
    {
        $this->rapMotif = $rapMotif;

        return $this;
    }

    public function getMeds() : ArrayCollection{
        return $this->meds;
    }

    public function getOffrir()
    {
        $this->totalmeds = new ArrayCollection(array_merge($this->meds->toArray(), $this->meds2->toArray()));
        return $this->totalmeds;
    }

}
