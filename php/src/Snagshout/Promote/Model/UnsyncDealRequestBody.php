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

class UnsyncDealRequestBody
{
    /**
     * Reason for rejecting the deal.
     *
     * @var string
     */
    protected $note;
    /**
     * Deal state on the partner site.
     *
     * @var string
     */
    protected $state;
    /**
     * Reason for rejecting the deal.
     *
     * @return string
     */
    public function getNote() : ? string
    {
        return $this->note;
    }
    /**
     * Reason for rejecting the deal.
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(? string $note) : self
    {
        $this->note = $note;

        return $this;
    }
    /**
     * Deal state on the partner site.
     *
     * @return string
     */
    public function getState() : ? string
    {
        return $this->state;
    }
    /**
     * Deal state on the partner site.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(? string $state) : self
    {
        $this->state = $state;

        return $this;
    }
}
