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

class Impression
{
    /**
     * @var int
     */
    protected $views;
    /**
     * @var int
     */
    protected $hour;
    /**
     * @var string
     */
    protected $date;
    /**
     * @return int
     */
    public function getViews()
    {
        return $this->views;
    }
    /**
     * @param int $views
     *
     * @return self
     */
    public function setViews($views = null)
    {
        $this->views = $views;

        return $this;
    }
    /**
     * @return int
     */
    public function getHour()
    {
        return $this->hour;
    }
    /**
     * @param int $hour
     *
     * @return self
     */
    public function setHour($hour = null)
    {
        $this->hour = $hour;

        return $this;
    }
    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @param string $date
     *
     * @return self
     */
    public function setDate($date = null)
    {
        $this->date = $date;

        return $this;
    }
}
