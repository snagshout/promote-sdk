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

class Payload
{
    /**
    * Class Payload.

    A payload returned to public order requests.
    *
    * @var int
    */
    protected $id;
    /**
    * Class Payload.

    A payload returned to public order requests.
    *
    * @var string
    */
    protected $payload;
    /**
    * Class Payload.

    A payload returned to public order requests.
    *
    * @var string
    */
    protected $type;
    /**
    * Class Payload.

    A payload returned to public order requests.
    *
    * @return int
    */
    public function getId() : ? int
    {
        return $this->id;
    }
    /**
    * Class Payload.

    A payload returned to public order requests.
    *
    * @param int $id
    *
    * @return self
    */
    public function setId(? int $id) : self
    {
        $this->id = $id;

        return $this;
    }
    /**
    * Class Payload.

    A payload returned to public order requests.
    *
    * @return string
    */
    public function getPayload() : ? string
    {
        return $this->payload;
    }
    /**
    * Class Payload.

    A payload returned to public order requests.
    *
    * @param string $payload
    *
    * @return self
    */
    public function setPayload(? string $payload) : self
    {
        $this->payload = $payload;

        return $this;
    }
    /**
    * Class Payload.

    A payload returned to public order requests.
    *
    * @return string
    */
    public function getType() : ? string
    {
        return $this->type;
    }
    /**
    * Class Payload.

    A payload returned to public order requests.
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
}
