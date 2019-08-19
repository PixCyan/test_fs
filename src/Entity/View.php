<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ViewRepository")
 * @ApiResource()
 */
class View
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $version;

    /**
     * arg : t
     * @var string
     * @ORM\Column(type="string")
     */
    private $hitType;

    /**
     * arg : dl
     * @var string
     * @ORM\Column(type="string")
     */
    private $documentLocation;

    /**
     * arg : dr
     * @var string
     * @ORM\Column(type="string")
     */
    private $documentReferer;

    /**
     * arg : wct
     * @var string
     * @ORM\Column(type="string")
     */
    private $wizbiiCreatorType;

    /**
     * arg : wui
     * @var string
     * @ORM\Column(type="string")
     */
    private $wizbiiUserId;

    /**
     * arg : wuui
     * @var string
     * @ORM\Column(type="string")
     */
    private $wizbiiUniqUserId;

    /**
     * arg : ec
     * @var string
     * @ORM\Column(type="string")
     */
    private $eventCategory;

    /**
     * arg : ea
     * @var string
     * @ORM\Column(type="string")
     */
    private $eventAction;

    /**
     * el
     * @var string
     * @ORM\Column(type="string")
     */
    private $eventLabel;

    /**
     * arg : ev
     * @var int
     * @ORM\Column(type="integer")
     */
    private $eventValue;

    /**
     * arg : tid
     * @var string
     * @ORM\Column(type="string")
     */
    private $trackingId;

    /**
     * arg : ds
     * @var string
     * @ORM\Column(type="string")
     */
    private $dataSource;

    /**
     * arg : cn
     * @var string
     * @ORM\Column(type="string")
     */
    private $campaignName;

    /**
     * arg : cs
     * @var string
     * @ORM\Column(type="string")
     */
    private $campaignSource;

    /**
     * arg : cm
     * @var string
     * @ORM\Column(type="string")
     */
    private $campaignMedium;

    /**
     * arg : ck
     * @var string
     * @ORM\Column(type="string")
     */
    private $campaignKeyword;

    /**
     * arg : cc
     * @var string
     * @ORM\Column(type="string")
     */
    private $campaignContent;

    /**
     * arg : sn
     * @var string
     * @ORM\Column(type="string")
     */
    private $screenName;

    /**
     * arg : an
     * @var string
     * @ORM\Column(type="string")
     */
    private $applicationName;

    /**
     * arg : av
     * @var string
     * @ORM\Column(type="string")
     */
    private $applicationVersion;

    /**
     * arg : qt
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $queueTime;

    /**
     * arg : z
     * @var string
     * @ORM\Column(type="string")
     */
    private $cacheBurster;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @param int $version
     */
    public function setVersion(int $version): void
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getHitType(): string
    {
        return $this->hitType;
    }

    /**
     * @param string $hitType
     */
    public function setHitType(string $hitType): void
    {
        $this->hitType = $hitType;
    }

    /**
     * @return string
     */
    public function getDocumentLocation(): string
    {
        return $this->documentLocation;
    }

    /**
     * @param string $documentLocation
     */
    public function setDocumentLocation(string $documentLocation): void
    {
        $this->documentLocation = $documentLocation;
    }

    /**
     * @return string
     */
    public function getDocumentReferer(): string
    {
        return $this->documentReferer;
    }

    /**
     * @param string $documentReferer
     */
    public function setDocumentReferer(string $documentReferer): void
    {
        $this->documentReferer = $documentReferer;
    }

    /**
     * @return string
     */
    public function getWizbiiCreatorType(): string
    {
        return $this->wizbiiCreatorType;
    }

    /**
     * @param string $wizbiiCreatorType
     */
    public function setWizbiiCreatorType(string $wizbiiCreatorType): void
    {
        $this->wizbiiCreatorType = $wizbiiCreatorType;
    }

    /**
     * @return string
     */
    public function getWizbiiUserId(): string
    {
        return $this->wizbiiUserId;
    }

    /**
     * @param string $wizbiiUserId
     */
    public function setWizbiiUserId(string $wizbiiUserId): void
    {
        $this->wizbiiUserId = $wizbiiUserId;
    }

    /**
     * @return string
     */
    public function getWizbiiUniqUserId(): string
    {
        return $this->wizbiiUniqUserId;
    }

    /**
     * @param string $wizbiiUniqUserId
     */
    public function setWizbiiUniqUserId(string $wizbiiUniqUserId): void
    {
        $this->wizbiiUniqUserId = $wizbiiUniqUserId;
    }

    /**
     * @return string
     */
    public function getEventCategory(): string
    {
        return $this->eventCategory;
    }

    /**
     * @param string $eventCategory
     */
    public function setEventCategory(string $eventCategory): void
    {
        $this->eventCategory = $eventCategory;
    }

    /**
     * @return string
     */
    public function getEventAction(): string
    {
        return $this->eventAction;
    }

    /**
     * @param string $eventAction
     */
    public function setEventAction(string $eventAction): void
    {
        $this->eventAction = $eventAction;
    }

    /**
     * @return string
     */
    public function getEventLabel(): string
    {
        return $this->eventLabel;
    }

    /**
     * @param string $eventLabel
     */
    public function setEventLabel(string $eventLabel): void
    {
        $this->eventLabel = $eventLabel;
    }

    /**
     * @return int
     */
    public function getEventValue(): int
    {
        return $this->eventValue;
    }

    /**
     * @param int $eventValue
     */
    public function setEventValue(int $eventValue): void
    {
        $this->eventValue = $eventValue;
    }

    /**
     * @return string
     */
    public function getTrackingId(): string
    {
        return $this->trackingId;
    }

    /**
     * @param string $trackingId
     */
    public function setTrackingId(string $trackingId): void
    {
        $this->trackingId = $trackingId;
    }

    /**
     * @return string
     */
    public function getDataSource(): string
    {
        return $this->dataSource;
    }

    /**
     * @param string $dataSource
     */
    public function setDataSource(string $dataSource): void
    {
        $this->dataSource = $dataSource;
    }

    /**
     * @return string
     */
    public function getCampaignName(): string
    {
        return $this->campaignName;
    }

    /**
     * @param string $campaignName
     */
    public function setCampaignName(string $campaignName): void
    {
        $this->campaignName = $campaignName;
    }

    /**
     * @return string
     */
    public function getCampaignSource(): string
    {
        return $this->campaignSource;
    }

    /**
     * @param string $campaignSource
     */
    public function setCampaignSource(string $campaignSource): void
    {
        $this->campaignSource = $campaignSource;
    }

    /**
     * @return string
     */
    public function getCampaignMedium(): string
    {
        return $this->campaignMedium;
    }

    /**
     * @param string $campaignMedium
     */
    public function setCampaignMedium(string $campaignMedium): void
    {
        $this->campaignMedium = $campaignMedium;
    }

    /**
     * @return string
     */
    public function getCampaignKeyword(): string
    {
        return $this->campaignKeyword;
    }

    /**
     * @param string $campaignKeyword
     */
    public function setCampaignKeyword(string $campaignKeyword): void
    {
        $this->campaignKeyword = $campaignKeyword;
    }

    /**
     * @return string
     */
    public function getCampaignContent(): string
    {
        return $this->campaignContent;
    }

    /**
     * @param string $campaignContent
     */
    public function setCampaignContent(string $campaignContent): void
    {
        $this->campaignContent = $campaignContent;
    }

    /**
     * @return string
     */
    public function getScreenName(): string
    {
        return $this->screenName;
    }

    /**
     * @param string $screenName
     */
    public function setScreenName(string $screenName): void
    {
        $this->screenName = $screenName;
    }

    /**
     * @return string
     */
    public function getApplicationName(): string
    {
        return $this->applicationName;
    }

    /**
     * @param string $applicationName
     */
    public function setApplicationName(string $applicationName): void
    {
        $this->applicationName = $applicationName;
    }

    /**
     * @return string
     */
    public function getApplicationVersion(): string
    {
        return $this->applicationVersion;
    }

    /**
     * @param string $applicationVersion
     */
    public function setApplicationVersion(string $applicationVersion): void
    {
        $this->applicationVersion = $applicationVersion;
    }

    /**
     * @return int
     */
    public function getQueueTime(): int
    {
        return $this->queueTime;
    }

    /**
     * @param int $queueTime
     */
    public function setQueueTime(int $queueTime): void
    {
        $this->queueTime = $queueTime;
    }

    /**
     * @return string
     */
    public function getCacheBurster(): string
    {
        return $this->cacheBurster;
    }

    /**
     * @param string $cacheBurster
     */
    public function setCacheBurster(string $cacheBurster): void
    {
        $this->cacheBurster = $cacheBurster;
    }
}
