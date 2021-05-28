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

class RequestPayout
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param null $email
     * @return self
     */
    public function setEmail($email= null): RequestPayout
    {
        $this->email = $email;

        return $this;
    }
}
