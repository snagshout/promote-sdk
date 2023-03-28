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

use Snagshout\Promote\Model\GetRebateEmail;

class GetRebateEmailNormalizer extends AbstractNormalizer
{
    protected $modelClass = GetRebateEmail::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new GetRebateEmail();
        if (property_exists($data, 'fbUserId')) {
            $object->setFbUserId($data->{'fbUserId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];

        if (null !== $object->getFbUserId()) {
            $data['fbUserId'] = $object->getFbUserId();
        }

        return $data;
    }
}
