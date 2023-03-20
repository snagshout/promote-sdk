<?php

/**
 * Copyright 2016-2023, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote;

use Closure;
use DateTime;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Snagshout\Promote\Enum\Fetch;

/**
 * Class Client.
 *
 * @author Andrii Prykhodko <andriichello@gmail.com>
 * @package Snagshout\Promote
 */
class HttpClient extends GuzzleClient
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
     * Client constructor.
     *
     * @param string $publicId
     * @param string $secretKey
     * @param string $baseUrl
     */
    public function __construct(string $publicId, string $secretKey, string $baseUrl)
    {
        $this->setPublicId($publicId);
        $this->setSecretKey($secretKey);
        $this->setBaseUrl($baseUrl);

        $stack = new HandlerStack();

        $stack->setHandler(new CurlHandler());
        $stack->push($this->makeAuthHandler());

        parent::__construct(['handler' => $stack]);
    }

    /**
     * @param string $publicId
     */
    public function setPublicId(string $publicId)
    {
        $this->publicId = $publicId;
    }

    /**
     * @param string $secretKey
     */
    public function setSecretKey(string $secretKey)
    {
        $this->secretKey = $secretKey;
    }

    /**
     * @param string $baseUrl
     */
    public function setBaseUrl(string $baseUrl)
    {
        $this->endpoint = new Uri($baseUrl);
    }

    /**
     * Computes the hash of a string using the secret key.
     *
     * @param string $content
     *
     * @return string
     */
    protected function hash(string $content): string
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
    protected function makeAuthHandler(): Closure
    {
        return function (callable $handler) {
            return function (
                RequestInterface $request,
                array            $options
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
     * Performs a request and returns a response.
     *
     * @param RequestInterface $request
     * @param string $fetch
     *
     * @return PromiseInterface|ResponseInterface
     */
    public function fetch(RequestInterface $request, string $fetch = Fetch::OBJECT)
    {
        $promise = $this->sendAsync($request);

        if ($fetch === Fetch::PROMISE) {
            return $promise;
        }

        return $promise->wait();
    }
}
