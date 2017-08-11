<?php
/**
 * CatalogInventoryDataStockStatusInterface
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
 * CatalogInventoryDataStockStatusInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface StockStatusInterface
 * @package     Swagger\Magento2Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CatalogInventoryDataStockStatusInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'catalog-inventory-data-stock-status-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'int',
        'stock_id' => 'int',
        'qty' => 'int',
        'stock_status' => 'int',
        'stock_item' => '\Swagger\Magento2Client\Model\CatalogInventoryDataStockItemInterface',
        'extension_attributes' => '\Swagger\Magento2Client\Model\CatalogInventoryDataStockStatusExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_id' => null,
        'stock_id' => null,
        'qty' => null,
        'stock_status' => null,
        'stock_item' => null,
        'extension_attributes' => null
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
        'product_id' => 'productId',
        'stock_id' => 'stockId',
        'qty' => 'qty',
        'stock_status' => 'stockStatus',
        'stock_item' => 'stockItem',
        'extension_attributes' => 'extensionAttributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'stock_id' => 'setStockId',
        'qty' => 'setQty',
        'stock_status' => 'setStockStatus',
        'stock_item' => 'setStockItem',
        'extension_attributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'stock_id' => 'getStockId',
        'qty' => 'getQty',
        'stock_status' => 'getStockStatus',
        'stock_item' => 'getStockItem',
        'extension_attributes' => 'getExtensionAttributes'
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['stock_id'] = isset($data['stock_id']) ? $data['stock_id'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['stock_status'] = isset($data['stock_status']) ? $data['stock_status'] : null;
        $this->container['stock_item'] = isset($data['stock_item']) ? $data['stock_item'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['product_id'] === null) {
            $invalid_properties[] = "'product_id' can't be null";
        }
        if ($this->container['stock_id'] === null) {
            $invalid_properties[] = "'stock_id' can't be null";
        }
        if ($this->container['qty'] === null) {
            $invalid_properties[] = "'qty' can't be null";
        }
        if ($this->container['stock_status'] === null) {
            $invalid_properties[] = "'stock_status' can't be null";
        }
        if ($this->container['stock_item'] === null) {
            $invalid_properties[] = "'stock_item' can't be null";
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

        if ($this->container['product_id'] === null) {
            return false;
        }
        if ($this->container['stock_id'] === null) {
            return false;
        }
        if ($this->container['qty'] === null) {
            return false;
        }
        if ($this->container['stock_status'] === null) {
            return false;
        }
        if ($this->container['stock_item'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets stock_id
     * @return int
     */
    public function getStockId()
    {
        return $this->container['stock_id'];
    }

    /**
     * Sets stock_id
     * @param int $stock_id
     * @return $this
     */
    public function setStockId($stock_id)
    {
        $this->container['stock_id'] = $stock_id;

        return $this;
    }

    /**
     * Gets qty
     * @return int
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     * @param int $qty
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets stock_status
     * @return int
     */
    public function getStockStatus()
    {
        return $this->container['stock_status'];
    }

    /**
     * Sets stock_status
     * @param int $stock_status
     * @return $this
     */
    public function setStockStatus($stock_status)
    {
        $this->container['stock_status'] = $stock_status;

        return $this;
    }

    /**
     * Gets stock_item
     * @return \Swagger\Magento2Client\Model\CatalogInventoryDataStockItemInterface
     */
    public function getStockItem()
    {
        return $this->container['stock_item'];
    }

    /**
     * Sets stock_item
     * @param \Swagger\Magento2Client\Model\CatalogInventoryDataStockItemInterface $stock_item
     * @return $this
     */
    public function setStockItem($stock_item)
    {
        $this->container['stock_item'] = $stock_item;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Magento2Client\Model\CatalogInventoryDataStockStatusExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Magento2Client\Model\CatalogInventoryDataStockStatusExtensionInterface $extension_attributes
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

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


