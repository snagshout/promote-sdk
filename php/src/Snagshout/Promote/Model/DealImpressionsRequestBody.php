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

class DealImpressionsRequestBody
{
    /**
     * Object array of impressions to track.
     *
     * @var Impression[]
     */
    protected $impressions;

    /**
     * Object array of impressions to track.
     *
     * @return Impression[]
     */
    public function getImpressions() : ?array
    {
        return $this->impressions;
    }

    /**
     * Object array of impressions to track.
     *
     * @param Impression[] $impressions
     *
     * @return self
     */
    public function setImpressions(? array $impressions) : self
    {
        $this->impressions = $impressions;

        return $this;
    }
}
