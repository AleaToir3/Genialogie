<?php

namespace App\Entity;

use App\Repository\ShareRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ShareRepository::class)
 */
class Share
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
    private $emailDest;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isSeePrivate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmailDest(): ?string
    {
        return $this->emailDest;
    }

    public function setEmailDest(string $emailDest): self
    {
        $this->emailDest = $emailDest;

        return $this;
    }

    public function getIsSeePrivate(): ?bool
    {
        return $this->isSeePrivate;
    }

    public function setIsSeePrivate(bool $isSeePrivate): self
    {
        $this->isSeePrivate = $isSeePrivate;

        return $this;
    }
}
