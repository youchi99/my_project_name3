<?php

namespace App\Entity;

use App\Repository\GeneralRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GeneralRepository::class)
 * @ORM\Table(name="`general`")
 */
class General
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
    private $contex;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $allowguest;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $allowoverlap;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bindport;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bindaddr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $srvlookup;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $disallow;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $allow;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $alwaysauthreject;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $canreinvite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sessionTimers;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $localnet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContex(): ?string
    {
        return $this->contex;
    }

    public function setContex(?string $contex): self
    {
        $this->contex = $contex;

        return $this;
    }

    public function getAllowguest(): ?string
    {
        return $this->allowguest;
    }

    public function setAllowguest(?string $allowguest): self
    {
        $this->allowguest = $allowguest;

        return $this;
    }

    public function getAllowoverlap(): ?string
    {
        return $this->allowoverlap;
    }

    public function setAllowoverlap(?string $allowoverlap): self
    {
        $this->allowoverlap = $allowoverlap;

        return $this;
    }

    public function getBindport(): ?int
    {
        return $this->bindport;
    }

    public function setBindport(?int $bindport): self
    {
        $this->bindport = $bindport;

        return $this;
    }

    public function getBindaddr(): ?string
    {
        return $this->bindaddr;
    }

    public function setBindaddr(?string $bindaddr): self
    {
        $this->bindaddr = $bindaddr;

        return $this;
    }

    public function getSrvlookup(): ?string
    {
        return $this->srvlookup;
    }

    public function setSrvlookup(?string $srvlookup): self
    {
        $this->srvlookup = $srvlookup;

        return $this;
    }

    public function getDisallow(): ?string
    {
        return $this->disallow;
    }

    public function setDisallow(?string $disallow): self
    {
        $this->disallow = $disallow;

        return $this;
    }

    public function getAllow(): ?string
    {
        return $this->allow;
    }

    public function setAllow(?string $allow): self
    {
        $this->allow = $allow;

        return $this;
    }

    public function getAlwaysauthreject(): ?string
    {
        return $this->alwaysauthreject;
    }

    public function setAlwaysauthreject(?string $alwaysauthreject): self
    {
        $this->alwaysauthreject = $alwaysauthreject;

        return $this;
    }

    public function getCanreinvite(): ?string
    {
        return $this->canreinvite;
    }

    public function setCanreinvite(?string $canreinvite): self
    {
        $this->canreinvite = $canreinvite;

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

    public function getSessionTimers(): ?string
    {
        return $this->sessionTimers;
    }

    public function setSessionTimers(?string $sessionTimers): self
    {
        $this->sessionTimers = $sessionTimers;

        return $this;
    }

    public function getLocalnet(): ?string
    {
        return $this->localnet;
    }

    public function setLocalnet(?string $localnet): self
    {
        $this->localnet = $localnet;

        return $this;
    }
}
