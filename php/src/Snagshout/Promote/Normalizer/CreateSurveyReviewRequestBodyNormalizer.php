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

use Snagshout\Promote\Model\CreateSurveyReviewRequestBody;

class CreateSurveyReviewRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = CreateSurveyReviewRequestBody::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new CreateSurveyReviewRequestBody();
        if (property_exists($data, 'reviewClaimedLeft')) {
            $object->setReviewClaimedLeft($data->{'reviewClaimedLeft'});
        }
        if (property_exists($data, 'reviewerName')) {
            $object->setReviewerName($data->{'reviewerName'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'reason')) {
            $object->setReason($data->{'reason'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getReviewClaimedLeft()) {
            $data->{'reviewClaimedLeft'} = $object->getReviewClaimedLeft();
        }
        if (null !== $object->getReviewerName()) {
            $data->{'reviewerName'} = $object->getReviewerName();
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getReason()) {
            $data->{'reason'} = $object->getReason();
        }

        return $data;
    }
}
