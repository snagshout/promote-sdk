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

class CancelRebateRequestBody extends AbstractModel
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @var int
     */
    protected $promoteOrderId;

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

    /**
     * @return integer
     */
    public function getPromoteOrderId(): int
    {
        return $this->promoteOrderId;
    }

    /**
     * @param int|null $promoteOrderId
     *
     * @return self
     */
    public function setPromoteOrderId(int $promoteOrderId = null): CancelRebateRequestBody
    {
        $this->promoteOrderId = $promoteOrderId;

        return $this;
    }
}
