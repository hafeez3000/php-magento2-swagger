<?php
/**
 * Body79
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
 * Body79 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Magento2Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Body79 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'body_79';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'link' => '\Swagger\Magento2Client\Model\DownloadableDataLinkInterface',
        'is_global_scope_content' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'link' => null,
        'is_global_scope_content' => null
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
        'link' => 'link',
        'is_global_scope_content' => 'isGlobalScopeContent'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'link' => 'setLink',
        'is_global_scope_content' => 'setIsGlobalScopeContent'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'link' => 'getLink',
        'is_global_scope_content' => 'getIsGlobalScopeContent'
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
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['is_global_scope_content'] = isset($data['is_global_scope_content']) ? $data['is_global_scope_content'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['link'] === null) {
            $invalid_properties[] = "'link' can't be null";
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

        if ($this->container['link'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets link
     * @return \Swagger\Magento2Client\Model\DownloadableDataLinkInterface
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     * @param \Swagger\Magento2Client\Model\DownloadableDataLinkInterface $link
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets is_global_scope_content
     * @return bool
     */
    public function getIsGlobalScopeContent()
    {
        return $this->container['is_global_scope_content'];
    }

    /**
     * Sets is_global_scope_content
     * @param bool $is_global_scope_content
     * @return $this
     */
    public function setIsGlobalScopeContent($is_global_scope_content)
    {
        $this->container['is_global_scope_content'] = $is_global_scope_content;

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


