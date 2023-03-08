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

use Snagshout\Promote\Model\CreateFacebookOrderRequestBody;

class CreateFacebookOrderRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = CreateFacebookOrderRequestBody::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new CreateFacebookOrderRequestBody();
        if (property_exists($data, 'adId')) {
            $object->setAdId($data->{'adId'});
        }
        if (property_exists($data, 'userId')) {
            $object->setUserId($data->{'userId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAdId()) {
            $data->{'adId'} = $object->getAdId();
        }
        if (null !== $object->getUserId()) {
            $data->{'userId'} = $object->getUserId();
        }

        return $data;
    }
}
