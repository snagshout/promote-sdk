<?php

namespace SellerLabs\Promote\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
class UsersResource extends Resource
{
    /**
     * 
     *
     * @param array  $parameters {
     *     @var string $email Check for this email
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\SellerLabs\Promote\Model\Error
     */
    public function checkEmail($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setRequired('email');
        $queryParam->setFormParameters(array('email'));
        $url = '/api/v1/users/email';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('422' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'SellerLabs\\Promote\\Model\\Error', 'json');
            }
        }
        return $response;
    }
}