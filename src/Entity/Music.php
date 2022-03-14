<?php

namespace App\Entity;

use App\Repository\MusicRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MusicRepository::class)
 */
class Music
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
    private $music;

    /**
     * @ORM\ManyToOne(targetEntity=Media::class, inversedBy="music")
     */
    private $media;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMusic(): ?string
    {
        return $this->music;
    }

    public function setMusic(?string $music): self
    {
        $this->music = $music;

        return $this;
    }

    public function getMedia(): ?Media
    {
        return $this->media;
    }

    public function setMedia(?Media $media): self
    {
        $this->media = $media;

        return $this;
    }
}
