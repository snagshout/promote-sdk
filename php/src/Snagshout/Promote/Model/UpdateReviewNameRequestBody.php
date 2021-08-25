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

class UpdateReviewNameRequestBody
{
    /**
     * @var string|null
     */
    protected $userEmail;
    /**
     * @var string|null
     */
    protected $newReviewerName;

    /**
     * @return string|null
     */
    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    /**
     * @param string|null $userEmail
     *
     * @return UpdateReviewNameRequestBody
     */
    public function setUserEmail(string $userEmail = null): UpdateReviewNameRequestBody
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNewReviewerName(): ?string
    {
        return $this->newReviewerName;
    }

    /**
     * @param string|null $newReviewerName
     *
     * @return UpdateReviewNameRequestBody
     */
    public function setNewReviewerName(string $newReviewerName = null): UpdateReviewNameRequestBody
    {
        $this->newReviewerName = $newReviewerName;

        return $this;
    }
}
