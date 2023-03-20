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

class RequestPayout extends AbstractModel
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $email
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }
}
