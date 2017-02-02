<?php

namespace SellerLabs\Promote\Model;

class Deal
{
    /**
     * @var int
     */
    protected $campaignId;
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
     * @var string
     */
    protected $listingUrl;
    /**
     * @var string
     */
    protected $currency;
    /**
     * @var float
     */
    protected $listingPrice;
    /**
     * @var float
     */
    protected $discountPrice;
    /**
     * @var float
     */
    protected $shippingPrice;
    /**
     * @var int
     */
    protected $shippingDaysMin;
    /**
     * @var int
     */
    protected $shippingDaysMax;
    /**
     * @var string
     */
    protected $shippingType;
    /**
     * @var string
     */
    protected $marketplace;
    /**
     * @var string
     */
    protected $payloadType;
    /**
     * @var bool
     */
    protected $requireEmail;
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
     * @var int
     */
    protected $remainingQuantity;
    /**
     * @var bool
     */
    protected $dailyLimitReached;
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
}