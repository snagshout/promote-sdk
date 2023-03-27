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

use Snagshout\Promote\Model\SyncDealRequestBody;

class SyncDealRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = SyncDealRequestBody::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new SyncDealRequestBody();
        if (property_exists($data, 'url')) {
            $object->setUrl($data->{'url'});
        }
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
        $data = new \stdClass();
        if (null !== $object->getUrl()) {
            $data->{'url'} = $object->getUrl();
        }
        if (null !== $object->getNote()) {
            $data->{'note'} = $object->getNote();
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }

        return $data;
    }
}
