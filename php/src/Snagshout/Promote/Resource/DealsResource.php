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
use Snagshout\Promote\Model\CancelRebateRequestBody;
use Snagshout\Promote\Model\ConfirmRebateRequestBody;
use Snagshout\Promote\Model\CreateOrderRequestBody;
use Snagshout\Promote\Model\CreateSurveyReviewRequestBody;
use Snagshout\Promote\Model\Deal;
use Snagshout\Promote\Model\DealImpressionsRequestBody;
use Snagshout\Promote\Model\Error;
use Snagshout\Promote\Model\FlagDealRequestBody;
use Snagshout\Promote\Model\NotifyDealRequestBody;
use Snagshout\Promote\Model\Payload;
use Snagshout\Promote\Model\RestoreRebateRequestBody;
use Snagshout\Promote\Model\ReviewFoundRequestBody;
use Snagshout\Promote\Model\SyncDealRequestBody;
use Snagshout\Promote\Model\SyncEmailForOrders;
use Snagshout\Promote\Model\UnsyncDealRequestBody;
use Snagshout\Promote\Model\UpdateDeliverableRequestBody;
use Snagshout\Promote\Model\UpdateOrderRequestBody;
use Snagshout\Promote\Model\UpdateReviewNameRequestBody;

/**
 * DealsResource class.
 *
 * @package Snagshout\Promote\Resource
 */
class DealsResource extends AbstractResource
{
    /**
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface|Deal[]
     */
    public function indexDeals(array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = '/api/v1/deals?' . http_build_query($params);
        $body = $this->serializer->serialize($params, 'json');

        $response = $this->client->fetch(new Request('GET', $url, [], $body), $fetch);

        if ($fetch === Fetch::OBJECT) {
            if ($response->getStatusCode() === 200) {
                return $this->as($response, Deal::class . '[]');
            }
        }

        return $response;
    }

    /**
     * @param int $campaign ID of campaign to fetch
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface|Deal
     */
    public function getDeal(int $campaign, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/deals/$campaign?" . http_build_query($params);
        $body = $this->serializer->serialize($params, 'json');

        $response = $this->client->fetch(new Request('GET', $url, [], $body), $fetch);

        if ($fetch === Fetch::OBJECT) {
            if ($response->getStatusCode() === 200) {
                return $this->as($response, Deal::class);
            }
        }

        return $response;
    }

    /**
     * @param int $campaign ID of campaign to fetch
     * @param CreateOrderRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface|Payload|Error
     */
    public function createOrder(int $campaign, CreateOrderRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/deals/$campaign/order?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        $response = $this->client->fetch(new Request('POST', $url, [], $body), $fetch);

        if ($fetch === Fetch::OBJECT) {
            if ($response->getStatusCode() === 200) {
                return $this->as($response, Payload::class);
            }
            if (in_array($response->getStatusCode(), [404, 409, 422])) {
                return $this->as($response, Error::class);
            }
        }

        return $response;
    }

    /**
     * @param int $order ID of an order to fetch
     * @param UpdateOrderRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface|Payload|Error
     */
    public function updateOrder(int $order, UpdateOrderRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/deals/orders/$order?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        $response = $this->client->fetch(new Request('PATCH', $url, [], $body), $fetch);

        if ($fetch === Fetch::OBJECT) {
            if ($response->getStatusCode() === 200) {
                return $this->as($response, Payload::class);
            }
            if (in_array($response->getStatusCode(), [404, 409, 422])) {
                return $this->as($response, Error::class);
            }
        }

        return $response;
    }

    /**
     * @param int $campaign ID of campaign to fetch
     * @param ConfirmRebateRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface|Error
     */
    public function confirmCode(int $campaign, ConfirmRebateRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/deals/$campaign/order/confirm?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        $response = $this->client->fetch(new Request('POST', $url, [], $body), $fetch);

        if ($fetch === Fetch::OBJECT) {
            if (in_array($response->getStatusCode(), [404, 422])) {
                return $this->as($response, Error::class);
            }
        }

        return $response;
    }

    /**
     * @param int $campaign ID of campaign to fetch
     * @param UpdateDeliverableRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface|Error
     */
    public function updateDeliverable(int $campaign, UpdateDeliverableRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/deals/$campaign/order/deliverable?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        $response = $this->client->fetch(new Request('POST', $url, [], $body), $fetch);

        if ($fetch === Fetch::OBJECT) {
            if (in_array($response->getStatusCode(), [404, 422])) {
                return $this->as($response, Error::class);
            }
        }

        return $response;
    }

    /**
     * @param int $campaign ID of campaign to fetch
     * @param CancelRebateRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface|Error
     */
    public function cancelRebate(int $campaign, CancelRebateRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/deals/$campaign/order/cancel?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        $response = $this->client->fetch(new Request('POST', $url, [], $body), $fetch);

        if ($fetch === Fetch::OBJECT) {
            if (in_array($response->getStatusCode(), [404, 422])) {
                return $this->as($response, Error::class);
            }
        }

        return $response;
    }

    /**
     * @param int $campaign ID of campaign to fetch
     * @param RestoreRebateRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface|Error
     */
    public function restoreRebate(int $campaign, RestoreRebateRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/deals/$campaign/order/restore?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        $response = $this->client->fetch(new Request('POST', $url, [], $body), $fetch);

        if ($fetch === Fetch::OBJECT) {
            if (in_array($response->getStatusCode(), [404, 422])) {
                return $this->as($response, Error::class);
            }
        }

        return $response;
    }

    /**
     * @param int $campaign ID of campaign to fetch
     * @param UnsyncDealRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function unsyncDeal(int $campaign, UnsyncDealRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/deals/$campaign/sync?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        return $this->client->fetch(new Request('DELETE', $url, [], $body), $fetch);
    }

    /**
     * @param int $campaign ID of campaign to fetch
     * @param SyncDealRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function syncDeal(int $campaign, SyncDealRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/deals/$campaign/sync?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        return $this->client->fetch(new Request('POST', $url, [], $body), $fetch);
    }

    /**
     * @param int $campaign ID of campaign to fetch
     * @param DealImpressionsRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function impressions(int $campaign, DealImpressionsRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/deals/$campaign/impressions?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        return $this->client->fetch(new Request('POST', $url, [], $body), $fetch);
    }

    /**
     * @param int $campaign ID of campaign to notify
     * @param NotifyDealRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function notifyDeal(int $campaign, NotifyDealRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/deals/$campaign/notify?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        return $this->client->fetch(new Request('POST', $url, [], $body), $fetch);
    }

    /**
     * @param int $campaign ID of campaign to flag
     * @param FlagDealRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function flagDeal(int $campaign, FlagDealRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/deals/$campaign/flag?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        return $this->client->fetch(new Request('POST', $url, [], $body), $fetch);
    }

    /**
     *
     *
     * @param int $campaign ID of campaign that received a review
     * @param ReviewFoundRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function reviewDeal($campaign, ReviewFoundRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/deals/$campaign/review?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        return $this->client->fetch(new Request('POST', $url, [], $body), $fetch);
    }

    /**
     *
     *
     * @param SyncEmailForOrders $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface|Error
     */
    public function syncEmailForOrders(SyncEmailForOrders $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/orders/email-sync?" . http_build_query($params);
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
     * Used for sending the survey review to the promote API
     *
     * @param $orderId
     * @param CreateSurveyReviewRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function createSurveyReview($orderId, CreateSurveyReviewRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/orders/$orderId/survey-review?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        return $this->client->fetch(new Request('POST', $url, [], $body), $fetch);
    }

    /**
     * Used for updating reviewer name on the promote API
     *
     * @param UpdateReviewNameRequestBody $body
     * @param array $params List of parameters
     * @param string $fetch Fetch mode (object or response)
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function updateReviewName(UpdateReviewNameRequestBody $body, array $params = [], string $fetch = Fetch::OBJECT)
    {
        $url = "/api/v1/orders/review-name?" . http_build_query($params);
        $body = $this->serializer->serialize($body, 'json');

        return $this->client->fetch(new Request('POST', $url, [], $body), $fetch);
    }
}
