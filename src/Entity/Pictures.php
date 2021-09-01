<?php

namespace App\Entity;

use App\Repository\PicturesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PicturesRepository::class)
 */
class Pictures
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
    private $pictures_name;

    /**
     * @ORM\ManyToOne(targetEntity=Publication::class, inversedBy="medias")
     */
    private $publication;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPicturesName(): ?string
    {
        return $this->pictures_name;
    }

    public function setPicturesName(string $pictures_name): self
    {
        $this->pictures_name = $pictures_name;

        return $this;
    }

    public function getPublication(): ?Publication
    {
        return $this->publication;
    }

    public function setPublication(?Publication $publication): self
    {
        $this->publication = $publication;

        return $this;
    }
}
