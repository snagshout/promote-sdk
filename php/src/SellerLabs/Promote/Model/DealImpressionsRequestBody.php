<?php

namespace SellerLabs\Promote\Model;

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