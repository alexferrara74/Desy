<?php

namespace App\Entity;

use App\Repository\EGProdottiRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EGProdottiRepository::class)
 */
class EGProdotti
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
    private $quantità;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tipo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $colore;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantità(): ?int
    {
        return $this->quantità;
    }

    public function setQuantità(int $quantità): self
    {
        $this->quantità = $quantità;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getColore(): ?string
    {
        return $this->colore;
    }

    public function setColore(string $colore): self
    {
        $this->colore = $colore;

        return $this;
    }
}
