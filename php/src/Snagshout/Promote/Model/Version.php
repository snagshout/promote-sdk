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

class Version
{
    /**
     * @var string
     */
    protected $api;
    /**
     * @var string
     */
    protected $app;
    /**
     * @var string
     */
    protected $date;
    /**
     * @var string
     */
    protected $php;
    /**
     * @var mixed
     */
    protected $extensions;
    /**
     * @return string
     */
    public function getApi()
    {
        return $this->api;
    }
    /**
     * @param string $api
     *
     * @return self
     */
    public function setApi($api = null)
    {
        $this->api = $api;

        return $this;
    }
    /**
     * @return string
     */
    public function getApp()
    {
        return $this->app;
    }
    /**
     * @param string $app
     *
     * @return self
     */
    public function setApp($app = null)
    {
        $this->app = $app;

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
    /**
     * @return string
     */
    public function getPhp()
    {
        return $this->php;
    }
    /**
     * @param string $php
     *
     * @return self
     */
    public function setPhp($php = null)
    {
        $this->php = $php;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getExtensions()
    {
        return $this->extensions;
    }
    /**
     * @param mixed $extensions
     *
     * @return self
     */
    public function setExtensions($extensions = null)
    {
        $this->extensions = $extensions;

        return $this;
    }
}
