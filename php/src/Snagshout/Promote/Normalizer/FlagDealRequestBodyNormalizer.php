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

class FlagDealRequestBodyNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Snagshout\\Promote\\Model\\FlagDealRequestBody') {
            return false;
        }

        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Snagshout\Promote\Model\FlagDealRequestBody) {
            return true;
        }

        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Snagshout\Promote\Model\FlagDealRequestBody();
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'reportedBy')) {
            $object->setReportedBy($data->{'reportedBy'});
        }
        if (property_exists($data, 'comment')) {
            $object->setComment($data->{'comment'});
        }

        return $object;
    }
    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getReportedBy()) {
            $data->{'reportedBy'} = $object->getReportedBy();
        }
        if (null !== $object->getComment()) {
            $data->{'comment'} = $object->getComment();
        }

        return $data;
    }
}
