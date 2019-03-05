<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var string
     *
     * @ORM\Column(name="MED_DEPOTLEGAL", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $medDepotlegal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OFF_QTE", type="integer", nullable=true)
     */
    private $offQte;


}
