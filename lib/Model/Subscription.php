<?php
/**
 * Subscription
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ory APIs
 *
 * Documentation for all public and administrative Ory APIs. Administrative APIs can only be accessed with a valid Personal Access Token. Public APIs are mostly used in browsers.
 *
 * The version of the OpenAPI document: v0.2.0-alpha.31
 * Contact: support@ory.sh
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ory\Client\Model;

use \ArrayAccess;
use \Ory\Client\ObjectSerializer;

/**
 * Subscription Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Subscription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'createdAt' => '\DateTime',
        'currentPlan' => 'string',
        'customerId' => 'string',
        'id' => 'string',
        'ongoingStripeCheckoutId' => 'string',
        'payedUntil' => '\DateTime',
        'planChangesAt' => '\DateTime',
        'planChangesTo' => '\Ory\Client\Model\NullPlan',
        'status' => 'string',
        'updatedAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'createdAt' => 'date-time',
        'currentPlan' => null,
        'customerId' => null,
        'id' => 'uuid',
        'ongoingStripeCheckoutId' => null,
        'payedUntil' => 'date-time',
        'planChangesAt' => 'date-time',
        'planChangesTo' => null,
        'status' => null,
        'updatedAt' => 'date-time'
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
        'createdAt' => 'created_at',
        'currentPlan' => 'current_plan',
        'customerId' => 'customer_id',
        'id' => 'id',
        'ongoingStripeCheckoutId' => 'ongoing_stripe_checkout_id',
        'payedUntil' => 'payed_until',
        'planChangesAt' => 'plan_changes_at',
        'planChangesTo' => 'plan_changes_to',
        'status' => 'status',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createdAt' => 'setCreatedAt',
        'currentPlan' => 'setCurrentPlan',
        'customerId' => 'setCustomerId',
        'id' => 'setId',
        'ongoingStripeCheckoutId' => 'setOngoingStripeCheckoutId',
        'payedUntil' => 'setPayedUntil',
        'planChangesAt' => 'setPlanChangesAt',
        'planChangesTo' => 'setPlanChangesTo',
        'status' => 'setStatus',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createdAt' => 'getCreatedAt',
        'currentPlan' => 'getCurrentPlan',
        'customerId' => 'getCustomerId',
        'id' => 'getId',
        'ongoingStripeCheckoutId' => 'getOngoingStripeCheckoutId',
        'payedUntil' => 'getPayedUntil',
        'planChangesAt' => 'getPlanChangesAt',
        'planChangesTo' => 'getPlanChangesTo',
        'status' => 'getStatus',
        'updatedAt' => 'getUpdatedAt'
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

    const CURRENT_PLAN_UNKNOWN = 'unknown';
    const CURRENT_PLAN_FREE = 'free';
    const CURRENT_PLAN_START_UP_MONTHLY = 'start_up_monthly';
    const CURRENT_PLAN_START_UP_YEARLY = 'start_up_yearly';
    const CURRENT_PLAN_BUSINESS_MONTHLY = 'business_monthly';
    const CURRENT_PLAN_BUSINESS_YEARLY = 'business_yearly';
    const CURRENT_PLAN_CUSTOM = 'custom';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrentPlanAllowableValues()
    {
        return [
            self::CURRENT_PLAN_UNKNOWN,
            self::CURRENT_PLAN_FREE,
            self::CURRENT_PLAN_START_UP_MONTHLY,
            self::CURRENT_PLAN_START_UP_YEARLY,
            self::CURRENT_PLAN_BUSINESS_MONTHLY,
            self::CURRENT_PLAN_BUSINESS_YEARLY,
            self::CURRENT_PLAN_CUSTOM,
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
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['currentPlan'] = $data['currentPlan'] ?? null;
        $this->container['customerId'] = $data['customerId'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['ongoingStripeCheckoutId'] = $data['ongoingStripeCheckoutId'] ?? null;
        $this->container['payedUntil'] = $data['payedUntil'] ?? null;
        $this->container['planChangesAt'] = $data['planChangesAt'] ?? null;
        $this->container['planChangesTo'] = $data['planChangesTo'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['currentPlan'] === null) {
            $invalidProperties[] = "'currentPlan' can't be null";
        }
        $allowedValues = $this->getCurrentPlanAllowableValues();
        if (!is_null($this->container['currentPlan']) && !in_array($this->container['currentPlan'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'currentPlan', must be one of '%s'",
                $this->container['currentPlan'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['payedUntil'] === null) {
            $invalidProperties[] = "'payedUntil' can't be null";
        }
        if ($this->container['planChangesTo'] === null) {
            $invalidProperties[] = "'planChangesTo' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets currentPlan
     *
     * @return string
     */
    public function getCurrentPlan()
    {
        return $this->container['currentPlan'];
    }

    /**
     * Sets currentPlan
     *
     * @param string $currentPlan The currently active plan of the subscription unknown Unknown free Free start_up_monthly StartUpMonthly start_up_yearly StartUpYearly business_monthly BusinessMonthly business_yearly BusinessYearly custom Custom
     *
     * @return self
     */
    public function setCurrentPlan($currentPlan)
    {
        $allowedValues = $this->getCurrentPlanAllowableValues();
        if (!in_array($currentPlan, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'currentPlan', must be one of '%s'",
                    $currentPlan,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currentPlan'] = $currentPlan;

        return $this;
    }

    /**
     * Gets customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     *
     * @param string $customerId The ID of the stripe customer
     *
     * @return self
     */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;

        return $this;
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
     * @param string $id The ID of the subscription
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ongoingStripeCheckoutId
     *
     * @return string|null
     */
    public function getOngoingStripeCheckoutId()
    {
        return $this->container['ongoingStripeCheckoutId'];
    }

    /**
     * Sets ongoingStripeCheckoutId
     *
     * @param string|null $ongoingStripeCheckoutId ongoingStripeCheckoutId
     *
     * @return self
     */
    public function setOngoingStripeCheckoutId($ongoingStripeCheckoutId)
    {
        $this->container['ongoingStripeCheckoutId'] = $ongoingStripeCheckoutId;

        return $this;
    }

    /**
     * Gets payedUntil
     *
     * @return \DateTime
     */
    public function getPayedUntil()
    {
        return $this->container['payedUntil'];
    }

    /**
     * Sets payedUntil
     *
     * @param \DateTime $payedUntil Until when the subscription is payed
     *
     * @return self
     */
    public function setPayedUntil($payedUntil)
    {
        $this->container['payedUntil'] = $payedUntil;

        return $this;
    }

    /**
     * Gets planChangesAt
     *
     * @return \DateTime|null
     */
    public function getPlanChangesAt()
    {
        return $this->container['planChangesAt'];
    }

    /**
     * Sets planChangesAt
     *
     * @param \DateTime|null $planChangesAt planChangesAt
     *
     * @return self
     */
    public function setPlanChangesAt($planChangesAt)
    {
        $this->container['planChangesAt'] = $planChangesAt;

        return $this;
    }

    /**
     * Gets planChangesTo
     *
     * @return \Ory\Client\Model\NullPlan
     */
    public function getPlanChangesTo()
    {
        return $this->container['planChangesTo'];
    }

    /**
     * Sets planChangesTo
     *
     * @param \Ory\Client\Model\NullPlan $planChangesTo planChangesTo
     *
     * @return self
     */
    public function setPlanChangesTo($planChangesTo)
    {
        $this->container['planChangesTo'] = $planChangesTo;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status For `collection_method=charge_automatically` a subscription moves into `incomplete` if the initial payment attempt fails. A subscription in this state can only have metadata and default_source updated. Once the first invoice is paid, the subscription moves into an `active` state. If the first invoice is not paid within 23 hours, the subscription transitions to `incomplete_expired`. This is a terminal state, the open invoice will be voided and no further invoices will be generated.  A subscription that is currently in a trial period is `trialing` and moves to `active` when the trial period is over.  If subscription `collection_method=charge_automatically` it becomes `past_due` when payment to renew it fails and `canceled` or `unpaid` (depending on your subscriptions settings) when Stripe has exhausted all payment retry attempts.  If subscription `collection_method=send_invoice` it becomes `past_due` when its invoice is not paid by the due date, and `canceled` or `unpaid` if it is still not paid by an additional deadline after that. Note that when a subscription has a status of `unpaid`, no subsequent invoices will be attempted (invoices will be created, but then immediately automatically closed). After receiving updated payment information from a customer, you may choose to reopen and pay their closed invoices.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


