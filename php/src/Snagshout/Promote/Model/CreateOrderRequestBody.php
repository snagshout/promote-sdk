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

class CreateOrderRequestBody extends AbstractModel
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $completeBy;

    /**
     * @var bool
     */
    protected $wasCompleteBySet = false;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function wasCompleteBySet()
    {
        return (bool)$this->wasCompleteBySet;
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
        $this->wasCompleteBySet = true;
        $this->completeBy = $completeBy;

        return $this;
    }
}
