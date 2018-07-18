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

class DealImpressionsRequestBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Snagshout\\Promote\\Model\\DealImpressionsRequestBody';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Snagshout\Promote\Model\DealImpressionsRequestBody;
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
        $object = new \Snagshout\Promote\Model\DealImpressionsRequestBody();
        if (property_exists($data, 'impressions')) {
            $values = [];
            foreach ($data->{'impressions'} as $value) {
                $values[] = $this->denormalizer->denormalize(
                    $value,
                    'Snagshout\\Promote\\Model\\Impression',
                    'json',
                    $context
                );
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
                $values[] = $this->normalizer->normalize(
                    $value,
                    'json',
                    $context
                );
            }
            $data->{'impressions'} = $values;
        }

        return $data;
    }
}
