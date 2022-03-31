<?php

namespace App\Entity;

use App\Repository\PersonalEvenRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonalEvenRepository::class)
 */
class PersonalEven
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPrivatee;

    /**
     * @ORM\OneToMany(targetEntity=Emotion::class, mappedBy="personalEven")
     */
    private $emotione;

    /**
     * @ORM\ManyToOne(targetEntity=Frise::class, inversedBy="personalEvens")
     */
    private $frise;

    /**
     * @ORM\OneToMany(targetEntity=Media::class, mappedBy="personalEven",cascade={"persist"},fetch="EAGER")
     */
    private $media;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $legend;

    public function __construct()
    {
        $this->emotione = new ArrayCollection();
        $this->media = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    } 

    public function getIsPrivatee(): ?bool
    {
        return $this->isPrivatee;
    }

    public function setIsPrivatee(bool $isPrivatee): self
    {
        $this->isPrivatee = $isPrivatee;

        return $this;
    }


    /**
     * @return Collection<int, Emotion>
     */
    public function getEmotione(): Collection
    {
        return $this->emotione;
    }

    public function addEmotione(Emotion $emotione): self
    {
        if (!$this->emotione->contains($emotione)) {
            $this->emotione[] = $emotione;
            $emotione->setPersonalEven($this);
        }

        return $this;
    }

    public function removeEmotione(Emotion $emotione): self
    {
        if ($this->emotione->removeElement($emotione)) {
            // set the owning side to null (unless already changed)
            if ($emotione->getPersonalEven() === $this) {
                $emotione->setPersonalEven(null);
            }
        }

        return $this;
    }

    public function getFrise(): ?Frise
    {
        return $this->frise;
    }

    public function setFrise(?Frise $frise): self
    {
        $this->frise = $frise;

        return $this;
    }

    /**
     * @return Collection<int, Media>
     */
    public function getMedia(): Collection
    {
        return $this->media;
    }

    public function addMedium(Media $medium): self
    {
        if (!$this->media->contains($medium)) {
            $this->media[] = $medium;
            $medium->setPersonalEven($this);
        }

        return $this;
    }

    public function removeMedium(Media $medium): self
    {
        if ($this->media->removeElement($medium)) {
            // set the owning side to null (unless already changed)
            if ($medium->getPersonalEven() === $this) {
                $medium->setPersonalEven(null);
            }
        }

        return $this;
    }

    public function getLegend(): ?string
    {
        return $this->legend;
    }

    public function setLegend(string $legend): self
    {
        $this->legend = $legend;

        return $this;
    }
}
