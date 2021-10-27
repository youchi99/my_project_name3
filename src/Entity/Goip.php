<?php

namespace App\Entity;

use App\Repository\GoipRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GoipRepository::class)
 */
class Goip
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
    private $type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $context;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secret;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $context2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $host;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $canrienvite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getContext(): ?string
    {
        return $this->context;
    }

    public function setContext(?string $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getSecret(): ?string
    {
        return $this->secret;
    }

    public function setSecret(?string $secret): self
    {
        $this->secret = $secret;

        return $this;
    }

    public function getContext2(): ?string
    {
        return $this->context2;
    }

    public function setContext2(?string $context2): self
    {
        $this->context2 = $context2;

        return $this;
    }

    public function getHost(): ?string
    {
        return $this->host;
    }

    public function setHost(?string $host): self
    {
        $this->host = $host;

        return $this;
    }

    public function getNat(): ?string
    {
        return $this->nat;
    }

    public function setNat(?string $nat): self
    {
        $this->nat = $nat;

        return $this;
    }

    public function getCanrienvite(): ?string
    {
        return $this->canrienvite;
    }

    public function setCanrienvite(?string $canrienvite): self
    {
        $this->canrienvite = $canrienvite;

        return $this;
    }
}
