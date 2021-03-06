<?php
/**
 * BankingDetails
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
 * BankingDetails Class Doc Comment
 *
 * @category Class
 * @package  MyobAPI\MyobPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BankingDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bsb_number' => 'string',
        'bank_account_number' => 'string',
        'bank_account_name' => 'string',
        'company_trading_name' => 'string',
        'bank_code' => 'string',
        'create_bank_files' => 'bool',
        'direct_entry_user_id' => 'string',
        'include_self_balancing_transaction' => 'bool',
        'statement_particulars' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bsb_number' => null,
        'bank_account_number' => null,
        'bank_account_name' => null,
        'company_trading_name' => null,
        'bank_code' => null,
        'create_bank_files' => null,
        'direct_entry_user_id' => null,
        'include_self_balancing_transaction' => null,
        'statement_particulars' => null
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
        'bsb_number' => 'BSBNumber',
        'bank_account_number' => 'BankAccountNumber',
        'bank_account_name' => 'BankAccountName',
        'company_trading_name' => 'CompanyTradingName',
        'bank_code' => 'BankCode',
        'create_bank_files' => 'CreateBankFiles',
        'direct_entry_user_id' => 'DirectEntryUserId',
        'include_self_balancing_transaction' => 'IncludeSelfBalancingTransaction',
        'statement_particulars' => 'StatementParticulars'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bsb_number' => 'setBsbNumber',
        'bank_account_number' => 'setBankAccountNumber',
        'bank_account_name' => 'setBankAccountName',
        'company_trading_name' => 'setCompanyTradingName',
        'bank_code' => 'setBankCode',
        'create_bank_files' => 'setCreateBankFiles',
        'direct_entry_user_id' => 'setDirectEntryUserId',
        'include_self_balancing_transaction' => 'setIncludeSelfBalancingTransaction',
        'statement_particulars' => 'setStatementParticulars'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bsb_number' => 'getBsbNumber',
        'bank_account_number' => 'getBankAccountNumber',
        'bank_account_name' => 'getBankAccountName',
        'company_trading_name' => 'getCompanyTradingName',
        'bank_code' => 'getBankCode',
        'create_bank_files' => 'getCreateBankFiles',
        'direct_entry_user_id' => 'getDirectEntryUserId',
        'include_self_balancing_transaction' => 'getIncludeSelfBalancingTransaction',
        'statement_particulars' => 'getStatementParticulars'
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
        $this->container['bsb_number'] = isset($data['bsb_number']) ? $data['bsb_number'] : null;
        $this->container['bank_account_number'] = isset($data['bank_account_number']) ? $data['bank_account_number'] : null;
        $this->container['bank_account_name'] = isset($data['bank_account_name']) ? $data['bank_account_name'] : null;
        $this->container['company_trading_name'] = isset($data['company_trading_name']) ? $data['company_trading_name'] : null;
        $this->container['bank_code'] = isset($data['bank_code']) ? $data['bank_code'] : null;
        $this->container['create_bank_files'] = isset($data['create_bank_files']) ? $data['create_bank_files'] : null;
        $this->container['direct_entry_user_id'] = isset($data['direct_entry_user_id']) ? $data['direct_entry_user_id'] : null;
        $this->container['include_self_balancing_transaction'] = isset($data['include_self_balancing_transaction']) ? $data['include_self_balancing_transaction'] : null;
        $this->container['statement_particulars'] = isset($data['statement_particulars']) ? $data['statement_particulars'] : null;
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
     * Gets bsb_number
     *
     * @return string|null
     */
    public function getBsbNumber()
    {
        return $this->container['bsb_number'];
    }

    /**
     * Sets bsb_number
     *
     * @param string|null $bsb_number bsb_number
     *
     * @return $this
     */
    public function setBsbNumber($bsb_number)
    {
        $this->container['bsb_number'] = $bsb_number;

        return $this;
    }

    /**
     * Gets bank_account_number
     *
     * @return string|null
     */
    public function getBankAccountNumber()
    {
        return $this->container['bank_account_number'];
    }

    /**
     * Sets bank_account_number
     *
     * @param string|null $bank_account_number bank_account_number
     *
     * @return $this
     */
    public function setBankAccountNumber($bank_account_number)
    {
        $this->container['bank_account_number'] = $bank_account_number;

        return $this;
    }

    /**
     * Gets bank_account_name
     *
     * @return string|null
     */
    public function getBankAccountName()
    {
        return $this->container['bank_account_name'];
    }

    /**
     * Sets bank_account_name
     *
     * @param string|null $bank_account_name bank_account_name
     *
     * @return $this
     */
    public function setBankAccountName($bank_account_name)
    {
        $this->container['bank_account_name'] = $bank_account_name;

        return $this;
    }

    /**
     * Gets company_trading_name
     *
     * @return string|null
     */
    public function getCompanyTradingName()
    {
        return $this->container['company_trading_name'];
    }

    /**
     * Sets company_trading_name
     *
     * @param string|null $company_trading_name company_trading_name
     *
     * @return $this
     */
    public function setCompanyTradingName($company_trading_name)
    {
        $this->container['company_trading_name'] = $company_trading_name;

        return $this;
    }

    /**
     * Gets bank_code
     *
     * @return string|null
     */
    public function getBankCode()
    {
        return $this->container['bank_code'];
    }

    /**
     * Sets bank_code
     *
     * @param string|null $bank_code bank_code
     *
     * @return $this
     */
    public function setBankCode($bank_code)
    {
        $this->container['bank_code'] = $bank_code;

        return $this;
    }

    /**
     * Gets create_bank_files
     *
     * @return bool|null
     */
    public function getCreateBankFiles()
    {
        return $this->container['create_bank_files'];
    }

    /**
     * Sets create_bank_files
     *
     * @param bool|null $create_bank_files create_bank_files
     *
     * @return $this
     */
    public function setCreateBankFiles($create_bank_files)
    {
        $this->container['create_bank_files'] = $create_bank_files;

        return $this;
    }

    /**
     * Gets direct_entry_user_id
     *
     * @return string|null
     */
    public function getDirectEntryUserId()
    {
        return $this->container['direct_entry_user_id'];
    }

    /**
     * Sets direct_entry_user_id
     *
     * @param string|null $direct_entry_user_id direct_entry_user_id
     *
     * @return $this
     */
    public function setDirectEntryUserId($direct_entry_user_id)
    {
        $this->container['direct_entry_user_id'] = $direct_entry_user_id;

        return $this;
    }

    /**
     * Gets include_self_balancing_transaction
     *
     * @return bool|null
     */
    public function getIncludeSelfBalancingTransaction()
    {
        return $this->container['include_self_balancing_transaction'];
    }

    /**
     * Sets include_self_balancing_transaction
     *
     * @param bool|null $include_self_balancing_transaction include_self_balancing_transaction
     *
     * @return $this
     */
    public function setIncludeSelfBalancingTransaction($include_self_balancing_transaction)
    {
        $this->container['include_self_balancing_transaction'] = $include_self_balancing_transaction;

        return $this;
    }

    /**
     * Gets statement_particulars
     *
     * @return string|null
     */
    public function getStatementParticulars()
    {
        return $this->container['statement_particulars'];
    }

    /**
     * Sets statement_particulars
     *
     * @param string|null $statement_particulars statement_particulars
     *
     * @return $this
     */
    public function setStatementParticulars($statement_particulars)
    {
        $this->container['statement_particulars'] = $statement_particulars;

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


