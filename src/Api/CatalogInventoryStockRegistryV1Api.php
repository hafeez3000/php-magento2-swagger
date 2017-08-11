<?php
/**
 * CatalogInventoryStockRegistryV1Api
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
 * CatalogInventoryStockRegistryV1Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Magento2Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogInventoryStockRegistryV1Api
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
     * @return CatalogInventoryStockRegistryV1Api
     */
    public function setApiClient(\Swagger\Magento2Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation catalogInventoryStockRegistryV1GetLowStockItemsGet
     *
     * @param int $scope_id  (required)
     * @param float $qty  (required)
     * @param int $current_page  (optional)
     * @param int $page_size  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return \Swagger\Magento2Client\Model\CatalogInventoryDataStockStatusCollectionInterface
     */
    public function catalogInventoryStockRegistryV1GetLowStockItemsGet($scope_id, $qty, $current_page = null, $page_size = null)
    {
        list($response) = $this->catalogInventoryStockRegistryV1GetLowStockItemsGetWithHttpInfo($scope_id, $qty, $current_page, $page_size);
        return $response;
    }

    /**
     * Operation catalogInventoryStockRegistryV1GetLowStockItemsGetWithHttpInfo
     *
     * @param int $scope_id  (required)
     * @param float $qty  (required)
     * @param int $current_page  (optional)
     * @param int $page_size  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of \Swagger\Magento2Client\Model\CatalogInventoryDataStockStatusCollectionInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogInventoryStockRegistryV1GetLowStockItemsGetWithHttpInfo($scope_id, $qty, $current_page = null, $page_size = null)
    {
        // verify the required parameter 'scope_id' is set
        if ($scope_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $scope_id when calling catalogInventoryStockRegistryV1GetLowStockItemsGet');
        }
        // verify the required parameter 'qty' is set
        if ($qty === null) {
            throw new \InvalidArgumentException('Missing the required parameter $qty when calling catalogInventoryStockRegistryV1GetLowStockItemsGet');
        }
        // parse inputs
        $resourcePath = "/V1/stockItems/lowStock/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($scope_id !== null) {
            $queryParams['scopeId'] = $this->apiClient->getSerializer()->toQueryValue($scope_id);
        }
        // query params
        if ($qty !== null) {
            $queryParams['qty'] = $this->apiClient->getSerializer()->toQueryValue($qty);
        }
        // query params
        if ($current_page !== null) {
            $queryParams['currentPage'] = $this->apiClient->getSerializer()->toQueryValue($current_page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Magento2Client\Model\CatalogInventoryDataStockStatusCollectionInterface',
                '/V1/stockItems/lowStock/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Magento2Client\Model\CatalogInventoryDataStockStatusCollectionInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\CatalogInventoryDataStockStatusCollectionInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\ErrorResponse', $e->getResponseHeaders());
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

    /**
     * Operation catalogInventoryStockRegistryV1GetStockItemBySkuGet
     *
     * @param string $product_sku  (required)
     * @param int $scope_id  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return \Swagger\Magento2Client\Model\CatalogInventoryDataStockItemInterface
     */
    public function catalogInventoryStockRegistryV1GetStockItemBySkuGet($product_sku, $scope_id = null)
    {
        list($response) = $this->catalogInventoryStockRegistryV1GetStockItemBySkuGetWithHttpInfo($product_sku, $scope_id);
        return $response;
    }

    /**
     * Operation catalogInventoryStockRegistryV1GetStockItemBySkuGetWithHttpInfo
     *
     * @param string $product_sku  (required)
     * @param int $scope_id  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of \Swagger\Magento2Client\Model\CatalogInventoryDataStockItemInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogInventoryStockRegistryV1GetStockItemBySkuGetWithHttpInfo($product_sku, $scope_id = null)
    {
        // verify the required parameter 'product_sku' is set
        if ($product_sku === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_sku when calling catalogInventoryStockRegistryV1GetStockItemBySkuGet');
        }
        // parse inputs
        $resourcePath = "/V1/stockItems/{productSku}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($scope_id !== null) {
            $queryParams['scopeId'] = $this->apiClient->getSerializer()->toQueryValue($scope_id);
        }
        // path params
        if ($product_sku !== null) {
            $resourcePath = str_replace(
                "{" . "productSku" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_sku),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Magento2Client\Model\CatalogInventoryDataStockItemInterface',
                '/V1/stockItems/{productSku}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Magento2Client\Model\CatalogInventoryDataStockItemInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\CatalogInventoryDataStockItemInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\ErrorResponse', $e->getResponseHeaders());
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

    /**
     * Operation catalogInventoryStockRegistryV1GetStockStatusBySkuGet
     *
     * @param string $product_sku  (required)
     * @param int $scope_id  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return \Swagger\Magento2Client\Model\CatalogInventoryDataStockStatusInterface
     */
    public function catalogInventoryStockRegistryV1GetStockStatusBySkuGet($product_sku, $scope_id = null)
    {
        list($response) = $this->catalogInventoryStockRegistryV1GetStockStatusBySkuGetWithHttpInfo($product_sku, $scope_id);
        return $response;
    }

    /**
     * Operation catalogInventoryStockRegistryV1GetStockStatusBySkuGetWithHttpInfo
     *
     * @param string $product_sku  (required)
     * @param int $scope_id  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of \Swagger\Magento2Client\Model\CatalogInventoryDataStockStatusInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogInventoryStockRegistryV1GetStockStatusBySkuGetWithHttpInfo($product_sku, $scope_id = null)
    {
        // verify the required parameter 'product_sku' is set
        if ($product_sku === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_sku when calling catalogInventoryStockRegistryV1GetStockStatusBySkuGet');
        }
        // parse inputs
        $resourcePath = "/V1/stockStatuses/{productSku}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($scope_id !== null) {
            $queryParams['scopeId'] = $this->apiClient->getSerializer()->toQueryValue($scope_id);
        }
        // path params
        if ($product_sku !== null) {
            $resourcePath = str_replace(
                "{" . "productSku" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_sku),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Magento2Client\Model\CatalogInventoryDataStockStatusInterface',
                '/V1/stockStatuses/{productSku}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Magento2Client\Model\CatalogInventoryDataStockStatusInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\CatalogInventoryDataStockStatusInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\ErrorResponse', $e->getResponseHeaders());
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

    /**
     * Operation catalogInventoryStockRegistryV1UpdateStockItemBySkuPut
     *
     * @param string $product_sku  (required)
     * @param string $item_id  (required)
     * @param \Swagger\Magento2Client\Model\Body82 $body  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return int
     */
    public function catalogInventoryStockRegistryV1UpdateStockItemBySkuPut($product_sku, $item_id, $body = null)
    {
        list($response) = $this->catalogInventoryStockRegistryV1UpdateStockItemBySkuPutWithHttpInfo($product_sku, $item_id, $body);
        return $response;
    }

    /**
     * Operation catalogInventoryStockRegistryV1UpdateStockItemBySkuPutWithHttpInfo
     *
     * @param string $product_sku  (required)
     * @param string $item_id  (required)
     * @param \Swagger\Magento2Client\Model\Body82 $body  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogInventoryStockRegistryV1UpdateStockItemBySkuPutWithHttpInfo($product_sku, $item_id, $body = null)
    {
        // verify the required parameter 'product_sku' is set
        if ($product_sku === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_sku when calling catalogInventoryStockRegistryV1UpdateStockItemBySkuPut');
        }
        // verify the required parameter 'item_id' is set
        if ($item_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_id when calling catalogInventoryStockRegistryV1UpdateStockItemBySkuPut');
        }
        // parse inputs
        $resourcePath = "/V1/products/{productSku}/stockItems/{itemId}";
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
        if ($product_sku !== null) {
            $resourcePath = str_replace(
                "{" . "productSku" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_sku),
                $resourcePath
            );
        }
        // path params
        if ($item_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_id),
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                'int',
                '/V1/products/{productSku}/stockItems/{itemId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'int', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\ErrorResponse', $e->getResponseHeaders());
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