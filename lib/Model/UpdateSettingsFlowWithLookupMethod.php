<?php
/**
 * UpdateSettingsFlowWithLookupMethod
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
 * The version of the OpenAPI document: v1.1.39-alpha.0
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
 * UpdateSettingsFlowWithLookupMethod Class Doc Comment
 *
 * @category Class
 * @description Update Settings Flow with Lookup Method
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateSettingsFlowWithLookupMethod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'updateSettingsFlowWithLookupMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'csrfToken' => 'string',
        'lookupSecretConfirm' => 'bool',
        'lookupSecretDisable' => 'bool',
        'lookupSecretRegenerate' => 'bool',
        'lookupSecretReveal' => 'bool',
        'method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'csrfToken' => null,
        'lookupSecretConfirm' => null,
        'lookupSecretDisable' => null,
        'lookupSecretRegenerate' => null,
        'lookupSecretReveal' => null,
        'method' => null
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
        'csrfToken' => 'csrf_token',
        'lookupSecretConfirm' => 'lookup_secret_confirm',
        'lookupSecretDisable' => 'lookup_secret_disable',
        'lookupSecretRegenerate' => 'lookup_secret_regenerate',
        'lookupSecretReveal' => 'lookup_secret_reveal',
        'method' => 'method'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'csrfToken' => 'setCsrfToken',
        'lookupSecretConfirm' => 'setLookupSecretConfirm',
        'lookupSecretDisable' => 'setLookupSecretDisable',
        'lookupSecretRegenerate' => 'setLookupSecretRegenerate',
        'lookupSecretReveal' => 'setLookupSecretReveal',
        'method' => 'setMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'csrfToken' => 'getCsrfToken',
        'lookupSecretConfirm' => 'getLookupSecretConfirm',
        'lookupSecretDisable' => 'getLookupSecretDisable',
        'lookupSecretRegenerate' => 'getLookupSecretRegenerate',
        'lookupSecretReveal' => 'getLookupSecretReveal',
        'method' => 'getMethod'
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
        $this->container['csrfToken'] = $data['csrfToken'] ?? null;
        $this->container['lookupSecretConfirm'] = $data['lookupSecretConfirm'] ?? null;
        $this->container['lookupSecretDisable'] = $data['lookupSecretDisable'] ?? null;
        $this->container['lookupSecretRegenerate'] = $data['lookupSecretRegenerate'] ?? null;
        $this->container['lookupSecretReveal'] = $data['lookupSecretReveal'] ?? null;
        $this->container['method'] = $data['method'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
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
     * Gets csrfToken
     *
     * @return string|null
     */
    public function getCsrfToken()
    {
        return $this->container['csrfToken'];
    }

    /**
     * Sets csrfToken
     *
     * @param string|null $csrfToken CSRFToken is the anti-CSRF token
     *
     * @return self
     */
    public function setCsrfToken($csrfToken)
    {
        $this->container['csrfToken'] = $csrfToken;

        return $this;
    }

    /**
     * Gets lookupSecretConfirm
     *
     * @return bool|null
     */
    public function getLookupSecretConfirm()
    {
        return $this->container['lookupSecretConfirm'];
    }

    /**
     * Sets lookupSecretConfirm
     *
     * @param bool|null $lookupSecretConfirm If set to true will save the regenerated lookup secrets
     *
     * @return self
     */
    public function setLookupSecretConfirm($lookupSecretConfirm)
    {
        $this->container['lookupSecretConfirm'] = $lookupSecretConfirm;

        return $this;
    }

    /**
     * Gets lookupSecretDisable
     *
     * @return bool|null
     */
    public function getLookupSecretDisable()
    {
        return $this->container['lookupSecretDisable'];
    }

    /**
     * Sets lookupSecretDisable
     *
     * @param bool|null $lookupSecretDisable Disables this method if true.
     *
     * @return self
     */
    public function setLookupSecretDisable($lookupSecretDisable)
    {
        $this->container['lookupSecretDisable'] = $lookupSecretDisable;

        return $this;
    }

    /**
     * Gets lookupSecretRegenerate
     *
     * @return bool|null
     */
    public function getLookupSecretRegenerate()
    {
        return $this->container['lookupSecretRegenerate'];
    }

    /**
     * Sets lookupSecretRegenerate
     *
     * @param bool|null $lookupSecretRegenerate If set to true will regenerate the lookup secrets
     *
     * @return self
     */
    public function setLookupSecretRegenerate($lookupSecretRegenerate)
    {
        $this->container['lookupSecretRegenerate'] = $lookupSecretRegenerate;

        return $this;
    }

    /**
     * Gets lookupSecretReveal
     *
     * @return bool|null
     */
    public function getLookupSecretReveal()
    {
        return $this->container['lookupSecretReveal'];
    }

    /**
     * Sets lookupSecretReveal
     *
     * @param bool|null $lookupSecretReveal If set to true will reveal the lookup secrets
     *
     * @return self
     */
    public function setLookupSecretReveal($lookupSecretReveal)
    {
        $this->container['lookupSecretReveal'] = $lookupSecretReveal;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method Method  Should be set to \"lookup\" when trying to add, update, or remove a lookup pairing.
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

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


