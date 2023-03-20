<?php

/**
 * Copyright 2016-2021, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Normalizer;

use Snagshout\Promote\Model\UpdateReviewNameRequestBody;

class UpdateReviewNameBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = UpdateReviewNameRequestBody::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new UpdateReviewNameRequestBody();
        if (property_exists($data, 'userEmail')) {
            $object->setUserEmail($data->{'userEmail'});
        }
        if (property_exists($data, 'newReviewerName')) {
            $object->setNewReviewerName($data->{'newReviewerName'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getUserEmail()) {
            $data->{'userEmail'} = $object->getUserEmail();
        }
        if (null !== $object->getNewReviewerName()) {
            $data->{'newReviewerName'} = $object->getNewReviewerName();
        }

        return $data;
    }
}
