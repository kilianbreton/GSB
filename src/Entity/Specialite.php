<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialite
 *
 * @ORM\Table(name="specialite")
 * @ORM\Entity
 */
class Specialite
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPE_CODE", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $speCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SPE_LIBELLE", type="string", length=150, nullable=true)
     */
    private $speLibelle;


}
