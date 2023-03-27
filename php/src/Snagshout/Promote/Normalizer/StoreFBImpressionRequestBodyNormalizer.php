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

use Snagshout\Promote\Model\StoreFBImpressionRequestBody;

class StoreFBImpressionRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = StoreFBImpressionRequestBody::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new StoreFBImpressionRequestBody();
        if (property_exists($data, 'fbAdId')) {
            $object->setFbAdId($data->{'fbAdId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFbAdId()) {
            $data->{'fbAdId'} = $object->getFbAdId();
        }

        return $data;
    }
}
