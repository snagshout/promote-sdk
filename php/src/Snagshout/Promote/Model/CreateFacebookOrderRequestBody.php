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

class CreateFacebookOrderRequestBody
{
    /**
     * The Facebook Ad ID.
     *
     * @var string
     */
    protected $adId;
    /**
     * The Facebook unique user ID.
     *
     * @var string
     */
    protected $userId;
    /**
     * The Facebook Ad ID.
     *
     * @return string
     */
    public function getAdId() : ? string
    {
        return $this->adId;
    }
    /**
     * The Facebook Ad ID.
     *
     * @param string $adId
     *
     * @return self
     */
    public function setAdId(? string $adId) : self
    {
        $this->adId = $adId;

        return $this;
    }
    /**
     * The Facebook unique user ID.
     *
     * @return string
     */
    public function getUserId() : ? string
    {
        return $this->userId;
    }
    /**
     * The Facebook unique user ID.
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(? string $userId) : self
    {
        $this->userId = $userId;

        return $this;
    }
}
