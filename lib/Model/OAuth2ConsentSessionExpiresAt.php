<?php
/**
 * OAuth2ConsentSessionExpiresAt
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
 * The version of the OpenAPI document: v1.4.0
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
 * OAuth2ConsentSessionExpiresAt Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OAuth2ConsentSessionExpiresAt implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'oAuth2ConsentSession_expires_at';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accessToken' => '\DateTime',
        'authorizeCode' => '\DateTime',
        'idToken' => '\DateTime',
        'parContext' => '\DateTime',
        'refreshToken' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accessToken' => 'date-time',
        'authorizeCode' => 'date-time',
        'idToken' => 'date-time',
        'parContext' => 'date-time',
        'refreshToken' => 'date-time'
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
        'accessToken' => 'access_token',
        'authorizeCode' => 'authorize_code',
        'idToken' => 'id_token',
        'parContext' => 'par_context',
        'refreshToken' => 'refresh_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessToken' => 'setAccessToken',
        'authorizeCode' => 'setAuthorizeCode',
        'idToken' => 'setIdToken',
        'parContext' => 'setParContext',
        'refreshToken' => 'setRefreshToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessToken' => 'getAccessToken',
        'authorizeCode' => 'getAuthorizeCode',
        'idToken' => 'getIdToken',
        'parContext' => 'getParContext',
        'refreshToken' => 'getRefreshToken'
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
        $this->container['accessToken'] = $data['accessToken'] ?? null;
        $this->container['authorizeCode'] = $data['authorizeCode'] ?? null;
        $this->container['idToken'] = $data['idToken'] ?? null;
        $this->container['parContext'] = $data['parContext'] ?? null;
        $this->container['refreshToken'] = $data['refreshToken'] ?? null;
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
     * Gets accessToken
     *
     * @return \DateTime|null
     */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
     * Sets accessToken
     *
     * @param \DateTime|null $accessToken accessToken
     *
     * @return self
     */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;

        return $this;
    }

    /**
     * Gets authorizeCode
     *
     * @return \DateTime|null
     */
    public function getAuthorizeCode()
    {
        return $this->container['authorizeCode'];
    }

    /**
     * Sets authorizeCode
     *
     * @param \DateTime|null $authorizeCode authorizeCode
     *
     * @return self
     */
    public function setAuthorizeCode($authorizeCode)
    {
        $this->container['authorizeCode'] = $authorizeCode;

        return $this;
    }

    /**
     * Gets idToken
     *
     * @return \DateTime|null
     */
    public function getIdToken()
    {
        return $this->container['idToken'];
    }

    /**
     * Sets idToken
     *
     * @param \DateTime|null $idToken idToken
     *
     * @return self
     */
    public function setIdToken($idToken)
    {
        $this->container['idToken'] = $idToken;

        return $this;
    }

    /**
     * Gets parContext
     *
     * @return \DateTime|null
     */
    public function getParContext()
    {
        return $this->container['parContext'];
    }

    /**
     * Sets parContext
     *
     * @param \DateTime|null $parContext parContext
     *
     * @return self
     */
    public function setParContext($parContext)
    {
        $this->container['parContext'] = $parContext;

        return $this;
    }

    /**
     * Gets refreshToken
     *
     * @return \DateTime|null
     */
    public function getRefreshToken()
    {
        return $this->container['refreshToken'];
    }

    /**
     * Sets refreshToken
     *
     * @param \DateTime|null $refreshToken refreshToken
     *
     * @return self
     */
    public function setRefreshToken($refreshToken)
    {
        $this->container['refreshToken'] = $refreshToken;

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


