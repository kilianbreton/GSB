<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visiteur
 *
 * @ORM\Table(name="visiteur", indexes={@ORM\Index(name="SEC_CODE", columns={"SEC_CODE"}), @ORM\Index(name="LAB_CODE", columns={"LAB_CODE"})})
 * @ORM\Entity
 */
class Visiteur
{
    /**
     * @var string
     *
     * @ORM\Column(name="VIS_MATRICULE", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $visMatricule;

    /**
     * @var string
     *
     * @ORM\Column(name="VIS_LOGIN", type="string", length=32, nullable=false)
     */
    private $visLogin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VIS_NOM", type="string", length=25, nullable=true)
     */
    private $visNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Vis_PRENOM", type="string", length=50, nullable=true)
     */
    private $visPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VIS_ADRESSE", type="string", length=50, nullable=true)
     */
    private $visAdresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VIS_CP", type="string", length=5, nullable=true)
     */
    private $visCp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VIS_VILLE", type="string", length=30, nullable=true)
     */
    private $visVille;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="VIS_DATEEMBAUCHE", type="datetime", nullable=true)
     */
    private $visDateembauche;

    /**
     * @var string
     *
     * @ORM\Column(name="VIS_PASSWORD", type="string", length=64, nullable=false)
     */
    private $visPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="VIS_SALT", type="string", length=255, nullable=false)
     */
    private $visSalt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SEC_CODE", type="string", length=1, nullable=true)
     */
    private $secCode;

    /**
     * @var string
     * 
     * @ORM\Column(name="LAB_CODE", type="string", length=2, nullable=false)
     */
    private $labCode;

    public function getMat()
    {
        return $this->visMatricule;
    }
    public function getLogin()
    {
        return $this->visLogin;
    }
    public function getNom()
    {
        return $this->visNom;
    }
    public function getPrenom()
    {
        return $this->visPrenom;
    }
    public function getAdresse()
    {
        return $this->visAdresse;
    }
   
    public function getCp()
    {
        return $this->visCp;
    }
  
    public function getVille()
    {
        return $this->visVille;
    }
   
    public function getDateEmbauche()
    {
        //return $this->visDateembauche;
        return "";
    }

    public function getPassword()
    {
        return $this->visPassword;
    }
   
    public function getSalt()
    {
        return $this->visSalt;
    }
  
    public function getLabCode()
    {
        return $this->labCode;
    }
   
    public function getSecCode()
    {
        return $this->secCode;
    }
}
