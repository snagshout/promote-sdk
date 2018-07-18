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

class CreateOrder extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $campaign;
    /**
     *
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\CreateOrderRequestBody $body
     */
    public function __construct(int $campaign, \Snagshout\Promote\Model\CreateOrderRequestBody $body)
    {
        $this->campaign = $campaign;
        $this->body = $body;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{campaign}'], [$this->campaign], '/deals/{campaign}/order');
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
     * @throws \Snagshout\Promote\Exception\CreateOrderNotFoundException
     * @throws \Snagshout\Promote\Exception\CreateOrderConflictException
     * @throws \Snagshout\Promote\Exception\CreateOrderUnprocessableEntityException
     *
     * @return null|\Snagshout\Promote\Model\Payload
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Snagshout\\Promote\\Model\\Payload', 'json');
        }
        if (404 === $status) {
            throw new \Snagshout\Promote\Exception\CreateOrderNotFoundException($serializer->deserialize($body, 'Snagshout\\Promote\\Model\\Error', 'json'));
        }
        if (409 === $status) {
            throw new \Snagshout\Promote\Exception\CreateOrderConflictException($serializer->deserialize($body, 'Snagshout\\Promote\\Model\\Error', 'json'));
        }
        if (422 === $status) {
            throw new \Snagshout\Promote\Exception\CreateOrderUnprocessableEntityException($serializer->deserialize($body, 'Snagshout\\Promote\\Model\\Error', 'json'));
        }
    }
}
