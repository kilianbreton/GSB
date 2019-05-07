<?php

namespace App\Entity;

use DateTime;
use App\Entity\Offrir;
use App\Entity\Visiteur;
use App\Entity\Praticien;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use App\Repository\OffrirRepository;
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
    public function __construct(){
        $this->rapDate = new \DateTime();
    }



    /**
     * @ORM\Column(name="VIS_MATRICULE", type="string", length=10, nullable=false)
     * @ManyToOne(targetEntity="Visiteur")
     * @JoinColumn(name="VIS_MATRICULE", referencedColumnName="VIS_MATRICULE")
     */
    private $visMatricule;

    /**
     * @var int
     * @ORM\Column(name="RAP_NUM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rapNum;

    /**
     * @var int|null
     * @ORM\Column(name="PRA_NUM", type="integer", nullable=false)
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
    * 
    * @ORM\OneToMany(targetEntity="Offrir", mappedBy="MED_DEPOTLEGAL", indexBy="RAP_NUM")
    * @var Offrir[]
    */
    public $meds;

    private $dataToParse;

    public function getData() : ?string{
        return $this->dataToParse;
    }

    public function setData(string $data){
        $this->dataToParse = $data;
    }


    public $totalmeds;

    public function getVisMatricule(): ?string
    {
        return $this->visMatricule;
    }

    public function getRapNum(): ?int
    {
        return $this->rapNum;
    }

    public function setRapNum(int $num){
        $this->rapNum = $num;
    }

    public function getPraNum(): ?int
    {
        return $this->praNum;
    }

    public function setPraNum(?Praticien $praNum): self
    {
        $this->praNum = $praNum->getPraNum();

        return $this;
    }

    public function getRapDateStr(): string{
        return $this->rapDate->format('Y-m-d H:i:s');
    }

    public function getRapDate(): string
    {
        return $this->rapDate->format('Y-m-d H:i:s');;
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

    public function getMeds(EntityRepository $repo) : array{

        return $repo->findByVisRap($this->rapNum,$this->visMatricule);
    }

    public function setVisMatricule(?Visiteur $vismat){
        $this->visMatricule = $vismat->getVisMatricule();
    }
/*
    public function getOffrir()
    {
        $this->totalmeds = new ArrayCollection(array_merge($this->meds->toArray(), $this->meds2->toArray()));
        return $this->totalmeds;
    }
*/
}
