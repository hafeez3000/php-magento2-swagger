<?php
/**
 * SalesCreditmemoRepositoryV1Api
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
 * SalesCreditmemoRepositoryV1Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Magento2Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesCreditmemoRepositoryV1Api
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
     * @return SalesCreditmemoRepositoryV1Api
     */
    public function setApiClient(\Swagger\Magento2Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation salesCreditmemoRepositoryV1GetGet
     *
     * @param int $id The credit memo ID. (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return \Swagger\Magento2Client\Model\SalesDataCreditmemoInterface
     */
    public function salesCreditmemoRepositoryV1GetGet($id)
    {
        list($response) = $this->salesCreditmemoRepositoryV1GetGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation salesCreditmemoRepositoryV1GetGetWithHttpInfo
     *
     * @param int $id The credit memo ID. (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of \Swagger\Magento2Client\Model\SalesDataCreditmemoInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesCreditmemoRepositoryV1GetGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesCreditmemoRepositoryV1GetGet');
        }
        // parse inputs
        $resourcePath = "/V1/creditmemo/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '\Swagger\Magento2Client\Model\SalesDataCreditmemoInterface',
                '/V1/creditmemo/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Magento2Client\Model\SalesDataCreditmemoInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\SalesDataCreditmemoInterface', $e->getResponseHeaders());
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
     * Operation salesCreditmemoRepositoryV1GetListGet
     *
     * @param string $search_criteria_filter_groups_filters_field Field (optional)
     * @param string $search_criteria_filter_groups_filters_value Value (optional)
     * @param string $search_criteria_filter_groups_filters_condition_type Condition type (optional)
     * @param string $search_criteria_sort_orders_field Sorting field. (optional)
     * @param string $search_criteria_sort_orders_direction Sorting direction. (optional)
     * @param int $search_criteria_page_size Page size. (optional)
     * @param int $search_criteria_current_page Current page. (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return \Swagger\Magento2Client\Model\SalesDataCreditmemoSearchResultInterface
     */
    public function salesCreditmemoRepositoryV1GetListGet($search_criteria_filter_groups_filters_field = null, $search_criteria_filter_groups_filters_value = null, $search_criteria_filter_groups_filters_condition_type = null, $search_criteria_sort_orders_field = null, $search_criteria_sort_orders_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {
        list($response) = $this->salesCreditmemoRepositoryV1GetListGetWithHttpInfo($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
        return $response;
    }

    /**
     * Operation salesCreditmemoRepositoryV1GetListGetWithHttpInfo
     *
     * @param string $search_criteria_filter_groups_filters_field Field (optional)
     * @param string $search_criteria_filter_groups_filters_value Value (optional)
     * @param string $search_criteria_filter_groups_filters_condition_type Condition type (optional)
     * @param string $search_criteria_sort_orders_field Sorting field. (optional)
     * @param string $search_criteria_sort_orders_direction Sorting direction. (optional)
     * @param int $search_criteria_page_size Page size. (optional)
     * @param int $search_criteria_current_page Current page. (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of \Swagger\Magento2Client\Model\SalesDataCreditmemoSearchResultInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesCreditmemoRepositoryV1GetListGetWithHttpInfo($search_criteria_filter_groups_filters_field = null, $search_criteria_filter_groups_filters_value = null, $search_criteria_filter_groups_filters_condition_type = null, $search_criteria_sort_orders_field = null, $search_criteria_sort_orders_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {
        // parse inputs
        $resourcePath = "/V1/creditmemos";
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
        if ($search_criteria_filter_groups_filters_field !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][field]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_filter_groups_filters_field);
        }
        // query params
        if ($search_criteria_filter_groups_filters_value !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][value]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_filter_groups_filters_value);
        }
        // query params
        if ($search_criteria_filter_groups_filters_condition_type !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][conditionType]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_filter_groups_filters_condition_type);
        }
        // query params
        if ($search_criteria_sort_orders_field !== null) {
            $queryParams['searchCriteria[sortOrders][][field]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_sort_orders_field);
        }
        // query params
        if ($search_criteria_sort_orders_direction !== null) {
            $queryParams['searchCriteria[sortOrders][][direction]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_sort_orders_direction);
        }
        // query params
        if ($search_criteria_page_size !== null) {
            $queryParams['searchCriteria[pageSize]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_page_size);
        }
        // query params
        if ($search_criteria_current_page !== null) {
            $queryParams['searchCriteria[currentPage]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_current_page);
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
                '\Swagger\Magento2Client\Model\SalesDataCreditmemoSearchResultInterface',
                '/V1/creditmemos'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Magento2Client\Model\SalesDataCreditmemoSearchResultInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\SalesDataCreditmemoSearchResultInterface', $e->getResponseHeaders());
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
     * Operation salesCreditmemoRepositoryV1SavePost
     *
     * @param \Swagger\Magento2Client\Model\Body71 $body  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return \Swagger\Magento2Client\Model\SalesDataCreditmemoInterface
     */
    public function salesCreditmemoRepositoryV1SavePost($body = null)
    {
        list($response) = $this->salesCreditmemoRepositoryV1SavePostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation salesCreditmemoRepositoryV1SavePostWithHttpInfo
     *
     * @param \Swagger\Magento2Client\Model\Body71 $body  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of \Swagger\Magento2Client\Model\SalesDataCreditmemoInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesCreditmemoRepositoryV1SavePostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/creditmemo";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

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
                '\Swagger\Magento2Client\Model\SalesDataCreditmemoInterface',
                '/V1/creditmemo'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Magento2Client\Model\SalesDataCreditmemoInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\SalesDataCreditmemoInterface', $e->getResponseHeaders());
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
