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

class FollowupNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Snagshout\\Promote\\Model\\Followup') {
            return false;
        }

        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Snagshout\Promote\Model\Followup) {
            return true;
        }

        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Snagshout\Promote\Model\Followup();
        if (property_exists($data, 'days')) {
            $object->setDays($data->{'days'});
        }
        if (property_exists($data, 'template')) {
            $object->setTemplate($data->{'template'});
        }
        if (property_exists($data, 'values')) {
            $object->setValues($data->{'values'});
        }

        return $object;
    }
    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDays()) {
            $data->{'days'} = $object->getDays();
        }
        if (null !== $object->getTemplate()) {
            $data->{'template'} = $object->getTemplate();
        }
        if (null !== $object->getValues()) {
            $data->{'values'} = $object->getValues();
        }

        return $data;
    }
}
