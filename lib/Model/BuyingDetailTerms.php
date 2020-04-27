<?php
/**
 * BuyingDetailTerms
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
 * BuyingDetailTerms Class Doc Comment
 *
 * @category Class
 * @package  MyobAPI\MyobPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BuyingDetailTerms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BuyingDetailTerms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_is_due' => 'string',
        'discount_date' => 'int',
        'balance_due_date' => 'int',
        'discount_for_early_payment' => 'float',
        'volume_discount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payment_is_due' => null,
        'discount_date' => 'int32',
        'balance_due_date' => 'int32',
        'discount_for_early_payment' => null,
        'volume_discount' => null
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
        'payment_is_due' => 'PaymentIsDue',
        'discount_date' => 'DiscountDate',
        'balance_due_date' => 'BalanceDueDate',
        'discount_for_early_payment' => 'DiscountForEarlyPayment',
        'volume_discount' => 'VolumeDiscount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_is_due' => 'setPaymentIsDue',
        'discount_date' => 'setDiscountDate',
        'balance_due_date' => 'setBalanceDueDate',
        'discount_for_early_payment' => 'setDiscountForEarlyPayment',
        'volume_discount' => 'setVolumeDiscount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_is_due' => 'getPaymentIsDue',
        'discount_date' => 'getDiscountDate',
        'balance_due_date' => 'getBalanceDueDate',
        'discount_for_early_payment' => 'getDiscountForEarlyPayment',
        'volume_discount' => 'getVolumeDiscount'
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
        $this->container['payment_is_due'] = isset($data['payment_is_due']) ? $data['payment_is_due'] : null;
        $this->container['discount_date'] = isset($data['discount_date']) ? $data['discount_date'] : null;
        $this->container['balance_due_date'] = isset($data['balance_due_date']) ? $data['balance_due_date'] : null;
        $this->container['discount_for_early_payment'] = isset($data['discount_for_early_payment']) ? $data['discount_for_early_payment'] : null;
        $this->container['volume_discount'] = isset($data['volume_discount']) ? $data['volume_discount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets payment_is_due
     *
     * @return string|null
     */
    public function getPaymentIsDue()
    {
        return $this->container['payment_is_due'];
    }

    /**
     * Sets payment_is_due
     *
     * @param string|null $payment_is_due payment_is_due
     *
     * @return $this
     */
    public function setPaymentIsDue($payment_is_due)
    {
        $this->container['payment_is_due'] = $payment_is_due;

        return $this;
    }

    /**
     * Gets discount_date
     *
     * @return int|null
     */
    public function getDiscountDate()
    {
        return $this->container['discount_date'];
    }

    /**
     * Sets discount_date
     *
     * @param int|null $discount_date discount_date
     *
     * @return $this
     */
    public function setDiscountDate($discount_date)
    {
        $this->container['discount_date'] = $discount_date;

        return $this;
    }

    /**
     * Gets balance_due_date
     *
     * @return int|null
     */
    public function getBalanceDueDate()
    {
        return $this->container['balance_due_date'];
    }

    /**
     * Sets balance_due_date
     *
     * @param int|null $balance_due_date balance_due_date
     *
     * @return $this
     */
    public function setBalanceDueDate($balance_due_date)
    {
        $this->container['balance_due_date'] = $balance_due_date;

        return $this;
    }

    /**
     * Gets discount_for_early_payment
     *
     * @return float|null
     */
    public function getDiscountForEarlyPayment()
    {
        return $this->container['discount_for_early_payment'];
    }

    /**
     * Sets discount_for_early_payment
     *
     * @param float|null $discount_for_early_payment discount_for_early_payment
     *
     * @return $this
     */
    public function setDiscountForEarlyPayment($discount_for_early_payment)
    {
        $this->container['discount_for_early_payment'] = $discount_for_early_payment;

        return $this;
    }

    /**
     * Gets volume_discount
     *
     * @return float|null
     */
    public function getVolumeDiscount()
    {
        return $this->container['volume_discount'];
    }

    /**
     * Sets volume_discount
     *
     * @param float|null $volume_discount volume_discount
     *
     * @return $this
     */
    public function setVolumeDiscount($volume_discount)
    {
        $this->container['volume_discount'] = $volume_discount;

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

