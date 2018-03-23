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

class FlagDealRequestBody
{
    /**
     * Type of flag.
     *
     * @var string
     */
    protected $type;
    /**
     * User that reported the flag.
     *
     * @var string
     */
    protected $reportedBy;
    /**
     * Content of the flag.
     *
     * @var string
     */
    protected $comment;
    /**
     * Type of flag.
     *
     * @return string
     */
    public function getType() : ? string
    {
        return $this->type;
    }
    /**
     * Type of flag.
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
     * User that reported the flag.
     *
     * @return string
     */
    public function getReportedBy() : ? string
    {
        return $this->reportedBy;
    }
    /**
     * User that reported the flag.
     *
     * @param string $reportedBy
     *
     * @return self
     */
    public function setReportedBy(? string $reportedBy) : self
    {
        $this->reportedBy = $reportedBy;

        return $this;
    }
    /**
     * Content of the flag.
     *
     * @return string
     */
    public function getComment() : ? string
    {
        return $this->comment;
    }
    /**
     * Content of the flag.
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(? string $comment) : self
    {
        $this->comment = $comment;

        return $this;
    }
}
