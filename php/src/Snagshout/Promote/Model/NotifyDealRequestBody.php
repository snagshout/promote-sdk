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

class NotifyDealRequestBody
{
    /**
     * Type of notification.
     *
     * @var string
     */
    protected $type;
    /**
     * Title for notification.
     *
     * @var string
     */
    protected $title;
    /**
     * Text for notification.
     *
     * @var string
     */
    protected $body;
    /**
     * Type of notification.
     *
     * @return string
     */
    public function getType() : ? string
    {
        return $this->type;
    }
    /**
     * Type of notification.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(? string $type) : self
    {
        $this->type = $type;

        return $this;
    }
    /**
     * Title for notification.
     *
     * @return string
     */
    public function getTitle() : ? string
    {
        return $this->title;
    }
    /**
     * Title for notification.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(? string $title) : self
    {
        $this->title = $title;

        return $this;
    }
    /**
     * Text for notification.
     *
     * @return string
     */
    public function getBody() : ? string
    {
        return $this->body;
    }
    /**
     * Text for notification.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(? string $body) : self
    {
        $this->body = $body;

        return $this;
    }
}
