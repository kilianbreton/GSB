<?php

namespace App\Entity;

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
     */
    private $typCode;
    /**
     * @return number
     */
    
    public function getPraNum()
    {
        return $this->praNum;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getPraNom()
    {
        return $this->praNom;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getPraPrenom()
    {
        return $this->praPrenom;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getPraAdresse()
    {
        return $this->praAdresse;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getPraCp()
    {
        return $this->praCp;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getPraVille()
    {
        return $this->praVille;
    }

    /**
     * @return Ambigous <number, NULL>
     */
    public function getPraCoefnotoriete()
    {
        return $this->praCoefnotoriete;
    }

    /**
     * @return string
     */
    public function getTypCode()
    {
        return $this->typCode;
    }

    /**
     * @param number $praNum
     */
    public function setPraNum($praNum)
    {
        $this->praNum = $praNum;
    }

    /**
     * @param Ambigous <string, NULL> $praNom
     */
    public function setPraNom($praNom)
    {
        $this->praNom = $praNom;
    }

    /**
     * @param Ambigous <string, NULL> $praPrenom
     */
    public function setPraPrenom($praPrenom)
    {
        $this->praPrenom = $praPrenom;
    }

    /**
     * @param Ambigous <string, NULL> $praAdresse
     */
    public function setPraAdresse($praAdresse)
    {
        $this->praAdresse = $praAdresse;
    }

    /**
     * @param Ambigous <string, NULL> $praCp
     */
    public function setPraCp($praCp)
    {
        $this->praCp = $praCp;
    }

    /**
     * @param Ambigous <string, NULL> $praVille
     */
    public function setPraVille($praVille)
    {
        $this->praVille = $praVille;
    }

    /**
     * @param Ambigous <number, NULL> $praCoefnotoriete
     */
    public function setPraCoefnotoriete($praCoefnotoriete)
    {
        $this->praCoefnotoriete = $praCoefnotoriete;
    }

    /**
     * @param string $typCode
     */
    public function setTypCode($typCode)
    {
        $this->typCode = $typCode;
    }



}
