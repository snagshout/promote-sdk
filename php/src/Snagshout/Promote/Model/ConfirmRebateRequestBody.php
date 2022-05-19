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

class ConfirmRebateRequestBody
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var int
     */
    protected $promoteOrderId;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null): ConfirmRebateRequestBody
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return self
     */
    public function setCode($code = null): ConfirmRebateRequestBody
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null): ConfirmRebateRequestBody
    {
        $this->status = $status;

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
    public function setPromoteOrderId(int $promoteOrderId = null): ConfirmRebateRequestBody
    {
        $this->promoteOrderId = $promoteOrderId;

        return $this;
    }
}
