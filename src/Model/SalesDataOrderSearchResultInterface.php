<?php
/**
 * SalesDataOrderSearchResultInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Magento2Client
 * @author   Swaagger Codegen team
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

namespace Swagger\Magento2Client\Model;

use \ArrayAccess;

/**
 * SalesDataOrderSearchResultInterface Class Doc Comment
 *
 * @category    Class
 * @description Order search result interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
 * @package     Swagger\Magento2Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesDataOrderSearchResultInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-order-search-result-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'items' => '\Swagger\Magento2Client\Model\SalesDataOrderInterface[]',
        'search_criteria' => '\Swagger\Magento2Client\Model\FrameworkSearchCriteriaInterface',
        'total_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'items' => null,
        'search_criteria' => null,
        'total_count' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'items' => 'items',
        'search_criteria' => 'searchCriteria',
        'total_count' => 'totalCount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'items' => 'setItems',
        'search_criteria' => 'setSearchCriteria',
        'total_count' => 'setTotalCount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'items' => 'getItems',
        'search_criteria' => 'getSearchCriteria',
        'total_count' => 'getTotalCount'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['search_criteria'] = isset($data['search_criteria']) ? $data['search_criteria'] : null;
        $this->container['total_count'] = isset($data['total_count']) ? $data['total_count'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['items'] === null) {
            $invalid_properties[] = "'items' can't be null";
        }
        if ($this->container['search_criteria'] === null) {
            $invalid_properties[] = "'search_criteria' can't be null";
        }
        if ($this->container['total_count'] === null) {
            $invalid_properties[] = "'total_count' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['items'] === null) {
            return false;
        }
        if ($this->container['search_criteria'] === null) {
            return false;
        }
        if ($this->container['total_count'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets items
     * @return \Swagger\Magento2Client\Model\SalesDataOrderInterface[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \Swagger\Magento2Client\Model\SalesDataOrderInterface[] $items Array of collection items.
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets search_criteria
     * @return \Swagger\Magento2Client\Model\FrameworkSearchCriteriaInterface
     */
    public function getSearchCriteria()
    {
        return $this->container['search_criteria'];
    }

    /**
     * Sets search_criteria
     * @param \Swagger\Magento2Client\Model\FrameworkSearchCriteriaInterface $search_criteria
     * @return $this
     */
    public function setSearchCriteria($search_criteria)
    {
        $this->container['search_criteria'] = $search_criteria;

        return $this;
    }

    /**
     * Gets total_count
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     * @param int $total_count Total count.
     * @return $this
     */
    public function setTotalCount($total_count)
    {
        $this->container['total_count'] = $total_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Magento2Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Magento2Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


