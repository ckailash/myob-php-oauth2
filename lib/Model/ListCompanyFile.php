<?php
/**
 * ListCompanyFile
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
 * ListCompanyFile Class Doc Comment
 *
 * @category Class
 * @package  MyobAPI\MyobPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListCompanyFile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListCompanyFile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'library_path' => 'string',
        'product_version' => 'string',
        'product_level' => '\MyobAPI\MyobPHP\Model\ProductLevel',
        'checked_out_date' => 'string',
        'checked_out_by' => 'string',
        'uri' => 'string',
        'country' => 'string',
        'launcher_id' => 'string',
        'serial_number' => 'string',
        'ui_access_flags' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'library_path' => null,
        'product_version' => null,
        'product_level' => null,
        'checked_out_date' => null,
        'checked_out_by' => null,
        'uri' => null,
        'country' => null,
        'launcher_id' => null,
        'serial_number' => null,
        'ui_access_flags' => null
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
        'id' => 'Id',
        'name' => 'Name',
        'library_path' => 'LibraryPath',
        'product_version' => 'ProductVersion',
        'product_level' => 'ProductLevel',
        'checked_out_date' => 'CheckedOutDate',
        'checked_out_by' => 'CheckedOutBy',
        'uri' => 'Uri',
        'country' => 'Country',
        'launcher_id' => 'LauncherId',
        'serial_number' => 'SerialNumber',
        'ui_access_flags' => 'UIAccessFlags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'library_path' => 'setLibraryPath',
        'product_version' => 'setProductVersion',
        'product_level' => 'setProductLevel',
        'checked_out_date' => 'setCheckedOutDate',
        'checked_out_by' => 'setCheckedOutBy',
        'uri' => 'setUri',
        'country' => 'setCountry',
        'launcher_id' => 'setLauncherId',
        'serial_number' => 'setSerialNumber',
        'ui_access_flags' => 'setUiAccessFlags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'library_path' => 'getLibraryPath',
        'product_version' => 'getProductVersion',
        'product_level' => 'getProductLevel',
        'checked_out_date' => 'getCheckedOutDate',
        'checked_out_by' => 'getCheckedOutBy',
        'uri' => 'getUri',
        'country' => 'getCountry',
        'launcher_id' => 'getLauncherId',
        'serial_number' => 'getSerialNumber',
        'ui_access_flags' => 'getUiAccessFlags'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['library_path'] = isset($data['library_path']) ? $data['library_path'] : null;
        $this->container['product_version'] = isset($data['product_version']) ? $data['product_version'] : null;
        $this->container['product_level'] = isset($data['product_level']) ? $data['product_level'] : null;
        $this->container['checked_out_date'] = isset($data['checked_out_date']) ? $data['checked_out_date'] : null;
        $this->container['checked_out_by'] = isset($data['checked_out_by']) ? $data['checked_out_by'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['launcher_id'] = isset($data['launcher_id']) ? $data['launcher_id'] : null;
        $this->container['serial_number'] = isset($data['serial_number']) ? $data['serial_number'] : null;
        $this->container['ui_access_flags'] = isset($data['ui_access_flags']) ? $data['ui_access_flags'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['library_path'] === null) {
            $invalidProperties[] = "'library_path' can't be null";
        }
        if ($this->container['product_version'] === null) {
            $invalidProperties[] = "'product_version' can't be null";
        }
        if ($this->container['product_level'] === null) {
            $invalidProperties[] = "'product_level' can't be null";
        }
        if ($this->container['checked_out_date'] === null) {
            $invalidProperties[] = "'checked_out_date' can't be null";
        }
        if ($this->container['checked_out_by'] === null) {
            $invalidProperties[] = "'checked_out_by' can't be null";
        }
        if ($this->container['uri'] === null) {
            $invalidProperties[] = "'uri' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['launcher_id'] === null) {
            $invalidProperties[] = "'launcher_id' can't be null";
        }
        if ($this->container['serial_number'] === null) {
            $invalidProperties[] = "'serial_number' can't be null";
        }
        if ($this->container['ui_access_flags'] === null) {
            $invalidProperties[] = "'ui_access_flags' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets library_path
     *
     * @return string
     */
    public function getLibraryPath()
    {
        return $this->container['library_path'];
    }

    /**
     * Sets library_path
     *
     * @param string $library_path library_path
     *
     * @return $this
     */
    public function setLibraryPath($library_path)
    {
        $this->container['library_path'] = $library_path;

        return $this;
    }

    /**
     * Gets product_version
     *
     * @return string
     */
    public function getProductVersion()
    {
        return $this->container['product_version'];
    }

    /**
     * Sets product_version
     *
     * @param string $product_version product_version
     *
     * @return $this
     */
    public function setProductVersion($product_version)
    {
        $this->container['product_version'] = $product_version;

        return $this;
    }

    /**
     * Gets product_level
     *
     * @return \MyobAPI\MyobPHP\Model\ProductLevel
     */
    public function getProductLevel()
    {
        return $this->container['product_level'];
    }

    /**
     * Sets product_level
     *
     * @param \MyobAPI\MyobPHP\Model\ProductLevel $product_level product_level
     *
     * @return $this
     */
    public function setProductLevel($product_level)
    {
        $this->container['product_level'] = $product_level;

        return $this;
    }

    /**
     * Gets checked_out_date
     *
     * @return string
     */
    public function getCheckedOutDate()
    {
        return $this->container['checked_out_date'];
    }

    /**
     * Sets checked_out_date
     *
     * @param string $checked_out_date checked_out_date
     *
     * @return $this
     */
    public function setCheckedOutDate($checked_out_date)
    {
        $this->container['checked_out_date'] = $checked_out_date;

        return $this;
    }

    /**
     * Gets checked_out_by
     *
     * @return string
     */
    public function getCheckedOutBy()
    {
        return $this->container['checked_out_by'];
    }

    /**
     * Sets checked_out_by
     *
     * @param string $checked_out_by checked_out_by
     *
     * @return $this
     */
    public function setCheckedOutBy($checked_out_by)
    {
        $this->container['checked_out_by'] = $checked_out_by;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri uri
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets launcher_id
     *
     * @return string
     */
    public function getLauncherId()
    {
        return $this->container['launcher_id'];
    }

    /**
     * Sets launcher_id
     *
     * @param string $launcher_id launcher_id
     *
     * @return $this
     */
    public function setLauncherId($launcher_id)
    {
        $this->container['launcher_id'] = $launcher_id;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string $serial_number serial_number
     *
     * @return $this
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets ui_access_flags
     *
     * @return string
     */
    public function getUiAccessFlags()
    {
        return $this->container['ui_access_flags'];
    }

    /**
     * Sets ui_access_flags
     *
     * @param string $ui_access_flags ui_access_flags
     *
     * @return $this
     */
    public function setUiAccessFlags($ui_access_flags)
    {
        $this->container['ui_access_flags'] = $ui_access_flags;

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


