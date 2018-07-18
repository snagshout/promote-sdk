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

class CheckEmailRequestBody
{
    /**
     * Email to check for.
     *
     * @var string
     */
    protected $email;
    /**
     * Email to check for.
     *
     * @return string
     */
    public function getEmail() : ? string
    {
        return $this->email;
    }
    /**
     * Email to check for.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(? string $email) : self
    {
        $this->email = $email;

        return $this;
    }
}
