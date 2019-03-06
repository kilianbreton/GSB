<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteur
 *
 * @ORM\Table(name="secteur")
 * @ORM\Entity
 */
class Secteur
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEC_CODE", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $secCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SEC_LIBELLE", type="string", length=15, nullable=true)
     */
    private $secLibelle;


}