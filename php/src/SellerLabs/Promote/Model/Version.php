<?php

namespace SellerLabs\Promote\Model;

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