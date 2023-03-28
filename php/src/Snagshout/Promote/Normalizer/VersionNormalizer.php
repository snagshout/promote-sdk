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

use Snagshout\Promote\Model\Version;

class VersionNormalizer extends AbstractNormalizer
{
    protected $modelClass = Version::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new Version();
        if (property_exists($data, 'api')) {
            $object->setApi($data->{'api'});
        }
        if (property_exists($data, 'app')) {
            $object->setApp($data->{'app'});
        }
        if (property_exists($data, 'date')) {
            $object->setDate($data->{'date'});
        }
        if (property_exists($data, 'php')) {
            $object->setPhp($data->{'php'});
        }
        if (property_exists($data, 'extensions')) {
            $object->setExtensions($data->{'extensions'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];

        if (null !== $object->getApi()) {
            $data['api'] = $object->getApi();
        }
        if (null !== $object->getApp()) {
            $data['app'] = $object->getApp();
        }
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if (null !== $object->getPhp()) {
            $data['php'] = $object->getPhp();
        }
        if (null !== $object->getExtensions()) {
            $data['extensions'] = $object->getExtensions();
        }

        return $data;
    }
}
