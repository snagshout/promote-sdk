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

class ReviewFoundRequestBody
{
    /**
     * Review date.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Review title.
     *
     * @var string
     */
    protected $asin;
    /**
     * Review title.
     *
     * @var string
     */
    protected $title;
    /**
     * Review body.
     *
     * @var string
     */
    protected $summary;
    /**
     * Reviewer id.
     *
     * @var string
     */
    protected $reviewerId;
    /**
     * Review id.
     *
     * @var string
     */
    protected $reviewId;
    /**
     * Link to the URL.
     *
     * @var string
     */
    protected $url;
    /**
     * 0-5 rating.
     *
     * @var int
     */
    protected $stars;
    /**
     * Review date.
     *
     * @return string
     */
    public function getCreatedAt() : ? string
    {
        return $this->createdAt;
    }
    /**
     * Review date.
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(? string $createdAt) : self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
    /**
     * Review title.
     *
     * @return string
     */
    public function getAsin() : ? string
    {
        return $this->asin;
    }
    /**
     * Review title.
     *
     * @param string $asin
     *
     * @return self
     */
    public function setAsin(? string $asin) : self
    {
        $this->asin = $asin;

        return $this;
    }
    /**
     * Review title.
     *
     * @return string
     */
    public function getTitle() : ? string
    {
        return $this->title;
    }
    /**
     * Review title.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(? string $title) : self
    {
        $this->title = $title;

        return $this;
    }
    /**
     * Review body.
     *
     * @return string
     */
    public function getSummary() : ? string
    {
        return $this->summary;
    }
    /**
     * Review body.
     *
     * @param string $summary
     *
     * @return self
     */
    public function setSummary(? string $summary) : self
    {
        $this->summary = $summary;

        return $this;
    }
    /**
     * Reviewer id.
     *
     * @return string
     */
    public function getReviewerId() : ? string
    {
        return $this->reviewerId;
    }
    /**
     * Reviewer id.
     *
     * @param string $reviewerId
     *
     * @return self
     */
    public function setReviewerId(? string $reviewerId) : self
    {
        $this->reviewerId = $reviewerId;

        return $this;
    }
    /**
     * Review id.
     *
     * @return string
     */
    public function getReviewId() : ? string
    {
        return $this->reviewId;
    }
    /**
     * Review id.
     *
     * @param string $reviewId
     *
     * @return self
     */
    public function setReviewId(? string $reviewId) : self
    {
        $this->reviewId = $reviewId;

        return $this;
    }
    /**
     * Link to the URL.
     *
     * @return string
     */
    public function getUrl() : ? string
    {
        return $this->url;
    }
    /**
     * Link to the URL.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(? string $url) : self
    {
        $this->url = $url;

        return $this;
    }
    /**
     * 0-5 rating.
     *
     * @return int
     */
    public function getStars() : ? int
    {
        return $this->stars;
    }
    /**
     * 0-5 rating.
     *
     * @param int $stars
     *
     * @return self
     */
    public function setStars(? int $stars) : self
    {
        $this->stars = $stars;

        return $this;
    }
}
