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

use Snagshout\Promote\Model\ConfirmRebateRequestBody;

class ConfirmRebateRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = ConfirmRebateRequestBody::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new ConfirmRebateRequestBody();
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'code')) {
            $object->setCode($data->{'code'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'promoteOrderId')) {
            $object->setPromoteOrderId($data->{'promoteOrderId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getPromoteOrderId()) {
            $data->{'promoteOrderId'} = $object->getPromoteOrderId();
        }

        return $data;
    }
}
