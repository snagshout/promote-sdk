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

use Snagshout\Promote\Model\Error;

class ErrorNormalizer extends AbstractNormalizer
{
    protected $modelClass = Error::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new Error();
        if (property_exists($data, 'message')) {
            $object->setMessage($data->{'message'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'extra')) {
            $object->setExtra($data->{'extra'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];

        if (null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getExtra()) {
            $data['extra'] = $object->getExtra();
        }

        return $data;
    }
}
