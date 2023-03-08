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
use Snagshout\Promote\Model\Version;

/**
 * FrontResource class.
 *
 * @package Snagshout\Promote\Resource
 */
class FrontResource extends AbstractResource
{
    /**
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface|Version
     */
    public function getVersion(array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = '/api/v1/version?' . http_build_query($params);
        $response = $this->client->fetch(new Request('GET', $url, []), $fetch);

        if ($fetch === Fetch::OBJECT) {
            if ($response->getStatusCode() === 200) {
                return $this->as($response, Version::class);
            }
        }

        return $response;
    }
}
