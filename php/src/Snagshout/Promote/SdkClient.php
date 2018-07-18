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

use DateTime;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\RequestInterface;

/**
 * Class SdkClient.
 *
 * @mixin Client
 *
 * @author  Mark Vaughn <mark@snagshout.com>
 * @package Snagshout\Promote
 */
class SdkClient
{
    /**
     * @var string
     */
    protected $publicId;

    /**
     * @var string
     */
    protected $secretKey;

    /**
     * @var Uri
     */
    protected $endpoint;

    /**
     * @var Client
     */
    protected $client;

    /**
     * SyndicationClient constructor.
     *
     * @param string $publicId
     * @param string $secretKey
     * @param string $baseUrl
     */
    public function __construct($publicId, $secretKey, $baseUrl)
    {
        $this->publicId = $publicId;
        $this->secretKey = $secretKey;

        $stack = new HandlerStack();

        $stack->setHandler(new CurlHandler());

        $stack->push($this->makeAuthHandler());

        $this->setEndpoint(new Uri($baseUrl));
        $guzzle = new \GuzzleHttp\Client(
            [
                'base_uri' => $baseUrl,
                'handler' => $stack,
            ]
        );
        $client = new \Http\Adapter\Guzzle6\Client($guzzle);
        $this->client = Client::create($client);
    }

    /**
     * A Guzzle middleware that automatically adds the required Authorization
     * and Content-Hash headers required by the Promote API.
     *
     * @return \Closure
     */
    protected function makeAuthHandler()
    {
        return function (callable $handler) {
            return function (
                RequestInterface $request,
                array $options
            ) use ($handler) {
                $contentHash = $this->hash($request->getBody());

                $partialUri = $request->getUri();
                $uri = $this->endpoint
                    ->withPath(
                        $this->endpoint->getPath()
                        . $partialUri->getPath()
                    )
                    ->withQuery($partialUri->getQuery())
                    ->withFragment($partialUri->getFragment());

                $request = $request
                    ->withUri($uri)
                    ->withHeader(
                        'Authorization',
                        vsprintf('Hash %s', [$this->publicId])
                    )
                    ->withHeader('Content-Hash', $contentHash);

                return $handler($request, $options);
            };
        };
    }

    /**
     * Computes the hash of a string using the secret key.
     *
     * @param string $content
     *
     * @return string
     */
    protected function hash($content)
    {
        $timestamp = (new DateTime())->format('Y-m-d H');

        return hash_hmac(
            'sha512',
            $content . $timestamp,
            $this->secretKey
        );
    }

    /**
     * @param Uri $endpoint
     */
    public function setEndpoint(Uri $endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @param string $publicId
     */
    public function setPublicId($publicId)
    {
        $this->publicId = $publicId;
    }

    /**
     * @param string $secretKey
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    }

    /**
     * @param $method
     * @param $parameters
     *
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->client->{$method}(...$parameters);
    }
}
