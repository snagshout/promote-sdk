<?php

/**
 * Copyright 2016-2018, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Tests\Snagshout\Promote\Normalizer;

use Joli\Jane\Runtime\Encoder\RawEncoder;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Snagshout\Promote\Model\Category;
use Snagshout\Promote\Model\Deal;
use Snagshout\Promote\Model\Medium;
use Snagshout\Promote\Normalizer\NormalizerFactory;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Class DealNormalizerTest.
 *
 * @author Mark Vaughn <mark@roundsphere.com>
 * @package Tests\Snagshout\Promote\Normalizer
 */
class DealNormalizerTest extends BaseTestCase
{
    /**
     * @return Serializer
     */
    protected function getSerializer()
    {
        return new Serializer(
            NormalizerFactory::create(),
            [
                new JsonEncoder(
                    new JsonEncode(),
                    new JsonDecode()
                ),
                new RawEncoder(),
            ]
        );
    }

    public function testDenormalize()
    {
        $serializer = $this->getSerializer();

        $data = json_decode(
            file_get_contents(
                __DIR__ . DIRECTORY_SEPARATOR . 'deal.json'
            )
        );

        /** @var Deal $deal */
        $deal = $serializer->denormalize($data, Deal::class);

        $this->assertInstanceOf(Deal::class, $deal);

        $this->assertNotNull($deal->getProductName());
        $this->assertNotNull($deal->getProductDescription());
        $this->assertNotNull($deal->getDiscountPrice());
        $this->assertNotNull($deal->getListingPrice());
        $this->assertNotNull($deal->getShippingPrice());
        $this->assertNotNull($deal->getShippingDaysMin());
        $this->assertNotNull($deal->getShippingDaysMax());
        $this->assertNotNull($deal->getShippingType());
        $this->assertNotNull($deal->getPayloadType());
        $this->assertInstanceOf(Category::class, $deal->getCategories()[0]);
        $this->assertInstanceOf(Medium::class, $deal->getMedia()[0]);
    }
}
