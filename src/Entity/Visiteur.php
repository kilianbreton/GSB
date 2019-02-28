<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VisiteurRepository")
 */
class Visiteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $vis_matricule;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $vis_login;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $vis_nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $vis_prenom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $vis_adresse;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $vis_cp;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $vis_ville;

    /**
     * @ORM\Column(type="datetime")
     */
    private $vis_dateembauche;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $vis_password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vis_salt;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $sec_code;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $lab_code;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVisMatricule(): ?string
    {
        return $this->vis_matricule;
    }

    public function setVisMatricule(string $vis_matricule): self
    {
        $this->vis_matricule = $vis_matricule;

        return $this;
    }

    public function getVisLogin(): ?string
    {
        return $this->vis_login;
    }

    public function setVisLogin(string $vis_login): self
    {
        $this->vis_login = $vis_login;

        return $this;
    }

    public function getVisNom(): ?string
    {
        return $this->vis_nom;
    }

    public function setVisNom(string $vis_nom): self
    {
        $this->vis_nom = $vis_nom;

        return $this;
    }

    public function getVisPrenom(): ?string
    {
        return $this->vis_prenom;
    }

    public function setVisPrenom(string $vis_prenom): self
    {
        $this->vis_prenom = $vis_prenom;

        return $this;
    }

    public function getVisAdresse(): ?string
    {
        return $this->vis_adresse;
    }

    public function setVisAdresse(string $vis_adresse): self
    {
        $this->vis_adresse = $vis_adresse;

        return $this;
    }

    public function getVisCp(): ?string
    {
        return $this->vis_cp;
    }

    public function setVisCp(string $vis_cp): self
    {
        $this->vis_cp = $vis_cp;

        return $this;
    }

    public function getVisVille(): ?string
    {
        return $this->vis_ville;
    }

    public function setVisVille(string $vis_ville): self
    {
        $this->vis_ville = $vis_ville;

        return $this;
    }

    public function getVisDateembauche(): ?\DateTimeInterface
    {
        return $this->vis_dateembauche;
    }

    public function setVisDateembauche(\DateTimeInterface $vis_dateembauche): self
    {
        $this->vis_dateembauche = $vis_dateembauche;

        return $this;
    }

    public function getVisPassword(): ?string
    {
        return $this->vis_password;
    }

    public function setVisPassword(string $vis_password): self
    {
        $this->vis_password = $vis_password;

        return $this;
    }

    public function getVisSalt(): ?string
    {
        return $this->vis_salt;
    }

    public function setVisSalt(string $vis_salt): self
    {
        $this->vis_salt = $vis_salt;

        return $this;
    }

    public function getSecCode(): ?string
    {
        return $this->sec_code;
    }

    public function setSecCode(string $sec_code): self
    {
        $this->sec_code = $sec_code;

        return $this;
    }

    public function getLabCode(): ?string
    {
        return $this->lab_code;
    }

    public function setLabCode(string $lab_code): self
    {
        $this->lab_code = $lab_code;

        return $this;
    }
}
