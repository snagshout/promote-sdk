<?php

/**
 * Copyright 2016-2022, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Normalizer;

use Snagshout\Promote\Model\UpdateOrderRequestBody;

class UpdateOrderRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = UpdateOrderRequestBody::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new UpdateOrderRequestBody();
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];

        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }

        return $data;
    }
}
