<?php

namespace App\Entity;

use App\Repository\RevendicationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Categorie;
use App\Entity\Soutien;

#[ORM\Entity(repositoryClass: RevendicationRepository::class)]
class Revendication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dateCreation = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\ManyToOne(inversedBy: 'revendications')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Categorie $categorie = null;

    #[ORM\OneToMany(mappedBy: 'revendication', targetEntity: Soutien::class, orphanRemoval: true)]
    private Collection $soutiens;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

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

    public function getDateCreation(): ?\DateTimeImmutable
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeImmutable $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function __construct()
    {
        $this->soutiens = new ArrayCollection();
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, Soutien>
     */
    public function getSoutiens(): Collection
    {
        return $this->soutiens;
    }

    public function addSoutien(Soutien $soutien): static
    {
        if (! $this->soutiens->contains($soutien)) {
            $this->soutiens->add($soutien);
            $soutien->setRevendication($this);
        }

        return $this;
    }

    public function removeSoutien(Soutien $soutien): static
    {
        if ($this->soutiens->removeElement($soutien)) {
            if ($soutien->getRevendication() === $this) {
                $soutien->setRevendication(null);
            }
        }

        return $this;
    }
}
