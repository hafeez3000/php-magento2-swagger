<?php
/**
 * RmaDataItemInterface
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
 * RmaDataItemInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface CategoryInterface
 * @package     Swagger\Magento2Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RmaDataItemInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'rma-data-item-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'entity_id' => 'int',
        'rma_entity_id' => 'int',
        'order_item_id' => 'int',
        'qty_requested' => 'int',
        'qty_authorized' => 'int',
        'qty_approved' => 'int',
        'qty_returned' => 'int',
        'reason' => 'string',
        'condition' => 'string',
        'resolution' => 'string',
        'status' => 'string',
        'extension_attributes' => '\Swagger\Magento2Client\Model\RmaDataItemExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'entity_id' => null,
        'rma_entity_id' => null,
        'order_item_id' => null,
        'qty_requested' => null,
        'qty_authorized' => null,
        'qty_approved' => null,
        'qty_returned' => null,
        'reason' => null,
        'condition' => null,
        'resolution' => null,
        'status' => null,
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
        'entity_id' => 'entityId',
        'rma_entity_id' => 'rmaEntityId',
        'order_item_id' => 'orderItemId',
        'qty_requested' => 'qtyRequested',
        'qty_authorized' => 'qtyAuthorized',
        'qty_approved' => 'qtyApproved',
        'qty_returned' => 'qtyReturned',
        'reason' => 'reason',
        'condition' => 'condition',
        'resolution' => 'resolution',
        'status' => 'status',
        'extension_attributes' => 'extensionAttributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'entity_id' => 'setEntityId',
        'rma_entity_id' => 'setRmaEntityId',
        'order_item_id' => 'setOrderItemId',
        'qty_requested' => 'setQtyRequested',
        'qty_authorized' => 'setQtyAuthorized',
        'qty_approved' => 'setQtyApproved',
        'qty_returned' => 'setQtyReturned',
        'reason' => 'setReason',
        'condition' => 'setCondition',
        'resolution' => 'setResolution',
        'status' => 'setStatus',
        'extension_attributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'entity_id' => 'getEntityId',
        'rma_entity_id' => 'getRmaEntityId',
        'order_item_id' => 'getOrderItemId',
        'qty_requested' => 'getQtyRequested',
        'qty_authorized' => 'getQtyAuthorized',
        'qty_approved' => 'getQtyApproved',
        'qty_returned' => 'getQtyReturned',
        'reason' => 'getReason',
        'condition' => 'getCondition',
        'resolution' => 'getResolution',
        'status' => 'getStatus',
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
        $this->container['entity_id'] = isset($data['entity_id']) ? $data['entity_id'] : null;
        $this->container['rma_entity_id'] = isset($data['rma_entity_id']) ? $data['rma_entity_id'] : null;
        $this->container['order_item_id'] = isset($data['order_item_id']) ? $data['order_item_id'] : null;
        $this->container['qty_requested'] = isset($data['qty_requested']) ? $data['qty_requested'] : null;
        $this->container['qty_authorized'] = isset($data['qty_authorized']) ? $data['qty_authorized'] : null;
        $this->container['qty_approved'] = isset($data['qty_approved']) ? $data['qty_approved'] : null;
        $this->container['qty_returned'] = isset($data['qty_returned']) ? $data['qty_returned'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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

        if ($this->container['entity_id'] === null) {
            $invalid_properties[] = "'entity_id' can't be null";
        }
        if ($this->container['rma_entity_id'] === null) {
            $invalid_properties[] = "'rma_entity_id' can't be null";
        }
        if ($this->container['order_item_id'] === null) {
            $invalid_properties[] = "'order_item_id' can't be null";
        }
        if ($this->container['qty_requested'] === null) {
            $invalid_properties[] = "'qty_requested' can't be null";
        }
        if ($this->container['qty_authorized'] === null) {
            $invalid_properties[] = "'qty_authorized' can't be null";
        }
        if ($this->container['qty_approved'] === null) {
            $invalid_properties[] = "'qty_approved' can't be null";
        }
        if ($this->container['qty_returned'] === null) {
            $invalid_properties[] = "'qty_returned' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalid_properties[] = "'reason' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalid_properties[] = "'condition' can't be null";
        }
        if ($this->container['resolution'] === null) {
            $invalid_properties[] = "'resolution' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
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

        if ($this->container['entity_id'] === null) {
            return false;
        }
        if ($this->container['rma_entity_id'] === null) {
            return false;
        }
        if ($this->container['order_item_id'] === null) {
            return false;
        }
        if ($this->container['qty_requested'] === null) {
            return false;
        }
        if ($this->container['qty_authorized'] === null) {
            return false;
        }
        if ($this->container['qty_approved'] === null) {
            return false;
        }
        if ($this->container['qty_returned'] === null) {
            return false;
        }
        if ($this->container['reason'] === null) {
            return false;
        }
        if ($this->container['condition'] === null) {
            return false;
        }
        if ($this->container['resolution'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets entity_id
     * @return int
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     * @param int $entity_id Id
     * @return $this
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets rma_entity_id
     * @return int
     */
    public function getRmaEntityId()
    {
        return $this->container['rma_entity_id'];
    }

    /**
     * Sets rma_entity_id
     * @param int $rma_entity_id RMA id
     * @return $this
     */
    public function setRmaEntityId($rma_entity_id)
    {
        $this->container['rma_entity_id'] = $rma_entity_id;

        return $this;
    }

    /**
     * Gets order_item_id
     * @return int
     */
    public function getOrderItemId()
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id
     * @param int $order_item_id Order_item_id
     * @return $this
     */
    public function setOrderItemId($order_item_id)
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets qty_requested
     * @return int
     */
    public function getQtyRequested()
    {
        return $this->container['qty_requested'];
    }

    /**
     * Sets qty_requested
     * @param int $qty_requested Qty_requested
     * @return $this
     */
    public function setQtyRequested($qty_requested)
    {
        $this->container['qty_requested'] = $qty_requested;

        return $this;
    }

    /**
     * Gets qty_authorized
     * @return int
     */
    public function getQtyAuthorized()
    {
        return $this->container['qty_authorized'];
    }

    /**
     * Sets qty_authorized
     * @param int $qty_authorized Qty_authorized
     * @return $this
     */
    public function setQtyAuthorized($qty_authorized)
    {
        $this->container['qty_authorized'] = $qty_authorized;

        return $this;
    }

    /**
     * Gets qty_approved
     * @return int
     */
    public function getQtyApproved()
    {
        return $this->container['qty_approved'];
    }

    /**
     * Sets qty_approved
     * @param int $qty_approved Qty_approved
     * @return $this
     */
    public function setQtyApproved($qty_approved)
    {
        $this->container['qty_approved'] = $qty_approved;

        return $this;
    }

    /**
     * Gets qty_returned
     * @return int
     */
    public function getQtyReturned()
    {
        return $this->container['qty_returned'];
    }

    /**
     * Sets qty_returned
     * @param int $qty_returned Qty_returned
     * @return $this
     */
    public function setQtyReturned($qty_returned)
    {
        $this->container['qty_returned'] = $qty_returned;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason Reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets condition
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     * @param string $condition Condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets resolution
     * @return string
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     * @param string $resolution Resolution
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Magento2Client\Model\RmaDataItemExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Magento2Client\Model\RmaDataItemExtensionInterface $extension_attributes
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


