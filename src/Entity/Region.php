<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region", indexes={@ORM\Index(name="SEC_CODE", columns={"SEC_CODE"})})
 * @ORM\Entity
 */
class Region
{
    /**
     * @var string
     *
     * @ORM\Column(name="REG_CODE", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $regCode;

    /**
     * @var string
     *
     * @ORM\Column(name="SEC_CODE", type="string", length=1, nullable=false)
     */
    private $secCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="REG_NOM", type="string", length=50, nullable=true)
     */
    private $regNom;


}
