<?php

namespace App\Entity;

use App\Repository\EmotionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmotionRepository::class)
 */
class Emotion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=PersonalEven::class, inversedBy="emotione")
     */
    private $personalEven;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPersonalEven(): ?PersonalEven
    {
        return $this->personalEven;
    }

    public function setPersonalEven(?PersonalEven $personalEven): self
    {
        $this->personalEven = $personalEven;

        return $this;
    }
}
