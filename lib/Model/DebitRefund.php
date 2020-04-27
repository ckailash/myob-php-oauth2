<?php
/**
 * DebitRefund
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
 * DebitRefund Class Doc Comment
 *
 * @category Class
 * @package  MyobAPI\MyobPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DebitRefund implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DebitRefund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uid' => 'string',
        'deposit_to' => 'string',
        'account' => '\MyobAPI\MyobPHP\Model\DebitRefundAccount',
        'bill' => '\MyobAPI\MyobPHP\Model\DebitRefundBill',
        'supplier' => '\MyobAPI\MyobPHP\Model\Supplier',
        'number' => 'string',
        'date' => 'string',
        'amount' => 'float',
        'memo' => 'string',
        'payment_method' => 'string',
        'foreign_currency' => '\MyobAPI\MyobPHP\Model\ForeignCurrency',
        'uri' => 'string',
        'row_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'uid' => null,
        'deposit_to' => null,
        'account' => null,
        'bill' => null,
        'supplier' => null,
        'number' => null,
        'date' => null,
        'amount' => null,
        'memo' => null,
        'payment_method' => null,
        'foreign_currency' => null,
        'uri' => null,
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
        'uid' => 'UID',
        'deposit_to' => 'DepositTo',
        'account' => 'Account',
        'bill' => 'Bill',
        'supplier' => 'Supplier',
        'number' => 'Number',
        'date' => 'Date',
        'amount' => 'Amount',
        'memo' => 'Memo',
        'payment_method' => 'PaymentMethod',
        'foreign_currency' => 'ForeignCurrency',
        'uri' => 'URI',
        'row_version' => 'RowVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'deposit_to' => 'setDepositTo',
        'account' => 'setAccount',
        'bill' => 'setBill',
        'supplier' => 'setSupplier',
        'number' => 'setNumber',
        'date' => 'setDate',
        'amount' => 'setAmount',
        'memo' => 'setMemo',
        'payment_method' => 'setPaymentMethod',
        'foreign_currency' => 'setForeignCurrency',
        'uri' => 'setUri',
        'row_version' => 'setRowVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'deposit_to' => 'getDepositTo',
        'account' => 'getAccount',
        'bill' => 'getBill',
        'supplier' => 'getSupplier',
        'number' => 'getNumber',
        'date' => 'getDate',
        'amount' => 'getAmount',
        'memo' => 'getMemo',
        'payment_method' => 'getPaymentMethod',
        'foreign_currency' => 'getForeignCurrency',
        'uri' => 'getUri',
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
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['deposit_to'] = isset($data['deposit_to']) ? $data['deposit_to'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['bill'] = isset($data['bill']) ? $data['bill'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['foreign_currency'] = isset($data['foreign_currency']) ? $data['foreign_currency'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
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

        if ($this->container['deposit_to'] === null) {
            $invalidProperties[] = "'deposit_to' can't be null";
        }
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['bill'] === null) {
            $invalidProperties[] = "'bill' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
     * Gets uid
     *
     * @return string|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string|null $uid uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets deposit_to
     *
     * @return string
     */
    public function getDepositTo()
    {
        return $this->container['deposit_to'];
    }

    /**
     * Sets deposit_to
     *
     * @param string $deposit_to deposit_to
     *
     * @return $this
     */
    public function setDepositTo($deposit_to)
    {
        $this->container['deposit_to'] = $deposit_to;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \MyobAPI\MyobPHP\Model\DebitRefundAccount
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \MyobAPI\MyobPHP\Model\DebitRefundAccount $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets bill
     *
     * @return \MyobAPI\MyobPHP\Model\DebitRefundBill
     */
    public function getBill()
    {
        return $this->container['bill'];
    }

    /**
     * Sets bill
     *
     * @param \MyobAPI\MyobPHP\Model\DebitRefundBill $bill bill
     *
     * @return $this
     */
    public function setBill($bill)
    {
        $this->container['bill'] = $bill;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return \MyobAPI\MyobPHP\Model\Supplier|null
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param \MyobAPI\MyobPHP\Model\Supplier|null $supplier supplier
     *
     * @return $this
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo memo
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets foreign_currency
     *
     * @return \MyobAPI\MyobPHP\Model\ForeignCurrency|null
     */
    public function getForeignCurrency()
    {
        return $this->container['foreign_currency'];
    }

    /**
     * Sets foreign_currency
     *
     * @param \MyobAPI\MyobPHP\Model\ForeignCurrency|null $foreign_currency foreign_currency
     *
     * @return $this
     */
    public function setForeignCurrency($foreign_currency)
    {
        $this->container['foreign_currency'] = $foreign_currency;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string|null
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string|null $uri uri
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

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


