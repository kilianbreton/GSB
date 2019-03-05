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


}
