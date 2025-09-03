<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VoitureRepository::class)]
class Voiture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Type = null;

    #[ORM\Column(length: 255)]
    private ?string $Marque = null;

    #[ORM\Column(length: 255)]
    private ?string $Modele = null;

    #[ORM\Column]
    private ?float $Kilometrage = null;

    #[ORM\Column]
    private ?int $NombreDePlaces = null;

    #[ORM\Column(length: 255)]
    private ?string $carburant = null;

    #[ORM\Column(length: 255)]
    private ?string $BoiteVitesse = null;

    #[ORM\Column]
    private ?float $PrixParJour = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $DateMiseEnCirculation = null;

    #[ORM\Column]
    private ?bool $Disponibilite = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): static
    {
        $this->Type = $Type;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->Marque;
    }

    public function setMarque(string $Marque): static
    {
        $this->Marque = $Marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->Modele;
    }

    public function setModele(string $Modele): static
    {
        $this->Modele = $Modele;

        return $this;
    }

    public function getKilometrage(): ?float
    {
        return $this->Kilometrage;
    }

    public function setKilometrage(float $Kilometrage): static
    {
        $this->Kilometrage = $Kilometrage;

        return $this;
    }

    public function getNombreDePlaces(): ?int
    {
        return $this->NombreDePlaces;
    }

    public function setNombreDePlaces(int $NombreDePlaces): static
    {
        $this->NombreDePlaces = $NombreDePlaces;

        return $this;
    }

    public function getCarburant(): ?string
    {
        return $this->carburant;
    }

    public function setCarburant(string $carburant): static
    {
        $this->carburant = $carburant;

        return $this;
    }

    public function getBoiteVitesse(): ?string
    {
        return $this->BoiteVitesse;
    }

    public function setBoiteVitesse(string $BoiteVitesse): static
    {
        $this->BoiteVitesse = $BoiteVitesse;

        return $this;
    }

    public function getPrixParJour(): ?float
    {
        return $this->PrixParJour;
    }

    public function setPrixParJour(float $PrixParJour): static
    {
        $this->PrixParJour = $PrixParJour;

        return $this;
    }

    public function getDateMiseEnCirculation(): ?\DateTime
    {
        return $this->DateMiseEnCirculation;
    }

    public function setDateMiseEnCirculation(\DateTime $DateMiseEnCirculation): static
    {
        $this->DateMiseEnCirculation = $DateMiseEnCirculation;

        return $this;
    }

    public function isDisponibilite(): ?bool
    {
        return $this->Disponibilite;
    }

    public function setDisponibilite(bool $Disponibilite): static
    {
        $this->Disponibilite = $Disponibilite;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }
}
