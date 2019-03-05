<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dosage
 *
 * @ORM\Table(name="dosage")
 * @ORM\Entity
 */
class Dosage
{
    /**
     * @var string
     *
     * @ORM\Column(name="DOS_CODE", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dosCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DOS_QUANTITE", type="string", length=10, nullable=true)
     */
    private $dosQuantite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DOS_UNITE", type="string", length=10, nullable=true)
     */
    private $dosUnite;


}
