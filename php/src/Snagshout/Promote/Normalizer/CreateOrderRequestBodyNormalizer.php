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

use Snagshout\Promote\Model\CreateOrderRequestBody;

class CreateOrderRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = CreateOrderRequestBody::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new CreateOrderRequestBody();
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'completeBy')) {
            $object->setCompleteBy($data->{'completeBy'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];

        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->wasCompleteBySet()) {
            $data['completeBy'] = $object->getCompleteBy();
        }

        return $data;
    }
}
