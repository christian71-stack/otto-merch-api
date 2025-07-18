<?php
/**
 * ServiceRelationReceiptsV3
 *
 * PHP version 5
 *
 * @category Class
 * @package  cbdesk\otto\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OTTO Market API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.69
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace cbdesk\otto\Client\Model;

use ArrayAccess;
use cbdesk\otto\Client\ObjectSerializer;

/**
 * ServiceRelationReceiptsV3 Class Doc Comment
 *
 * @category Class
 * @description A ServiceRelation object describes the relationship between a specific instance of a servicePositionItem object and a specific instance of a (salesOrder)PositionItem object
 * @package  cbdesk\otto\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceRelationReceiptsV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceRelation__Receipts-V3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'service_position_item_id' => 'string',
        'position_item_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'service_position_item_id' => null,
        'position_item_id' => null
    ];

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
        'service_position_item_id' => 'servicePositionItemId',
        'position_item_id' => 'positionItemId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'service_position_item_id' => 'setServicePositionItemId',
        'position_item_id' => 'setPositionItemId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'service_position_item_id' => 'getServicePositionItemId',
        'position_item_id' => 'getPositionItemId'
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
        $this->container['service_position_item_id'] = isset($data['service_position_item_id']) ? $data['service_position_item_id'] : null;
        $this->container['position_item_id'] = isset($data['position_item_id']) ? $data['position_item_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['service_position_item_id'] === null) {
            $invalidProperties[] = "'service_position_item_id' can't be null";
        }
        if ($this->container['position_item_id'] === null) {
            $invalidProperties[] = "'position_item_id' can't be null";
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
     * Gets service_position_item_id
     *
     * @return string
     */
    public function getServicePositionItemId()
    {
        return $this->container['service_position_item_id'];
    }

    /**
     * Sets service_position_item_id
     *
     * @param string $service_position_item_id Unique identifier of a specific instance of a service.  ServicePositionItem is the smallest unit of service that can be ordered
     *
     * @return $this
     */
    public function setServicePositionItemId($service_position_item_id)
    {
        $this->container['service_position_item_id'] = $service_position_item_id;

        return $this;
    }

    /**
     * Gets position_item_id
     *
     * @return string
     */
    public function getPositionItemId()
    {
        return $this->container['position_item_id'];
    }

    /**
     * Sets position_item_id
     *
     * @param string $position_item_id Unique identifier of a specific instance of an ordered item (salesOrder)PositionItem is the smallest unit of an item that can be ordered
     *
     * @return $this
     */
    public function setPositionItemId($position_item_id)
    {
        $this->container['position_item_id'] = $position_item_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
