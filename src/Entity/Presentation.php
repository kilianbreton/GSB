<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presentation
 *
 * @ORM\Table(name="presentation")
 * @ORM\Entity
 */
class Presentation
{
    /**
     * @var string
     *
     * @ORM\Column(name="PRE_CODE", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $preCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRE_LIBELLE", type="string", length=20, nullable=true)
     */
    private $preLibelle;


}
