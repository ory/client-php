<?php
/**
 * SelfServiceRegistrationFlow
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
 * The version of the OpenAPI document: v0.0.1-alpha.45
 * Contact: support@ory.sh
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * SelfServiceRegistrationFlow Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SelfServiceRegistrationFlow implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'selfServiceRegistrationFlow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => '\Ory\Client\Model\IdentityCredentialsType',
        'expiresAt' => '\DateTime',
        'id' => 'string',
        'issuedAt' => '\DateTime',
        'requestUrl' => 'string',
        'returnTo' => 'string',
        'type' => 'string',
        'ui' => '\Ory\Client\Model\UiContainer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active' => null,
        'expiresAt' => 'date-time',
        'id' => 'uuid4',
        'issuedAt' => 'date-time',
        'requestUrl' => null,
        'returnTo' => null,
        'type' => null,
        'ui' => null
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
        'active' => 'active',
        'expiresAt' => 'expires_at',
        'id' => 'id',
        'issuedAt' => 'issued_at',
        'requestUrl' => 'request_url',
        'returnTo' => 'return_to',
        'type' => 'type',
        'ui' => 'ui'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'expiresAt' => 'setExpiresAt',
        'id' => 'setId',
        'issuedAt' => 'setIssuedAt',
        'requestUrl' => 'setRequestUrl',
        'returnTo' => 'setReturnTo',
        'type' => 'setType',
        'ui' => 'setUi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'expiresAt' => 'getExpiresAt',
        'id' => 'getId',
        'issuedAt' => 'getIssuedAt',
        'requestUrl' => 'getRequestUrl',
        'returnTo' => 'getReturnTo',
        'type' => 'getType',
        'ui' => 'getUi'
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
        $this->container['active'] = $data['active'] ?? null;
        $this->container['expiresAt'] = $data['expiresAt'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['issuedAt'] = $data['issuedAt'] ?? null;
        $this->container['requestUrl'] = $data['requestUrl'] ?? null;
        $this->container['returnTo'] = $data['returnTo'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['ui'] = $data['ui'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['expiresAt'] === null) {
            $invalidProperties[] = "'expiresAt' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['issuedAt'] === null) {
            $invalidProperties[] = "'issuedAt' can't be null";
        }
        if ($this->container['requestUrl'] === null) {
            $invalidProperties[] = "'requestUrl' can't be null";
        }
        if ($this->container['ui'] === null) {
            $invalidProperties[] = "'ui' can't be null";
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
     * Gets active
     *
     * @return \Ory\Client\Model\IdentityCredentialsType|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param \Ory\Client\Model\IdentityCredentialsType|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets expiresAt
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
     * Sets expiresAt
     *
     * @param \DateTime $expiresAt ExpiresAt is the time (UTC) when the flow expires. If the user still wishes to log in, a new flow has to be initiated.
     *
     * @return self
     */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;

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
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets issuedAt
     *
     * @return \DateTime
     */
    public function getIssuedAt()
    {
        return $this->container['issuedAt'];
    }

    /**
     * Sets issuedAt
     *
     * @param \DateTime $issuedAt IssuedAt is the time (UTC) when the flow occurred.
     *
     * @return self
     */
    public function setIssuedAt($issuedAt)
    {
        $this->container['issuedAt'] = $issuedAt;

        return $this;
    }

    /**
     * Gets requestUrl
     *
     * @return string
     */
    public function getRequestUrl()
    {
        return $this->container['requestUrl'];
    }

    /**
     * Sets requestUrl
     *
     * @param string $requestUrl RequestURL is the initial URL that was requested from Ory Kratos. It can be used to forward information contained in the URL's path or query for example.
     *
     * @return self
     */
    public function setRequestUrl($requestUrl)
    {
        $this->container['requestUrl'] = $requestUrl;

        return $this;
    }

    /**
     * Gets returnTo
     *
     * @return string|null
     */
    public function getReturnTo()
    {
        return $this->container['returnTo'];
    }

    /**
     * Sets returnTo
     *
     * @param string|null $returnTo ReturnTo contains the requested return_to URL.
     *
     * @return self
     */
    public function setReturnTo($returnTo)
    {
        $this->container['returnTo'] = $returnTo;

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
     * @param string|null $type The flow type can either be `api` or `browser`.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets ui
     *
     * @return \Ory\Client\Model\UiContainer
     */
    public function getUi()
    {
        return $this->container['ui'];
    }

    /**
     * Sets ui
     *
     * @param \Ory\Client\Model\UiContainer $ui ui
     *
     * @return self
     */
    public function setUi($ui)
    {
        $this->container['ui'] = $ui;

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


