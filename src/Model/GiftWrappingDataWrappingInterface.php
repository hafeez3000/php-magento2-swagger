<?php
/**
 * GiftWrappingDataWrappingInterface
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
 * GiftWrappingDataWrappingInterface Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Magento2Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GiftWrappingDataWrappingInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'gift-wrapping-data-wrapping-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'wrapping_id' => 'int',
        'design' => 'string',
        'status' => 'int',
        'base_price' => 'float',
        'image_name' => 'string',
        'image_base64_content' => 'string',
        'base_currency_code' => 'string',
        'website_ids' => 'int[]',
        'image_url' => 'string',
        'extension_attributes' => '\Swagger\Magento2Client\Model\GiftWrappingDataWrappingExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'wrapping_id' => null,
        'design' => null,
        'status' => null,
        'base_price' => null,
        'image_name' => null,
        'image_base64_content' => null,
        'base_currency_code' => null,
        'website_ids' => null,
        'image_url' => null,
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
        'wrapping_id' => 'wrappingId',
        'design' => 'design',
        'status' => 'status',
        'base_price' => 'basePrice',
        'image_name' => 'imageName',
        'image_base64_content' => 'imageBase64Content',
        'base_currency_code' => 'baseCurrencyCode',
        'website_ids' => 'websiteIds',
        'image_url' => 'imageUrl',
        'extension_attributes' => 'extensionAttributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'wrapping_id' => 'setWrappingId',
        'design' => 'setDesign',
        'status' => 'setStatus',
        'base_price' => 'setBasePrice',
        'image_name' => 'setImageName',
        'image_base64_content' => 'setImageBase64Content',
        'base_currency_code' => 'setBaseCurrencyCode',
        'website_ids' => 'setWebsiteIds',
        'image_url' => 'setImageUrl',
        'extension_attributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'wrapping_id' => 'getWrappingId',
        'design' => 'getDesign',
        'status' => 'getStatus',
        'base_price' => 'getBasePrice',
        'image_name' => 'getImageName',
        'image_base64_content' => 'getImageBase64Content',
        'base_currency_code' => 'getBaseCurrencyCode',
        'website_ids' => 'getWebsiteIds',
        'image_url' => 'getImageUrl',
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
        $this->container['wrapping_id'] = isset($data['wrapping_id']) ? $data['wrapping_id'] : null;
        $this->container['design'] = isset($data['design']) ? $data['design'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['base_price'] = isset($data['base_price']) ? $data['base_price'] : null;
        $this->container['image_name'] = isset($data['image_name']) ? $data['image_name'] : null;
        $this->container['image_base64_content'] = isset($data['image_base64_content']) ? $data['image_base64_content'] : null;
        $this->container['base_currency_code'] = isset($data['base_currency_code']) ? $data['base_currency_code'] : null;
        $this->container['website_ids'] = isset($data['website_ids']) ? $data['website_ids'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
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

        if ($this->container['design'] === null) {
            $invalid_properties[] = "'design' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        if ($this->container['base_price'] === null) {
            $invalid_properties[] = "'base_price' can't be null";
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

        if ($this->container['design'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['base_price'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets wrapping_id
     * @return int
     */
    public function getWrappingId()
    {
        return $this->container['wrapping_id'];
    }

    /**
     * Sets wrapping_id
     * @param int $wrapping_id
     * @return $this
     */
    public function setWrappingId($wrapping_id)
    {
        $this->container['wrapping_id'] = $wrapping_id;

        return $this;
    }

    /**
     * Gets design
     * @return string
     */
    public function getDesign()
    {
        return $this->container['design'];
    }

    /**
     * Sets design
     * @param string $design
     * @return $this
     */
    public function setDesign($design)
    {
        $this->container['design'] = $design;

        return $this;
    }

    /**
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param int $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets base_price
     * @return float
     */
    public function getBasePrice()
    {
        return $this->container['base_price'];
    }

    /**
     * Sets base_price
     * @param float $base_price
     * @return $this
     */
    public function setBasePrice($base_price)
    {
        $this->container['base_price'] = $base_price;

        return $this;
    }

    /**
     * Gets image_name
     * @return string
     */
    public function getImageName()
    {
        return $this->container['image_name'];
    }

    /**
     * Sets image_name
     * @param string $image_name
     * @return $this
     */
    public function setImageName($image_name)
    {
        $this->container['image_name'] = $image_name;

        return $this;
    }

    /**
     * Gets image_base64_content
     * @return string
     */
    public function getImageBase64Content()
    {
        return $this->container['image_base64_content'];
    }

    /**
     * Sets image_base64_content
     * @param string $image_base64_content
     * @return $this
     */
    public function setImageBase64Content($image_base64_content)
    {
        $this->container['image_base64_content'] = $image_base64_content;

        return $this;
    }

    /**
     * Gets base_currency_code
     * @return string
     */
    public function getBaseCurrencyCode()
    {
        return $this->container['base_currency_code'];
    }

    /**
     * Sets base_currency_code
     * @param string $base_currency_code
     * @return $this
     */
    public function setBaseCurrencyCode($base_currency_code)
    {
        $this->container['base_currency_code'] = $base_currency_code;

        return $this;
    }

    /**
     * Gets website_ids
     * @return int[]
     */
    public function getWebsiteIds()
    {
        return $this->container['website_ids'];
    }

    /**
     * Sets website_ids
     * @param int[] $website_ids
     * @return $this
     */
    public function setWebsiteIds($website_ids)
    {
        $this->container['website_ids'] = $website_ids;

        return $this;
    }

    /**
     * Gets image_url
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     * @param string $image_url Wrapping image URL.
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Magento2Client\Model\GiftWrappingDataWrappingExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Magento2Client\Model\GiftWrappingDataWrappingExtensionInterface $extension_attributes
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

