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

class InitializeMigrationBody
{
    /**
     * User to migrate.
     *
     * @var int
     */
    protected $userId;

    /**
     * User to migrate.
     *
     * @return int
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }

    /**
     * User to migrate.
     *
     * @param int $userId
     *
     * @return self
     */
    public function setUserId(? int $userId) : self
    {
        $this->userId = $userId;

        return $this;
    }
}
