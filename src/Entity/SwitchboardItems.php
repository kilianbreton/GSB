<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SwitchboardItems
 *
 * @ORM\Table(name="switchboard items")
 * @ORM\Entity
 */
class SwitchboardItems
{
    /**
     * @var int
     *
     * @ORM\Column(name="SwitchboardID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $switchboardid;

    /**
     * @var int
     *
     * @ORM\Column(name="ItemNumber", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemnumber = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ItemText", type="string", length=255, nullable=true)
     */
    private $itemtext;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Command", type="integer", nullable=true)
     */
    private $command;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Argument", type="string", length=255, nullable=true)
     */
    private $argument;


}
