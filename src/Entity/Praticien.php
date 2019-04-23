<?php

namespace App\Entity;

use App\Entity\TypePraticien;
use Doctrine\ORM\Mapping as ORM;

/**
 * Praticien
 *
 * @ORM\Table(name="praticien", indexes={@ORM\Index(name="TYP_CODE", columns={"TYP_CODE"})})
 * @ORM\Entity
 */
class Praticien
{
    /**
     * @var int
     *
     * @ORM\Column(name="PRA_NUM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToMany(targetEntity="App\Entity\Inviter", mappedBy="praNum")
     * @ORM\OneToMany(targetEntity="App\Entity\RapportVisite", mappedBy="praNum")
     * @ORM\OneToMany(targetEntity="App\Entity\Posseder", mappedBy="praNum")
     */
    private $praNum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRA_NOM", type="string", length=25, nullable=true)
     */
    private $praNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRA_PRENOM", type="string", length=30, nullable=true)
     */
    private $praPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRA_ADRESSE", type="string", length=50, nullable=true)
     */
    private $praAdresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRA_CP", type="string", length=5, nullable=true)
     */
    private $praCp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRA_VILLE", type="string", length=25, nullable=true)
     */
    private $praVille;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PRA_COEFNOTORIETE", type="float", precision=10, scale=0, nullable=true)
     */
    private $praCoefnotoriete;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_CODE", type="string", length=3, nullable=false)
     * @ORM\ManyToOne(targetEntity="App\Entity\TypePraticien", inversedBy="typCode")
     */
    private $typCode;

    public function getPraNum(): ?int
    {
        return $this->praNum;
    }

    public function getPraNom(): ?string
    {
        return $this->praNom;
    }

    public function setPraNom(?string $praNom): self
    {
        $this->praNom = $praNom;

        return $this;
    }

    public function getPraPrenom(): ?string
    {
        return $this->praPrenom;
    }

    public function setPraPrenom(?string $praPrenom): self
    {
        $this->praPrenom = $praPrenom;

        return $this;
    }

    public function getPraAdresse(): ?string
    {
        return $this->praAdresse;
    }

    public function setPraAdresse(?string $praAdresse): self
    {
        $this->praAdresse = $praAdresse;

        return $this;
    }

    public function getPraCp(): ?string
    {
        return $this->praCp;
    }

    public function setPraCp(?string $praCp): self
    {
        $this->praCp = $praCp;

        return $this;
    }

    public function getPraVille(): ?string
    {
        return $this->praVille;
    }

    public function setPraVille(?string $praVille): self
    {
        $this->praVille = $praVille;

        return $this;
    }

    public function getPraCoefnotoriete(): ?float
    {
        return $this->praCoefnotoriete;
    }

    public function setPraCoefnotoriete(?float $praCoefnotoriete): self
    {
        $this->praCoefnotoriete = $praCoefnotoriete;

        return $this;
    }

    
    public function getTypCode(): ?string
    {
        return $this->typCode;
    }


    public function setTypCode(TypePraticien $typCode): self
    {
        $this->typCode = $typCode->getTypCode();

        return $this;
    }


}
