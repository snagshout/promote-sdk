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

class Impression
{
    /**
    * Class TrackImpressions.

    Allow an external application to report impressions tracked.
    *
    * @var int
    */
    protected $views;
    /**
    * Class TrackImpressions.

    Allow an external application to report impressions tracked.
    *
    * @var int
    */
    protected $hour;
    /**
    * Class TrackImpressions.

    Allow an external application to report impressions tracked.
    *
    * @var string
    */
    protected $date;
    /**
    * Class TrackImpressions.

    Allow an external application to report impressions tracked.
    *
    * @return int
    */
    public function getViews() : ? int
    {
        return $this->views;
    }
    /**
    * Class TrackImpressions.

    Allow an external application to report impressions tracked.
    *
    * @param int $views
    *
    * @return self
    */
    public function setViews(? int $views) : self
    {
        $this->views = $views;

        return $this;
    }
    /**
    * Class TrackImpressions.

    Allow an external application to report impressions tracked.
    *
    * @return int
    */
    public function getHour() : ? int
    {
        return $this->hour;
    }
    /**
    * Class TrackImpressions.

    Allow an external application to report impressions tracked.
    *
    * @param int $hour
    *
    * @return self
    */
    public function setHour(? int $hour) : self
    {
        $this->hour = $hour;

        return $this;
    }
    /**
    * Class TrackImpressions.

    Allow an external application to report impressions tracked.
    *
    * @return string
    */
    public function getDate() : ? string
    {
        return $this->date;
    }
    /**
    * Class TrackImpressions.

    Allow an external application to report impressions tracked.
    *
    * @param string $date
    *
    * @return self
    */
    public function setDate(? string $date) : self
    {
        $this->date = $date;

        return $this;
    }
}
