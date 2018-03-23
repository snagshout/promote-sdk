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

class Error
{
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var int
     */
    protected $status;
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : ? string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(? string $message) : self
    {
        $this->message = $message;

        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStatus() : ? int
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(? int $status) : self
    {
        $this->status = $status;

        return $this;
    }
}
