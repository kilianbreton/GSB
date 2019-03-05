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


}
