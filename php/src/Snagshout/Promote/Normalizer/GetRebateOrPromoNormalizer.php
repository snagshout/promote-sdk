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

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class GetRebateOrPromoNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Snagshout\\Promote\\Model\\GetRebateOrPromo') {
            return false;
        }

        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Snagshout\Promote\Model\GetRebateOrPromo) {
            return true;
        }

        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Snagshout\Promote\Model\GetRebateOrPromo();
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
