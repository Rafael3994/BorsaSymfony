<?php

namespace App\Entity;

use App\Repository\CandidatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidatRepository::class)
 */
class Candidat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $usuari_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cognom1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cognom2;

    /**
     * @ORM\Column(type="integer")
     */
    private $telefon;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuariId(): ?int
    {
        return $this->usuari_id;
    }

    public function setUsuariId(int $usuari_id): self
    {
        $this->usuari_id = $usuari_id;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCognom1(): ?string
    {
        return $this->cognom1;
    }

    public function setCognom1(string $cognom1): self
    {
        $this->cognom1 = $cognom1;

        return $this;
    }

    public function getCognom2(): ?string
    {
        return $this->cognom2;
    }

    public function setCognom2(string $cognom2): self
    {
        $this->cognom2 = $cognom2;

        return $this;
    }

    public function getTelefon(): ?int
    {
        return $this->telefon;
    }

    public function setTelefon(int $telefon): self
    {
        $this->telefon = $telefon;

        return $this;
    }
}
