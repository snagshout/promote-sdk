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

class DealImpressionsRequestBody extends AbstractModel
{
    /**
     * @var Impression[]
     */
    protected $impressions;

    /**
     * @return Impression[]
     */
    public function getImpressions()
    {
        return $this->impressions;
    }

    /**
     * @param Impression[] $impressions
     *
     * @return self
     */
    public function setImpressions(array $impressions = null)
    {
        $this->impressions = $impressions;

        return $this;
    }
}
