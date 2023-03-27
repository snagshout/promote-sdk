<?php

/**
 * Copyright 2016-2023, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Resource;

use Psr\Http\Message\ResponseInterface;
use Snagshout\Promote\HttpClient;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class AbstractResource.
 *
 * @author Andrii Prykhodko <andriichello@gmail.com>
 * @package Snagshout\Promote\Resource
 */
abstract class AbstractResource
{
    /**
     * @var HttpClient
     */
    protected $client;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * BaseResource constructor.
     *
     * @param HttpClient $client
     * @param SerializerInterface $serializer
     */
    public function __construct(HttpClient $client, SerializerInterface $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    /**
     * Deserialize response as given class.
     *
     * @param ResponseInterface $response
     * @param string $class
     *
     * @return mixed
     */
    public function as(ResponseInterface $response, string $class)
    {
        $data = $response->getBody()->getContents();

        return $this->serializer
            ->deserialize($data, $class, 'json');
    }
}
