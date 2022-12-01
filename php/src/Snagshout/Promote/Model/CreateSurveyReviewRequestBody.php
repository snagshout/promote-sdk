<?php

/**
 * Copyright 2016-2021, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Model;

class CreateSurveyReviewRequestBody
{
    /**
     * @var boolean|null
     */
    protected $reviewClaimedLeft;
    /**
     * @var string|null
     */
    protected $reviewerName;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var string|null
     */
    protected $reason;

    /**
     * @return bool|null
     */
    public function getReviewClaimedLeft(): ?bool
    {
        return $this->reviewClaimedLeft;
    }

    /**
     * @param bool $reviewClaimedLeft
     *
     * @return CreateSurveyReviewRequestBody
     */
    public function setReviewClaimedLeft(bool $reviewClaimedLeft = null): CreateSurveyReviewRequestBody
    {
        $this->reviewClaimedLeft = $reviewClaimedLeft;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReviewerName(): ?string
    {
        return $this->reviewerName;
    }

    /**
     * @param string|null $reviewerName
     *
     * @return CreateSurveyReviewRequestBody
     */
    public function setReviewerName(string $reviewerName = null): CreateSurveyReviewRequestBody
    {
        $this->reviewerName = $reviewerName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     *
     * @return CreateSurveyReviewRequestBody
     */
    public function setTitle(string $title = null): CreateSurveyReviewRequestBody
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string|null $reason
     *
     * @return CreateSurveyReviewRequestBody
     */
    public function setReason(string $reason = null): CreateSurveyReviewRequestBody
    {
        $this->reason = $reason;

        return $this;
    }
}
