<?php

namespace App\Entity;

use App\Repository\ParteDiarioRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ParteDiarioRepository::class)
 */
class ParteDiario
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Empleados::class, inversedBy="parteDiarios")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank()
     */
    private $empleado;

    /**
     * @ORM\ManyToOne(targetEntity=Areas::class, inversedBy="parteDiarios")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $Area;

    /**
     * @ORM\Column(type="date", nullable=false)  
     * @Assert\NotNull
     */
    private $Fecha;

    /**
     * @ORM\Column(type="string", length=255)  
     * @Assert\NotBlank
     */
    private $numero;

    /**
     * @ORM\Column(type="json")
     */
    private $datos = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpleado(): ?Empleados
    {
        return $this->empleado;
    }

    public function setEmpleado(?Empleados $empleado): self
    {
        $this->empleado = $empleado;

        return $this;
    }

    public function getArea(): ?Areas
    {
        return $this->Area;
    }

    public function setArea(?Areas $Area): self
    {
        $this->Area = $Area;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->Fecha;
    }

    public function setFecha(\DateTimeInterface $Fecha): self
    {
        $this->Fecha = $Fecha;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getDatos(): ?array
    {
        return $this->datos;
    }

    public function setDatos(array $datos): self
    {
        $this->datos = $datos;

        return $this;
    }
}
