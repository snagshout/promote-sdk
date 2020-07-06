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

class InitializeMigrationBody
{
    /**
     * @var int
     */
    protected $userId;
    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * @param int $userId
     *
     * @return self
     */
    public function setUserId($userId = null)
    {
        $this->userId = $userId;

        return $this;
    }
}
