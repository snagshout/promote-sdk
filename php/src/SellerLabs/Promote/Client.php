<?php

/**
 * Copyright 2014-2017, SellerLabs <sellerlabs-devs@sellerlabs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Promote package
 */

namespace SellerLabs\Promote;

use Closure;
use DateTime;
use GuzzleHttp\Client as HttpClient;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Uri;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Joli\Jane\Runtime\Encoder\RawEncoder;
use Psr\Http\Message\RequestInterface;
use SellerLabs\Promote\Normalizer\NormalizerFactory;
use SellerLabs\Promote\Resource\DefaultResource;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Class Client
 *
 * @package SellerLabs\Promote
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 */
class Client
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

    protected $baseUrl = 'http://localhost:8000';

    /**
     * SyndicationClient constructor.
     *
     * @param string $publicId
     * @param string $secretKey
     */
    public function __construct($publicId, $secretKey)
    {
        $this->publicId = $publicId;
        $this->secretKey = $secretKey;

        $this->endpoint = new Uri($this->baseUrl);

        $stack = new HandlerStack();

        $stack->setHandler(new CurlHandler());

        $stack->push($this->makeAuthHandler());

        $this->client = new HttpClient(
            [
                'handler' => $stack,
            ]
        );
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
     * @param Uri $endpoint
     */
    public function setEndpoint(Uri $endpoint)
    {
        $this->endpoint = $endpoint;
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
     * A Guzzle middleware that automatically adds the required Authorization
     * and Content-Hash headers required by the Promote API.
     *
     * @return Closure
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
     * A wrapper for constructing instances of resource classes.
     *
     * @param string $resourceClass
     *
     * @return Resource
     */
    protected function buildResource($resourceClass)
    {
        return new $resourceClass(
            new GuzzleAdapter($this->client),
            new GuzzleMessageFactory(),
            new Serializer(
                NormalizerFactory::create(),
                [
                    new JsonEncoder(
                        new JsonEncode(),
                        new JsonDecode()
                    ),
                    new RawEncoder(),
                ]
            )
        );
    }

    /**
     * @return DefaultResource
     */
    public function front()
    {
        return $this->buildResource(DefaultResource::class);
    }
}
