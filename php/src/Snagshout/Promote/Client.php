<?php

/**
 * Copyright 2016-2020, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote;

use Snagshout\Promote\Encoder\RawEncoder;
use Snagshout\Promote\Normalizer\NormalizerFactory;
use Snagshout\Promote\Resource\AbstractResource;
use Snagshout\Promote\Resource\DealsResource;
use Snagshout\Promote\Resource\FrontResource;
use Snagshout\Promote\Resource\UsersResource;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Class Client.
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @author Andrii Prykhodko <andriichello@gmail.com>
 * @package Snagshout\Promote
 */
class Client
{
    /**
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * Client constructor.
     *
     * @param string $publicId
     * @param string $secretKey
     * @param string $baseUrl
     */
    public function __construct(string $publicId, string $secretKey, string $baseUrl)
    {
        $this->httpClient = new HttpClient($publicId, $secretKey, $baseUrl);
    }

    /**
     * A wrapper for constructing instances of resource classes.
     *
     * @param string $resourceClass
     *
     * @return Resource
     */
    protected function buildResource(string $resourceClass): AbstractResource
    {
        return new $resourceClass(
            $this->httpClient,
            new Serializer(
                NormalizerFactory::create(),
                [
                    new JsonEncoder(new JsonEncode(), new JsonDecode()),
                ]
            )
        );
    }

    /**
     * @return DealsResource|Resource
     */
    public function deals()
    {
        return $this->buildResource(DealsResource::class);
    }

    /**
     * @return FrontResource|Resource
     */
    public function front()
    {
        return $this->buildResource(FrontResource::class);
    }

    /**
     * @return UsersResource|Resource
     */
    public function users()
    {
        return $this->buildResource(UsersResource::class);
    }
}
