<?php
/**
 * GiftMessageDataMessageExtensionInterface
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
 * GiftMessageDataMessageExtensionInterface Class Doc Comment
 *
 * @category    Class
 * @description ExtensionInterface class for @see \\Magento\\GiftMessage\\Api\\Data\\MessageInterface
 * @package     Swagger\Magento2Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GiftMessageDataMessageExtensionInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'gift-message-data-message-extension-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'entity_id' => 'string',
        'entity_type' => 'string',
        'wrapping_id' => 'int',
        'wrapping_allow_gift_receipt' => 'bool',
        'wrapping_add_printed_card' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'entity_id' => null,
        'entity_type' => null,
        'wrapping_id' => null,
        'wrapping_allow_gift_receipt' => null,
        'wrapping_add_printed_card' => null
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
        'entity_id' => 'entityId',
        'entity_type' => 'entityType',
        'wrapping_id' => 'wrappingId',
        'wrapping_allow_gift_receipt' => 'wrappingAllowGiftReceipt',
        'wrapping_add_printed_card' => 'wrappingAddPrintedCard'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'entity_id' => 'setEntityId',
        'entity_type' => 'setEntityType',
        'wrapping_id' => 'setWrappingId',
        'wrapping_allow_gift_receipt' => 'setWrappingAllowGiftReceipt',
        'wrapping_add_printed_card' => 'setWrappingAddPrintedCard'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'entity_id' => 'getEntityId',
        'entity_type' => 'getEntityType',
        'wrapping_id' => 'getWrappingId',
        'wrapping_allow_gift_receipt' => 'getWrappingAllowGiftReceipt',
        'wrapping_add_printed_card' => 'getWrappingAddPrintedCard'
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
        $this->container['entity_id'] = isset($data['entity_id']) ? $data['entity_id'] : null;
        $this->container['entity_type'] = isset($data['entity_type']) ? $data['entity_type'] : null;
        $this->container['wrapping_id'] = isset($data['wrapping_id']) ? $data['wrapping_id'] : null;
        $this->container['wrapping_allow_gift_receipt'] = isset($data['wrapping_allow_gift_receipt']) ? $data['wrapping_allow_gift_receipt'] : null;
        $this->container['wrapping_add_printed_card'] = isset($data['wrapping_add_printed_card']) ? $data['wrapping_add_printed_card'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets entity_id
     * @return string
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     * @param string $entity_id
     * @return $this
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets entity_type
     * @return string
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     * @param string $entity_type
     * @return $this
     */
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;

        return $this;
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
     * Gets wrapping_allow_gift_receipt
     * @return bool
     */
    public function getWrappingAllowGiftReceipt()
    {
        return $this->container['wrapping_allow_gift_receipt'];
    }

    /**
     * Sets wrapping_allow_gift_receipt
     * @param bool $wrapping_allow_gift_receipt
     * @return $this
     */
    public function setWrappingAllowGiftReceipt($wrapping_allow_gift_receipt)
    {
        $this->container['wrapping_allow_gift_receipt'] = $wrapping_allow_gift_receipt;

        return $this;
    }

    /**
     * Gets wrapping_add_printed_card
     * @return bool
     */
    public function getWrappingAddPrintedCard()
    {
        return $this->container['wrapping_add_printed_card'];
    }

    /**
     * Sets wrapping_add_printed_card
     * @param bool $wrapping_add_printed_card
     * @return $this
     */
    public function setWrappingAddPrintedCard($wrapping_add_printed_card)
    {
        $this->container['wrapping_add_printed_card'] = $wrapping_add_printed_card;

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


