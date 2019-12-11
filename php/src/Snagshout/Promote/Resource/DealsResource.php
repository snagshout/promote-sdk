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

class DealsResource extends Resource
{
    /**
     * 
     *
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Snagshout\Promote\Model\Deal[]
     */
    public function indexDeals($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/deals';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Snagshout\\Promote\\Model\\Deal[]', 'json');
            }
        }

        return $response;
    }
    /**
     * 
     *
     * @param int $campaign ID of campaign to fetch
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Snagshout\Promote\Model\Deal
     */
    public function getDeal($campaign, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/deals/{campaign}';
        $url = str_replace('{campaign}', urlencode($campaign), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Snagshout\\Promote\\Model\\Deal', 'json');
            }
        }

        return $response;
    }
    /**
     * 
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\CreateOrderRequestBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Snagshout\Promote\Model\Payload|\Snagshout\Promote\Model\Error
     */
    public function createOrder($campaign, \Snagshout\Promote\Model\CreateOrderRequestBody $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/deals/{campaign}/order';
        $url = str_replace('{campaign}', urlencode($campaign), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Snagshout\\Promote\\Model\\Payload', 'json');
            }
            if ('404' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Snagshout\\Promote\\Model\\Error', 'json');
            }
            if ('409' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Snagshout\\Promote\\Model\\Error', 'json');
            }
            if ('422' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Snagshout\\Promote\\Model\\Error', 'json');
            }
        }

        return $response;
    }
    /**
     * 
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\ConfirmRebateRequestBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Snagshout\Promote\Model\Error
     */
    public function confirmCode($campaign, \Snagshout\Promote\Model\ConfirmRebateRequestBody $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/deals/{campaign}/order/confirm';
        $url = str_replace('{campaign}', urlencode($campaign), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('422' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Snagshout\\Promote\\Model\\Error', 'json');
            }
            if ('404' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Snagshout\\Promote\\Model\\Error', 'json');
            }
        }

        return $response;
    }
    /**
     * 
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\UpdateDeliverableRequestBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Snagshout\Promote\Model\Error
     */
    public function updateDeliverable($campaign, \Snagshout\Promote\Model\UpdateDeliverableRequestBody $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/deals/{campaign}/order/deliverable';
        $url = str_replace('{campaign}', urlencode($campaign), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('422' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Snagshout\\Promote\\Model\\Error', 'json');
            }
            if ('404' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Snagshout\\Promote\\Model\\Error', 'json');
            }
        }

        return $response;
    }
    /**
     * 
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\CancelRebateRequestBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Snagshout\Promote\Model\Error
     */
    public function cancelRebate($campaign, \Snagshout\Promote\Model\CancelRebateRequestBody $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/deals/{campaign}/order/cancel';
        $url = str_replace('{campaign}', urlencode($campaign), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('422' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Snagshout\\Promote\\Model\\Error', 'json');
            }
            if ('404' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Snagshout\\Promote\\Model\\Error', 'json');
            }
        }

        return $response;
    }
    /**
     * 
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\UnsyncDealRequestBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function unsyncDeal($campaign, \Snagshout\Promote\Model\UnsyncDealRequestBody $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/deals/{campaign}/sync';
        $url = str_replace('{campaign}', urlencode($campaign), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
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
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\SyncDealRequestBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function syncDeal($campaign, \Snagshout\Promote\Model\SyncDealRequestBody $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/deals/{campaign}/sync';
        $url = str_replace('{campaign}', urlencode($campaign), $url);
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
    /**
     * 
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\DealImpressionsRequestBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function impressions($campaign, \Snagshout\Promote\Model\DealImpressionsRequestBody $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/deals/{campaign}/impressions';
        $url = str_replace('{campaign}', urlencode($campaign), $url);
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
    /**
     * 
     *
     * @param int $campaign ID of campaign to notify
     * @param \Snagshout\Promote\Model\NotifyDealRequestBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function notifyDeal($campaign, \Snagshout\Promote\Model\NotifyDealRequestBody $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/deals/{campaign}/notify';
        $url = str_replace('{campaign}', urlencode($campaign), $url);
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
    /**
     * 
     *
     * @param int $campaign ID of campaign to flag
     * @param \Snagshout\Promote\Model\FlagDealRequestBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function flagDeal($campaign, \Snagshout\Promote\Model\FlagDealRequestBody $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/deals/{campaign}/flag';
        $url = str_replace('{campaign}', urlencode($campaign), $url);
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
    /**
     * 
     *
     * @param int $campaign ID of campaign that received a review
     * @param \Snagshout\Promote\Model\ReviewFoundRequestBody $body 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function reviewDeal($campaign, \Snagshout\Promote\Model\ReviewFoundRequestBody $body, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/api/v1/deals/{campaign}/review';
        $url = str_replace('{campaign}', urlencode($campaign), $url);
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
