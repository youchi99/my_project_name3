<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voicemessages
 *
 * @ORM\Table(name="voicemessages")
 * @ORM\Entity
 */
class Voicemessages
{
    /**
     * @var string
     *
     * @ORM\Column(name="dir", type="string", length=255, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dir;

    /**
     * @var int
     *
     * @ORM\Column(name="msgnum", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $msgnum;

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
     * @ORM\Column(name="callerid", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $callerid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origtime", type="integer", nullable=true)
     */
    private $origtime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recording", type="blob", length=65535, nullable=true)
     */
    private $recording;

    /**
     * @var string|null
     *
     * @ORM\Column(name="flag", type="string", length=30, nullable=true, options={"fixed"=true})
     */
    private $flag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category", type="string", length=30, nullable=true, options={"fixed"=true})
     */
    private $category;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mailboxuser", type="string", length=30, nullable=true, options={"fixed"=true})
     */
    private $mailboxuser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mailboxcontext", type="string", length=30, nullable=true, options={"fixed"=true})
     */
    private $mailboxcontext;

    /**
     * @var string|null
     *
     * @ORM\Column(name="msg_id", type="string", length=40, nullable=true, options={"fixed"=true})
     */
    private $msgId;

    public function getDir(): ?string
    {
        return $this->dir;
    }

    public function getMsgnum(): ?int
    {
        return $this->msgnum;
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

    public function getCallerid(): ?string
    {
        return $this->callerid;
    }

    public function setCallerid(?string $callerid): self
    {
        $this->callerid = $callerid;

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

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getRecording()
    {
        return $this->recording;
    }

    public function setRecording($recording): self
    {
        $this->recording = $recording;

        return $this;
    }

    public function getFlag(): ?string
    {
        return $this->flag;
    }

    public function setFlag(?string $flag): self
    {
        $this->flag = $flag;

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

    public function getMailboxuser(): ?string
    {
        return $this->mailboxuser;
    }

    public function setMailboxuser(?string $mailboxuser): self
    {
        $this->mailboxuser = $mailboxuser;

        return $this;
    }

    public function getMailboxcontext(): ?string
    {
        return $this->mailboxcontext;
    }

    public function setMailboxcontext(?string $mailboxcontext): self
    {
        $this->mailboxcontext = $mailboxcontext;

        return $this;
    }

    public function getMsgId(): ?string
    {
        return $this->msgId;
    }

    public function setMsgId(?string $msgId): self
    {
        $this->msgId = $msgId;

        return $this;
    }


}
