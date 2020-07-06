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

class CreateFacebookOrderRequestBody
{
    /**
     * @var string
     */
    protected $adId;
    /**
     * @var string
     */
    protected $userId;
    /**
     * @return string
     */
    public function getAdId()
    {
        return $this->adId;
    }
    /**
     * @param string $adId
     *
     * @return self
     */
    public function setAdId($adId = null)
    {
        $this->adId = $adId;

        return $this;
    }
    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * @param string $userId
     *
     * @return self
     */
    public function setUserId($userId = null)
    {
        $this->userId = $userId;

        return $this;
    }
}
