<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ViewRepository")
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
     * arg : v
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
}
