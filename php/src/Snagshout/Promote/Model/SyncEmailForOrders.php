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

class SyncEmailForOrders
{
    /**
     * @var string
     */
    protected $oldEmail;

    /**
     * @var string
     */
    protected $newEmail;

    /**
     * @return string
     */
    public function getNewEmail(): string
    {
        return $this->newEmail;
    }

    /**
     * @param null $newEmail
     * @return self
     */
    public function setNewEmail($newEmail): SyncEmailForOrders
    {
        $this->newEmail = $newEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getOldEmail(): string
    {
        return $this->oldEmail;
    }


    /**
     * @param $oldEmail
     * @return self
     */
    public function setOldEmail($oldEmail): SyncEmailForOrders
    {
        $this->oldEmail = $oldEmail;

        return $this;
    }
}
