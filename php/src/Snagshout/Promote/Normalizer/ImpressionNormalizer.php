<?php

/**
 * Copyright 2016-2018, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ImpressionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Snagshout\\Promote\\Model\\Impression';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Snagshout\Promote\Model\Impression;
    }
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
