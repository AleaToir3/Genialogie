<?php

namespace App\Entity;

use App\Repository\FriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FriseRepository::class)
 */
class Frise
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=PersonalEven::class, mappedBy="frise")
     */
    private $personalEvens;

    public function __construct()
    {
        $this->personalEvens = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, PersonalEven>
     */
    public function getPersonalEvens(): Collection
    {
        return $this->personalEvens;
    }

    public function addPersonalEven(PersonalEven $personalEven): self
    {
        if (!$this->personalEvens->contains($personalEven)) {
            $this->personalEvens[] = $personalEven;
            $personalEven->setFrise($this);
        }

        return $this;
    }

    public function removePersonalEven(PersonalEven $personalEven): self
    {
        if ($this->personalEvens->removeElement($personalEven)) {
            // set the owning side to null (unless already changed)
            if ($personalEven->getFrise() === $this) {
                $personalEven->setFrise(null);
            }
        }

        return $this;
    }
}
