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

class Version
{
    /**
     * Get the API & APP version numbers.
     *
     * @var string
     */
    protected $api;
    /**
     * Get the API & APP version numbers.
     *
     * @var string
     */
    protected $app;
    /**
     * Get the API & APP version numbers.
     *
     * @var string
     */
    protected $php;
    /**
     * 
     *
     * @var mixed
     */
    protected $extensions;
    /**
     * Get the API & APP version numbers.
     *
     * @return string
     */
    public function getApi() : ? string
    {
        return $this->api;
    }
    /**
     * Get the API & APP version numbers.
     *
     * @param string $api
     *
     * @return self
     */
    public function setApi(? string $api) : self
    {
        $this->api = $api;

        return $this;
    }
    /**
     * Get the API & APP version numbers.
     *
     * @return string
     */
    public function getApp() : ? string
    {
        return $this->app;
    }
    /**
     * Get the API & APP version numbers.
     *
     * @param string $app
     *
     * @return self
     */
    public function setApp(? string $app) : self
    {
        $this->app = $app;

        return $this;
    }
    /**
     * Get the API & APP version numbers.
     *
     * @return string
     */
    public function getPhp() : ? string
    {
        return $this->php;
    }
    /**
     * Get the API & APP version numbers.
     *
     * @param string $php
     *
     * @return self
     */
    public function setPhp(? string $php) : self
    {
        $this->php = $php;

        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getExtensions()
    {
        return $this->extensions;
    }
    /**
     * 
     *
     * @param mixed $extensions
     *
     * @return self
     */
    public function setExtensions($extensions) : self
    {
        $this->extensions = $extensions;

        return $this;
    }
}
