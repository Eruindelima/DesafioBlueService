<?php

namespace App\Entity;

use App\Repository\ProdutosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProdutosRepository::class)]
class Produtos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nome = null;

    #[ORM\Column(length: 255)]
    private ?string $descricao = null;

    #[ORM\Column(length: 255)]
    private ?string $imagem = null;

    #[ORM\Column]
    private ?float $preco = null;

    #[ORM\ManyToOne(inversedBy: 'produtos')]
    private ?Caracteristicas $caracteristica = null;

    #[ORM\ManyToMany(targetEntity: Categoria::class, inversedBy: 'produtos')]
    private Collection $produto_categoria;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    public function __construct()
    {
        $this->produto_categoria = new ArrayCollection();
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

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getImagem(): ?string
    {
        return $this->imagem;
    }

    public function setImagem(string $imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }

    public function getPreco(): ?float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): self
    {
        $this->preco = $preco;

        return $this;
    }

    public function getCaracteristica(): ?Caracteristicas
    {
        return $this->caracteristica;
    }

    public function setCaracteristica(?Caracteristicas $caracteristica): self
    {
        $this->caracteristica = $caracteristica;

        return $this;
    }

    /**
     * @return Collection<int, Categoria>
     */
    public function getProdutoCategoria(): Collection
    {
        return $this->produto_categoria;
    }

    public function addProdutoCategorium(Categoria $produtoCategorium): self
    {
        if (!$this->produto_categoria->contains($produtoCategorium)) {
            $this->produto_categoria->add($produtoCategorium);
        }

        return $this;
    }

    public function removeProdutoCategorium(Categoria $produtoCategorium): self
    {
        $this->produto_categoria->removeElement($produtoCategorium);

        return $this;
    }

    public function getSlug(): ?string  
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }
}
