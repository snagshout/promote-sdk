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

class FlagDealRequestBody
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $reportedBy;
    /**
     * @var string
     */
    protected $comment;
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }
    /**
     * @return string
     */
    public function getReportedBy()
    {
        return $this->reportedBy;
    }
    /**
     * @param string $reportedBy
     *
     * @return self
     */
    public function setReportedBy($reportedBy = null)
    {
        $this->reportedBy = $reportedBy;

        return $this;
    }
    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * @param string $comment
     *
     * @return self
     */
    public function setComment($comment = null)
    {
        $this->comment = $comment;

        return $this;
    }
}
