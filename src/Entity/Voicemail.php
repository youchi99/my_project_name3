<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voicemail
 *
 * @ORM\Table(name="voicemail")
 * @ORM\Entity
 */
class Voicemail
{
    /**
     * @var int
     *
     * @ORM\Column(name="uniqueid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uniqueid;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", length=80, nullable=false, options={"default"="default","fixed"=true})
     */
    private $context = 'default';

    /**
     * @var string
     *
     * @ORM\Column(name="mailbox", type="string", length=80, nullable=false, options={"fixed"=true})
     */
    private $mailbox;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=80, nullable=false, options={"fixed"=true})
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fullname", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $fullname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pager", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $pager;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attach", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $attach;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attachfmt", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $attachfmt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serveremail", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $serveremail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LANGUAGE", type="string", length=20, nullable=true, options={"fixed"=true})
     */
    private $language;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tz", type="string", length=30, nullable=true, options={"fixed"=true})
     */
    private $tz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deletevoicemail", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $deletevoicemail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="saycid", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $saycid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sendvoicemail", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $sendvoicemail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="review", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $review;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tempgreetwarn", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $tempgreetwarn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="operator", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $operator;

    /**
     * @var string|null
     *
     * @ORM\Column(name="envelope", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $envelope;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sayduration", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $sayduration;

    /**
     * @var int|null
     *
     * @ORM\Column(name="saydurationm", type="integer", nullable=true)
     */
    private $saydurationm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forcename", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $forcename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forcegreetings", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $forcegreetings;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callback", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $callback;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dialout", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $dialout;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exitcontext", type="string", length=80, nullable=true, options={"fixed"=true})
     */
    private $exitcontext;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxmsg", type="integer", nullable=true)
     */
    private $maxmsg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="volgain", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $volgain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imapuser", type="string", length=80, nullable=true)
     */
    private $imapuser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imappassword", type="string", length=80, nullable=true)
     */
    private $imappassword;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imapsever", type="string", length=80, nullable=true)
     */
    private $imapsever;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imapport", type="string", length=8, nullable=true)
     */
    private $imapport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imapflags", type="string", length=80, nullable=true)
     */
    private $imapflags;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $stamp = 'CURRENT_TIMESTAMP';

    public function getUniqueid(): ?int
    {
        return $this->uniqueid;
    }

    public function getContext(): ?string
    {
        return $this->context;
    }

    public function setContext(string $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getMailbox(): ?string
    {
        return $this->mailbox;
    }

    public function setMailbox(string $mailbox): self
    {
        $this->mailbox = $mailbox;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    public function setFullname(?string $fullname): self
    {
        $this->fullname = $fullname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPager(): ?string
    {
        return $this->pager;
    }

    public function setPager(?string $pager): self
    {
        $this->pager = $pager;

        return $this;
    }

    public function getAttach(): ?string
    {
        return $this->attach;
    }

    public function setAttach(?string $attach): self
    {
        $this->attach = $attach;

        return $this;
    }

    public function getAttachfmt(): ?string
    {
        return $this->attachfmt;
    }

    public function setAttachfmt(?string $attachfmt): self
    {
        $this->attachfmt = $attachfmt;

        return $this;
    }

    public function getServeremail(): ?string
    {
        return $this->serveremail;
    }

    public function setServeremail(?string $serveremail): self
    {
        $this->serveremail = $serveremail;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getTz(): ?string
    {
        return $this->tz;
    }

    public function setTz(?string $tz): self
    {
        $this->tz = $tz;

        return $this;
    }

    public function getDeletevoicemail(): ?string
    {
        return $this->deletevoicemail;
    }

    public function setDeletevoicemail(?string $deletevoicemail): self
    {
        $this->deletevoicemail = $deletevoicemail;

        return $this;
    }

    public function getSaycid(): ?string
    {
        return $this->saycid;
    }

    public function setSaycid(?string $saycid): self
    {
        $this->saycid = $saycid;

        return $this;
    }

    public function getSendvoicemail(): ?string
    {
        return $this->sendvoicemail;
    }

    public function setSendvoicemail(?string $sendvoicemail): self
    {
        $this->sendvoicemail = $sendvoicemail;

        return $this;
    }

    public function getReview(): ?string
    {
        return $this->review;
    }

    public function setReview(?string $review): self
    {
        $this->review = $review;

        return $this;
    }

    public function getTempgreetwarn(): ?string
    {
        return $this->tempgreetwarn;
    }

    public function setTempgreetwarn(?string $tempgreetwarn): self
    {
        $this->tempgreetwarn = $tempgreetwarn;

        return $this;
    }

    public function getOperator(): ?string
    {
        return $this->operator;
    }

    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;

        return $this;
    }

    public function getEnvelope(): ?string
    {
        return $this->envelope;
    }

    public function setEnvelope(?string $envelope): self
    {
        $this->envelope = $envelope;

        return $this;
    }

    public function getSayduration(): ?string
    {
        return $this->sayduration;
    }

    public function setSayduration(?string $sayduration): self
    {
        $this->sayduration = $sayduration;

        return $this;
    }

    public function getSaydurationm(): ?int
    {
        return $this->saydurationm;
    }

    public function setSaydurationm(?int $saydurationm): self
    {
        $this->saydurationm = $saydurationm;

        return $this;
    }

    public function getForcename(): ?string
    {
        return $this->forcename;
    }

    public function setForcename(?string $forcename): self
    {
        $this->forcename = $forcename;

        return $this;
    }

    public function getForcegreetings(): ?string
    {
        return $this->forcegreetings;
    }

    public function setForcegreetings(?string $forcegreetings): self
    {
        $this->forcegreetings = $forcegreetings;

        return $this;
    }

    public function getCallback(): ?string
    {
        return $this->callback;
    }

    public function setCallback(?string $callback): self
    {
        $this->callback = $callback;

        return $this;
    }

    public function getDialout(): ?string
    {
        return $this->dialout;
    }

    public function setDialout(?string $dialout): self
    {
        $this->dialout = $dialout;

        return $this;
    }

    public function getExitcontext(): ?string
    {
        return $this->exitcontext;
    }

    public function setExitcontext(?string $exitcontext): self
    {
        $this->exitcontext = $exitcontext;

        return $this;
    }

    public function getMaxmsg(): ?int
    {
        return $this->maxmsg;
    }

    public function setMaxmsg(?int $maxmsg): self
    {
        $this->maxmsg = $maxmsg;

        return $this;
    }

    public function getVolgain(): ?string
    {
        return $this->volgain;
    }

    public function setVolgain(?string $volgain): self
    {
        $this->volgain = $volgain;

        return $this;
    }

    public function getImapuser(): ?string
    {
        return $this->imapuser;
    }

    public function setImapuser(?string $imapuser): self
    {
        $this->imapuser = $imapuser;

        return $this;
    }

    public function getImappassword(): ?string
    {
        return $this->imappassword;
    }

    public function setImappassword(?string $imappassword): self
    {
        $this->imappassword = $imappassword;

        return $this;
    }

    public function getImapsever(): ?string
    {
        return $this->imapsever;
    }

    public function setImapsever(?string $imapsever): self
    {
        $this->imapsever = $imapsever;

        return $this;
    }

    public function getImapport(): ?string
    {
        return $this->imapport;
    }

    public function setImapport(?string $imapport): self
    {
        $this->imapport = $imapport;

        return $this;
    }

    public function getImapflags(): ?string
    {
        return $this->imapflags;
    }

    public function setImapflags(?string $imapflags): self
    {
        $this->imapflags = $imapflags;

        return $this;
    }

    public function getStamp(): ?\DateTimeInterface
    {
        return $this->stamp;
    }

    public function setStamp(\DateTimeInterface $stamp): self
    {
        $this->stamp = $stamp;

        return $this;
    }


}
