<?php
/**
 * SalesDataInvoiceItemInterface
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
 * SalesDataInvoiceItemInterface Class Doc Comment
 *
 * @category    Class
 * @description Invoice item interface. An invoice is a record of the receipt of payment for an order. An invoice item is a purchased item in an invoice.
 * @package     Swagger\Magento2Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesDataInvoiceItemInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-invoice-item-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_data' => 'string',
        'base_cost' => 'float',
        'base_discount_amount' => 'float',
        'base_discount_tax_compensation_amount' => 'float',
        'base_price' => 'float',
        'base_price_incl_tax' => 'float',
        'base_row_total' => 'float',
        'base_row_total_incl_tax' => 'float',
        'base_tax_amount' => 'float',
        'description' => 'string',
        'discount_amount' => 'float',
        'entity_id' => 'int',
        'discount_tax_compensation_amount' => 'float',
        'name' => 'string',
        'parent_id' => 'int',
        'price' => 'float',
        'price_incl_tax' => 'float',
        'product_id' => 'int',
        'row_total' => 'float',
        'row_total_incl_tax' => 'float',
        'sku' => 'string',
        'tax_amount' => 'float',
        'extension_attributes' => '\Swagger\Magento2Client\Model\SalesDataInvoiceItemExtensionInterface',
        'order_item_id' => 'int',
        'qty' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_data' => null,
        'base_cost' => null,
        'base_discount_amount' => null,
        'base_discount_tax_compensation_amount' => null,
        'base_price' => null,
        'base_price_incl_tax' => null,
        'base_row_total' => null,
        'base_row_total_incl_tax' => null,
        'base_tax_amount' => null,
        'description' => null,
        'discount_amount' => null,
        'entity_id' => null,
        'discount_tax_compensation_amount' => null,
        'name' => null,
        'parent_id' => null,
        'price' => null,
        'price_incl_tax' => null,
        'product_id' => null,
        'row_total' => null,
        'row_total_incl_tax' => null,
        'sku' => null,
        'tax_amount' => null,
        'extension_attributes' => null,
        'order_item_id' => null,
        'qty' => null
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
        'additional_data' => 'additionalData',
        'base_cost' => 'baseCost',
        'base_discount_amount' => 'baseDiscountAmount',
        'base_discount_tax_compensation_amount' => 'baseDiscountTaxCompensationAmount',
        'base_price' => 'basePrice',
        'base_price_incl_tax' => 'basePriceInclTax',
        'base_row_total' => 'baseRowTotal',
        'base_row_total_incl_tax' => 'baseRowTotalInclTax',
        'base_tax_amount' => 'baseTaxAmount',
        'description' => 'description',
        'discount_amount' => 'discountAmount',
        'entity_id' => 'entityId',
        'discount_tax_compensation_amount' => 'discountTaxCompensationAmount',
        'name' => 'name',
        'parent_id' => 'parentId',
        'price' => 'price',
        'price_incl_tax' => 'priceInclTax',
        'product_id' => 'productId',
        'row_total' => 'rowTotal',
        'row_total_incl_tax' => 'rowTotalInclTax',
        'sku' => 'sku',
        'tax_amount' => 'taxAmount',
        'extension_attributes' => 'extensionAttributes',
        'order_item_id' => 'orderItemId',
        'qty' => 'qty'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'additional_data' => 'setAdditionalData',
        'base_cost' => 'setBaseCost',
        'base_discount_amount' => 'setBaseDiscountAmount',
        'base_discount_tax_compensation_amount' => 'setBaseDiscountTaxCompensationAmount',
        'base_price' => 'setBasePrice',
        'base_price_incl_tax' => 'setBasePriceInclTax',
        'base_row_total' => 'setBaseRowTotal',
        'base_row_total_incl_tax' => 'setBaseRowTotalInclTax',
        'base_tax_amount' => 'setBaseTaxAmount',
        'description' => 'setDescription',
        'discount_amount' => 'setDiscountAmount',
        'entity_id' => 'setEntityId',
        'discount_tax_compensation_amount' => 'setDiscountTaxCompensationAmount',
        'name' => 'setName',
        'parent_id' => 'setParentId',
        'price' => 'setPrice',
        'price_incl_tax' => 'setPriceInclTax',
        'product_id' => 'setProductId',
        'row_total' => 'setRowTotal',
        'row_total_incl_tax' => 'setRowTotalInclTax',
        'sku' => 'setSku',
        'tax_amount' => 'setTaxAmount',
        'extension_attributes' => 'setExtensionAttributes',
        'order_item_id' => 'setOrderItemId',
        'qty' => 'setQty'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'additional_data' => 'getAdditionalData',
        'base_cost' => 'getBaseCost',
        'base_discount_amount' => 'getBaseDiscountAmount',
        'base_discount_tax_compensation_amount' => 'getBaseDiscountTaxCompensationAmount',
        'base_price' => 'getBasePrice',
        'base_price_incl_tax' => 'getBasePriceInclTax',
        'base_row_total' => 'getBaseRowTotal',
        'base_row_total_incl_tax' => 'getBaseRowTotalInclTax',
        'base_tax_amount' => 'getBaseTaxAmount',
        'description' => 'getDescription',
        'discount_amount' => 'getDiscountAmount',
        'entity_id' => 'getEntityId',
        'discount_tax_compensation_amount' => 'getDiscountTaxCompensationAmount',
        'name' => 'getName',
        'parent_id' => 'getParentId',
        'price' => 'getPrice',
        'price_incl_tax' => 'getPriceInclTax',
        'product_id' => 'getProductId',
        'row_total' => 'getRowTotal',
        'row_total_incl_tax' => 'getRowTotalInclTax',
        'sku' => 'getSku',
        'tax_amount' => 'getTaxAmount',
        'extension_attributes' => 'getExtensionAttributes',
        'order_item_id' => 'getOrderItemId',
        'qty' => 'getQty'
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
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
        $this->container['base_cost'] = isset($data['base_cost']) ? $data['base_cost'] : null;
        $this->container['base_discount_amount'] = isset($data['base_discount_amount']) ? $data['base_discount_amount'] : null;
        $this->container['base_discount_tax_compensation_amount'] = isset($data['base_discount_tax_compensation_amount']) ? $data['base_discount_tax_compensation_amount'] : null;
        $this->container['base_price'] = isset($data['base_price']) ? $data['base_price'] : null;
        $this->container['base_price_incl_tax'] = isset($data['base_price_incl_tax']) ? $data['base_price_incl_tax'] : null;
        $this->container['base_row_total'] = isset($data['base_row_total']) ? $data['base_row_total'] : null;
        $this->container['base_row_total_incl_tax'] = isset($data['base_row_total_incl_tax']) ? $data['base_row_total_incl_tax'] : null;
        $this->container['base_tax_amount'] = isset($data['base_tax_amount']) ? $data['base_tax_amount'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['entity_id'] = isset($data['entity_id']) ? $data['entity_id'] : null;
        $this->container['discount_tax_compensation_amount'] = isset($data['discount_tax_compensation_amount']) ? $data['discount_tax_compensation_amount'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_incl_tax'] = isset($data['price_incl_tax']) ? $data['price_incl_tax'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['row_total'] = isset($data['row_total']) ? $data['row_total'] : null;
        $this->container['row_total_incl_tax'] = isset($data['row_total_incl_tax']) ? $data['row_total_incl_tax'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
        $this->container['order_item_id'] = isset($data['order_item_id']) ? $data['order_item_id'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['sku'] === null) {
            $invalid_properties[] = "'sku' can't be null";
        }
        if ($this->container['order_item_id'] === null) {
            $invalid_properties[] = "'order_item_id' can't be null";
        }
        if ($this->container['qty'] === null) {
            $invalid_properties[] = "'qty' can't be null";
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

        if ($this->container['sku'] === null) {
            return false;
        }
        if ($this->container['order_item_id'] === null) {
            return false;
        }
        if ($this->container['qty'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets additional_data
     * @return string
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     * @param string $additional_data Additional data.
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets base_cost
     * @return float
     */
    public function getBaseCost()
    {
        return $this->container['base_cost'];
    }

    /**
     * Sets base_cost
     * @param float $base_cost Base cost.
     * @return $this
     */
    public function setBaseCost($base_cost)
    {
        $this->container['base_cost'] = $base_cost;

        return $this;
    }

    /**
     * Gets base_discount_amount
     * @return float
     */
    public function getBaseDiscountAmount()
    {
        return $this->container['base_discount_amount'];
    }

    /**
     * Sets base_discount_amount
     * @param float $base_discount_amount Base discount amount.
     * @return $this
     */
    public function setBaseDiscountAmount($base_discount_amount)
    {
        $this->container['base_discount_amount'] = $base_discount_amount;

        return $this;
    }

    /**
     * Gets base_discount_tax_compensation_amount
     * @return float
     */
    public function getBaseDiscountTaxCompensationAmount()
    {
        return $this->container['base_discount_tax_compensation_amount'];
    }

    /**
     * Sets base_discount_tax_compensation_amount
     * @param float $base_discount_tax_compensation_amount Base discount tax compensation amount.
     * @return $this
     */
    public function setBaseDiscountTaxCompensationAmount($base_discount_tax_compensation_amount)
    {
        $this->container['base_discount_tax_compensation_amount'] = $base_discount_tax_compensation_amount;

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
     * @param float $base_price Base price.
     * @return $this
     */
    public function setBasePrice($base_price)
    {
        $this->container['base_price'] = $base_price;

        return $this;
    }

    /**
     * Gets base_price_incl_tax
     * @return float
     */
    public function getBasePriceInclTax()
    {
        return $this->container['base_price_incl_tax'];
    }

    /**
     * Sets base_price_incl_tax
     * @param float $base_price_incl_tax Base price including tax.
     * @return $this
     */
    public function setBasePriceInclTax($base_price_incl_tax)
    {
        $this->container['base_price_incl_tax'] = $base_price_incl_tax;

        return $this;
    }

    /**
     * Gets base_row_total
     * @return float
     */
    public function getBaseRowTotal()
    {
        return $this->container['base_row_total'];
    }

    /**
     * Sets base_row_total
     * @param float $base_row_total Base row total.
     * @return $this
     */
    public function setBaseRowTotal($base_row_total)
    {
        $this->container['base_row_total'] = $base_row_total;

        return $this;
    }

    /**
     * Gets base_row_total_incl_tax
     * @return float
     */
    public function getBaseRowTotalInclTax()
    {
        return $this->container['base_row_total_incl_tax'];
    }

    /**
     * Sets base_row_total_incl_tax
     * @param float $base_row_total_incl_tax Base row total including tax.
     * @return $this
     */
    public function setBaseRowTotalInclTax($base_row_total_incl_tax)
    {
        $this->container['base_row_total_incl_tax'] = $base_row_total_incl_tax;

        return $this;
    }

    /**
     * Gets base_tax_amount
     * @return float
     */
    public function getBaseTaxAmount()
    {
        return $this->container['base_tax_amount'];
    }

    /**
     * Sets base_tax_amount
     * @param float $base_tax_amount Base tax amount.
     * @return $this
     */
    public function setBaseTaxAmount($base_tax_amount)
    {
        $this->container['base_tax_amount'] = $base_tax_amount;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discount_amount
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     * @param float $discount_amount Discount amount.
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
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
     * @param int $entity_id Invoice item ID.
     * @return $this
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets discount_tax_compensation_amount
     * @return float
     */
    public function getDiscountTaxCompensationAmount()
    {
        return $this->container['discount_tax_compensation_amount'];
    }

    /**
     * Sets discount_tax_compensation_amount
     * @param float $discount_tax_compensation_amount Discount tax compensation amount.
     * @return $this
     */
    public function setDiscountTaxCompensationAmount($discount_tax_compensation_amount)
    {
        $this->container['discount_tax_compensation_amount'] = $discount_tax_compensation_amount;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent_id
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param int $parent_id Parent ID.
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price Price.
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_incl_tax
     * @return float
     */
    public function getPriceInclTax()
    {
        return $this->container['price_incl_tax'];
    }

    /**
     * Sets price_incl_tax
     * @param float $price_incl_tax Price including tax.
     * @return $this
     */
    public function setPriceInclTax($price_incl_tax)
    {
        $this->container['price_incl_tax'] = $price_incl_tax;

        return $this;
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
     * @param int $product_id Product ID.
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets row_total
     * @return float
     */
    public function getRowTotal()
    {
        return $this->container['row_total'];
    }

    /**
     * Sets row_total
     * @param float $row_total Row total.
     * @return $this
     */
    public function setRowTotal($row_total)
    {
        $this->container['row_total'] = $row_total;

        return $this;
    }

    /**
     * Gets row_total_incl_tax
     * @return float
     */
    public function getRowTotalInclTax()
    {
        return $this->container['row_total_incl_tax'];
    }

    /**
     * Sets row_total_incl_tax
     * @param float $row_total_incl_tax Row total including tax.
     * @return $this
     */
    public function setRowTotalInclTax($row_total_incl_tax)
    {
        $this->container['row_total_incl_tax'] = $row_total_incl_tax;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku SKU.
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets tax_amount
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     * @param float $tax_amount Tax amount.
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Magento2Client\Model\SalesDataInvoiceItemExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Magento2Client\Model\SalesDataInvoiceItemExtensionInterface $extension_attributes
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

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
     * @param int $order_item_id Order item ID.
     * @return $this
     */
    public function setOrderItemId($order_item_id)
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets qty
     * @return float
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     * @param float $qty Quantity.
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

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


