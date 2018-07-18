<?php

/**
 * Copyright 2016-2018, Snagshout <developers@snagshout.com>
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
     * 
     *
     * @var int
     */
    protected $campaignId;
    /**
     * 
     *
     * @var int
     */
    protected $companyId;
    /**
     * 
     *
     * @var int
     */
    protected $productId;
    /**
     * 
     *
     * @var string
     */
    protected $productName;
    /**
     * 
     *
     * @var string
     */
    protected $productDescription;
    /**
     * 
     *
     * @var Category[]
     */
    protected $categories;
    /**
     * 
     *
     * @var Medium[]
     */
    protected $media;
    /**
     * 
     *
     * @var string[]
     */
    protected $boost;
    /**
     * 
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var int
     */
    protected $confidence;
    /**
     * 
     *
     * @var string
     */
    protected $currency;
    /**
     * 
     *
     * @var float
     */
    protected $discountPrice;
    /**
     * 
     *
     * @var float
     */
    protected $rebateAmount;
    /**
     * 
     *
     * @var bool
     */
    protected $isExclusive;
    /**
     * 
     *
     * @var bool
     */
    protected $isNSFW;
    /**
     * 
     *
     * @var string[]
     */
    protected $featured;
    /**
     * 
     *
     * @var bool
     */
    protected $isUnlimited;
    /**
     * 
     *
     * @var mixed
     */
    protected $listingMetadata;
    /**
     * 
     *
     * @var float
     */
    protected $listingPrice;
    /**
     * 
     *
     * @var string
     */
    protected $listingUrl;
    /**
     * 
     *
     * @var string
     */
    protected $marketplace;
    /**
     * 
     *
     * @var string
     */
    protected $payloadType;
    /**
     * 
     *
     * @var bool
     */
    protected $requireEmail;
    /**
     * 
     *
     * @var int
     */
    protected $shippingDaysMax;
    /**
     * 
     *
     * @var int
     */
    protected $shippingDaysMin;
    /**
     * 
     *
     * @var float
     */
    protected $shippingPrice;
    /**
     * 
     *
     * @var string
     */
    protected $shippingType;
    /**
     * 
     *
     * @var string
     */
    protected $startsAt;
    /**
     * 
     *
     * @var string
     */
    protected $returnAt;
    /**
     * 
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var string
     */
    protected $endsAt;
    /**
     * 
     *
     * @var bool
     */
    protected $available;
    /**
     * 
     *
     * @var int
     */
    protected $remainingQuantity;
    /**
     * 
     *
     * @var bool
     */
    protected $dailyLimitReached;
    /**
     * 
     *
     * @var mixed
     */
    protected $immediateFollowup;
    /**
     * 
     *
     * @var mixed
     */
    protected $scheduledFollowup;
    /**
     * 
     *
     * @return int
     */
    public function getCampaignId() : ? int
    {
        return $this->campaignId;
    }
    /**
     * 
     *
     * @param int $campaignId
     *
     * @return self
     */
    public function setCampaignId(? int $campaignId) : self
    {
        $this->campaignId = $campaignId;

        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCompanyId() : ? int
    {
        return $this->companyId;
    }
    /**
     * 
     *
     * @param int $companyId
     *
     * @return self
     */
    public function setCompanyId(? int $companyId) : self
    {
        $this->companyId = $companyId;

        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getProductId() : ? int
    {
        return $this->productId;
    }
    /**
     * 
     *
     * @param int $productId
     *
     * @return self
     */
    public function setProductId(? int $productId) : self
    {
        $this->productId = $productId;

        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductName() : ? string
    {
        return $this->productName;
    }
    /**
     * 
     *
     * @param string $productName
     *
     * @return self
     */
    public function setProductName(? string $productName) : self
    {
        $this->productName = $productName;

        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductDescription() : ? string
    {
        return $this->productDescription;
    }
    /**
     * 
     *
     * @param string $productDescription
     *
     * @return self
     */
    public function setProductDescription(? string $productDescription) : self
    {
        $this->productDescription = $productDescription;

        return $this;
    }
    /**
     * 
     *
     * @return Category[]
     */
    public function getCategories() : ? array
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param Category[] $categories
     *
     * @return self
     */
    public function setCategories(? array $categories) : self
    {
        $this->categories = $categories;

        return $this;
    }
    /**
     * 
     *
     * @return Medium[]
     */
    public function getMedia() : ? array
    {
        return $this->media;
    }
    /**
     * 
     *
     * @param Medium[] $media
     *
     * @return self
     */
    public function setMedia(? array $media) : self
    {
        $this->media = $media;

        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getBoost() : ? array
    {
        return $this->boost;
    }
    /**
     * 
     *
     * @param string[] $boost
     *
     * @return self
     */
    public function setBoost(? array $boost) : self
    {
        $this->boost = $boost;

        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCode() : ? string
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(? string $code) : self
    {
        $this->code = $code;

        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConfidence() : ? int
    {
        return $this->confidence;
    }
    /**
     * 
     *
     * @param int $confidence
     *
     * @return self
     */
    public function setConfidence(? int $confidence) : self
    {
        $this->confidence = $confidence;

        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrency() : ? string
    {
        return $this->currency;
    }
    /**
     * 
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(? string $currency) : self
    {
        $this->currency = $currency;

        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDiscountPrice() : ? float
    {
        return $this->discountPrice;
    }
    /**
     * 
     *
     * @param float $discountPrice
     *
     * @return self
     */
    public function setDiscountPrice(? float $discountPrice) : self
    {
        $this->discountPrice = $discountPrice;

        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRebateAmount() : ? float
    {
        return $this->rebateAmount;
    }
    /**
     * 
     *
     * @param float $rebateAmount
     *
     * @return self
     */
    public function setRebateAmount(? float $rebateAmount) : self
    {
        $this->rebateAmount = $rebateAmount;

        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsExclusive() : ? bool
    {
        return $this->isExclusive;
    }
    /**
     * 
     *
     * @param bool $isExclusive
     *
     * @return self
     */
    public function setIsExclusive(? bool $isExclusive) : self
    {
        $this->isExclusive = $isExclusive;

        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsNSFW() : ? bool
    {
        return $this->isNSFW;
    }
    /**
     * 
     *
     * @param bool $isNSFW
     *
     * @return self
     */
    public function setIsNSFW(? bool $isNSFW) : self
    {
        $this->isNSFW = $isNSFW;

        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getFeatured() : ? array
    {
        return $this->featured;
    }
    /**
     * 
     *
     * @param string[] $featured
     *
     * @return self
     */
    public function setFeatured(? array $featured) : self
    {
        $this->featured = $featured;

        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsUnlimited() : ? bool
    {
        return $this->isUnlimited;
    }
    /**
     * 
     *
     * @param bool $isUnlimited
     *
     * @return self
     */
    public function setIsUnlimited(? bool $isUnlimited) : self
    {
        $this->isUnlimited = $isUnlimited;

        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getListingMetadata()
    {
        return $this->listingMetadata;
    }
    /**
     * 
     *
     * @param mixed $listingMetadata
     *
     * @return self
     */
    public function setListingMetadata($listingMetadata) : self
    {
        $this->listingMetadata = $listingMetadata;

        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getListingPrice() : ? float
    {
        return $this->listingPrice;
    }
    /**
     * 
     *
     * @param float $listingPrice
     *
     * @return self
     */
    public function setListingPrice(? float $listingPrice) : self
    {
        $this->listingPrice = $listingPrice;

        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getListingUrl() : ? string
    {
        return $this->listingUrl;
    }
    /**
     * 
     *
     * @param string $listingUrl
     *
     * @return self
     */
    public function setListingUrl(? string $listingUrl) : self
    {
        $this->listingUrl = $listingUrl;

        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMarketplace() : ? string
    {
        return $this->marketplace;
    }
    /**
     * 
     *
     * @param string $marketplace
     *
     * @return self
     */
    public function setMarketplace(? string $marketplace) : self
    {
        $this->marketplace = $marketplace;

        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPayloadType() : ? string
    {
        return $this->payloadType;
    }
    /**
     * 
     *
     * @param string $payloadType
     *
     * @return self
     */
    public function setPayloadType(? string $payloadType) : self
    {
        $this->payloadType = $payloadType;

        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRequireEmail() : ? bool
    {
        return $this->requireEmail;
    }
    /**
     * 
     *
     * @param bool $requireEmail
     *
     * @return self
     */
    public function setRequireEmail(? bool $requireEmail) : self
    {
        $this->requireEmail = $requireEmail;

        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getShippingDaysMax() : ? int
    {
        return $this->shippingDaysMax;
    }
    /**
     * 
     *
     * @param int $shippingDaysMax
     *
     * @return self
     */
    public function setShippingDaysMax(? int $shippingDaysMax) : self
    {
        $this->shippingDaysMax = $shippingDaysMax;

        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getShippingDaysMin() : ? int
    {
        return $this->shippingDaysMin;
    }
    /**
     * 
     *
     * @param int $shippingDaysMin
     *
     * @return self
     */
    public function setShippingDaysMin(? int $shippingDaysMin) : self
    {
        $this->shippingDaysMin = $shippingDaysMin;

        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getShippingPrice() : ? float
    {
        return $this->shippingPrice;
    }
    /**
     * 
     *
     * @param float $shippingPrice
     *
     * @return self
     */
    public function setShippingPrice(? float $shippingPrice) : self
    {
        $this->shippingPrice = $shippingPrice;

        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShippingType() : ? string
    {
        return $this->shippingType;
    }
    /**
     * 
     *
     * @param string $shippingType
     *
     * @return self
     */
    public function setShippingType(? string $shippingType) : self
    {
        $this->shippingType = $shippingType;

        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStartsAt() : ? string
    {
        return $this->startsAt;
    }
    /**
     * 
     *
     * @param string $startsAt
     *
     * @return self
     */
    public function setStartsAt(? string $startsAt) : self
    {
        $this->startsAt = $startsAt;

        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReturnAt() : ? string
    {
        return $this->returnAt;
    }
    /**
     * 
     *
     * @param string $returnAt
     *
     * @return self
     */
    public function setReturnAt(? string $returnAt) : self
    {
        $this->returnAt = $returnAt;

        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdatedAt() : ? string
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(? string $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEndsAt() : ? string
    {
        return $this->endsAt;
    }
    /**
     * 
     *
     * @param string $endsAt
     *
     * @return self
     */
    public function setEndsAt(? string $endsAt) : self
    {
        $this->endsAt = $endsAt;

        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAvailable() : ? bool
    {
        return $this->available;
    }
    /**
     * 
     *
     * @param bool $available
     *
     * @return self
     */
    public function setAvailable(? bool $available) : self
    {
        $this->available = $available;

        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRemainingQuantity() : ? int
    {
        return $this->remainingQuantity;
    }
    /**
     * 
     *
     * @param int $remainingQuantity
     *
     * @return self
     */
    public function setRemainingQuantity(? int $remainingQuantity) : self
    {
        $this->remainingQuantity = $remainingQuantity;

        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDailyLimitReached() : ? bool
    {
        return $this->dailyLimitReached;
    }
    /**
     * 
     *
     * @param bool $dailyLimitReached
     *
     * @return self
     */
    public function setDailyLimitReached(? bool $dailyLimitReached) : self
    {
        $this->dailyLimitReached = $dailyLimitReached;

        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getImmediateFollowup()
    {
        return $this->immediateFollowup;
    }
    /**
     * 
     *
     * @param mixed $immediateFollowup
     *
     * @return self
     */
    public function setImmediateFollowup($immediateFollowup) : self
    {
        $this->immediateFollowup = $immediateFollowup;

        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getScheduledFollowup()
    {
        return $this->scheduledFollowup;
    }
    /**
     * 
     *
     * @param mixed $scheduledFollowup
     *
     * @return self
     */
    public function setScheduledFollowup($scheduledFollowup) : self
    {
        $this->scheduledFollowup = $scheduledFollowup;

        return $this;
    }
}
