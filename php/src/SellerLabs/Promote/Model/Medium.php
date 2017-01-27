<?php

namespace SellerLabs\Promote\Model;

class Medium
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var int
     */
    protected $metadata;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
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
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * @return int
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
    /**
     * @param int $metadata
     *
     * @return self
     */
    public function setMetadata($metadata = null)
    {
        $this->metadata = $metadata;
        return $this;
    }
}