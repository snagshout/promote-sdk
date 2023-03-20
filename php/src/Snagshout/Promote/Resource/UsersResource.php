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

use Exception;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;
use Snagshout\Promote\Enum\Fetch;
use Snagshout\Promote\Model\CheckEmailRequestBody;
use Snagshout\Promote\Model\Error;
use Snagshout\Promote\Model\InitializeMigrationBody;
use Snagshout\Promote\Model\RequestPayout;

/**
 * UsersResource class.
 *
 * @package Snagshout\Promote\Resource
 */
class UsersResource extends AbstractResource
{
    /**
     * @param InitializeMigrationBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface|Error
     */
    public function initialize(InitializeMigrationBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = '/api/v1/users/migrate?' . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        $response = $this->client->fetch(new Request('POST', $url, [], $body), $fetch);

        if ($fetch === Fetch::OBJECT) {
            if ($response->getStatusCode() === 403) {
                return $this->as($response, Error::class);
            }
            if ($response->getStatusCode() === 500) {
                return $this->as($response, Error::class);
            }
        }

        return $response;
    }

    /**
     * @param CheckEmailRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface|Error
     */
    public function checkEmail(CheckEmailRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = '/api/v1/users/email?' . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        $response = $this->client->fetch(new Request('POST', $url, [], $body), $fetch);

        if ($fetch === Fetch::OBJECT) {
            if ($response->getStatusCode() === 422) {
                return $this->as($response, Error::class);
            }
        }

        return $response;
    }

    /**
     * @param RequestPayout $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface|Error
     * @throws Exception
     */
    public function requestPayout(RequestPayout $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        if (empty($body->getEmail())) {
            throw new Exception('Email is empty');
        }

        $url = '/api/v1/payouts?' . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        $response = $this->client->fetch(new Request('POST', $url, [], $body), $fetch);

        if ($fetch === Fetch::OBJECT) {
            if ($response->getStatusCode() === 422) {
                return $this->as($response, Error::class);
            }
        }

        return $response;
    }
}
