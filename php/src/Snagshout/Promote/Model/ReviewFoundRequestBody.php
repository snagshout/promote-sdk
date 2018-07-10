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
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $summary;
    /**
     * @var string
     */
    protected $reviewerId;
    /**
     * @var string
     */
    protected $reviewId;
    /**
     * @var int
     */
    protected $stars;
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title = null)
    {
        $this->title = $title;

        return $this;
    }
    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }
    /**
     * @param string $summary
     *
     * @return self
     */
    public function setSummary($summary = null)
    {
        $this->summary = $summary;

        return $this;
    }
    /**
     * @return string
     */
    public function getReviewerId()
    {
        return $this->reviewerId;
    }
    /**
     * @param string $reviewerId
     *
     * @return self
     */
    public function setReviewerId($reviewerId = null)
    {
        $this->reviewerId = $reviewerId;

        return $this;
    }
    /**
     * @return string
     */
    public function getReviewId()
    {
        return $this->reviewId;
    }
    /**
     * @param string $reviewId
     *
     * @return self
     */
    public function setReviewId($reviewId = null)
    {
        $this->reviewId = $reviewId;

        return $this;
    }
    /**
     * @return int
     */
    public function getStars()
    {
        return $this->stars;
    }
    /**
     * @param int $stars
     *
     * @return self
     */
    public function setStars($stars = null)
    {
        $this->stars = $stars;

        return $this;
    }
}
