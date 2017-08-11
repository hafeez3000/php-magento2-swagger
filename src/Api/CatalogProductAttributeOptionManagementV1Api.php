<?php
/**
 * CatalogProductAttributeOptionManagementV1Api
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
 * CatalogProductAttributeOptionManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Magento2Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogProductAttributeOptionManagementV1Api
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
     * @return CatalogProductAttributeOptionManagementV1Api
     */
    public function setApiClient(\Swagger\Magento2Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation catalogProductAttributeOptionManagementV1AddPost
     *
     * @param string $attribute_code  (required)
     * @param \Swagger\Magento2Client\Model\Body27 $body  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return bool
     */
    public function catalogProductAttributeOptionManagementV1AddPost($attribute_code, $body = null)
    {
        list($response) = $this->catalogProductAttributeOptionManagementV1AddPostWithHttpInfo($attribute_code, $body);
        return $response;
    }

    /**
     * Operation catalogProductAttributeOptionManagementV1AddPostWithHttpInfo
     *
     * @param string $attribute_code  (required)
     * @param \Swagger\Magento2Client\Model\Body27 $body  (optional)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductAttributeOptionManagementV1AddPostWithHttpInfo($attribute_code, $body = null)
    {
        // verify the required parameter 'attribute_code' is set
        if ($attribute_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attribute_code when calling catalogProductAttributeOptionManagementV1AddPost');
        }
        // parse inputs
        $resourcePath = "/V1/products/attributes/{attributeCode}/options";
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
        if ($attribute_code !== null) {
            $resourcePath = str_replace(
                "{" . "attributeCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($attribute_code),
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
                'bool',
                '/V1/products/attributes/{attributeCode}/options'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
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
     * Operation catalogProductAttributeOptionManagementV1DeleteDelete
     *
     * @param string $attribute_code  (required)
     * @param string $option_id  (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return bool
     */
    public function catalogProductAttributeOptionManagementV1DeleteDelete($attribute_code, $option_id)
    {
        list($response) = $this->catalogProductAttributeOptionManagementV1DeleteDeleteWithHttpInfo($attribute_code, $option_id);
        return $response;
    }

    /**
     * Operation catalogProductAttributeOptionManagementV1DeleteDeleteWithHttpInfo
     *
     * @param string $attribute_code  (required)
     * @param string $option_id  (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductAttributeOptionManagementV1DeleteDeleteWithHttpInfo($attribute_code, $option_id)
    {
        // verify the required parameter 'attribute_code' is set
        if ($attribute_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attribute_code when calling catalogProductAttributeOptionManagementV1DeleteDelete');
        }
        // verify the required parameter 'option_id' is set
        if ($option_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $option_id when calling catalogProductAttributeOptionManagementV1DeleteDelete');
        }
        // parse inputs
        $resourcePath = "/V1/products/attributes/{attributeCode}/options/{optionId}";
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
        if ($attribute_code !== null) {
            $resourcePath = str_replace(
                "{" . "attributeCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($attribute_code),
                $resourcePath
            );
        }
        // path params
        if ($option_id !== null) {
            $resourcePath = str_replace(
                "{" . "optionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($option_id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/products/attributes/{attributeCode}/options/{optionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
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
     * Operation catalogProductAttributeOptionManagementV1GetItemsGet
     *
     * @param string $attribute_code  (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return \Swagger\Magento2Client\Model\EavDataAttributeOptionInterface[]
     */
    public function catalogProductAttributeOptionManagementV1GetItemsGet($attribute_code)
    {
        list($response) = $this->catalogProductAttributeOptionManagementV1GetItemsGetWithHttpInfo($attribute_code);
        return $response;
    }

    /**
     * Operation catalogProductAttributeOptionManagementV1GetItemsGetWithHttpInfo
     *
     * @param string $attribute_code  (required)
     * @throws \Swagger\Magento2Client\ApiException on non-2xx response
     * @return array of \Swagger\Magento2Client\Model\EavDataAttributeOptionInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductAttributeOptionManagementV1GetItemsGetWithHttpInfo($attribute_code)
    {
        // verify the required parameter 'attribute_code' is set
        if ($attribute_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attribute_code when calling catalogProductAttributeOptionManagementV1GetItemsGet');
        }
        // parse inputs
        $resourcePath = "/V1/products/attributes/{attributeCode}/options";
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
        if ($attribute_code !== null) {
            $resourcePath = str_replace(
                "{" . "attributeCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($attribute_code),
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
                '\Swagger\Magento2Client\Model\EavDataAttributeOptionInterface[]',
                '/V1/products/attributes/{attributeCode}/options'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Magento2Client\Model\EavDataAttributeOptionInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Magento2Client\Model\EavDataAttributeOptionInterface[]', $e->getResponseHeaders());
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
