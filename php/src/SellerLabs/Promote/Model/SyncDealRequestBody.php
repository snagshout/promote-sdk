<?php

namespace SellerLabs\Promote\Model;

class SyncDealRequestBody
{
    /**
     * @var string
     */
    protected $url;
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl($url = null)
    {
        $this->url = $url;
        return $this;
    }
}