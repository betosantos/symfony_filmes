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

    #[ORM\OneToMany(mappedBy: 'categoria', targetEntity: Filme::class)]
    private Collection $filmes;

    public function __construct()
    {
        $this->filmes = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): static
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return Collection<int, Filme>
     */
    public function getFilmes(): Collection
    {
        return $this->filmes;
    }

    public function addFilme(Filme $filme): static
    {
        if (!$this->filmes->contains($filme)) {
            $this->filmes->add($filme);
            $filme->setCategoria($this);
        }

        return $this;
    }

    public function removeFilme(Filme $filme): static
    {
        if ($this->filmes->removeElement($filme)) {
            // set the owning side to null (unless already changed)
            if ($filme->getCategoria() === $this) {
                $filme->setCategoria(null);
            }
        }

        return $this;
    }


    public function __toString()
    {
        return $this->nome;
    }

 }
