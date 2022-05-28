<?php

namespace App\Entity;

use App\Repository\OfertaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OfertaRepository::class)
 */
class Oferta
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
    private $empresa_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titol;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $data_publicacio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ubicacio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $estat;

    /**
     * @ORM\Column(type="integer")
     */
    private $categoria_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpresaId(): ?int
    {
        return $this->empresa_id;
    }

    public function setEmpresaId(int $empresa_id): self
    {
        $this->empresa_id = $empresa_id;

        return $this;
    }

    public function getTitol(): ?string
    {
        return $this->titol;
    }

    public function setTitol(string $titol): self
    {
        $this->titol = $titol;

        return $this;
    }

    public function getDescripcio(): ?string
    {
        return $this->descripcio;
    }

    public function setDescripcio(string $descripcio): self
    {
        $this->descripcio = $descripcio;

        return $this;
    }

    public function getDataPublicacio(): ?string
    {
        return $this->data_publicacio;
    }

    public function setDataPublicacio($data_publicacio): self
    {
        $this->data_publicacio = $data_publicacio;

        return $this;
    }

    public function getUbicacio(): ?string
    {
        return $this->ubicacio;
    }

    public function setUbicacio(string $ubicacio): self
    {
        $this->ubicacio = $ubicacio;

        return $this;
    }

    public function getEstat(): ?string
    {
        return $this->estat;
    }

    public function setEstat(string $estat): self
    {
        $this->estat = $estat;

        return $this;
    }

    public function getCategoriaId(): ?int
    {
        return $this->categoria_id;
    }

    public function setCategoriaId(int $categoria_id): self
    {
        $this->categoria_id = $categoria_id;

        return $this;
    }
}
