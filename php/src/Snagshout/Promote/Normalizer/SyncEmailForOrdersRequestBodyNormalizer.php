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

use Snagshout\Promote\Model\SyncEmailForOrders;

class SyncEmailForOrdersRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = SyncEmailForOrders::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new SyncEmailForOrders();
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
        $data = [];

        if (null !== $object->getNewEmail()) {
            $data['newEmail'] = $object->getNewEmail();
        }
        if (null !== $object->getOldEmail()) {
            $data['oldEmail'] = $object->getOldEmail();
        }

        return $data;
    }
}
