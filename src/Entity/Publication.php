<?php

namespace App\Entity;

use App\Repository\PublicationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PublicationRepository::class)
 */
class Publication
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="publications")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Pictures::class, mappedBy="publication")
     */
    private $medias;

    /**
     * @ORM\ManyToOne(targetEntity=Usersfriends::class, inversedBy="publication")
     */
    private $publiFriends;

    public function __construct()
    {
        $this->medias = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Pictures[]
     */
    public function getMedias(): Collection
    {
        return $this->medias;
    }

    public function addMedia(Pictures $media): self
    {
        if (!$this->medias->contains($media)) {
            $this->medias[] = $media;
            $media->setPublication($this);
        }

        return $this;
    }

    public function removeMedia(Pictures $media): self
    {
        if ($this->medias->removeElement($media)) {
            // set the owning side to null (unless already changed)
            if ($media->getPublication() === $this) {
                $media->setPublication(null);
            }
        }

        return $this;
    }

    public function getPubliFriends(): ?Usersfriends
    {
        return $this->publiFriends;
    }

    public function setPubliFriends(?Usersfriends $publiFriends): self
    {
        $this->publiFriends = $publiFriends;

        return $this;
    }
}
