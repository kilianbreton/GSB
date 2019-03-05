<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RapportVisite
 *
 * @ORM\Table(name="rapport_visite", indexes={@ORM\Index(name="PRA_NUM", columns={"PRA_NUM"}), @ORM\Index(name="VIS_MATRICULE", columns={"VIS_MATRICULE"})})
 * @ORM\Entity
 */
class RapportVisite
{
    /**
     * @var string
     *
     * @ORM\Column(name="VIS_MATRICULE", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $visMatricule;

    /**
     * @var int
     *
     * @ORM\Column(name="RAP_NUM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rapNum;

    /**
     * @var int
     *
     * @ORM\Column(name="PRA_NUM", type="integer", nullable=false)
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


}
