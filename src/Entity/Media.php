<?php

namespace App\Entity;

use App\Repository\MediaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MediaRepository::class)
 */
class Media
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    
    /**
     * @ORM\ManyToOne(targetEntity=PersonalEven::class, inversedBy="media")
     */
    private $personalEven;

    /**
     * @ORM\OneToMany(targetEntity=Picture::class, mappedBy="media",cascade={"persist"})
     */
    private $picture;

    /**
     * @ORM\OneToMany(targetEntity=Video::class, mappedBy="media")
     */
    private $video;

    /**
     * @ORM\OneToMany(targetEntity=Music::class, mappedBy="media")
     */
    private $music;

    public function __construct()
    {
        $this->picture = new ArrayCollection();
        $this->video = new ArrayCollection();
        $this->music = new ArrayCollection();
    }
 

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, Picture>
     */
    public function getPicture(): Collection
    {
        return $this->picture;
    }

    public function addPicture(Picture $picture): self
    {
        if (!$this->picture->contains($picture)) {
            $this->picture[] = $picture;
            $picture->setMedia($this);
        }

        return $this;
    }

    public function removePicture(Picture $picture): self
    {
        if ($this->picture->removeElement($picture)) {
            // set the owning side to null (unless already changed)
            if ($picture->getMedia() === $this) {
                $picture->setMedia(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Video>
     */
    public function getVideo(): Collection
    {
        return $this->video;
    }

    public function addVideo(Video $video): self
    {
        if (!$this->video->contains($video)) {
            $this->video[] = $video;
            $video->setMedia($this);
        }

        return $this;
    }

    public function removeVideo(Video $video): self
    {
        if ($this->video->removeElement($video)) {
            // set the owning side to null (unless already changed)
            if ($video->getMedia() === $this) {
                $video->setMedia(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Music>
     */
    public function getMusic(): Collection
    {
        return $this->music;
    }

    public function addMusic(Music $music): self
    {
        if (!$this->music->contains($music)) {
            $this->music[] = $music;
            $music->setMedia($this);
        }

        return $this;
    }

    public function removeMusic(Music $music): self
    {
        if ($this->music->removeElement($music)) {
            // set the owning side to null (unless already changed)
            if ($music->getMedia() === $this) {
                $music->setMedia(null);
            }
        }

        return $this;
    }

}
