<?php

/**
 * Copyright 2016-2022, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Model;

class UpdateOrderRequestBody extends AbstractModel
{
    /**
     * `status` of the order.
     *
     * @var string
     */
    protected $status;

    /**
     * Get `status` of the order.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Set `status` of the order.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
