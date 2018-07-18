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

class VersionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Snagshout\\Promote\\Model\\Version';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Snagshout\Promote\Model\Version;
    }

    public function denormalize(
        $data,
        $class,
        $format = null,
        array $context = []
    ) {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Snagshout\Promote\Model\Version();
        if (property_exists($data, 'api')) {
            $object->setApi($data->{'api'});
        }
        if (property_exists($data, 'app')) {
            $object->setApp($data->{'app'});
        }
        if (property_exists($data, 'date')) {
            $object->setDate($data->{'date'});
        }
        if (property_exists($data, 'php')) {
            $object->setPhp($data->{'php'});
        }
        if (property_exists($data, 'extensions')) {
            $object->setExtensions($data->{'extensions'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getApi()) {
            $data->{'api'} = $object->getApi();
        }
        if (null !== $object->getApp()) {
            $data->{'app'} = $object->getApp();
        }
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate();
        }
        if (null !== $object->getPhp()) {
            $data->{'php'} = $object->getPhp();
        }
        if (null !== $object->getExtensions()) {
            $data->{'extensions'} = $object->getExtensions();
        }

        return $data;
    }
}
