<?php

namespace App\Entity;

use App\Repository\CategoriaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriaRepository::class)]
class Categoria
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nome = null;

    #[ORM\ManyToMany(targetEntity: Produtos::class, mappedBy: 'produto_categoria')]
    private Collection $produtos;

    public function __construct()
    {
        $this->produtos = new ArrayCollection();
    }

    public function __toString() {
        return $this->nome;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

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
            $produto->addProdutoCategorium($this);
        }

        return $this;
    }

    public function removeProduto(Produtos $produto): self
    {
        if ($this->produtos->removeElement($produto)) {
            $produto->removeProdutoCategorium($this);
        }

        return $this;
    }
}
