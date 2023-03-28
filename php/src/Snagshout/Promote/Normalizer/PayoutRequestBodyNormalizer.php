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

use Snagshout\Promote\Model\RequestPayout;

class PayoutRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = RequestPayout::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new RequestPayout();
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];

        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }

        return $data;
    }
}
