<?php

/**
 * Copyright 2016-2018, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Snagshout\Promote\Model\Deal[]|\Psr\Http\Message\ResponseInterface
     */
    public function indexDeals(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\IndexDeals(), $fetch);
    }
    /**
     *
     *
     * @param int $campaign ID of campaign to fetch
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Snagshout\Promote\Model\Deal|\Psr\Http\Message\ResponseInterface
     */
    public function getDeal(int $campaign, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\GetDeal($campaign), $fetch);
    }
    /**
     *
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\CreateOrderRequestBody $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Snagshout\Promote\Exception\CreateOrderNotFoundException
     * @throws \Snagshout\Promote\Exception\CreateOrderConflictException
     * @throws \Snagshout\Promote\Exception\CreateOrderUnprocessableEntityException
     *
     * @return null|\Snagshout\Promote\Model\Payload|\Psr\Http\Message\ResponseInterface
     */
    public function createOrder(int $campaign, \Snagshout\Promote\Model\CreateOrderRequestBody $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\CreateOrder($campaign, $body), $fetch);
    }
    /**
     *
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\ConfirmRebateRequestBody $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Snagshout\Promote\Exception\ConfirmCodeUnprocessableEntityException
     * @throws \Snagshout\Promote\Exception\ConfirmCodeNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function confirmCode(int $campaign, \Snagshout\Promote\Model\ConfirmRebateRequestBody $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\ConfirmCode($campaign, $body), $fetch);
    }
    /**
     *
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\CancelRebateRequestBody $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Snagshout\Promote\Exception\CancelRebateUnprocessableEntityException
     * @throws \Snagshout\Promote\Exception\CancelRebateNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cancelRebate(int $campaign, \Snagshout\Promote\Model\CancelRebateRequestBody $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\CancelRebate($campaign, $body), $fetch);
    }
    /**
     *
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\UnsyncDealRequestBody $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function unsyncDeal(int $campaign, \Snagshout\Promote\Model\UnsyncDealRequestBody $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\UnsyncDeal($campaign, $body), $fetch);
    }
    /**
     *
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\SyncDealRequestBody $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function syncDeal(int $campaign, \Snagshout\Promote\Model\SyncDealRequestBody $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\SyncDeal($campaign, $body), $fetch);
    }
    /**
     *
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\DealImpressionsRequestBody $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function impressions(int $campaign, \Snagshout\Promote\Model\DealImpressionsRequestBody $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\Impressions($campaign, $body), $fetch);
    }
    /**
     *
     *
     * @param int $campaign ID of campaign to notify
     * @param \Snagshout\Promote\Model\NotifyDealRequestBody $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function notifyDeal(int $campaign, \Snagshout\Promote\Model\NotifyDealRequestBody $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\NotifyDeal($campaign, $body), $fetch);
    }
    /**
     *
     *
     * @param int $campaign ID of campaign to flag
     * @param \Snagshout\Promote\Model\FlagDealRequestBody $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function flagDeal(int $campaign, \Snagshout\Promote\Model\FlagDealRequestBody $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\FlagDeal($campaign, $body), $fetch);
    }
    /**
     *
     *
     * @param int $campaign ID of campaign that received a review
     * @param \Snagshout\Promote\Model\ReviewFoundRequestBody $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reviewDeal(int $campaign, \Snagshout\Promote\Model\ReviewFoundRequestBody $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\ReviewDeal($campaign, $body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Snagshout\Promote\Model\Version|\Psr\Http\Message\ResponseInterface
     */
    public function getVersion(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\GetVersion(), $fetch);
    }
    /**
     *
     *
     * @param \Snagshout\Promote\Model\InitializeMigrationBody $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Snagshout\Promote\Exception\InitializeForbiddenException
     * @throws \Snagshout\Promote\Exception\InitializeInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function initialize(\Snagshout\Promote\Model\InitializeMigrationBody $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\Initialize($body), $fetch);
    }
    /**
     *
     *
     * @param \Snagshout\Promote\Model\CheckEmailRequestBody $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Snagshout\Promote\Exception\CheckEmailUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function checkEmail(\Snagshout\Promote\Model\CheckEmailRequestBody $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Snagshout\Promote\Endpoint\CheckEmail($body), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri('https://localhost/api/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(\Snagshout\Promote\Normalizer\NormalizerFactory::create(), [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())]);

        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}
