<?php

/**
 * Copyright 2016-2018, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Endpoint;

class Initialize extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * 
     *
     * @param \Snagshout\Promote\Model\InitializeMigrationBody $body 
     */
    public function __construct(\Snagshout\Promote\Model\InitializeMigrationBody $body)
    {
        $this->body = $body;
    }

use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/users/migrate';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Snagshout\Promote\Exception\InitializeForbiddenException
     * @throws \Snagshout\Promote\Exception\InitializeInternalServerErrorException
     *
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (204 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Snagshout\Promote\Exception\InitializeForbiddenException($serializer->deserialize($body, 'Snagshout\\Promote\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Snagshout\Promote\Exception\InitializeInternalServerErrorException($serializer->deserialize($body, 'Snagshout\\Promote\\Model\\Error', 'json'));
        }
    }
}
