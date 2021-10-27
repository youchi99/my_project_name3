<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sipusers
 *
 * @ORM\Table(name="sipusers", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="ipaddr", columns={"ipaddr", "port"}), @ORM\Index(name="host", columns={"host", "port"})})
 * @ORM\Entity
 */
class Sipusers
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
     * @ORM\Column(name="name", type="string", length=10, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ipaddr", type="string", length=15, nullable=true)
     */
    private $ipaddr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="port", type="integer", nullable=true)
     */
    private $port;

    /**
     * @var int|null
     *
     * @ORM\Column(name="regseconds", type="integer", nullable=true)
     */
    private $regseconds;

    /**
     * @var string|null
     *
     * @ORM\Column(name="defaultuser", type="string", length=10, nullable=true)
     */
    private $defaultuser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fullcontact", type="string", length=35, nullable=true)
     */
    private $fullcontact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="regserver", type="string", length=20, nullable=true)
     */
    private $regserver;

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

    /**
     * @var string|null
     *
     * @ORM\Column(name="host", type="string", length=40, nullable=true)
     */
    private $host;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="context", type="string", length=40, nullable=true)
     */
    private $context;

    /**
     * @var string|null
     *
     * @ORM\Column(name="permit", type="string", length=40, nullable=true)
     */
    private $permit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deny", type="string", length=40, nullable=true)
     */
    private $deny;

    /**
     * @var string|null
     *
     * @ORM\Column(name="secret", type="string", length=40, nullable=true)
     */
    private $secret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="md5secret", type="string", length=40, nullable=true)
     */
    private $md5secret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remotesecret", type="string", length=40, nullable=true)
     */
    private $remotesecret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transport", type="string", length=0, nullable=true)
     */
    private $transport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dtmfmode", type="string", length=0, nullable=true)
     */
    private $dtmfmode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="directmedia", type="string", length=0, nullable=true)
     */
    private $directmedia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nat", type="string", length=0, nullable=true)
     */
    private $nat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callgroup", type="string", length=40, nullable=true)
     */
    private $callgroup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pickupgroup", type="string", length=40, nullable=true)
     */
    private $pickupgroup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="language", type="string", length=40, nullable=true)
     */
    private $language;

    /**
     * @var string|null
     *
     * @ORM\Column(name="disallow", type="string", length=40, nullable=true)
     */
    private $disallow;

    /**
     * @var string|null
     *
     * @ORM\Column(name="allow", type="string", length=40, nullable=true)
     */
    private $allow;

    /**
     * @var string|null
     *
     * @ORM\Column(name="insecure", type="string", length=40, nullable=true)
     */
    private $insecure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trustrpid", type="string", length=0, nullable=true)
     */
    private $trustrpid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="progressinband", type="string", length=0, nullable=true)
     */
    private $progressinband;

    /**
     * @var string|null
     *
     * @ORM\Column(name="promiscredir", type="string", length=0, nullable=true)
     */
    private $promiscredir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="useclientcode", type="string", length=0, nullable=true)
     */
    private $useclientcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountcode", type="string", length=40, nullable=true)
     */
    private $accountcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="setvar", type="string", length=40, nullable=true)
     */
    private $setvar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callerid", type="string", length=40, nullable=true)
     */
    private $callerid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amaflags", type="string", length=40, nullable=true)
     */
    private $amaflags;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callcounter", type="string", length=0, nullable=true)
     */
    private $callcounter;

    /**
     * @var int|null
     *
     * @ORM\Column(name="busylevel", type="integer", nullable=true)
     */
    private $busylevel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="allowoverlap", type="string", length=0, nullable=true)
     */
    private $allowoverlap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="allowsubscribe", type="string", length=0, nullable=true)
     */
    private $allowsubscribe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="videosupport", type="string", length=0, nullable=true)
     */
    private $videosupport;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxcallbitrate", type="integer", nullable=true)
     */
    private $maxcallbitrate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rfc2833compensate", type="string", length=0, nullable=true)
     */
    private $rfc2833compensate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mailbox", type="string", length=40, nullable=true)
     */
    private $mailbox;

    /**
     * @var string|null
     *
     * @ORM\Column(name="session-timers", type="string", length=0, nullable=true)
     */
    private $sessionTimers;

    /**
     * @var int|null
     *
     * @ORM\Column(name="session-expires", type="integer", nullable=true)
     */
    private $sessionExpires;

    /**
     * @var int|null
     *
     * @ORM\Column(name="session-minse", type="integer", nullable=true)
     */
    private $sessionMinse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="session-refresher", type="string", length=0, nullable=true)
     */
    private $sessionRefresher;

    /**
     * @var string|null
     *
     * @ORM\Column(name="t38pt_usertpsource", type="string", length=40, nullable=true)
     */
    private $t38ptUsertpsource;

    /**
     * @var string|null
     *
     * @ORM\Column(name="regexten", type="string", length=40, nullable=true)
     */
    private $regexten;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fromdomain", type="string", length=40, nullable=true)
     */
    private $fromdomain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fromuser", type="string", length=40, nullable=true)
     */
    private $fromuser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="qualify", type="string", length=40, nullable=true)
     */
    private $qualify;

    /**
     * @var string|null
     *
     * @ORM\Column(name="defaultip", type="string", length=40, nullable=true)
     */
    private $defaultip;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rtptimeout", type="integer", nullable=true)
     */
    private $rtptimeout;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rtpholdtimeout", type="integer", nullable=true)
     */
    private $rtpholdtimeout;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sendrpid", type="string", length=0, nullable=true)
     */
    private $sendrpid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="outboundproxy", type="string", length=40, nullable=true)
     */
    private $outboundproxy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callbackextension", type="string", length=40, nullable=true)
     */
    private $callbackextension;

    /**
     * @var int|null
     *
     * @ORM\Column(name="timert1", type="integer", nullable=true)
     */
    private $timert1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="timerb", type="integer", nullable=true)
     */
    private $timerb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="qualifyfreq", type="integer", nullable=true)
     */
    private $qualifyfreq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="constantssrc", type="string", length=0, nullable=true)
     */
    private $constantssrc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contactpermit", type="string", length=40, nullable=true)
     */
    private $contactpermit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contactdeny", type="string", length=40, nullable=true)
     */
    private $contactdeny;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usereqphone", type="string", length=0, nullable=true)
     */
    private $usereqphone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="textsupport", type="string", length=0, nullable=true)
     */
    private $textsupport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="faxdetect", type="string", length=0, nullable=true)
     */
    private $faxdetect;

    /**
     * @var string|null
     *
     * @ORM\Column(name="buggymwi", type="string", length=0, nullable=true)
     */
    private $buggymwi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="auth", type="string", length=40, nullable=true)
     */
    private $auth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fullname", type="string", length=40, nullable=true)
     */
    private $fullname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trunkname", type="string", length=40, nullable=true)
     */
    private $trunkname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cid_number", type="string", length=40, nullable=true)
     */
    private $cidNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callingpres", type="string", length=0, nullable=true)
     */
    private $callingpres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mohinterpret", type="string", length=40, nullable=true)
     */
    private $mohinterpret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mohsuggest", type="string", length=40, nullable=true)
     */
    private $mohsuggest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parkinglot", type="string", length=40, nullable=true)
     */
    private $parkinglot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hasvoicemail", type="string", length=0, nullable=true)
     */
    private $hasvoicemail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscribemwi", type="string", length=0, nullable=true)
     */
    private $subscribemwi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vmexten", type="string", length=40, nullable=true)
     */
    private $vmexten;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autoframing", type="string", length=0, nullable=true)
     */
    private $autoframing;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rtpkeepalive", type="integer", nullable=true)
     */
    private $rtpkeepalive;

    /**
     * @var int|null
     *
     * @ORM\Column(name="call-limit", type="integer", nullable=true)
     */
    private $callLimit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="g726nonstandard", type="string", length=0, nullable=true)
     */
    private $g726nonstandard;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ignoresdpversion", type="string", length=0, nullable=true)
     */
    private $ignoresdpversion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="allowtransfer", type="string", length=0, nullable=true)
     */
    private $allowtransfer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dynamic", type="string", length=0, nullable=true)
     */
    private $dynamic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sippasswd", type="string", length=80, nullable=true)
     */
    private $sippasswd;

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

    public function setPort(?int $port): self
    {
        $this->port = $port;

        return $this;
    }

    public function getRegseconds(): ?int
    {
        return $this->regseconds;
    }

    public function setRegseconds(?int $regseconds): self
    {
        $this->regseconds = $regseconds;

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

    public function getFullcontact(): ?string
    {
        return $this->fullcontact;
    }

    public function setFullcontact(?string $fullcontact): self
    {
        $this->fullcontact = $fullcontact;

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

    public function getHost(): ?string
    {
        return $this->host;
    }

    public function setHost(?string $host): self
    {
        $this->host = $host;

        return $this;
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

    public function getPermit(): ?string
    {
        return $this->permit;
    }

    public function setPermit(?string $permit): self
    {
        $this->permit = $permit;

        return $this;
    }

    public function getDeny(): ?string
    {
        return $this->deny;
    }

    public function setDeny(?string $deny): self
    {
        $this->deny = $deny;

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

    public function getMd5secret(): ?string
    {
        return $this->md5secret;
    }

    public function setMd5secret(?string $md5secret): self
    {
        $this->md5secret = $md5secret;

        return $this;
    }

    public function getRemotesecret(): ?string
    {
        return $this->remotesecret;
    }

    public function setRemotesecret(?string $remotesecret): self
    {
        $this->remotesecret = $remotesecret;

        return $this;
    }

    public function getTransport(): ?string
    {
        return $this->transport;
    }

    public function setTransport(?string $transport): self
    {
        $this->transport = $transport;

        return $this;
    }

    public function getDtmfmode(): ?string
    {
        return $this->dtmfmode;
    }

    public function setDtmfmode(?string $dtmfmode): self
    {
        $this->dtmfmode = $dtmfmode;

        return $this;
    }

    public function getDirectmedia(): ?string
    {
        return $this->directmedia;
    }

    public function setDirectmedia(?string $directmedia): self
    {
        $this->directmedia = $directmedia;

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

    public function getCallgroup(): ?string
    {
        return $this->callgroup;
    }

    public function setCallgroup(?string $callgroup): self
    {
        $this->callgroup = $callgroup;

        return $this;
    }

    public function getPickupgroup(): ?string
    {
        return $this->pickupgroup;
    }

    public function setPickupgroup(?string $pickupgroup): self
    {
        $this->pickupgroup = $pickupgroup;

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

    public function getInsecure(): ?string
    {
        return $this->insecure;
    }

    public function setInsecure(?string $insecure): self
    {
        $this->insecure = $insecure;

        return $this;
    }

    public function getTrustrpid(): ?string
    {
        return $this->trustrpid;
    }

    public function setTrustrpid(?string $trustrpid): self
    {
        $this->trustrpid = $trustrpid;

        return $this;
    }

    public function getProgressinband(): ?string
    {
        return $this->progressinband;
    }

    public function setProgressinband(?string $progressinband): self
    {
        $this->progressinband = $progressinband;

        return $this;
    }

    public function getPromiscredir(): ?string
    {
        return $this->promiscredir;
    }

    public function setPromiscredir(?string $promiscredir): self
    {
        $this->promiscredir = $promiscredir;

        return $this;
    }

    public function getUseclientcode(): ?string
    {
        return $this->useclientcode;
    }

    public function setUseclientcode(?string $useclientcode): self
    {
        $this->useclientcode = $useclientcode;

        return $this;
    }

    public function getAccountcode(): ?string
    {
        return $this->accountcode;
    }

    public function setAccountcode(?string $accountcode): self
    {
        $this->accountcode = $accountcode;

        return $this;
    }

    public function getSetvar(): ?string
    {
        return $this->setvar;
    }

    public function setSetvar(?string $setvar): self
    {
        $this->setvar = $setvar;

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

    public function getAmaflags(): ?string
    {
        return $this->amaflags;
    }

    public function setAmaflags(?string $amaflags): self
    {
        $this->amaflags = $amaflags;

        return $this;
    }

    public function getCallcounter(): ?string
    {
        return $this->callcounter;
    }

    public function setCallcounter(?string $callcounter): self
    {
        $this->callcounter = $callcounter;

        return $this;
    }

    public function getBusylevel(): ?int
    {
        return $this->busylevel;
    }

    public function setBusylevel(?int $busylevel): self
    {
        $this->busylevel = $busylevel;

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

    public function getAllowsubscribe(): ?string
    {
        return $this->allowsubscribe;
    }

    public function setAllowsubscribe(?string $allowsubscribe): self
    {
        $this->allowsubscribe = $allowsubscribe;

        return $this;
    }

    public function getVideosupport(): ?string
    {
        return $this->videosupport;
    }

    public function setVideosupport(?string $videosupport): self
    {
        $this->videosupport = $videosupport;

        return $this;
    }

    public function getMaxcallbitrate(): ?int
    {
        return $this->maxcallbitrate;
    }

    public function setMaxcallbitrate(?int $maxcallbitrate): self
    {
        $this->maxcallbitrate = $maxcallbitrate;

        return $this;
    }

    public function getRfc2833compensate(): ?string
    {
        return $this->rfc2833compensate;
    }

    public function setRfc2833compensate(?string $rfc2833compensate): self
    {
        $this->rfc2833compensate = $rfc2833compensate;

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

    public function getSessionTimers(): ?string
    {
        return $this->sessionTimers;
    }

    public function setSessionTimers(?string $sessionTimers): self
    {
        $this->sessionTimers = $sessionTimers;

        return $this;
    }

    public function getSessionExpires(): ?int
    {
        return $this->sessionExpires;
    }

    public function setSessionExpires(?int $sessionExpires): self
    {
        $this->sessionExpires = $sessionExpires;

        return $this;
    }

    public function getSessionMinse(): ?int
    {
        return $this->sessionMinse;
    }

    public function setSessionMinse(?int $sessionMinse): self
    {
        $this->sessionMinse = $sessionMinse;

        return $this;
    }

    public function getSessionRefresher(): ?string
    {
        return $this->sessionRefresher;
    }

    public function setSessionRefresher(?string $sessionRefresher): self
    {
        $this->sessionRefresher = $sessionRefresher;

        return $this;
    }

    public function getT38ptUsertpsource(): ?string
    {
        return $this->t38ptUsertpsource;
    }

    public function setT38ptUsertpsource(?string $t38ptUsertpsource): self
    {
        $this->t38ptUsertpsource = $t38ptUsertpsource;

        return $this;
    }

    public function getRegexten(): ?string
    {
        return $this->regexten;
    }

    public function setRegexten(?string $regexten): self
    {
        $this->regexten = $regexten;

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

    public function getFromuser(): ?string
    {
        return $this->fromuser;
    }

    public function setFromuser(?string $fromuser): self
    {
        $this->fromuser = $fromuser;

        return $this;
    }

    public function getQualify(): ?string
    {
        return $this->qualify;
    }

    public function setQualify(?string $qualify): self
    {
        $this->qualify = $qualify;

        return $this;
    }

    public function getDefaultip(): ?string
    {
        return $this->defaultip;
    }

    public function setDefaultip(?string $defaultip): self
    {
        $this->defaultip = $defaultip;

        return $this;
    }

    public function getRtptimeout(): ?int
    {
        return $this->rtptimeout;
    }

    public function setRtptimeout(?int $rtptimeout): self
    {
        $this->rtptimeout = $rtptimeout;

        return $this;
    }

    public function getRtpholdtimeout(): ?int
    {
        return $this->rtpholdtimeout;
    }

    public function setRtpholdtimeout(?int $rtpholdtimeout): self
    {
        $this->rtpholdtimeout = $rtpholdtimeout;

        return $this;
    }

    public function getSendrpid(): ?string
    {
        return $this->sendrpid;
    }

    public function setSendrpid(?string $sendrpid): self
    {
        $this->sendrpid = $sendrpid;

        return $this;
    }

    public function getOutboundproxy(): ?string
    {
        return $this->outboundproxy;
    }

    public function setOutboundproxy(?string $outboundproxy): self
    {
        $this->outboundproxy = $outboundproxy;

        return $this;
    }

    public function getCallbackextension(): ?string
    {
        return $this->callbackextension;
    }

    public function setCallbackextension(?string $callbackextension): self
    {
        $this->callbackextension = $callbackextension;

        return $this;
    }

    public function getTimert1(): ?int
    {
        return $this->timert1;
    }

    public function setTimert1(?int $timert1): self
    {
        $this->timert1 = $timert1;

        return $this;
    }

    public function getTimerb(): ?int
    {
        return $this->timerb;
    }

    public function setTimerb(?int $timerb): self
    {
        $this->timerb = $timerb;

        return $this;
    }

    public function getQualifyfreq(): ?int
    {
        return $this->qualifyfreq;
    }

    public function setQualifyfreq(?int $qualifyfreq): self
    {
        $this->qualifyfreq = $qualifyfreq;

        return $this;
    }

    public function getConstantssrc(): ?string
    {
        return $this->constantssrc;
    }

    public function setConstantssrc(?string $constantssrc): self
    {
        $this->constantssrc = $constantssrc;

        return $this;
    }

    public function getContactpermit(): ?string
    {
        return $this->contactpermit;
    }

    public function setContactpermit(?string $contactpermit): self
    {
        $this->contactpermit = $contactpermit;

        return $this;
    }

    public function getContactdeny(): ?string
    {
        return $this->contactdeny;
    }

    public function setContactdeny(?string $contactdeny): self
    {
        $this->contactdeny = $contactdeny;

        return $this;
    }

    public function getUsereqphone(): ?string
    {
        return $this->usereqphone;
    }

    public function setUsereqphone(?string $usereqphone): self
    {
        $this->usereqphone = $usereqphone;

        return $this;
    }

    public function getTextsupport(): ?string
    {
        return $this->textsupport;
    }

    public function setTextsupport(?string $textsupport): self
    {
        $this->textsupport = $textsupport;

        return $this;
    }

    public function getFaxdetect(): ?string
    {
        return $this->faxdetect;
    }

    public function setFaxdetect(?string $faxdetect): self
    {
        $this->faxdetect = $faxdetect;

        return $this;
    }

    public function getBuggymwi(): ?string
    {
        return $this->buggymwi;
    }

    public function setBuggymwi(?string $buggymwi): self
    {
        $this->buggymwi = $buggymwi;

        return $this;
    }

    public function getAuth(): ?string
    {
        return $this->auth;
    }

    public function setAuth(?string $auth): self
    {
        $this->auth = $auth;

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

    public function getTrunkname(): ?string
    {
        return $this->trunkname;
    }

    public function setTrunkname(?string $trunkname): self
    {
        $this->trunkname = $trunkname;

        return $this;
    }

    public function getCidNumber(): ?string
    {
        return $this->cidNumber;
    }

    public function setCidNumber(?string $cidNumber): self
    {
        $this->cidNumber = $cidNumber;

        return $this;
    }

    public function getCallingpres(): ?string
    {
        return $this->callingpres;
    }

    public function setCallingpres(?string $callingpres): self
    {
        $this->callingpres = $callingpres;

        return $this;
    }

    public function getMohinterpret(): ?string
    {
        return $this->mohinterpret;
    }

    public function setMohinterpret(?string $mohinterpret): self
    {
        $this->mohinterpret = $mohinterpret;

        return $this;
    }

    public function getMohsuggest(): ?string
    {
        return $this->mohsuggest;
    }

    public function setMohsuggest(?string $mohsuggest): self
    {
        $this->mohsuggest = $mohsuggest;

        return $this;
    }

    public function getParkinglot(): ?string
    {
        return $this->parkinglot;
    }

    public function setParkinglot(?string $parkinglot): self
    {
        $this->parkinglot = $parkinglot;

        return $this;
    }

    public function getHasvoicemail(): ?string
    {
        return $this->hasvoicemail;
    }

    public function setHasvoicemail(?string $hasvoicemail): self
    {
        $this->hasvoicemail = $hasvoicemail;

        return $this;
    }

    public function getSubscribemwi(): ?string
    {
        return $this->subscribemwi;
    }

    public function setSubscribemwi(?string $subscribemwi): self
    {
        $this->subscribemwi = $subscribemwi;

        return $this;
    }

    public function getVmexten(): ?string
    {
        return $this->vmexten;
    }

    public function setVmexten(?string $vmexten): self
    {
        $this->vmexten = $vmexten;

        return $this;
    }

    public function getAutoframing(): ?string
    {
        return $this->autoframing;
    }

    public function setAutoframing(?string $autoframing): self
    {
        $this->autoframing = $autoframing;

        return $this;
    }

    public function getRtpkeepalive(): ?int
    {
        return $this->rtpkeepalive;
    }

    public function setRtpkeepalive(?int $rtpkeepalive): self
    {
        $this->rtpkeepalive = $rtpkeepalive;

        return $this;
    }

    public function getCallLimit(): ?int
    {
        return $this->callLimit;
    }

    public function setCallLimit(?int $callLimit): self
    {
        $this->callLimit = $callLimit;

        return $this;
    }

    public function getG726nonstandard(): ?string
    {
        return $this->g726nonstandard;
    }

    public function setG726nonstandard(?string $g726nonstandard): self
    {
        $this->g726nonstandard = $g726nonstandard;

        return $this;
    }

    public function getIgnoresdpversion(): ?string
    {
        return $this->ignoresdpversion;
    }

    public function setIgnoresdpversion(?string $ignoresdpversion): self
    {
        $this->ignoresdpversion = $ignoresdpversion;

        return $this;
    }

    public function getAllowtransfer(): ?string
    {
        return $this->allowtransfer;
    }

    public function setAllowtransfer(?string $allowtransfer): self
    {
        $this->allowtransfer = $allowtransfer;

        return $this;
    }

    public function getDynamic(): ?string
    {
        return $this->dynamic;
    }

    public function setDynamic(?string $dynamic): self
    {
        $this->dynamic = $dynamic;

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


}
