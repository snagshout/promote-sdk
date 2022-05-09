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

class Payload
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $payload;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $confirmationEmail;
    /**
     * @var string
     */
    protected $completeBy;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;

        return $this;
    }
    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }
    /**
     * @param string $payload
     *
     * @return self
     */
    public function setPayload($payload = null)
    {
        $this->payload = $payload;

        return $this;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }
    /**
     * @return string
     */
    public function getConfirmationEmail()
    {
        return $this->confirmationEmail;
    }
    /**
     * @param string $confirmationEmail
     *
     * @return self
     */
    public function setConfirmationEmail($confirmationEmail = null)
    {
        $this->confirmationEmail = $confirmationEmail;

        return $this;
    }
    /**
     * @return string
     */
    public function getCompleteBy()
    {
        return $this->completeBy;
    }
    /**
     * @param string $completeBy
     *
     * @return self
     */
    public function setCompleteBy($completeBy = null)
    {
        $this->completeBy = $completeBy;

        return $this;
    }
}
