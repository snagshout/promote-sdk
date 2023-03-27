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

use Snagshout\Promote\Model\Impression;

class ImpressionNormalizer extends AbstractNormalizer
{
    protected $modelClass = Impression::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new Impression();
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
