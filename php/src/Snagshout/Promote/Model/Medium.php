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

class Medium
{
    /**
     *
     *
     * @var int
     */
    protected $id;
    /**
     *
     *
     * @var string
     */
    protected $url;
    /**
     *
     *
     * @var string
     */
    protected $type;
    /**
     *
     *
     * @var string
     */
    protected $title;
    /**
     *
     *
     * @var mixed
     */
    protected $metadata;
    /**
     *
     *
     * @return int
     */
    public function getId() : ? int
    {
        return $this->id;
    }
    /**
     *
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(? int $id) : self
    {
        $this->id = $id;

        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getUrl() : ? string
    {
        return $this->url;
    }
    /**
     *
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
     *
     *
     * @return string
     */
    public function getType() : ? string
    {
        return $this->type;
    }
    /**
     *
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(? string $type) : self
    {
        $this->type = $type;

        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getTitle() : ? string
    {
        return $this->title;
    }
    /**
     *
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(? string $title) : self
    {
        $this->title = $title;

        return $this;
    }
    /**
     *
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
    /**
     *
     *
     * @param mixed $metadata
     *
     * @return self
     */
    public function setMetadata($metadata) : self
    {
        $this->metadata = $metadata;

        return $this;
    }
}
