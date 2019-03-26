<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="medicament", indexes={@ORM\Index(name="FAM_CODE", columns={"FAM_CODE"})})
 * @ORM\Entity
 */
class Medicament
{
    /**
     * @var string
     *
     * @ORM\Column(name="MED_DEPOTLEGAL", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $medDepotlegal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MED_NOMCOMMERCIAL", type="string", length=25, nullable=true)
     */
    private $medNomcommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="FAM_CODE", type="string", length=3, nullable=false)
     */
    private $famCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MED_COMPOSITION", type="string", length=255, nullable=true)
     */
    private $medComposition;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MED_EFFETS", type="string", length=255, nullable=true)
     */
    private $medEffets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MED_CONTREINDIC", type="string", length=255, nullable=true)
     */
    private $medContreindic;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MED_PRIXECHANTILLON", type="float", precision=10, scale=0, nullable=true)
     */
    private $medPrixechantillon;
    /**
     * @return string
     */
    public function getMedDepotlegal()
    {
        return $this->medDepotlegal;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getMedNomcommercial()
    {
        return $this->medNomcommercial;
    }

    /**
     * @return string
     */
    public function getFamCode()
    {
        return $this->famCode;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getMedComposition()
    {
        return $this->medComposition;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getMedEffets()
    {
        return $this->medEffets;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getMedContreindic()
    {
        return $this->medContreindic;
    }

    /**
     * @return Ambigous <number, NULL>
     */
    public function getMedPrixechantillon()
    {
        return $this->medPrixechantillon;
    }

    /**
     * @param string $medDepotlegal
     */
    public function setMedDepotlegal($medDepotlegal)
    {
        $this->medDepotlegal = $medDepotlegal;
    }

    /**
     * @param Ambigous <string, NULL> $medNomcommercial
     */
    public function setMedNomcommercial($medNomcommercial)
    {
        $this->medNomcommercial = $medNomcommercial;
    }

    /**
     * @param string $famCode
     */
    public function setFamCode($famCode)
    {
        $this->famCode = $famCode;
    }

    /**
     * @param Ambigous <string, NULL> $medComposition
     */
    public function setMedComposition($medComposition)
    {
        $this->medComposition = $medComposition;
    }

    /**
     * @param Ambigous <string, NULL> $medEffets
     */
    public function setMedEffets($medEffets)
    {
        $this->medEffets = $medEffets;
    }

    /**
     * @param Ambigous <string, NULL> $medContreindic
     */
    public function setMedContreindic($medContreindic)
    {
        $this->medContreindic = $medContreindic;
    }

    /**
     * @param Ambigous <number, NULL> $medPrixechantillon
     */
    public function setMedPrixechantillon($medPrixechantillon)
    {
        $this->medPrixechantillon = $medPrixechantillon;
    }



}
