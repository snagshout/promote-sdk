<?php

/**
 * Copyright 2016-2020, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Resource;

use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;
use Snagshout\Promote\Enum\Fetch;
use Snagshout\Promote\Model\CompleteFacebookOrderRequestBody;
use Snagshout\Promote\Model\CreateFacebookOrderRequestBody;
use Snagshout\Promote\Model\GetRebateEmail;
use Snagshout\Promote\Model\GetRebateOrPromo;
use Snagshout\Promote\Model\StoreFBImpressionRequestBody;

/**
 * FacebookResource class.
 *
 * @package Snagshout\Promote\Resource
 */
class FacebookResource extends AbstractResource
{
    /**
     * @param CompleteFacebookOrderRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function completeFacebookOrder(CompleteFacebookOrderRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = '/api/v1/facebook/order?' . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        return $this->client->fetch(new Request('PATCH', $url, [], $body), $fetch);
    }

    /**
     * @param CreateFacebookOrderRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function createFacebookOrder(CreateFacebookOrderRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = '/api/v1/facebook/order?' . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        return $this->client->fetch(new Request('POST', $url, [], $body), $fetch);
    }

    /**
     * @param GetRebateEmail $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function getRebateEmail(GetRebateEmail $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = '/api/v1/facebook/getRebateEmail?' . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        return $this->client->fetch(new Request('POST', $url, [], $body), $fetch);
    }

    /**
     * @param GetRebateOrPromo $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function getRebateOrPromo(GetRebateOrPromo $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = '/api/v1/facebook/getRebateOrPromo?' . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        return $this->client->fetch(new Request('GET', $url, [], $body), $fetch);
    }

    /**
     * @param StoreFBImpressionRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function storeImpression(StoreFBImpressionRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = '/api/v1/facebook/store-impression?' . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        return $this->client->fetch(new Request('POST', $url, [], $body), $fetch);
    }
}
