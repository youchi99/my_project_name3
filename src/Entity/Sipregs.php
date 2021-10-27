<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sipregs
 *
 * @ORM\Table(name="sipregs", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class Sipregs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=80, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fullcontact", type="string", length=80, nullable=false)
     */
    private $fullcontact = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ipaddr", type="string", length=45, nullable=true)
     */
    private $ipaddr;

    /**
     * @var int
     *
     * @ORM\Column(name="port", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $port = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=80, nullable=false)
     */
    private $username = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="regserver", type="string", length=100, nullable=true)
     */
    private $regserver;

    /**
     * @var int
     *
     * @ORM\Column(name="regseconds", type="integer", nullable=false)
     */
    private $regseconds = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="defaultuser", type="string", length=80, nullable=false)
     */
    private $defaultuser = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="useragent", type="string", length=20, nullable=true)
     */
    private $useragent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lastms", type="integer", nullable=true)
     */
    private $lastms;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getFullcontact(): ?string
    {
        return $this->fullcontact;
    }

    public function setFullcontact(string $fullcontact): self
    {
        $this->fullcontact = $fullcontact;

        return $this;
    }

    public function getIpaddr(): ?string
    {
        return $this->ipaddr;
    }

    public function setIpaddr(?string $ipaddr): self
    {
        $this->ipaddr = $ipaddr;

        return $this;
    }

    public function getPort(): ?int
    {
        return $this->port;
    }

    public function setPort(int $port): self
    {
        $this->port = $port;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getRegserver(): ?string
    {
        return $this->regserver;
    }

    public function setRegserver(?string $regserver): self
    {
        $this->regserver = $regserver;

        return $this;
    }

    public function getRegseconds(): ?int
    {
        return $this->regseconds;
    }

    public function setRegseconds(int $regseconds): self
    {
        $this->regseconds = $regseconds;

        return $this;
    }

    public function getDefaultuser(): ?string
    {
        return $this->defaultuser;
    }

    public function setDefaultuser(string $defaultuser): self
    {
        $this->defaultuser = $defaultuser;

        return $this;
    }

    public function getUseragent(): ?string
    {
        return $this->useragent;
    }

    public function setUseragent(?string $useragent): self
    {
        $this->useragent = $useragent;

        return $this;
    }

    public function getLastms(): ?int
    {
        return $this->lastms;
    }

    public function setLastms(?int $lastms): self
    {
        $this->lastms = $lastms;

        return $this;
    }


}
