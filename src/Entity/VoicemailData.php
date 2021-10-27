<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoicemailData
 *
 * @ORM\Table(name="voicemail_data")
 * @ORM\Entity
 */
class VoicemailData
{
    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $filename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origmailbox", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $origmailbox;

    /**
     * @var string|null
     *
     * @ORM\Column(name="context", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $context;

    /**
     * @var string|null
     *
     * @ORM\Column(name="macrocontext", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $macrocontext;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exten", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $exten;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callerchan", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $callerchan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callerid", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $callerid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origdate", type="string", length=30, nullable=true, options={"fixed"=true})
     */
    private $origdate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origtime", type="integer", nullable=true)
     */
    private $origtime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category", type="string", length=30, nullable=true, options={"fixed"=true})
     */
    private $category;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function getOrigmailbox(): ?string
    {
        return $this->origmailbox;
    }

    public function setOrigmailbox(?string $origmailbox): self
    {
        $this->origmailbox = $origmailbox;

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

    public function getMacrocontext(): ?string
    {
        return $this->macrocontext;
    }

    public function setMacrocontext(?string $macrocontext): self
    {
        $this->macrocontext = $macrocontext;

        return $this;
    }

    public function getExten(): ?string
    {
        return $this->exten;
    }

    public function setExten(?string $exten): self
    {
        $this->exten = $exten;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getCallerchan(): ?string
    {
        return $this->callerchan;
    }

    public function setCallerchan(?string $callerchan): self
    {
        $this->callerchan = $callerchan;

        return $this;
    }

    public function getCallerid(): ?string
    {
        return $this->callerid;
    }

    public function setCallerid(?string $callerid): self
    {
        $this->callerid = $callerid;

        return $this;
    }

    public function getOrigdate(): ?string
    {
        return $this->origdate;
    }

    public function setOrigdate(?string $origdate): self
    {
        $this->origdate = $origdate;

        return $this;
    }

    public function getOrigtime(): ?int
    {
        return $this->origtime;
    }

    public function setOrigtime(?int $origtime): self
    {
        $this->origtime = $origtime;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }


}
