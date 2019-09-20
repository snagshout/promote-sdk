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

class GetRebateOrPromo
{
    /**
     * @var mixed
     */
    protected $fbUserId;
    /**
     * @return mixed
     */
    public function getFbUserId()
    {
        return $this->fbUserId;
    }
    /**
     * @param mixed $fbUserId
     *
     * @return self
     */
    public function setFbUserId($fbUserId = null)
    {
        $this->fbUserId = $fbUserId;

        return $this;
    }
}
