<?php

namespace App\Entity;

use App\Repository\VoicemailTrigerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoicemailTrigerRepository::class)
 */
class VoicemailTriger
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
    private $context;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mailbox;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $password;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMailbox(): ?string
    {
        return $this->mailbox;
    }

    public function setMailbox(?string $mailbox): self
    {
        $this->mailbox = $mailbox;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
