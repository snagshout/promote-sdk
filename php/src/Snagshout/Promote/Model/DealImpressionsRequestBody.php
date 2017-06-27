<?php

/**
 * Copyright 2016-2017, Snagshout <developers@snagshout.com>
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
     * @var mixed[]
     */
    protected $impressions;
    /**
     * @return mixed[]
     */
    public function getImpressions()
    {
        return $this->impressions;
    }
    /**
     * @param mixed[] $impressions
     *
     * @return self
     */
    public function setImpressions(array $impressions = null)
    {
        $this->impressions = $impressions;

        return $this;
    }
}
