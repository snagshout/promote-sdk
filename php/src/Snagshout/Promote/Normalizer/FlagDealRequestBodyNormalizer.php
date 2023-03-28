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

use Snagshout\Promote\Model\FlagDealRequestBody;

class FlagDealRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = FlagDealRequestBody::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new FlagDealRequestBody();
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
        $data = [];

        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getReportedBy()) {
            $data['reportedBy'] = $object->getReportedBy();
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }

        return $data;
    }
}
