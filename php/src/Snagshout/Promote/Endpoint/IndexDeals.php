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

class IndexDeals extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod() : string
    {
        return 'GET';
    }

    public function getUri() : string
    {
        return '/deals';
    }

    public function getBody(
        \Symfony\Component\Serializer\SerializerInterface $serializer,
        \Http\Message\StreamFactory $streamFactory = null
    ) : array {
        return [[], null];
    }

    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @return null|\Snagshout\Promote\Model\Deal[]
     */
    protected function transformResponseBody(
        string $body,
        int $status,
        \Symfony\Component\Serializer\SerializerInterface $serializer
    ) {
        if (200 === $status) {
            return $serializer->deserialize(
                $body,
                'Snagshout\\Promote\\Model\\Deal[]',
                'json'
            );
        }
    }
}
