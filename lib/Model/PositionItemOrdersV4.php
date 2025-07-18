<?php
/**
 * PositionItemOrdersV4
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
 * PositionItemOrdersV4 Class Doc Comment
 *
 * @category Class
 * @description PositionItem
 * @package  cbdesk\otto\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PositionItemOrdersV4 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PositionItem__Orders-V4';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cancellation_date' => '\DateTime',
        'cancellation_reason' => 'string',
        'deal_id' => 'string',
        'deal_name' => 'string',
        'expected_delivery_date' => '\DateTime',
        'fulfillment_status' => 'string',
        'item_value_discount' => '\cbdesk\otto\Client\Model\AmountOrdersV4',
        'item_value_gross_price' => '\cbdesk\otto\Client\Model\AmountOrdersV4',
        'item_value_reduced_gross_price' => '\cbdesk\otto\Client\Model\AmountOrdersV4',
        'position_item_id' => 'string',
        'processable_date' => '\DateTime',
        'product' => '\cbdesk\otto\Client\Model\ProductOrdersV4',
        'return_accepted_by_marketplace' => 'bool',
        'returned_date' => '\DateTime',
        'sent_date' => '\DateTime',
        'tracking_info' => '\cbdesk\otto\Client\Model\TrackingInfoOrdersV4',
        'weee_pickup' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cancellation_date' => 'date-time',
        'cancellation_reason' => null,
        'deal_id' => null,
        'deal_name' => null,
        'expected_delivery_date' => 'date-time',
        'fulfillment_status' => null,
        'item_value_discount' => null,
        'item_value_gross_price' => null,
        'item_value_reduced_gross_price' => null,
        'position_item_id' => null,
        'processable_date' => 'date-time',
        'product' => null,
        'return_accepted_by_marketplace' => null,
        'returned_date' => 'date-time',
        'sent_date' => 'date-time',
        'tracking_info' => null,
        'weee_pickup' => null
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
        'cancellation_date' => 'cancellationDate',
        'cancellation_reason' => 'cancellationReason',
        'deal_id' => 'dealId',
        'deal_name' => 'dealName',
        'expected_delivery_date' => 'expectedDeliveryDate',
        'fulfillment_status' => 'fulfillmentStatus',
        'item_value_discount' => 'itemValueDiscount',
        'item_value_gross_price' => 'itemValueGrossPrice',
        'item_value_reduced_gross_price' => 'itemValueReducedGrossPrice',
        'position_item_id' => 'positionItemId',
        'processable_date' => 'processableDate',
        'product' => 'product',
        'return_accepted_by_marketplace' => 'returnAcceptedByMarketplace',
        'returned_date' => 'returnedDate',
        'sent_date' => 'sentDate',
        'tracking_info' => 'trackingInfo',
        'weee_pickup' => 'weeePickup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cancellation_date' => 'setCancellationDate',
        'cancellation_reason' => 'setCancellationReason',
        'deal_id' => 'setDealId',
        'deal_name' => 'setDealName',
        'expected_delivery_date' => 'setExpectedDeliveryDate',
        'fulfillment_status' => 'setFulfillmentStatus',
        'item_value_discount' => 'setItemValueDiscount',
        'item_value_gross_price' => 'setItemValueGrossPrice',
        'item_value_reduced_gross_price' => 'setItemValueReducedGrossPrice',
        'position_item_id' => 'setPositionItemId',
        'processable_date' => 'setProcessableDate',
        'product' => 'setProduct',
        'return_accepted_by_marketplace' => 'setReturnAcceptedByMarketplace',
        'returned_date' => 'setReturnedDate',
        'sent_date' => 'setSentDate',
        'tracking_info' => 'setTrackingInfo',
        'weee_pickup' => 'setWeeePickup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cancellation_date' => 'getCancellationDate',
        'cancellation_reason' => 'getCancellationReason',
        'deal_id' => 'getDealId',
        'deal_name' => 'getDealName',
        'expected_delivery_date' => 'getExpectedDeliveryDate',
        'fulfillment_status' => 'getFulfillmentStatus',
        'item_value_discount' => 'getItemValueDiscount',
        'item_value_gross_price' => 'getItemValueGrossPrice',
        'item_value_reduced_gross_price' => 'getItemValueReducedGrossPrice',
        'position_item_id' => 'getPositionItemId',
        'processable_date' => 'getProcessableDate',
        'product' => 'getProduct',
        'return_accepted_by_marketplace' => 'getReturnAcceptedByMarketplace',
        'returned_date' => 'getReturnedDate',
        'sent_date' => 'getSentDate',
        'tracking_info' => 'getTrackingInfo',
        'weee_pickup' => 'getWeeePickup'
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

    const CANCELLATION_REASON_CANCELLED_ON_CUSTOMER_WISH = 'CANCELLED_ON_CUSTOMER_WISH';
    const CANCELLATION_REASON_CANCELLED_ON_PARTNER_WISH = 'CANCELLED_ON_PARTNER_WISH';
    const CANCELLATION_REASON_PAYMENT_ABORTED = 'PAYMENT_ABORTED';
    const CANCELLATION_REASON_PAYMENT_FRAUD = 'PAYMENT_FRAUD';
    const CANCELLATION_REASON_PARTNER_TERMINATED = 'PARTNER_TERMINATED';
    const CANCELLATION_REASON_ILLEGAL_PRODUCT = 'ILLEGAL_PRODUCT';
    const CANCELLATION_REASON_MARKETPLACE_FRAUD = 'MARKETPLACE_FRAUD';
    const CANCELLATION_REASON_CANCELLED_ON_MARKETPLACE_WISH = 'CANCELLED_ON_MARKETPLACE_WISH';
    const FULFILLMENT_STATUS_ANNOUNCED = 'ANNOUNCED';
    const FULFILLMENT_STATUS_PROCESSABLE = 'PROCESSABLE';
    const FULFILLMENT_STATUS_SENT = 'SENT';
    const FULFILLMENT_STATUS_RETURNED = 'RETURNED';
    const FULFILLMENT_STATUS_CANCELLED_BY_PARTNER = 'CANCELLED_BY_PARTNER';
    const FULFILLMENT_STATUS_CANCELLED_BY_MARKETPLACE = 'CANCELLED_BY_MARKETPLACE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCancellationReasonAllowableValues()
    {
        return [
            self::CANCELLATION_REASON_CANCELLED_ON_CUSTOMER_WISH,
            self::CANCELLATION_REASON_CANCELLED_ON_PARTNER_WISH,
            self::CANCELLATION_REASON_PAYMENT_ABORTED,
            self::CANCELLATION_REASON_PAYMENT_FRAUD,
            self::CANCELLATION_REASON_PARTNER_TERMINATED,
            self::CANCELLATION_REASON_ILLEGAL_PRODUCT,
            self::CANCELLATION_REASON_MARKETPLACE_FRAUD,
            self::CANCELLATION_REASON_CANCELLED_ON_MARKETPLACE_WISH,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFulfillmentStatusAllowableValues()
    {
        return [
            self::FULFILLMENT_STATUS_ANNOUNCED,
            self::FULFILLMENT_STATUS_PROCESSABLE,
            self::FULFILLMENT_STATUS_SENT,
            self::FULFILLMENT_STATUS_RETURNED,
            self::FULFILLMENT_STATUS_CANCELLED_BY_PARTNER,
            self::FULFILLMENT_STATUS_CANCELLED_BY_MARKETPLACE,
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
        $this->container['cancellation_date'] = isset($data['cancellation_date']) ? $data['cancellation_date'] : null;
        $this->container['cancellation_reason'] = isset($data['cancellation_reason']) ? $data['cancellation_reason'] : null;
        $this->container['deal_id'] = isset($data['deal_id']) ? $data['deal_id'] : null;
        $this->container['deal_name'] = isset($data['deal_name']) ? $data['deal_name'] : null;
        $this->container['expected_delivery_date'] = isset($data['expected_delivery_date']) ? $data['expected_delivery_date'] : null;
        $this->container['fulfillment_status'] = isset($data['fulfillment_status']) ? $data['fulfillment_status'] : null;
        $this->container['item_value_discount'] = isset($data['item_value_discount']) ? $data['item_value_discount'] : null;
        $this->container['item_value_gross_price'] = isset($data['item_value_gross_price']) ? $data['item_value_gross_price'] : null;
        $this->container['item_value_reduced_gross_price'] = isset($data['item_value_reduced_gross_price']) ? $data['item_value_reduced_gross_price'] : null;
        $this->container['position_item_id'] = isset($data['position_item_id']) ? $data['position_item_id'] : null;
        $this->container['processable_date'] = isset($data['processable_date']) ? $data['processable_date'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['return_accepted_by_marketplace'] = isset($data['return_accepted_by_marketplace']) ? $data['return_accepted_by_marketplace'] : null;
        $this->container['returned_date'] = isset($data['returned_date']) ? $data['returned_date'] : null;
        $this->container['sent_date'] = isset($data['sent_date']) ? $data['sent_date'] : null;
        $this->container['tracking_info'] = isset($data['tracking_info']) ? $data['tracking_info'] : null;
        $this->container['weee_pickup'] = isset($data['weee_pickup']) ? $data['weee_pickup'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCancellationReasonAllowableValues();
        if (!is_null($this->container['cancellation_reason']) && !in_array($this->container['cancellation_reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cancellation_reason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fulfillment_status'] === null) {
            $invalidProperties[] = "'fulfillment_status' can't be null";
        }
        $allowedValues = $this->getFulfillmentStatusAllowableValues();
        if (!is_null($this->container['fulfillment_status']) && !in_array($this->container['fulfillment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fulfillment_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['item_value_gross_price'] === null) {
            $invalidProperties[] = "'item_value_gross_price' can't be null";
        }
        if ($this->container['position_item_id'] === null) {
            $invalidProperties[] = "'position_item_id' can't be null";
        }
        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
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
     * Gets cancellation_date
     *
     * @return \DateTime
     */
    public function getCancellationDate()
    {
        return $this->container['cancellation_date'];
    }

    /**
     * Sets cancellation_date
     *
     * @param \DateTime $cancellation_date Date the position item was cancelled
     *
     * @return $this
     */
    public function setCancellationDate($cancellation_date)
    {
        $this->container['cancellation_date'] = $cancellation_date;

        return $this;
    }

    /**
     * Gets cancellation_reason
     *
     * @return string
     */
    public function getCancellationReason()
    {
        return $this->container['cancellation_reason'];
    }

    /**
     * Sets cancellation_reason
     *
     * @param string $cancellation_reason Reason why a position was cancelled
     *
     * @return $this
     */
    public function setCancellationReason($cancellation_reason)
    {
        $allowedValues = $this->getCancellationReasonAllowableValues();
        if (!is_null($cancellation_reason) && !in_array($cancellation_reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cancellation_reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cancellation_reason'] = $cancellation_reason;

        return $this;
    }

    /**
     * Gets deal_id
     *
     * @return string
     */
    public function getDealId()
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id
     *
     * @param string $deal_id The unique id of the deal related to the position item
     *
     * @return $this
     */
    public function setDealId($deal_id)
    {
        $this->container['deal_id'] = $deal_id;

        return $this;
    }

    /**
     * Gets deal_name
     *
     * @return string
     */
    public function getDealName()
    {
        return $this->container['deal_name'];
    }

    /**
     * Sets deal_name
     *
     * @param string $deal_name The name of the deal related to the position item
     *
     * @return $this
     */
    public function setDealName($deal_name)
    {
        $this->container['deal_name'] = $deal_name;

        return $this;
    }

    /**
     * Gets expected_delivery_date
     *
     * @return \DateTime
     */
    public function getExpectedDeliveryDate()
    {
        return $this->container['expected_delivery_date'];
    }

    /**
     * Sets expected_delivery_date
     *
     * @param \DateTime $expected_delivery_date The date the position item should be delivered
     *
     * @return $this
     */
    public function setExpectedDeliveryDate($expected_delivery_date)
    {
        $this->container['expected_delivery_date'] = $expected_delivery_date;

        return $this;
    }

    /**
     * Gets fulfillment_status
     *
     * @return string
     */
    public function getFulfillmentStatus()
    {
        return $this->container['fulfillment_status'];
    }

    /**
     * Sets fulfillment_status
     *
     * @param string $fulfillment_status The fulfillment status of the position item
     *
     * @return $this
     */
    public function setFulfillmentStatus($fulfillment_status)
    {
        $allowedValues = $this->getFulfillmentStatusAllowableValues();
        if (!in_array($fulfillment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fulfillment_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fulfillment_status'] = $fulfillment_status;

        return $this;
    }

    /**
     * Gets item_value_discount
     *
     * @return \cbdesk\otto\Client\Model\AmountOrdersV4
     */
    public function getItemValueDiscount()
    {
        return $this->container['item_value_discount'];
    }

    /**
     * Sets item_value_discount
     *
     * @param \cbdesk\otto\Client\Model\AmountOrdersV4 $item_value_discount item_value_discount
     *
     * @return $this
     */
    public function setItemValueDiscount($item_value_discount)
    {
        $this->container['item_value_discount'] = $item_value_discount;

        return $this;
    }

    /**
     * Gets item_value_gross_price
     *
     * @return \cbdesk\otto\Client\Model\AmountOrdersV4
     */
    public function getItemValueGrossPrice()
    {
        return $this->container['item_value_gross_price'];
    }

    /**
     * Sets item_value_gross_price
     *
     * @param \cbdesk\otto\Client\Model\AmountOrdersV4 $item_value_gross_price item_value_gross_price
     *
     * @return $this
     */
    public function setItemValueGrossPrice($item_value_gross_price)
    {
        $this->container['item_value_gross_price'] = $item_value_gross_price;

        return $this;
    }

    /**
     * Gets item_value_reduced_gross_price
     *
     * @return \cbdesk\otto\Client\Model\AmountOrdersV4
     */
    public function getItemValueReducedGrossPrice()
    {
        return $this->container['item_value_reduced_gross_price'];
    }

    /**
     * Sets item_value_reduced_gross_price
     *
     * @param \cbdesk\otto\Client\Model\AmountOrdersV4 $item_value_reduced_gross_price item_value_reduced_gross_price
     *
     * @return $this
     */
    public function setItemValueReducedGrossPrice($item_value_reduced_gross_price)
    {
        $this->container['item_value_reduced_gross_price'] = $item_value_reduced_gross_price;

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
     * @param string $position_item_id The unique id of the position item
     *
     * @return $this
     */
    public function setPositionItemId($position_item_id)
    {
        $this->container['position_item_id'] = $position_item_id;

        return $this;
    }

    /**
     * Gets processable_date
     *
     * @return \DateTime
     */
    public function getProcessableDate()
    {
        return $this->container['processable_date'];
    }

    /**
     * Sets processable_date
     *
     * @param \DateTime $processable_date Date the position item has reached PROCESSABLE fulfillment status
     *
     * @return $this
     */
    public function setProcessableDate($processable_date)
    {
        $this->container['processable_date'] = $processable_date;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \cbdesk\otto\Client\Model\ProductOrdersV4
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \cbdesk\otto\Client\Model\ProductOrdersV4 $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets return_accepted_by_marketplace
     *
     * @return bool
     */
    public function getReturnAcceptedByMarketplace()
    {
        return $this->container['return_accepted_by_marketplace'];
    }

    /**
     * Sets return_accepted_by_marketplace
     *
     * @param bool $return_accepted_by_marketplace Flag to indicate that the return has been accepted by the marketplace
     *
     * @return $this
     */
    public function setReturnAcceptedByMarketplace($return_accepted_by_marketplace)
    {
        $this->container['return_accepted_by_marketplace'] = $return_accepted_by_marketplace;

        return $this;
    }

    /**
     * Gets returned_date
     *
     * @return \DateTime
     */
    public function getReturnedDate()
    {
        return $this->container['returned_date'];
    }

    /**
     * Sets returned_date
     *
     * @param \DateTime $returned_date Date the position item was returned
     *
     * @return $this
     */
    public function setReturnedDate($returned_date)
    {
        $this->container['returned_date'] = $returned_date;

        return $this;
    }

    /**
     * Gets sent_date
     *
     * @return \DateTime
     */
    public function getSentDate()
    {
        return $this->container['sent_date'];
    }

    /**
     * Sets sent_date
     *
     * @param \DateTime $sent_date Date the position item was sent
     *
     * @return $this
     */
    public function setSentDate($sent_date)
    {
        $this->container['sent_date'] = $sent_date;

        return $this;
    }

    /**
     * Gets tracking_info
     *
     * @return \cbdesk\otto\Client\Model\TrackingInfoOrdersV4
     */
    public function getTrackingInfo()
    {
        return $this->container['tracking_info'];
    }

    /**
     * Sets tracking_info
     *
     * @param \cbdesk\otto\Client\Model\TrackingInfoOrdersV4 $tracking_info tracking_info
     *
     * @return $this
     */
    public function setTrackingInfo($tracking_info)
    {
        $this->container['tracking_info'] = $tracking_info;

        return $this;
    }

    /**
     * Gets weee_pickup
     *
     * @return bool
     */
    public function getWeeePickup()
    {
        return $this->container['weee_pickup'];
    }

    /**
     * Sets weee_pickup
     *
     * @param bool $weee_pickup Position item has electrical and electronic equipment disposal service (WEEE)
     *
     * @return $this
     */
    public function setWeeePickup($weee_pickup)
    {
        $this->container['weee_pickup'] = $weee_pickup;

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
