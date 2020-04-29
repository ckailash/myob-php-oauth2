<?php
/**
 * ItemBillLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  MyobAPI\MyobPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MYOB AccountRight
 *
 * MYOB AccountRight API file
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MyobAPI\MyobPHP\Model;

use \ArrayAccess;
use \MyobAPI\MyobPHP\ObjectSerializer;

/**
 * ItemBillLine Class Doc Comment
 *
 * @category Class
 * @package  MyobAPI\MyobPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ItemBillLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemBillLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'row_id' => 'int',
        'type' => 'string',
        'description' => 'string',
        'bill_quantity' => 'float',
        'received_quantity' => 'float',
        'backorder_quantity' => 'float',
        'total' => 'float',
        'total_foreign' => 'float',
        'unit_price' => 'float',
        'units_of_measure' => 'string',
        'unit_count' => 'float',
        'unit_price_foreign' => 'float',
        'job' => '\MyobAPI\MyobPHP\Model\Job',
        'discount_percent' => 'float',
        'tax_code' => '\MyobAPI\MyobPHP\Model\TaxCode',
        'item' => '\MyobAPI\MyobPHP\Model\Item',
        'account' => '\MyobAPI\MyobPHP\Model\ItemBillLineAccount',
        'location' => '\MyobAPI\MyobPHP\Model\ItemBillLineLocation',
        'row_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'row_id' => 'int32',
        'type' => null,
        'description' => null,
        'bill_quantity' => null,
        'received_quantity' => null,
        'backorder_quantity' => null,
        'total' => null,
        'total_foreign' => null,
        'unit_price' => null,
        'units_of_measure' => null,
        'unit_count' => null,
        'unit_price_foreign' => null,
        'job' => null,
        'discount_percent' => null,
        'tax_code' => null,
        'item' => null,
        'account' => null,
        'location' => null,
        'row_version' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'row_id' => 'RowID',
        'type' => 'Type',
        'description' => 'Description',
        'bill_quantity' => 'BillQuantity',
        'received_quantity' => 'ReceivedQuantity',
        'backorder_quantity' => 'BackorderQuantity',
        'total' => 'Total',
        'total_foreign' => 'TotalForeign',
        'unit_price' => 'UnitPrice',
        'units_of_measure' => 'UnitsOfMeasure',
        'unit_count' => 'UnitCount',
        'unit_price_foreign' => 'UnitPriceForeign',
        'job' => 'Job',
        'discount_percent' => 'DiscountPercent',
        'tax_code' => 'TaxCode',
        'item' => 'Item',
        'account' => 'Account',
        'location' => 'Location',
        'row_version' => 'RowVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'row_id' => 'setRowId',
        'type' => 'setType',
        'description' => 'setDescription',
        'bill_quantity' => 'setBillQuantity',
        'received_quantity' => 'setReceivedQuantity',
        'backorder_quantity' => 'setBackorderQuantity',
        'total' => 'setTotal',
        'total_foreign' => 'setTotalForeign',
        'unit_price' => 'setUnitPrice',
        'units_of_measure' => 'setUnitsOfMeasure',
        'unit_count' => 'setUnitCount',
        'unit_price_foreign' => 'setUnitPriceForeign',
        'job' => 'setJob',
        'discount_percent' => 'setDiscountPercent',
        'tax_code' => 'setTaxCode',
        'item' => 'setItem',
        'account' => 'setAccount',
        'location' => 'setLocation',
        'row_version' => 'setRowVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'row_id' => 'getRowId',
        'type' => 'getType',
        'description' => 'getDescription',
        'bill_quantity' => 'getBillQuantity',
        'received_quantity' => 'getReceivedQuantity',
        'backorder_quantity' => 'getBackorderQuantity',
        'total' => 'getTotal',
        'total_foreign' => 'getTotalForeign',
        'unit_price' => 'getUnitPrice',
        'units_of_measure' => 'getUnitsOfMeasure',
        'unit_count' => 'getUnitCount',
        'unit_price_foreign' => 'getUnitPriceForeign',
        'job' => 'getJob',
        'discount_percent' => 'getDiscountPercent',
        'tax_code' => 'getTaxCode',
        'item' => 'getItem',
        'account' => 'getAccount',
        'location' => 'getLocation',
        'row_version' => 'getRowVersion'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const TYPE_TRANSACTION = 'Transaction';
    const TYPE_HEADER = 'Header';
    const TYPE_SUBTOTAL = 'Subtotal';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TRANSACTION,
            self::TYPE_HEADER,
            self::TYPE_SUBTOTAL,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['row_id'] = isset($data['row_id']) ? $data['row_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['bill_quantity'] = isset($data['bill_quantity']) ? $data['bill_quantity'] : null;
        $this->container['received_quantity'] = isset($data['received_quantity']) ? $data['received_quantity'] : null;
        $this->container['backorder_quantity'] = isset($data['backorder_quantity']) ? $data['backorder_quantity'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['total_foreign'] = isset($data['total_foreign']) ? $data['total_foreign'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['units_of_measure'] = isset($data['units_of_measure']) ? $data['units_of_measure'] : null;
        $this->container['unit_count'] = isset($data['unit_count']) ? $data['unit_count'] : null;
        $this->container['unit_price_foreign'] = isset($data['unit_price_foreign']) ? $data['unit_price_foreign'] : null;
        $this->container['job'] = isset($data['job']) ? $data['job'] : null;
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['row_version'] = isset($data['row_version']) ? $data['row_version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['bill_quantity'] === null) {
            $invalidProperties[] = "'bill_quantity' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if ($this->container['unit_count'] === null) {
            $invalidProperties[] = "'unit_count' can't be null";
        }
        if ($this->container['tax_code'] === null) {
            $invalidProperties[] = "'tax_code' can't be null";
        }
        if ($this->container['item'] === null) {
            $invalidProperties[] = "'item' can't be null";
        }
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets row_id
     *
     * @return int|null
     */
    public function getRowId()
    {
        return $this->container['row_id'];
    }

    /**
     * Sets row_id
     *
     * @param int|null $row_id row_id
     *
     * @return $this
     */
    public function setRowId($row_id)
    {
        $this->container['row_id'] = $row_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets bill_quantity
     *
     * @return float
     */
    public function getBillQuantity()
    {
        return $this->container['bill_quantity'];
    }

    /**
     * Sets bill_quantity
     *
     * @param float $bill_quantity bill_quantity
     *
     * @return $this
     */
    public function setBillQuantity($bill_quantity)
    {
        $this->container['bill_quantity'] = $bill_quantity;

        return $this;
    }

    /**
     * Gets received_quantity
     *
     * @return float|null
     */
    public function getReceivedQuantity()
    {
        return $this->container['received_quantity'];
    }

    /**
     * Sets received_quantity
     *
     * @param float|null $received_quantity received_quantity
     *
     * @return $this
     */
    public function setReceivedQuantity($received_quantity)
    {
        $this->container['received_quantity'] = $received_quantity;

        return $this;
    }

    /**
     * Gets backorder_quantity
     *
     * @return float|null
     */
    public function getBackorderQuantity()
    {
        return $this->container['backorder_quantity'];
    }

    /**
     * Sets backorder_quantity
     *
     * @param float|null $backorder_quantity backorder_quantity
     *
     * @return $this
     */
    public function setBackorderQuantity($backorder_quantity)
    {
        $this->container['backorder_quantity'] = $backorder_quantity;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets total_foreign
     *
     * @return float|null
     */
    public function getTotalForeign()
    {
        return $this->container['total_foreign'];
    }

    /**
     * Sets total_foreign
     *
     * @param float|null $total_foreign total_foreign
     *
     * @return $this
     */
    public function setTotalForeign($total_foreign)
    {
        $this->container['total_foreign'] = $total_foreign;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float $unit_price unit_price
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets units_of_measure
     *
     * @return string|null
     */
    public function getUnitsOfMeasure()
    {
        return $this->container['units_of_measure'];
    }

    /**
     * Sets units_of_measure
     *
     * @param string|null $units_of_measure units_of_measure
     *
     * @return $this
     */
    public function setUnitsOfMeasure($units_of_measure)
    {
        $this->container['units_of_measure'] = $units_of_measure;

        return $this;
    }

    /**
     * Gets unit_count
     *
     * @return float
     */
    public function getUnitCount()
    {
        return $this->container['unit_count'];
    }

    /**
     * Sets unit_count
     *
     * @param float $unit_count unit_count
     *
     * @return $this
     */
    public function setUnitCount($unit_count)
    {
        $this->container['unit_count'] = $unit_count;

        return $this;
    }

    /**
     * Gets unit_price_foreign
     *
     * @return float|null
     */
    public function getUnitPriceForeign()
    {
        return $this->container['unit_price_foreign'];
    }

    /**
     * Sets unit_price_foreign
     *
     * @param float|null $unit_price_foreign unit_price_foreign
     *
     * @return $this
     */
    public function setUnitPriceForeign($unit_price_foreign)
    {
        $this->container['unit_price_foreign'] = $unit_price_foreign;

        return $this;
    }

    /**
     * Gets job
     *
     * @return \MyobAPI\MyobPHP\Model\Job|null
     */
    public function getJob()
    {
        return $this->container['job'];
    }

    /**
     * Sets job
     *
     * @param \MyobAPI\MyobPHP\Model\Job|null $job job
     *
     * @return $this
     */
    public function setJob($job)
    {
        $this->container['job'] = $job;

        return $this;
    }

    /**
     * Gets discount_percent
     *
     * @return float|null
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param float|null $discount_percent discount_percent
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return \MyobAPI\MyobPHP\Model\TaxCode
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param \MyobAPI\MyobPHP\Model\TaxCode $tax_code tax_code
     *
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets item
     *
     * @return \MyobAPI\MyobPHP\Model\Item
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \MyobAPI\MyobPHP\Model\Item $item item
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \MyobAPI\MyobPHP\Model\ItemBillLineAccount
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \MyobAPI\MyobPHP\Model\ItemBillLineAccount $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \MyobAPI\MyobPHP\Model\ItemBillLineLocation
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \MyobAPI\MyobPHP\Model\ItemBillLineLocation $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets row_version
     *
     * @return string|null
     */
    public function getRowVersion()
    {
        return $this->container['row_version'];
    }

    /**
     * Sets row_version
     *
     * @param string|null $row_version row_version
     *
     * @return $this
     */
    public function setRowVersion($row_version)
    {
        $this->container['row_version'] = $row_version;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


