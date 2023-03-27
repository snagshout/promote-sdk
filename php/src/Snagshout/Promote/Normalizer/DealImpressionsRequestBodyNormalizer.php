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

use Snagshout\Promote\Model\DealImpressionsRequestBody;
use Snagshout\Promote\Model\Impression;

class DealImpressionsRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = DealImpressionsRequestBody::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new DealImpressionsRequestBody();
        if (property_exists($data, 'impressions')) {
            $values = [];
            foreach ($data->{'impressions'} as $value) {
                $values[] = $this->serializer->deserialize(json_encode($value), Impression::class, 'json', $context);
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
