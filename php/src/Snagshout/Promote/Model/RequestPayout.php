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
     * @var string
     */
    protected $recipientWallet;

    /**
     * @var string
     */
    protected $phoneNumber;

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
    public function setEmail($email= null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRecipientWallet()
    {
        return $this->recipientWallet;
    }

    /**
     * @param null $recipientWallet
     * @return self
     */
    public function setRecipientWallet($recipientWallet= null)
    {
        $this->recipientWallet = $recipientWallet;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param null $phoneNumber
     * @return self
     */
    public function setPhoneNumber($phoneNumber= null)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}
