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

class Category
{
    /**
     * Category ID.
     *
     * @var int
     */
    protected $id;

    /**
     * Category name.
     *
     * @var string
     */
    protected $name;

    /**
     * Category ID.
     *
     * @return int
     */
    public function getId() : ?int
    {
        return $this->id;
    }

    /**
     * Category ID.
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
     * Category name.
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * Category name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(? string $name) : self
    {
        $this->name = $name;

        return $this;
    }
}
