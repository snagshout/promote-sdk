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

class SyncEmailForOrdersRequestBodyNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Snagshout\\Promote\\Model\\SyncEmailForOrders') {
            return false;
        }

        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Snagshout\Promote\Model\SyncEmailForOrders) {
            return true;
        }

        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Snagshout\Promote\Model\SyncEmailForOrders();
        if (property_exists($data, 'newEmail')) {
            $object->setNewEmail($data->{'newEmail'});
        }
        if (property_exists($data, 'oldEmail')) {
            $object->setOldEmail($data->{'oldEmail'});
        }

        return $object;
    }
    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getNewEmail()) {
            $data->{'newEmail'} = $object->getNewEmail();
        }
        if (null !== $object->getOldEmail()) {
            $data->{'oldEmail'} = $object->getOldEmail();
        }

        return $data;
    }
}
