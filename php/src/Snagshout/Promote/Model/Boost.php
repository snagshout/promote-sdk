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

class Boost
{
    /**
     * @var string
     */
    protected $url;
    /**
     * @var mixed
     */
    protected $fields;
    /**
     * @var mixed[]
     */
    protected $queries;
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
     * @return mixed
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * @param mixed $fields
     *
     * @return self
     */
    public function setFields($fields = null)
    {
        $this->fields = $fields;

        return $this;
    }
    /**
     * @return mixed[]
     */
    public function getQueries()
    {
        return $this->queries;
    }
    /**
     * @param mixed[] $queries
     *
     * @return self
     */
    public function setQueries(array $queries = null)
    {
        $this->queries = $queries;

        return $this;
    }
}
