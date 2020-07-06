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

class NotifyDealRequestBody
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $body;
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
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title = null)
    {
        $this->title = $title;

        return $this;
    }
    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
    /**
     * @param string $body
     *
     * @return self
     */
    public function setBody($body = null)
    {
        $this->body = $body;

        return $this;
    }
}
