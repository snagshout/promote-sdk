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

class UpdateDeliverableRequestBody
{
    /**
     * @var string
     */
    protected $email;
    /**
     * @var mixed
     */
    protected $deliverable;
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
     * @return mixed
     */
    public function getDeliverable()
    {
        return $this->deliverable;
    }
    /**
     * @param mixed $deliverable
     *
     * @return self
     */
    public function setDeliverable($deliverable = null)
    {
        $this->deliverable = $deliverable;

        return $this;
    }
}
