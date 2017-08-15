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

class Followup
{
    /**
     * @var int
     */
    protected $days;
    /**
     * @var string
     */
    protected $template;
    /**
     * @var mixed
     */
    protected $values;
    /**
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }
    /**
     * @param int $days
     *
     * @return self
     */
    public function setDays($days = null)
    {
        $this->days = $days;

        return $this;
    }
    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }
    /**
     * @param string $template
     *
     * @return self
     */
    public function setTemplate($template = null)
    {
        $this->template = $template;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getValues()
    {
        return $this->values;
    }
    /**
     * @param mixed $values
     *
     * @return self
     */
    public function setValues($values = null)
    {
        $this->values = $values;

        return $this;
    }
}
