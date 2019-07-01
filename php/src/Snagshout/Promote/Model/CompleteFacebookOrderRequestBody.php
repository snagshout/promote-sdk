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
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $fbUserId;
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }
    /**
     * @return string
     */
    public function getFbUserId()
    {
        return $this->fbUserId;
    }
    /**
     * @param string $fbUserId
     *
     * @return self
     */
    public function setFbUserId($fbUserId = null)
    {
        $this->fbUserId = $fbUserId;

        return $this;
    }
}
