<?php

/**
 * Copyright 2016-2020, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Normalizer;

use Snagshout\Promote\Model\UnsyncDealRequestBody;

class UnsyncDealRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = UnsyncDealRequestBody::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new UnsyncDealRequestBody();
        if (property_exists($data, 'note')) {
            $object->setNote($data->{'note'});
        }
        if (property_exists($data, 'state')) {
            $object->setState($data->{'state'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];

        if (null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }

        return $data;
    }
}
