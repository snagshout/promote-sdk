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

class Followup
{
    /**
     *
     *
     * @var int
     */
    protected $days;

    /**
     *
     *
     * @var string
     */
    protected $subject;

    /**
     *
     *
     * @var string
     */
    protected $body;

    /**
     *
     *
     * @return int
     */
    public function getDays() : ?int
    {
        return $this->days;
    }

    /**
     *
     *
     * @param int $days
     *
     * @return self
     */
    public function setDays(? int $days) : self
    {
        $this->days = $days;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getSubject() : ?string
    {
        return $this->subject;
    }

    /**
     *
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(? string $subject) : self
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     *
     *
     * @return string
     */
    public function getBody() : ?string
    {
        return $this->body;
    }

    /**
     *
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
