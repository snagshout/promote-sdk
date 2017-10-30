<?php

/**
 * Copyright 2016-2017, Snagshout <developers@snagshout.com>
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

class ImpressionNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Snagshout\\Promote\\Model\\Impression') {
            return false;
        }

        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Snagshout\Promote\Model\Impression) {
            return true;
        }

        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Snagshout\Promote\Model\Impression();
        if (property_exists($data, 'views')) {
            $object->setViews($data->{'views'});
        }
        if (property_exists($data, 'hour')) {
            $object->setHour($data->{'hour'});
        }
        if (property_exists($data, 'date')) {
            $object->setDate($data->{'date'});
        }

        return $object;
    }
    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getViews()) {
            $data->{'views'} = $object->getViews();
        }
        if (null !== $object->getHour()) {
            $data->{'hour'} = $object->getHour();
        }
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate();
        }

        return $data;
    }
}
