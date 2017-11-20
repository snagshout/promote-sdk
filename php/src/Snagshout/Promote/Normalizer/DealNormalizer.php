<?php

/**
 * Copyright 2016-2017, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class DealNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Snagshout\\Promote\\Model\\Deal') {
            return false;
        }

        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Snagshout\Promote\Model\Deal) {
            return true;
        }

        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Snagshout\Promote\Model\Deal();
        if (property_exists($data, 'campaignId')) {
            $object->setCampaignId($data->{'campaignId'});
        }
        if (property_exists($data, 'companyId')) {
            $object->setCompanyId($data->{'companyId'});
        }
        if (property_exists($data, 'productName')) {
            $object->setProductName($data->{'productName'});
        }
        if (property_exists($data, 'productDescription')) {
            $object->setProductDescription($data->{'productDescription'});
        }
        if (property_exists($data, 'categories')) {
            $values = [];
            foreach ($data->{'categories'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Snagshout\\Promote\\Model\\Category', 'raw', $context);
            }
            $object->setCategories($values);
        }
        if (property_exists($data, 'media')) {
            $values_1 = [];
            foreach ($data->{'media'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Snagshout\\Promote\\Model\\Medium', 'raw', $context);
            }
            $object->setMedia($values_1);
        }
        if (property_exists($data, 'boost')) {
            $values_2 = [];
            foreach ($data->{'boost'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setBoost($values_2);
        }
        if (property_exists($data, 'code')) {
            $object->setCode($data->{'code'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'discountPrice')) {
            $object->setDiscountPrice($data->{'discountPrice'});
        }
        if (property_exists($data, 'isExclusive')) {
            $object->setIsExclusive($data->{'isExclusive'});
        }
        if (property_exists($data, 'featured')) {
            $values_3 = [];
            foreach ($data->{'featured'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setFeatured($values_3);
        }
        if (property_exists($data, 'isUnlimited')) {
            $object->setIsUnlimited($data->{'isUnlimited'});
        }
        if (property_exists($data, 'listingMetadata')) {
            $object->setListingMetadata($data->{'listingMetadata'});
        }
        if (property_exists($data, 'listingPrice')) {
            $object->setListingPrice($data->{'listingPrice'});
        }
        if (property_exists($data, 'listingUrl')) {
            $object->setListingUrl($data->{'listingUrl'});
        }
        if (property_exists($data, 'marketplace')) {
            $object->setMarketplace($data->{'marketplace'});
        }
        if (property_exists($data, 'payloadType')) {
            $object->setPayloadType($data->{'payloadType'});
        }
        if (property_exists($data, 'requireEmail')) {
            $object->setRequireEmail($data->{'requireEmail'});
        }
        if (property_exists($data, 'shippingDaysMax')) {
            $object->setShippingDaysMax($data->{'shippingDaysMax'});
        }
        if (property_exists($data, 'shippingDaysMin')) {
            $object->setShippingDaysMin($data->{'shippingDaysMin'});
        }
        if (property_exists($data, 'shippingPrice')) {
            $object->setShippingPrice($data->{'shippingPrice'});
        }
        if (property_exists($data, 'shippingType')) {
            $object->setShippingType($data->{'shippingType'});
        }
        if (property_exists($data, 'startsAt')) {
            $object->setStartsAt($data->{'startsAt'});
        }
        if (property_exists($data, 'returnAt')) {
            $object->setReturnAt($data->{'returnAt'});
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt($data->{'updatedAt'});
        }
        if (property_exists($data, 'endsAt')) {
            $object->setEndsAt($data->{'endsAt'});
        }
        if (property_exists($data, 'available')) {
            $object->setAvailable($data->{'available'});
        }
        if (property_exists($data, 'remainingQuantity')) {
            $object->setRemainingQuantity($data->{'remainingQuantity'});
        }
        if (property_exists($data, 'dailyLimitReached')) {
            $object->setDailyLimitReached($data->{'dailyLimitReached'});
        }
        if (property_exists($data, 'immediateFollowup')) {
            $object->setImmediateFollowup($data->{'immediateFollowup'});
        }
        if (property_exists($data, 'scheduledFollowup')) {
            $object->setScheduledFollowup($data->{'scheduledFollowup'});
        }

        return $object;
    }
    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCampaignId()) {
            $data->{'campaignId'} = $object->getCampaignId();
        }
        if (null !== $object->getCompanyId()) {
            $data->{'companyId'} = $object->getCompanyId();
        }
        if (null !== $object->getProductName()) {
            $data->{'productName'} = $object->getProductName();
        }
        if (null !== $object->getProductDescription()) {
            $data->{'productDescription'} = $object->getProductDescription();
        }
        if (null !== $object->getCategories()) {
            $values = [];
            foreach ($object->getCategories() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'categories'} = $values;
        }
        if (null !== $object->getMedia()) {
            $values_1 = [];
            foreach ($object->getMedia() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'media'} = $values_1;
        }
        if (null !== $object->getBoost()) {
            $values_2 = [];
            foreach ($object->getBoost() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'boost'} = $values_2;
        }
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getDiscountPrice()) {
            $data->{'discountPrice'} = $object->getDiscountPrice();
        }
        if (null !== $object->getIsExclusive()) {
            $data->{'isExclusive'} = $object->getIsExclusive();
        }
        if (null !== $object->getFeatured()) {
            $values_3 = [];
            foreach ($object->getFeatured() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'featured'} = $values_3;
        }
        if (null !== $object->getIsUnlimited()) {
            $data->{'isUnlimited'} = $object->getIsUnlimited();
        }
        if (null !== $object->getListingMetadata()) {
            $data->{'listingMetadata'} = $object->getListingMetadata();
        }
        if (null !== $object->getListingPrice()) {
            $data->{'listingPrice'} = $object->getListingPrice();
        }
        if (null !== $object->getListingUrl()) {
            $data->{'listingUrl'} = $object->getListingUrl();
        }
        if (null !== $object->getMarketplace()) {
            $data->{'marketplace'} = $object->getMarketplace();
        }
        if (null !== $object->getPayloadType()) {
            $data->{'payloadType'} = $object->getPayloadType();
        }
        if (null !== $object->getRequireEmail()) {
            $data->{'requireEmail'} = $object->getRequireEmail();
        }
        if (null !== $object->getShippingDaysMax()) {
            $data->{'shippingDaysMax'} = $object->getShippingDaysMax();
        }
        if (null !== $object->getShippingDaysMin()) {
            $data->{'shippingDaysMin'} = $object->getShippingDaysMin();
        }
        if (null !== $object->getShippingPrice()) {
            $data->{'shippingPrice'} = $object->getShippingPrice();
        }
        if (null !== $object->getShippingType()) {
            $data->{'shippingType'} = $object->getShippingType();
        }
        if (null !== $object->getStartsAt()) {
            $data->{'startsAt'} = $object->getStartsAt();
        }
        if (null !== $object->getReturnAt()) {
            $data->{'returnAt'} = $object->getReturnAt();
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt();
        }
        if (null !== $object->getEndsAt()) {
            $data->{'endsAt'} = $object->getEndsAt();
        }
        if (null !== $object->getAvailable()) {
            $data->{'available'} = $object->getAvailable();
        }
        if (null !== $object->getRemainingQuantity()) {
            $data->{'remainingQuantity'} = $object->getRemainingQuantity();
        }
        if (null !== $object->getDailyLimitReached()) {
            $data->{'dailyLimitReached'} = $object->getDailyLimitReached();
        }
        if (null !== $object->getImmediateFollowup()) {
            $data->{'immediateFollowup'} = $object->getImmediateFollowup();
        }
        if (null !== $object->getScheduledFollowup()) {
            $data->{'scheduledFollowup'} = $object->getScheduledFollowup();
        }

        return $data;
    }
}
