<?php

namespace App\Entity;

use App\Repository\SipusersTrigerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SipusersTrigerRepository::class)
 */
class SipusersTriger
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $defaultuser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $host;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sippasswd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fromuser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fromdomain;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mailbox;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDefaultuser(): ?string
    {
        return $this->defaultuser;
    }

    public function setDefaultuser(?string $defaultuser): self
    {
        $this->defaultuser = $defaultuser;

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

    public function getSippasswd(): ?string
    {
        return $this->sippasswd;
    }

    public function setSippasswd(?string $sippasswd): self
    {
        $this->sippasswd = $sippasswd;

        return $this;
    }

    public function getFromuser(): ?string
    {
        return $this->fromuser;
    }

    public function setFromuser(?string $fromuser): self
    {
        $this->fromuser = $fromuser;

        return $this;
    }

    public function getFromdomain(): ?string
    {
        return $this->fromdomain;
    }

    public function setFromdomain(?string $fromdomain): self
    {
        $this->fromdomain = $fromdomain;

        return $this;
    }

    public function getMailbox(): ?string
    {
        return $this->mailbox;
    }

    public function setMailbox(?string $mailbox): self
    {
        $this->mailbox = $mailbox;

        return $this;
    }
}
