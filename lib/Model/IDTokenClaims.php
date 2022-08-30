<?php
/**
 * IDTokenClaims
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
 * The version of the OpenAPI document: v0.2.0-alpha.23
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
 * IDTokenClaims Class Doc Comment
 *
 * @category Class
 * @description IDTokenClaims represent the claims used in open id connect requests
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IDTokenClaims implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IDTokenClaims';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acr' => 'string',
        'amr' => 'string[]',
        'atHash' => 'string',
        'aud' => 'string[]',
        'authTime' => '\DateTime',
        'cHash' => 'string',
        'exp' => '\DateTime',
        'ext' => 'array<string,object>',
        'iat' => '\DateTime',
        'iss' => 'string',
        'jti' => 'string',
        'nonce' => 'string',
        'rat' => '\DateTime',
        'sub' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acr' => null,
        'amr' => null,
        'atHash' => null,
        'aud' => null,
        'authTime' => 'date-time',
        'cHash' => null,
        'exp' => 'date-time',
        'ext' => null,
        'iat' => 'date-time',
        'iss' => null,
        'jti' => null,
        'nonce' => null,
        'rat' => 'date-time',
        'sub' => null
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
        'acr' => 'acr',
        'amr' => 'amr',
        'atHash' => 'at_hash',
        'aud' => 'aud',
        'authTime' => 'auth_time',
        'cHash' => 'c_hash',
        'exp' => 'exp',
        'ext' => 'ext',
        'iat' => 'iat',
        'iss' => 'iss',
        'jti' => 'jti',
        'nonce' => 'nonce',
        'rat' => 'rat',
        'sub' => 'sub'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acr' => 'setAcr',
        'amr' => 'setAmr',
        'atHash' => 'setAtHash',
        'aud' => 'setAud',
        'authTime' => 'setAuthTime',
        'cHash' => 'setCHash',
        'exp' => 'setExp',
        'ext' => 'setExt',
        'iat' => 'setIat',
        'iss' => 'setIss',
        'jti' => 'setJti',
        'nonce' => 'setNonce',
        'rat' => 'setRat',
        'sub' => 'setSub'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acr' => 'getAcr',
        'amr' => 'getAmr',
        'atHash' => 'getAtHash',
        'aud' => 'getAud',
        'authTime' => 'getAuthTime',
        'cHash' => 'getCHash',
        'exp' => 'getExp',
        'ext' => 'getExt',
        'iat' => 'getIat',
        'iss' => 'getIss',
        'jti' => 'getJti',
        'nonce' => 'getNonce',
        'rat' => 'getRat',
        'sub' => 'getSub'
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
        $this->container['acr'] = $data['acr'] ?? null;
        $this->container['amr'] = $data['amr'] ?? null;
        $this->container['atHash'] = $data['atHash'] ?? null;
        $this->container['aud'] = $data['aud'] ?? null;
        $this->container['authTime'] = $data['authTime'] ?? null;
        $this->container['cHash'] = $data['cHash'] ?? null;
        $this->container['exp'] = $data['exp'] ?? null;
        $this->container['ext'] = $data['ext'] ?? null;
        $this->container['iat'] = $data['iat'] ?? null;
        $this->container['iss'] = $data['iss'] ?? null;
        $this->container['jti'] = $data['jti'] ?? null;
        $this->container['nonce'] = $data['nonce'] ?? null;
        $this->container['rat'] = $data['rat'] ?? null;
        $this->container['sub'] = $data['sub'] ?? null;
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
     * Gets acr
     *
     * @return string|null
     */
    public function getAcr()
    {
        return $this->container['acr'];
    }

    /**
     * Sets acr
     *
     * @param string|null $acr acr
     *
     * @return self
     */
    public function setAcr($acr)
    {
        $this->container['acr'] = $acr;

        return $this;
    }

    /**
     * Gets amr
     *
     * @return string[]|null
     */
    public function getAmr()
    {
        return $this->container['amr'];
    }

    /**
     * Sets amr
     *
     * @param string[]|null $amr amr
     *
     * @return self
     */
    public function setAmr($amr)
    {
        $this->container['amr'] = $amr;

        return $this;
    }

    /**
     * Gets atHash
     *
     * @return string|null
     */
    public function getAtHash()
    {
        return $this->container['atHash'];
    }

    /**
     * Sets atHash
     *
     * @param string|null $atHash atHash
     *
     * @return self
     */
    public function setAtHash($atHash)
    {
        $this->container['atHash'] = $atHash;

        return $this;
    }

    /**
     * Gets aud
     *
     * @return string[]|null
     */
    public function getAud()
    {
        return $this->container['aud'];
    }

    /**
     * Sets aud
     *
     * @param string[]|null $aud aud
     *
     * @return self
     */
    public function setAud($aud)
    {
        $this->container['aud'] = $aud;

        return $this;
    }

    /**
     * Gets authTime
     *
     * @return \DateTime|null
     */
    public function getAuthTime()
    {
        return $this->container['authTime'];
    }

    /**
     * Sets authTime
     *
     * @param \DateTime|null $authTime authTime
     *
     * @return self
     */
    public function setAuthTime($authTime)
    {
        $this->container['authTime'] = $authTime;

        return $this;
    }

    /**
     * Gets cHash
     *
     * @return string|null
     */
    public function getCHash()
    {
        return $this->container['cHash'];
    }

    /**
     * Sets cHash
     *
     * @param string|null $cHash cHash
     *
     * @return self
     */
    public function setCHash($cHash)
    {
        $this->container['cHash'] = $cHash;

        return $this;
    }

    /**
     * Gets exp
     *
     * @return \DateTime|null
     */
    public function getExp()
    {
        return $this->container['exp'];
    }

    /**
     * Sets exp
     *
     * @param \DateTime|null $exp exp
     *
     * @return self
     */
    public function setExp($exp)
    {
        $this->container['exp'] = $exp;

        return $this;
    }

    /**
     * Gets ext
     *
     * @return array<string,object>|null
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param array<string,object>|null $ext ext
     *
     * @return self
     */
    public function setExt($ext)
    {
        $this->container['ext'] = $ext;

        return $this;
    }

    /**
     * Gets iat
     *
     * @return \DateTime|null
     */
    public function getIat()
    {
        return $this->container['iat'];
    }

    /**
     * Sets iat
     *
     * @param \DateTime|null $iat iat
     *
     * @return self
     */
    public function setIat($iat)
    {
        $this->container['iat'] = $iat;

        return $this;
    }

    /**
     * Gets iss
     *
     * @return string|null
     */
    public function getIss()
    {
        return $this->container['iss'];
    }

    /**
     * Sets iss
     *
     * @param string|null $iss iss
     *
     * @return self
     */
    public function setIss($iss)
    {
        $this->container['iss'] = $iss;

        return $this;
    }

    /**
     * Gets jti
     *
     * @return string|null
     */
    public function getJti()
    {
        return $this->container['jti'];
    }

    /**
     * Sets jti
     *
     * @param string|null $jti jti
     *
     * @return self
     */
    public function setJti($jti)
    {
        $this->container['jti'] = $jti;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return string|null
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param string|null $nonce nonce
     *
     * @return self
     */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets rat
     *
     * @return \DateTime|null
     */
    public function getRat()
    {
        return $this->container['rat'];
    }

    /**
     * Sets rat
     *
     * @param \DateTime|null $rat rat
     *
     * @return self
     */
    public function setRat($rat)
    {
        $this->container['rat'] = $rat;

        return $this;
    }

    /**
     * Gets sub
     *
     * @return string|null
     */
    public function getSub()
    {
        return $this->container['sub'];
    }

    /**
     * Sets sub
     *
     * @param string|null $sub sub
     *
     * @return self
     */
    public function setSub($sub)
    {
        $this->container['sub'] = $sub;

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


