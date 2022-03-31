<?php

namespace App\Entity;

use App\Repository\PictureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PictureRepository::class)
 */
class Picture
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
    private $picture;

    /**
     * @ORM\ManyToOne(targetEntity=Media::class, inversedBy="picture")
     */
    private $media;

    /**
     * @ORM\Column(type="boolean")
     */
    private $wallpaper ;

    
    function __construct( ) 
    { 
            $this->wallpaper = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

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

    public function getWallpaper(): ?bool
    {
        return $this->wallpaper;
    }

    public function setWallpaper(bool $wallpaper): self
    {
        $this->wallpaper = $wallpaper;

        return $this;
    }

}
