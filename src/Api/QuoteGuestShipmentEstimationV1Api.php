<?php
/**
 * QuoteGuestShipmentEstimationV1Api
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Magento2Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Magento2Client\Api;

use \Swagger\Magento2Client\ApiClient;
use \Swagger\Magento2Client\ApiException;
use \Swagger\Magento2Client\Configuration;
use \Swagger\Magento2Client\ObjectSerializer;

/**
 * QuoteGuestShipmentEstimationV1Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Magento2Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuoteGuestShipmentEstimationV1Api
{
    /**
     * API Client
     *
     * @var \Swagger\Magento2Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Magento2Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Magento2Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Magento2Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Magento2Client\ApiClient $apiClient set the API client
     *
     * @return QuoteGuestShipmentEstimationV1Api
     */
    public function setApiClient(\Swagger\Magento2Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost
     *
     * @param string $cart_id  (required)
     * @param \Swagger\Magento2Client\Model\Body50 $body  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return \Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[]
     */
    public function quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost($cart_id, $body = null)
    {
        list($response) = $this->quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostWithHttpInfo($cart_id, $body);
        return $response;
    }

    /**
     * Operation quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostWithHttpInfo
     *
     * @param string $cart_id  (required)
     * @param \Swagger\Magento2Client\Model\Body50 $body  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of \Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostWithHttpInfo($cart_id, $body = null)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost');
        }
        // parse inputs
        $resourcePath = "/V1/guest-carts/{cartId}/estimate-shipping-methods";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($cart_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[]',
                '/V1/guest-carts/{cartId}/estimate-shipping-methods'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\QuoteDataShippingMethodInterface[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
