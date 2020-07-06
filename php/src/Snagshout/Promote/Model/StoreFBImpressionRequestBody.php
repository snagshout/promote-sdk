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

class StoreFBImpressionRequestBody
{
    /**
     * @var mixed
     */
    protected $fbAdId;
    /**
     * @return mixed
     */
    public function getFbAdId()
    {
        return $this->fbAdId;
    }
    /**
     * @param mixed $fbAdId
     *
     * @return self
     */
    public function setFbAdId($fbAdId = null)
    {
        $this->fbAdId = $fbAdId;

        return $this;
    }
}
