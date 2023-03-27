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

use Snagshout\Promote\Model\Followup;

class FollowupNormalizer extends AbstractNormalizer
{
    protected $modelClass = Followup::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new Followup();
        if (property_exists($data, 'days')) {
            $object->setDays($data->{'days'});
        }
        if (property_exists($data, 'subject')) {
            $object->setSubject($data->{'subject'});
        }
        if (property_exists($data, 'body')) {
            $object->setBody($data->{'body'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDays()) {
            $data->{'days'} = $object->getDays();
        }
        if (null !== $object->getSubject()) {
            $data->{'subject'} = $object->getSubject();
        }
        if (null !== $object->getBody()) {
            $data->{'body'} = $object->getBody();
        }

        return $data;
    }
}
