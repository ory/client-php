<?php
/**
 * UpdateRegistrationFlowBody
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
 * The version of the OpenAPI document: v1.1.48
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
 * UpdateRegistrationFlowBody Class Doc Comment
 *
 * @category Class
 * @description Update Registration Request Body
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateRegistrationFlowBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'method';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'updateRegistrationFlowBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'csrfToken' => 'string',
        'method' => 'string',
        'password' => 'string',
        'traits' => 'object',
        'transientPayload' => 'object',
        'provider' => 'string',
        'upstreamParameters' => 'object',
        'webauthnRegister' => 'string',
        'webauthnRegisterDisplayname' => 'string'
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
        'method' => null,
        'password' => null,
        'traits' => null,
        'transientPayload' => null,
        'provider' => null,
        'upstreamParameters' => null,
        'webauthnRegister' => null,
        'webauthnRegisterDisplayname' => null
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
        'method' => 'method',
        'password' => 'password',
        'traits' => 'traits',
        'transientPayload' => 'transient_payload',
        'provider' => 'provider',
        'upstreamParameters' => 'upstream_parameters',
        'webauthnRegister' => 'webauthn_register',
        'webauthnRegisterDisplayname' => 'webauthn_register_displayname'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'csrfToken' => 'setCsrfToken',
        'method' => 'setMethod',
        'password' => 'setPassword',
        'traits' => 'setTraits',
        'transientPayload' => 'setTransientPayload',
        'provider' => 'setProvider',
        'upstreamParameters' => 'setUpstreamParameters',
        'webauthnRegister' => 'setWebauthnRegister',
        'webauthnRegisterDisplayname' => 'setWebauthnRegisterDisplayname'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'csrfToken' => 'getCsrfToken',
        'method' => 'getMethod',
        'password' => 'getPassword',
        'traits' => 'getTraits',
        'transientPayload' => 'getTransientPayload',
        'provider' => 'getProvider',
        'upstreamParameters' => 'getUpstreamParameters',
        'webauthnRegister' => 'getWebauthnRegister',
        'webauthnRegisterDisplayname' => 'getWebauthnRegisterDisplayname'
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
        $this->container['method'] = $data['method'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['traits'] = $data['traits'] ?? null;
        $this->container['transientPayload'] = $data['transientPayload'] ?? null;
        $this->container['provider'] = $data['provider'] ?? null;
        $this->container['upstreamParameters'] = $data['upstreamParameters'] ?? null;
        $this->container['webauthnRegister'] = $data['webauthnRegister'] ?? null;
        $this->container['webauthnRegisterDisplayname'] = $data['webauthnRegisterDisplayname'] ?? null;

        // Initialize discriminator property with the model name.
        $this->container['method'] = static::$openAPIModelName;
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
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['traits'] === null) {
            $invalidProperties[] = "'traits' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
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
     * @param string $method Method  Should be set to \"webauthn\" when trying to add, update, or remove a webAuthn pairing.
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Password to sign the user up with
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets traits
     *
     * @return object
     */
    public function getTraits()
    {
        return $this->container['traits'];
    }

    /**
     * Sets traits
     *
     * @param object $traits The identity's traits
     *
     * @return self
     */
    public function setTraits($traits)
    {
        $this->container['traits'] = $traits;

        return $this;
    }

    /**
     * Gets transientPayload
     *
     * @return object|null
     */
    public function getTransientPayload()
    {
        return $this->container['transientPayload'];
    }

    /**
     * Sets transientPayload
     *
     * @param object|null $transientPayload Transient data to pass along to any webhooks
     *
     * @return self
     */
    public function setTransientPayload($transientPayload)
    {
        $this->container['transientPayload'] = $transientPayload;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider The provider to register with
     *
     * @return self
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets upstreamParameters
     *
     * @return object|null
     */
    public function getUpstreamParameters()
    {
        return $this->container['upstreamParameters'];
    }

    /**
     * Sets upstreamParameters
     *
     * @param object|null $upstreamParameters UpstreamParameters are the parameters that are passed to the upstream identity provider.  These parameters are optional and depend on what the upstream identity provider supports. Supported parameters are: `login_hint` (string): The `login_hint` parameter suppresses the account chooser and either pre-fills the email box on the sign-in form, or selects the proper session. `hd` (string): The `hd` parameter limits the login/registration process to a Google Organization, e.g. `mycollege.edu`. `prompt` (string): The `prompt` specifies whether the Authorization Server prompts the End-User for reauthentication and consent, e.g. `select_account`.
     *
     * @return self
     */
    public function setUpstreamParameters($upstreamParameters)
    {
        $this->container['upstreamParameters'] = $upstreamParameters;

        return $this;
    }

    /**
     * Gets webauthnRegister
     *
     * @return string|null
     */
    public function getWebauthnRegister()
    {
        return $this->container['webauthnRegister'];
    }

    /**
     * Sets webauthnRegister
     *
     * @param string|null $webauthnRegister Register a WebAuthn Security Key  It is expected that the JSON returned by the WebAuthn registration process is included here.
     *
     * @return self
     */
    public function setWebauthnRegister($webauthnRegister)
    {
        $this->container['webauthnRegister'] = $webauthnRegister;

        return $this;
    }

    /**
     * Gets webauthnRegisterDisplayname
     *
     * @return string|null
     */
    public function getWebauthnRegisterDisplayname()
    {
        return $this->container['webauthnRegisterDisplayname'];
    }

    /**
     * Sets webauthnRegisterDisplayname
     *
     * @param string|null $webauthnRegisterDisplayname Name of the WebAuthn Security Key to be Added  A human-readable name for the security key which will be added.
     *
     * @return self
     */
    public function setWebauthnRegisterDisplayname($webauthnRegisterDisplayname)
    {
        $this->container['webauthnRegisterDisplayname'] = $webauthnRegisterDisplayname;

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


