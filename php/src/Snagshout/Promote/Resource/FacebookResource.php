<?php

/**
 * Copyright 2016-2018, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;

class FacebookResource extends Resource
{
    /**
     * 
     *
     * @param \Snagshout\Promote\Model\CompleteFacebookOrderRequestBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function completeFacebookOrder(\Snagshout\Promote\Model\CompleteFacebookOrderRequestBody $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/facebook/order';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('PATCH', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();

        return $response;
    }
    /**
     * 
     *
     * @param \Snagshout\Promote\Model\CreateFacebookOrderRequestBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createFacebookOrder(\Snagshout\Promote\Model\CreateFacebookOrderRequestBody $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/facebook/order';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();

        return $response;
    }
}
