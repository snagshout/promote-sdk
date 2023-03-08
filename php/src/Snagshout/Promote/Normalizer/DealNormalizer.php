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

use Snagshout\Promote\Model\Category;
use Snagshout\Promote\Model\Deal;
use Snagshout\Promote\Model\Medium;

class DealNormalizer extends AbstractNormalizer
{
    protected $modelClass = Deal::class;

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new Deal();
        if (property_exists($data, 'campaignId')) {
            $object->setCampaignId($data->{'campaignId'});
        }
        if (property_exists($data, 'companyId')) {
            $object->setCompanyId($data->{'companyId'});
        }
        if (property_exists($data, 'productId')) {
            $object->setProductId($data->{'productId'});
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
                $values[] = $this->serializer->deserialize(json_encode($value), Category::class, 'raw', $context);
            }
            $object->setCategories($values);
        }
        if (property_exists($data, 'media')) {
            $values_1 = [];
            foreach ($data->{'media'} as $value_1) {
                $values_1[] = $this->serializer->deserialize(json_encode($value_1), Medium::class, 'raw', $context);
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
        if (property_exists($data, 'boostWeights')) {
            $values_3 = [];
            foreach ($data->{'boostWeights'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setBoostWeights($values_3);
        }
        if (property_exists($data, 'actionType')) {
            $object->setActionType($data->{'actionType'});
        }
        if (property_exists($data, 'actionMetadata')) {
            $object->setActionMetadata($data->{'actionMetadata'});
        }
        if (property_exists($data, 'actionIsPro')) {
            $object->setActionIsPro($data->{'actionIsPro'});
        }
        if (property_exists($data, 'code')) {
            $object->setCode($data->{'code'});
        }
        if (property_exists($data, 'confidence')) {
            $object->setConfidence($data->{'confidence'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'discountPrice')) {
            $object->setDiscountPrice($data->{'discountPrice'});
        }
        if (property_exists($data, 'rebateAmount')) {
            $object->setRebateAmount($data->{'rebateAmount'});
        }
        if (property_exists($data, 'isExclusive')) {
            $object->setIsExclusive($data->{'isExclusive'});
        }
        if (property_exists($data, 'isNSFW')) {
            $object->setIsNSFW($data->{'isNSFW'});
        }
        if (property_exists($data, 'featured')) {
            $values_4 = [];
            foreach ($data->{'featured'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setFeatured($values_4);
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
        if (property_exists($data, 'reviewUrl')) {
            $object->setReviewUrl($data->{'reviewUrl'});
        }
        if (property_exists($data, 'marketplace')) {
            $object->setMarketplace($data->{'marketplace'});
        }
        if (property_exists($data, 'marketplaceId')) {
            $object->setMarketplaceId($data->{'marketplaceId'});
        }
        if (property_exists($data, 'payloadType')) {
            $object->setPayloadType($data->{'payloadType'});
        }
        if (property_exists($data, 'completeWithin')) {
            $object->setCompleteWithin($data->{'completeWithin'});
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
        if (property_exists($data, 'metadata')) {
            $object->setMetadata($data->{'metadata'});
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
        if (property_exists($data, 'dailyLimit')) {
            $object->setDailyLimit($data->{'dailyLimit'});
        }
        if (property_exists($data, 'visibility')) {
            $object->setVisibility($data->{'visibility'});
        }
        if (property_exists($data, 'minAge')) {
            $object->setMinAge($data->{'minAge'});
        }
        if (property_exists($data, 'maxAge')) {
            $object->setMaxAge($data->{'maxAge'});
        }
        if (property_exists($data, 'gender')) {
            $object->setGender($data->{'gender'});
        }
        if (property_exists($data, 'zip')) {
            $object->setZip($data->{'zip'});
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
        if (null !== $object->getProductId()) {
            $data->{'productId'} = $object->getProductId();
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
        if (null !== $object->getBoostWeights()) {
            $values_3 = [];
            foreach ($object->getBoostWeights() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'boostWeights'} = $values_3;
        }
        if (null !== $object->getActionType()) {
            $data->{'actionType'} = $object->getActionType();
        }
        if (null !== $object->getActionMetadata()) {
            $data->{'actionMetadata'} = $object->getActionMetadata();
        }
        if (null !== $object->getActionIsPro()) {
            $data->{'actionIsPro'} = $object->getActionIsPro();
        }
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        }
        if (null !== $object->getConfidence()) {
            $data->{'confidence'} = $object->getConfidence();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getDiscountPrice()) {
            $data->{'discountPrice'} = $object->getDiscountPrice();
        }
        if (null !== $object->getRebateAmount()) {
            $data->{'rebateAmount'} = $object->getRebateAmount();
        }
        if (null !== $object->getIsExclusive()) {
            $data->{'isExclusive'} = $object->getIsExclusive();
        }
        if (null !== $object->getIsNSFW()) {
            $data->{'isNSFW'} = $object->getIsNSFW();
        }
        if (null !== $object->getFeatured()) {
            $values_4 = [];
            foreach ($object->getFeatured() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'featured'} = $values_4;
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
        if (null !== $object->getReviewUrl()) {
            $data->{'reviewUrl'} = $object->getReviewUrl();
        }
        if (null !== $object->getMarketplace()) {
            $data->{'marketplace'} = $object->getMarketplace();
        }
        if (null !== $object->getMarketplaceId()) {
            $data->{'marketplaceId'} = $object->getMarketplaceId();
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
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
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
        if (null !== $object->getDailyLimit()) {
            $data->{'dailyLimit'} = $object->getDailyLimit();
        }
        if (null !== $object->getVisibility()) {
            $data->{'visibility'} = $object->getVisibility();
        }
        if (null !== $object->getMinAge()) {
            $data->{'minAge'} = $object->getMinAge();
        }
        if (null !== $object->getMaxAge()) {
            $data->{'maxAge'} = $object->getMaxAge();
        }
        if (null !== $object->getGender()) {
            $data->{'gender'} = $object->getGender();
        }
        if (null !== $object->getZip()) {
            $data->{'zip'} = $object->getZip();
        }

        return $data;
    }
}
