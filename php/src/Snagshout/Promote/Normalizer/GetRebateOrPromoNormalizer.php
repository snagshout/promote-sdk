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

use Snagshout\Promote\Model\GetRebateOrPromo;

class GetRebateOrPromoNormalizer extends AbstractNormalizer
{
    protected $modelClass = GetRebateOrPromo::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new GetRebateOrPromo();
        if (property_exists($data, 'fbUserId')) {
            $object->setFbUserId($data->{'fbUserId'});
        }
        if (property_exists($data, 'adId')) {
            $object->setAdId($data->{'adId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFbUserId()) {
            $data->{'fbUserId'} = $object->getFbUserId();
        }
        if (null !== $object->getAdId()) {
            $data->{'adId'} = $object->getAdId();
        }

        return $data;
    }
}
