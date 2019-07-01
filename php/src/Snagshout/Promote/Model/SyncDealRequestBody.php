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

class SyncDealRequestBody
{
    /**
     * URL to the deal page.
     *
     * @var string
     */
    protected $url;
    /**
     * Campaign note.
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
     * URL to the deal page.
     *
     * @return string
     */
    public function getUrl() : ? string
    {
        return $this->url;
    }
    /**
     * URL to the deal page.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(? string $url) : self
    {
        $this->url = $url;

        return $this;
    }
    /**
     * Campaign note.
     *
     * @return string
     */
    public function getNote() : ? string
    {
        return $this->note;
    }
    /**
     * Campaign note.
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
