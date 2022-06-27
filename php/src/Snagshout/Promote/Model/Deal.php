<?php

/**
 * Copyright 2016-2020, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Model;

class Deal
{
    /**
     * @var int
     */
    protected $campaignId;
    /**
     * @var int
     */
    protected $companyId;
    /**
     * @var int
     */
    protected $productId;
    /**
     * @var string
     */
    protected $productName;
    /**
     * @var string
     */
    protected $productDescription;
    /**
     * @var Category[]
     */
    protected $categories;
    /**
     * @var Medium[]
     */
    protected $media;
    /**
     * @var string[]
     */
    protected $boost;
    /**
     * @var float[]
     */
    protected $boostWeights;
    /**
     * @var string
     */
    protected $actionType;
    /**
     * @var mixed
     */
    protected $actionMetadata;
    /**
     * @var bool
     */
    protected $actionIsPro;
    /**
     * @var string
     */
    protected $code;
    /**
     * @var int
     */
    protected $confidence;
    /**
     * @var string
     */
    protected $currency;
    /**
     * @var float
     */
    protected $discountPrice;
    /**
     * @var float
     */
    protected $rebateAmount;
    /**
     * @var bool
     */
    protected $isExclusive;
    /**
     * @var bool
     */
    protected $isNSFW;
    /**
     * @var string[]
     */
    protected $featured;
    /**
     * @var bool
     */
    protected $isUnlimited;
    /**
     * @var mixed
     */
    protected $listingMetadata;
    /**
     * @var float
     */
    protected $listingPrice;
    /**
     * @var string
     */
    protected $listingUrl;
    /**
     * @var string
     */
    protected $reviewUrl;
    /**
     * @var string
     */
    protected $marketplace;
    /**
     * @var string
     */
    protected $marketplaceId;
    /**
     * @var string
     */
    protected $payloadType;
    /**
     * @var int
     */
    protected $completeWithin;
    /**
     * @var bool
     */
    protected $requireEmail;
    /**
     * @var int
     */
    protected $shippingDaysMax;
    /**
     * @var int
     */
    protected $shippingDaysMin;
    /**
     * @var float
     */
    protected $shippingPrice;
    /**
     * @var string
     */
    protected $shippingType;
    /**
     * @var string
     */
    protected $startsAt;
    /**
     * @var string
     */
    protected $returnAt;
    /**
     * @var string
     */
    protected $updatedAt;
    /**
     * @var string
     */
    protected $endsAt;
    /**
     * @var bool
     */
    protected $available;
    /**
     * @var mixed
     */
    protected $metadata;
    /**
     * @var int
     */
    protected $remainingQuantity;
    /**
     * @var bool
     */
    protected $dailyLimitReached;
    /**
     * @var mixed
     */
    protected $immediateFollowup;
    /**
     * @var mixed
     */
    protected $scheduledFollowup;
    /**
     * @var int
     */
    protected $dailyLimit;
    /**
     * @var string
     */
    protected $visibility;

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }
    /**
     * @param int $campaignId
     *
     * @return self
     */
    public function setCampaignId($campaignId = null)
    {
        $this->campaignId = $campaignId;

        return $this;
    }
    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }
    /**
     * @param int $companyId
     *
     * @return self
     */
    public function setCompanyId($companyId = null)
    {
        $this->companyId = $companyId;

        return $this;
    }
    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }
    /**
     * @param int $productId
     *
     * @return self
     */
    public function setProductId($productId = null)
    {
        $this->productId = $productId;

        return $this;
    }
    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }
    /**
     * @param string $productName
     *
     * @return self
     */
    public function setProductName($productName = null)
    {
        $this->productName = $productName;

        return $this;
    }
    /**
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }
    /**
     * @param string $productDescription
     *
     * @return self
     */
    public function setProductDescription($productDescription = null)
    {
        $this->productDescription = $productDescription;

        return $this;
    }
    /**
     * @return Category[]
     */
    public function getCategories()
    {
        return $this->categories;
    }
    /**
     * @param Category[] $categories
     *
     * @return self
     */
    public function setCategories(array $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }
    /**
     * @return Medium[]
     */
    public function getMedia()
    {
        return $this->media;
    }
    /**
     * @param Medium[] $media
     *
     * @return self
     */
    public function setMedia(array $media = null)
    {
        $this->media = $media;

        return $this;
    }
    /**
     * @return string[]
     */
    public function getBoost()
    {
        return $this->boost;
    }
    /**
     * @param string[] $boost
     *
     * @return self
     */
    public function setBoost(array $boost = null)
    {
        $this->boost = $boost;

        return $this;
    }
    /**
     * @return float[]
     */
    public function getBoostWeights()
    {
        return $this->boostWeights;
    }
    /**
     * @param float[] $boostWeights
     *
     * @return self
     */
    public function setBoostWeights(array $boostWeights = null)
    {
        $this->boostWeights = $boostWeights;

        return $this;
    }
    /**
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }
    /**
     * @param string $actionType
     *
     * @return self
     */
    public function setActionType($actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getActionMetadata()
    {
        return $this->actionMetadata;
    }
    /**
     * @param mixed $actionMetadata
     *
     * @return self
     */
    public function setActionMetadata($actionMetadata = null)
    {
        $this->actionMetadata = $actionMetadata;

        return $this;
    }
    /**
     * @return bool
     */
    public function getActionIsPro()
    {
        return $this->actionIsPro;
    }
    /**
     * @param bool $actionIsPro
     *
     * @return self
     */
    public function setActionIsPro($actionIsPro = null)
    {
        $this->actionIsPro = $actionIsPro;

        return $this;
    }
    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * @param string $code
     *
     * @return self
     */
    public function setCode($code = null)
    {
        $this->code = $code;

        return $this;
    }
    /**
     * @return int
     */
    public function getConfidence()
    {
        return $this->confidence;
    }
    /**
     * @param int $confidence
     *
     * @return self
     */
    public function setConfidence($confidence = null)
    {
        $this->confidence = $confidence;

        return $this;
    }
    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency($currency = null)
    {
        $this->currency = $currency;

        return $this;
    }
    /**
     * @return float
     */
    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }
    /**
     * @param float $discountPrice
     *
     * @return self
     */
    public function setDiscountPrice($discountPrice = null)
    {
        $this->discountPrice = $discountPrice;

        return $this;
    }
    /**
     * @return float
     */
    public function getRebateAmount()
    {
        return $this->rebateAmount;
    }
    /**
     * @param float $rebateAmount
     *
     * @return self
     */
    public function setRebateAmount($rebateAmount = null)
    {
        $this->rebateAmount = $rebateAmount;

        return $this;
    }
    /**
     * @return bool
     */
    public function getIsExclusive()
    {
        return $this->isExclusive;
    }
    /**
     * @param bool $isExclusive
     *
     * @return self
     */
    public function setIsExclusive($isExclusive = null)
    {
        $this->isExclusive = $isExclusive;

        return $this;
    }
    /**
     * @return bool
     */
    public function getIsNSFW()
    {
        return $this->isNSFW;
    }
    /**
     * @param bool $isNSFW
     *
     * @return self
     */
    public function setIsNSFW($isNSFW = null)
    {
        $this->isNSFW = $isNSFW;

        return $this;
    }
    /**
     * @return string[]
     */
    public function getFeatured()
    {
        return $this->featured;
    }
    /**
     * @param string[] $featured
     *
     * @return self
     */
    public function setFeatured(array $featured = null)
    {
        $this->featured = $featured;

        return $this;
    }
    /**
     * @return bool
     */
    public function getIsUnlimited()
    {
        return $this->isUnlimited;
    }
    /**
     * @param bool $isUnlimited
     *
     * @return self
     */
    public function setIsUnlimited($isUnlimited = null)
    {
        $this->isUnlimited = $isUnlimited;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getListingMetadata()
    {
        return $this->listingMetadata;
    }
    /**
     * @param mixed $listingMetadata
     *
     * @return self
     */
    public function setListingMetadata($listingMetadata = null)
    {
        $this->listingMetadata = $listingMetadata;

        return $this;
    }
    /**
     * @return float
     */
    public function getListingPrice()
    {
        return $this->listingPrice;
    }
    /**
     * @param float $listingPrice
     *
     * @return self
     */
    public function setListingPrice($listingPrice = null)
    {
        $this->listingPrice = $listingPrice;

        return $this;
    }
    /**
     * @return string
     */
    public function getListingUrl()
    {
        return $this->listingUrl;
    }
    /**
     * @param string $listingUrl
     *
     * @return self
     */
    public function setListingUrl($listingUrl = null)
    {
        $this->listingUrl = $listingUrl;

        return $this;
    }
    /**
     * @return string
     */
    public function getReviewUrl()
    {
        return $this->reviewUrl;
    }
    /**
     * @param string $reviewUrl
     *
     * @return self
     */
    public function setReviewUrl($reviewUrl = null)
    {
        $this->reviewUrl = $reviewUrl;

        return $this;
    }
    /**
     * @return string
     */
    public function getMarketplace()
    {
        return $this->marketplace;
    }
    /**
     * @param string $marketplace
     *
     * @return self
     */
    public function setMarketplace($marketplace = null)
    {
        $this->marketplace = $marketplace;

        return $this;
    }
    /**
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->marketplaceId;
    }
    /**
     * @param string $marketplaceId
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId = null)
    {
        $this->marketplaceId = $marketplaceId;

        return $this;
    }
    /**
     * @return string
     */
    public function getPayloadType()
    {
        return $this->payloadType;
    }
    /**
     * @param string $payloadType
     *
     * @return self
     */
    public function setPayloadType($payloadType = null)
    {
        $this->payloadType = $payloadType;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getCompleteWithin()
    {
        return $this->completeWithin;
    }
    /**
     * @param int|null $completeWithin
     *
     * @return self
     */
    public function setCompleteWithin($completeWithin = null)
    {
        $this->completeWithin = $completeWithin;

        return $this;
    }
    /**
     * @return bool
     */
    public function getRequireEmail()
    {
        return $this->requireEmail;
    }
    /**
     * @param bool $requireEmail
     *
     * @return self
     */
    public function setRequireEmail($requireEmail = null)
    {
        $this->requireEmail = $requireEmail;

        return $this;
    }
    /**
     * @return int
     */
    public function getShippingDaysMax()
    {
        return $this->shippingDaysMax;
    }
    /**
     * @param int $shippingDaysMax
     *
     * @return self
     */
    public function setShippingDaysMax($shippingDaysMax = null)
    {
        $this->shippingDaysMax = $shippingDaysMax;

        return $this;
    }
    /**
     * @return int
     */
    public function getShippingDaysMin()
    {
        return $this->shippingDaysMin;
    }
    /**
     * @param int $shippingDaysMin
     *
     * @return self
     */
    public function setShippingDaysMin($shippingDaysMin = null)
    {
        $this->shippingDaysMin = $shippingDaysMin;

        return $this;
    }
    /**
     * @return float
     */
    public function getShippingPrice()
    {
        return $this->shippingPrice;
    }
    /**
     * @param float $shippingPrice
     *
     * @return self
     */
    public function setShippingPrice($shippingPrice = null)
    {
        $this->shippingPrice = $shippingPrice;

        return $this;
    }
    /**
     * @return string
     */
    public function getShippingType()
    {
        return $this->shippingType;
    }
    /**
     * @param string $shippingType
     *
     * @return self
     */
    public function setShippingType($shippingType = null)
    {
        $this->shippingType = $shippingType;

        return $this;
    }
    /**
     * @return string
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }
    /**
     * @param string $startsAt
     *
     * @return self
     */
    public function setStartsAt($startsAt = null)
    {
        $this->startsAt = $startsAt;

        return $this;
    }
    /**
     * @return string
     */
    public function getReturnAt()
    {
        return $this->returnAt;
    }
    /**
     * @param string $returnAt
     *
     * @return self
     */
    public function setReturnAt($returnAt = null)
    {
        $this->returnAt = $returnAt;

        return $this;
    }
    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
    /**
     * @return string
     */
    public function getEndsAt()
    {
        return $this->endsAt;
    }
    /**
     * @param string $endsAt
     *
     * @return self
     */
    public function setEndsAt($endsAt = null)
    {
        $this->endsAt = $endsAt;

        return $this;
    }
    /**
     * @return bool
     */
    public function getAvailable()
    {
        return $this->available;
    }
    /**
     * @param bool $available
     *
     * @return self
     */
    public function setAvailable($available = null)
    {
        $this->available = $available;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
    /**
     * @param mixed $metadata
     *
     * @return self
     */
    public function setMetadata($metadata = null)
    {
        $this->metadata = $metadata;

        return $this;
    }
    /**
     * @return int
     */
    public function getRemainingQuantity()
    {
        return $this->remainingQuantity;
    }
    /**
     * @param int $remainingQuantity
     *
     * @return self
     */
    public function setRemainingQuantity($remainingQuantity = null)
    {
        $this->remainingQuantity = $remainingQuantity;

        return $this;
    }
    /**
     * @return bool
     */
    public function getDailyLimitReached()
    {
        return $this->dailyLimitReached;
    }
    /**
     * @param bool $dailyLimitReached
     *
     * @return self
     */
    public function setDailyLimitReached($dailyLimitReached = null)
    {
        $this->dailyLimitReached = $dailyLimitReached;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getImmediateFollowup()
    {
        return $this->immediateFollowup;
    }
    /**
     * @param mixed $immediateFollowup
     *
     * @return self
     */
    public function setImmediateFollowup($immediateFollowup = null)
    {
        $this->immediateFollowup = $immediateFollowup;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getScheduledFollowup()
    {
        return $this->scheduledFollowup;
    }
    /**
     * @param mixed $scheduledFollowup
     *
     * @return self
     */
    public function setScheduledFollowup($scheduledFollowup = null)
    {
        $this->scheduledFollowup = $scheduledFollowup;

        return $this;
    }
    /**
     * @return int|null
     */
    public function getDailyLimit(): ?int
    {
        return $this->dailyLimit;
    }
    /**
     * @param int|null $dailyLimit
     *
     * @return self
     */
    public function setDailyLimit(int $dailyLimit = null): Deal
    {
        $this->dailyLimit = $dailyLimit;

        return $this;
    }
    /**
     * @return string
     */
    public function getVisibility(): string
    {
        return $this->visibility;
    }

    /**
     * @param string|null $visibility
     *
     * @return self
     */
    public function setVisibility(string $visibility = null): Deal
    {
        $this->visibility = $visibility;

        return $this;
    }
}
