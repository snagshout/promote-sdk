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

use Snagshout\Promote\Model\ReviewFoundRequestBody;

class ReviewFoundRequestBodyNormalizer extends AbstractNormalizer
{
    protected $modelClass = ReviewFoundRequestBody::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $data = (object) $data;

        $object = new ReviewFoundRequestBody();
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        if (property_exists($data, 'asin')) {
            $object->setAsin($data->{'asin'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'summary')) {
            $object->setSummary($data->{'summary'});
        }
        if (property_exists($data, 'reviewerId')) {
            $object->setReviewerId($data->{'reviewerId'});
        }
        if (property_exists($data, 'reviewId')) {
            $object->setReviewId($data->{'reviewId'});
        }
        if (property_exists($data, 'url')) {
            $object->setUrl($data->{'url'});
        }
        if (property_exists($data, 'stars')) {
            $object->setStars($data->{'stars'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];

        if (null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt();
        }
        if (null !== $object->getAsin()) {
            $data['asin'] = $object->getAsin();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if (null !== $object->getReviewerId()) {
            $data['reviewerId'] = $object->getReviewerId();
        }
        if (null !== $object->getReviewId()) {
            $data['reviewId'] = $object->getReviewId();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getStars()) {
            $data['stars'] = $object->getStars();
        }

        return $data;
    }
}
