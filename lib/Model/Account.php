<?php
/**
 * Account
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
 * Account Class Doc Comment
 *
 * @category Class
 * @package  MyobAPI\MyobPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Account implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uid' => 'string',
        'name' => 'string',
        'display_id' => 'string',
        'classification' => 'string',
        'type' => 'string',
        'number' => 'int',
        'description' => 'string',
        'parent_account' => '\MyobAPI\MyobPHP\Model\ParentAccount',
        'is_active' => 'bool',
        'tax_code' => '\MyobAPI\MyobPHP\Model\TaxCode',
        'level' => 'int',
        'opening_balance' => 'float',
        'current_balance' => 'float',
        'banking_details' => '\MyobAPI\MyobPHP\Model\BankingDetails',
        'is_header' => 'bool',
        'last_reconciled_date' => 'string',
        'foreign_currency' => '\MyobAPI\MyobPHP\Model\ForeignCurrency',
        'last_modified' => 'string',
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
        'name' => null,
        'display_id' => null,
        'classification' => null,
        'type' => null,
        'number' => 'int32',
        'description' => null,
        'parent_account' => null,
        'is_active' => null,
        'tax_code' => null,
        'level' => 'int32',
        'opening_balance' => null,
        'current_balance' => null,
        'banking_details' => null,
        'is_header' => null,
        'last_reconciled_date' => null,
        'foreign_currency' => null,
        'last_modified' => null,
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
        'name' => 'Name',
        'display_id' => 'DisplayID',
        'classification' => 'Classification',
        'type' => 'Type',
        'number' => 'Number',
        'description' => 'Description',
        'parent_account' => 'ParentAccount',
        'is_active' => 'IsActive',
        'tax_code' => 'TaxCode',
        'level' => 'Level',
        'opening_balance' => 'OpeningBalance',
        'current_balance' => 'CurrentBalance',
        'banking_details' => 'BankingDetails',
        'is_header' => 'IsHeader',
        'last_reconciled_date' => 'LastReconciledDate',
        'foreign_currency' => 'ForeignCurrency',
        'last_modified' => 'LastModified',
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
        'name' => 'setName',
        'display_id' => 'setDisplayId',
        'classification' => 'setClassification',
        'type' => 'setType',
        'number' => 'setNumber',
        'description' => 'setDescription',
        'parent_account' => 'setParentAccount',
        'is_active' => 'setIsActive',
        'tax_code' => 'setTaxCode',
        'level' => 'setLevel',
        'opening_balance' => 'setOpeningBalance',
        'current_balance' => 'setCurrentBalance',
        'banking_details' => 'setBankingDetails',
        'is_header' => 'setIsHeader',
        'last_reconciled_date' => 'setLastReconciledDate',
        'foreign_currency' => 'setForeignCurrency',
        'last_modified' => 'setLastModified',
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
        'name' => 'getName',
        'display_id' => 'getDisplayId',
        'classification' => 'getClassification',
        'type' => 'getType',
        'number' => 'getNumber',
        'description' => 'getDescription',
        'parent_account' => 'getParentAccount',
        'is_active' => 'getIsActive',
        'tax_code' => 'getTaxCode',
        'level' => 'getLevel',
        'opening_balance' => 'getOpeningBalance',
        'current_balance' => 'getCurrentBalance',
        'banking_details' => 'getBankingDetails',
        'is_header' => 'getIsHeader',
        'last_reconciled_date' => 'getLastReconciledDate',
        'foreign_currency' => 'getForeignCurrency',
        'last_modified' => 'getLastModified',
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

    const CLASSIFICATION_ASSET = 'Asset';
    const CLASSIFICATION_LIABILITY = 'Liability';
    const CLASSIFICATION_EQUITY = 'Equity';
    const CLASSIFICATION_INCOME = 'Income';
    const CLASSIFICATION_COST_OF_SALES = 'CostOfSales';
    const CLASSIFICATION_EXPENSE = 'Expense';
    const CLASSIFICATION_OTHER_INCOME = 'OtherIncome';
    const CLASSIFICATION_OTHER_EXPENSE = 'OtherExpense';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClassificationAllowableValues()
    {
        return [
            self::CLASSIFICATION_ASSET,
            self::CLASSIFICATION_LIABILITY,
            self::CLASSIFICATION_EQUITY,
            self::CLASSIFICATION_INCOME,
            self::CLASSIFICATION_COST_OF_SALES,
            self::CLASSIFICATION_EXPENSE,
            self::CLASSIFICATION_OTHER_INCOME,
            self::CLASSIFICATION_OTHER_EXPENSE,
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
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['display_id'] = isset($data['display_id']) ? $data['display_id'] : null;
        $this->container['classification'] = isset($data['classification']) ? $data['classification'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['parent_account'] = isset($data['parent_account']) ? $data['parent_account'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['opening_balance'] = isset($data['opening_balance']) ? $data['opening_balance'] : null;
        $this->container['current_balance'] = isset($data['current_balance']) ? $data['current_balance'] : null;
        $this->container['banking_details'] = isset($data['banking_details']) ? $data['banking_details'] : null;
        $this->container['is_header'] = isset($data['is_header']) ? $data['is_header'] : null;
        $this->container['last_reconciled_date'] = isset($data['last_reconciled_date']) ? $data['last_reconciled_date'] : null;
        $this->container['foreign_currency'] = isset($data['foreign_currency']) ? $data['foreign_currency'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
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

        $allowedValues = $this->getClassificationAllowableValues();
        if (!is_null($this->container['classification']) && !in_array($this->container['classification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'classification', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets display_id
     *
     * @return string|null
     */
    public function getDisplayId()
    {
        return $this->container['display_id'];
    }

    /**
     * Sets display_id
     *
     * @param string|null $display_id display_id
     *
     * @return $this
     */
    public function setDisplayId($display_id)
    {
        $this->container['display_id'] = $display_id;

        return $this;
    }

    /**
     * Gets classification
     *
     * @return string|null
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     *
     * @param string|null $classification classification
     *
     * @return $this
     */
    public function setClassification($classification)
    {
        $allowedValues = $this->getClassificationAllowableValues();
        if (!is_null($classification) && !in_array($classification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'classification', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['classification'] = $classification;

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
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int|null $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

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
     * Gets parent_account
     *
     * @return \MyobAPI\MyobPHP\Model\ParentAccount|null
     */
    public function getParentAccount()
    {
        return $this->container['parent_account'];
    }

    /**
     * Sets parent_account
     *
     * @param \MyobAPI\MyobPHP\Model\ParentAccount|null $parent_account parent_account
     *
     * @return $this
     */
    public function setParentAccount($parent_account)
    {
        $this->container['parent_account'] = $parent_account;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return \MyobAPI\MyobPHP\Model\TaxCode|null
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param \MyobAPI\MyobPHP\Model\TaxCode|null $tax_code tax_code
     *
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets level
     *
     * @return int|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int|null $level level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets opening_balance
     *
     * @return float|null
     */
    public function getOpeningBalance()
    {
        return $this->container['opening_balance'];
    }

    /**
     * Sets opening_balance
     *
     * @param float|null $opening_balance opening_balance
     *
     * @return $this
     */
    public function setOpeningBalance($opening_balance)
    {
        $this->container['opening_balance'] = $opening_balance;

        return $this;
    }

    /**
     * Gets current_balance
     *
     * @return float|null
     */
    public function getCurrentBalance()
    {
        return $this->container['current_balance'];
    }

    /**
     * Sets current_balance
     *
     * @param float|null $current_balance current_balance
     *
     * @return $this
     */
    public function setCurrentBalance($current_balance)
    {
        $this->container['current_balance'] = $current_balance;

        return $this;
    }

    /**
     * Gets banking_details
     *
     * @return \MyobAPI\MyobPHP\Model\BankingDetails|null
     */
    public function getBankingDetails()
    {
        return $this->container['banking_details'];
    }

    /**
     * Sets banking_details
     *
     * @param \MyobAPI\MyobPHP\Model\BankingDetails|null $banking_details banking_details
     *
     * @return $this
     */
    public function setBankingDetails($banking_details)
    {
        $this->container['banking_details'] = $banking_details;

        return $this;
    }

    /**
     * Gets is_header
     *
     * @return bool|null
     */
    public function getIsHeader()
    {
        return $this->container['is_header'];
    }

    /**
     * Sets is_header
     *
     * @param bool|null $is_header is_header
     *
     * @return $this
     */
    public function setIsHeader($is_header)
    {
        $this->container['is_header'] = $is_header;

        return $this;
    }

    /**
     * Gets last_reconciled_date
     *
     * @return string|null
     */
    public function getLastReconciledDate()
    {
        return $this->container['last_reconciled_date'];
    }

    /**
     * Sets last_reconciled_date
     *
     * @param string|null $last_reconciled_date last_reconciled_date
     *
     * @return $this
     */
    public function setLastReconciledDate($last_reconciled_date)
    {
        $this->container['last_reconciled_date'] = $last_reconciled_date;

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
     * Gets last_modified
     *
     * @return string|null
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param string|null $last_modified last_modified
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

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


