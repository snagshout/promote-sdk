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

class StoreConversionIdRequestBody extends AbstractModel
{
    /**
     * @var int
     */
    protected $conversionId;

    /**
     * @var string
     */
    protected $email;

    /**
     * @return int
     */
    public function getConversionId()
    {
        return $this->conversionId;
    }

    /**
     * @param int $conversionId
     *
     * @return self
     */
    public function setConversionId($conversionId = null)
    {
        $this->conversionId = $conversionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }
}
