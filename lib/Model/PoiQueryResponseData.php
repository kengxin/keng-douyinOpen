<?php
/**
 * PoiQueryResponseData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 */

namespace Douyin\Open\Model;

use \ArrayAccess;
use \Douyin\Open\ObjectSerializer;

/**
 * PoiQueryResponseData Class Doc Comment
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */
class PoiQueryResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PoiQueryResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'poi_id' => 'string',
'poi_name' => 'string',
'amap_id' => 'string',
'address' => 'string',
'city' => 'string',
'latitude' => 'float',
'longitude' => 'float',
'error_code' => '\Douyin\Open\Model\ErrorCode',
'description' => '\Douyin\Open\Model\Description'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'poi_id' => null,
'poi_name' => null,
'amap_id' => null,
'address' => null,
'city' => null,
'latitude' => null,
'longitude' => null,
'error_code' => null,
'description' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'poi_id' => 'poi_id',
'poi_name' => 'poi_name',
'amap_id' => 'amap_id',
'address' => 'address',
'city' => 'city',
'latitude' => 'latitude',
'longitude' => 'longitude',
'error_code' => 'error_code',
'description' => 'description'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'poi_id' => 'setPoiId',
'poi_name' => 'setPoiName',
'amap_id' => 'setAmapId',
'address' => 'setAddress',
'city' => 'setCity',
'latitude' => 'setLatitude',
'longitude' => 'setLongitude',
'error_code' => 'setErrorCode',
'description' => 'setDescription'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'poi_id' => 'getPoiId',
'poi_name' => 'getPoiName',
'amap_id' => 'getAmapId',
'address' => 'getAddress',
'city' => 'getCity',
'latitude' => 'getLatitude',
'longitude' => 'getLongitude',
'error_code' => 'getErrorCode',
'description' => 'getDescription'    ];

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
        return self::$swaggerModelName;
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
        $this->container['poi_id'] = isset($data['poi_id']) ? $data['poi_id'] : null;
        $this->container['poi_name'] = isset($data['poi_name']) ? $data['poi_name'] : null;
        $this->container['amap_id'] = isset($data['amap_id']) ? $data['amap_id'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['poi_id'] === null) {
            $invalidProperties[] = "'poi_id' can't be null";
        }
        if ($this->container['poi_name'] === null) {
            $invalidProperties[] = "'poi_name' can't be null";
        }
        if ($this->container['amap_id'] === null) {
            $invalidProperties[] = "'amap_id' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['latitude'] === null) {
            $invalidProperties[] = "'latitude' can't be null";
        }
        if ($this->container['longitude'] === null) {
            $invalidProperties[] = "'longitude' can't be null";
        }
        if ($this->container['error_code'] === null) {
            $invalidProperties[] = "'error_code' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
     * Gets poi_id
     *
     * @return string
     */
    public function getPoiId()
    {
        return $this->container['poi_id'];
    }

    /**
     * Sets poi_id
     *
     * @param string $poi_id 抖音POI ID
     *
     * @return $this
     */
    public function setPoiId($poi_id)
    {
        $this->container['poi_id'] = $poi_id;

        return $this;
    }

    /**
     * Gets poi_name
     *
     * @return string
     */
    public function getPoiName()
    {
        return $this->container['poi_name'];
    }

    /**
     * Sets poi_name
     *
     * @param string $poi_name POI 名称
     *
     * @return $this
     */
    public function setPoiName($poi_name)
    {
        $this->container['poi_name'] = $poi_name;

        return $this;
    }

    /**
     * Gets amap_id
     *
     * @return string
     */
    public function getAmapId()
    {
        return $this->container['amap_id'];
    }

    /**
     * Sets amap_id
     *
     * @param string $amap_id 高德POI ID
     *
     * @return $this
     */
    public function setAmapId($amap_id)
    {
        $this->container['amap_id'] = $amap_id;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address POI地址
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city POI所在城市
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float $latitude 纬度
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float $longitude 经度
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return \Douyin\Open\Model\ErrorCode
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param \Douyin\Open\Model\ErrorCode $error_code error_code
     *
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Douyin\Open\Model\Description
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Douyin\Open\Model\Description $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
