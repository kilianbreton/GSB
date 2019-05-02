<?php

namespace App\Entity;

use Serializable;
use App\Entity\Labo;
use App\Entity\Secteur;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Visiteur
 *
 * @ORM\Table(name="visiteur", indexes={@ORM\Index(name="SEC_CODE", columns={"SEC_CODE"}), @ORM\Index(name="LAB_CODE", columns={"LAB_CODE"})})
 * @ORM\Entity
 */
class Visiteur implements UserInterface,\Serializable
{
      /**
     * @var string
     *
     * @ORM\Column(name="VIS_MATRICULE", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToMany(targetEntity="App\Entity\RapportVisite", mappedBy="visMatricule")
     * @ORM\OneToMany(targetEntity="App\Entity\Realiser", mappedBy="visMatricule")
     * @ORM\OneToMany(targetEntity="App\Entity\Travailler", mappedBy="visMatricule")
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

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Roles;

   
   
  
    public function getVisMatricule(): ?string
    {
        return $this->visMatricule;
    }

    public function setVisMatricule(Visiteur $vismat){
        $this->visMatricule = $vismat->getVisMatricule();
    }

    public function getVisLogin(): ?string
    {
        return $this->visLogin;
    }

    public function setVisLogin(string $visLogin): self
    {
        $this->visLogin = $visLogin;

        return $this;
    }

    public function getVisNom(): ?string
    {
        return $this->visNom;
    }

    public function setVisNom(?string $visNom): self
    {
        $this->visNom = $visNom;

        return $this;
    }

    public function getVisPrenom(): ?string
    {
        return $this->visPrenom;
    }

    public function setVisPrenom(?string $visPrenom): self
    {
        $this->visPrenom = $visPrenom;

        return $this;
    }

    public function getVisAdresse(): ?string
    {
        return $this->visAdresse;
    }

    public function setVisAdresse(?string $visAdresse): self
    {
        $this->visAdresse = $visAdresse;

        return $this;
    }

    public function getVisCp(): ?string
    {
        return $this->visCp;
    }

    public function setVisCp(?string $visCp): self
    {
        $this->visCp = $visCp;

        return $this;
    }

    public function getVisVille(): ?string
    {
        return $this->visVille;
    }

    public function setVisVille(?string $visVille): self
    {
        $this->visVille = $visVille;

        return $this;
    }

    public function getVisDateembauche(): ?\DateTimeInterface
    {
        return $this->visDateembauche;
    }

    public function getVisDateembaucheStr(): String
    {
        return $this->visDateembauche->format('Y-m-d H:i:s');
    }


    public function setVisDateembauche(?\DateTime $visDateembauche): self
    {
        $this->visDateembauche = $visDateembauche;

        return $this;
    }

    public function getVisPassword(): ?string
    {
        return $this->visPassword;
    }

    public function setVisPassword(string $visPassword): self
    {
        $this->visPassword = $visPassword;

        return $this;
    }

    public function getVisSalt(): ?string
    {
        return $this->visSalt;
    }

    public function setVisSalt(string $visSalt): self
    {
        $this->visSalt = $visSalt;
        return $this;
    }

    public function setSecCode(?Secteur $secCode): self
    {
        $this->secCode = $secCode->getSecCode();
        return $this;
    }

    public function setLabCode(Labo $labCode): self
    {
        $this->labCode = $labCode->getLabCode();
        return $this;
    }

    public function getLabCode() : ?string{
        return $this->labCode;
    }

    public function getSecCode() {
        return $this->secCode;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////
    // UserInterface ////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////

    public function getRoles(){
        if($this->Roles == 'ROLE_ADMIN')
            return [$this->Roles, 'ROLE_USER'];
        else
            return [$this->Roles];
    }

    public function getUsername(){
        return $this->visLogin;
    }

    public function getSalt(){
        //return $this->visSalt;
        return null;
    }


    public function getPassword(){
        return $this->visPassword;
    }

    public function eraseCredentials(){

    }


    
    //////////////////////////////////////////////////////////////////////////////////////////////////
    // Serialisation ////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////

    public function serialize(){
        return serialize([
            $this->visMatricule,
            $this->visLogin,
            $this->visPassword
        ]);
    }

    public function unserialize($serialized){
        list(
            $this->visMatricule,
            $this->visLogin,
            $this->visPassword
        ) = \unserialize($serialized, ['allowed_classes' => false]);
    }

  
  

    public function setRoles(?string $Roles): self
    {
        $this->Roles = $Roles;

        return $this;
    }
}