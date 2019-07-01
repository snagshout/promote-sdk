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

class CompleteFacebookOrderRequestBody
{
    /**
     * The Facebook shopper's email address.
     *
     * @var string
     */
    protected $email;
    /**
     * The unique Facebook user ID.
     *
     * @var string
     */
    protected $fbUserId;
    /**
     * The Facebook shopper's email address.
     *
     * @return string
     */
    public function getEmail() : ? string
    {
        return $this->email;
    }
    /**
     * The Facebook shopper's email address.
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
    /**
     * The unique Facebook user ID.
     *
     * @return string
     */
    public function getFbUserId() : ? string
    {
        return $this->fbUserId;
    }
    /**
     * The unique Facebook user ID.
     *
     * @param string $fbUserId
     *
     * @return self
     */
    public function setFbUserId(? string $fbUserId) : self
    {
        $this->fbUserId = $fbUserId;

        return $this;
    }
}
