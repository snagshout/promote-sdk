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

use Snagshout\Promote\Model\CancelRebateRequestBody;

class CancelRebateRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = CancelRebateRequestBody::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new CancelRebateRequestBody();
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'promoteOrderId')) {
            $object->setPromoteOrderId($data->{'promoteOrderId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];

        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getPromoteOrderId()) {
            $data['promoteOrderId'] = $object->getPromoteOrderId();
        }

        return $data;
    }
}
