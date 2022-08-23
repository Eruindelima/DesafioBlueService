<?php

namespace App\Entity;

use App\Repository\CaracteristicasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CaracteristicasRepository::class)]
class Caracteristicas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numero = null;

    #[ORM\Column(length: 255)]
    private ?string $cor = null;

    #[ORM\OneToMany(mappedBy: 'caracteristica', targetEntity: Produtos::class)]
    private Collection $produtos;

    public function __construct()
    {
        $this->produtos = new ArrayCollection();
    }

    public function __toString() {
        return $this->cor;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getCor(): ?string
    {
        return $this->cor;
    }

    public function setCor(string $cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * @return Collection<int, Produtos>
     */
    public function getProdutos(): Collection
    {
        return $this->produtos;
    }

    public function addProduto(Produtos $produto): self
    {
        if (!$this->produtos->contains($produto)) {
            $this->produtos->add($produto);
            $produto->setCaracteristica($this);
        }

        return $this;
    }

    public function removeProduto(Produtos $produto): self
    {
        if ($this->produtos->removeElement($produto)) {
            // set the owning side to null (unless already changed)
            if ($produto->getCaracteristica() === $this) {
                $produto->setCaracteristica(null);
            }
        }

        return $this;
    }
}
