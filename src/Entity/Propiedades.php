<?php

namespace App\Entity;

use App\Repository\PropiedadesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=PropiedadesRepository::class)
 */
class Propiedades
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Areas::class, inversedBy="propiedades")
     * @ORM\JoinColumn(nullable=false)
     */
    private $area;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArea(): ?Areas
    {
        return $this->area;
    }

    public function setArea(?Areas $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value =  $value;

        return $this;
    }
}
