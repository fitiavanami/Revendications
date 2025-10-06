<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Revendication;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Revendication::class, orphanRemoval: true)]
    private Collection $revendications;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function __construct()
    {
        $this->revendications = new ArrayCollection();
    }

    /**
     * @return Collection<int, Revendication>
     */
    public function getRevendications(): Collection
    {
        return $this->revendications;
    }

    public function addRevendication(Revendication $revendication): static
    {
        if (! $this->revendications->contains($revendication)) {
            $this->revendications->add($revendication);
            $revendication->setCategorie($this);
        }

        return $this;
    }

    public function removeRevendication(Revendication $revendication): static
    {
        if ($this->revendications->removeElement($revendication)) {
            // set the owning side to null (unless already changed)
            if ($revendication->getCategorie() === $this) {
                $revendication->setCategorie(null);
            }
        }

        return $this;
    }
}
