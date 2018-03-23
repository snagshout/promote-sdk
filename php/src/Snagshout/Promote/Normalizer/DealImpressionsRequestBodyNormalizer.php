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

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class DealImpressionsRequestBodyNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Snagshout\\Promote\\Model\\DealImpressionsRequestBody') {
            return false;
        }

        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Snagshout\Promote\Model\DealImpressionsRequestBody) {
            return true;
        }

        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Snagshout\Promote\Model\DealImpressionsRequestBody();
        if (property_exists($data, 'impressions')) {
            $values = [];
            foreach ($data->{'impressions'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Snagshout\\Promote\\Model\\Impression', 'raw', $context);
            }
            $object->setImpressions($values);
        }

        return $object;
    }
    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getImpressions()) {
            $values = [];
            foreach ($object->getImpressions() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'impressions'} = $values;
        }

        return $data;
    }
}
