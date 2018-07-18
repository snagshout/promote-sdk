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

class CreateOrderRequestBody
{
    /**
     * email, required with rebates.
     *
     * @var string
     */
    protected $email;

    /**
     * email, required with rebates.
     *
     * @return string
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }

    /**
     * email, required with rebates.
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
