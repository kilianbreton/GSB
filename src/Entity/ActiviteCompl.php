<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActiviteCompl
 *
 * @ORM\Table(name="activite_compl")
 * @ORM\Entity
 */
class ActiviteCompl
{
    /**
     * @var int
     *
     * @ORM\Column(name="AC_NUM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $acNum;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="AC_DATE", type="datetime", nullable=true)
     */
    private $acDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AC_LIEU", type="string", length=25, nullable=true)
     */
    private $acLieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AC_THEME", type="string", length=10, nullable=true)
     */
    private $acTheme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AC_MOTIF", type="string", length=50, nullable=true)
     */
    private $acMotif;


}
