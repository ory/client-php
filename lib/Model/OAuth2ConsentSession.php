<?php
/**
 * OAuth2ConsentSession
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
 * OAuth2ConsentSession Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OAuth2ConsentSession implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'oAuth2ConsentSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allowedTopLevelClaims' => 'string[]',
        'clientId' => 'string',
        'consentChallenge' => 'string',
        'excludeNotBeforeClaim' => 'bool',
        'expiresAt' => '\Ory\Client\Model\OAuth2ConsentSessionExpiresAt',
        'extra' => 'array<string,object>',
        'headers' => '\Ory\Client\Model\Headers',
        'idTokenClaims' => '\Ory\Client\Model\IDTokenClaims',
        'kid' => 'string',
        'subject' => 'string',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allowedTopLevelClaims' => null,
        'clientId' => null,
        'consentChallenge' => null,
        'excludeNotBeforeClaim' => null,
        'expiresAt' => null,
        'extra' => null,
        'headers' => null,
        'idTokenClaims' => null,
        'kid' => null,
        'subject' => null,
        'username' => null
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
        'allowedTopLevelClaims' => 'allowed_top_level_claims',
        'clientId' => 'client_id',
        'consentChallenge' => 'consent_challenge',
        'excludeNotBeforeClaim' => 'exclude_not_before_claim',
        'expiresAt' => 'expires_at',
        'extra' => 'extra',
        'headers' => 'headers',
        'idTokenClaims' => 'id_token_claims',
        'kid' => 'kid',
        'subject' => 'subject',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowedTopLevelClaims' => 'setAllowedTopLevelClaims',
        'clientId' => 'setClientId',
        'consentChallenge' => 'setConsentChallenge',
        'excludeNotBeforeClaim' => 'setExcludeNotBeforeClaim',
        'expiresAt' => 'setExpiresAt',
        'extra' => 'setExtra',
        'headers' => 'setHeaders',
        'idTokenClaims' => 'setIdTokenClaims',
        'kid' => 'setKid',
        'subject' => 'setSubject',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowedTopLevelClaims' => 'getAllowedTopLevelClaims',
        'clientId' => 'getClientId',
        'consentChallenge' => 'getConsentChallenge',
        'excludeNotBeforeClaim' => 'getExcludeNotBeforeClaim',
        'expiresAt' => 'getExpiresAt',
        'extra' => 'getExtra',
        'headers' => 'getHeaders',
        'idTokenClaims' => 'getIdTokenClaims',
        'kid' => 'getKid',
        'subject' => 'getSubject',
        'username' => 'getUsername'
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
        $this->container['allowedTopLevelClaims'] = $data['allowedTopLevelClaims'] ?? null;
        $this->container['clientId'] = $data['clientId'] ?? null;
        $this->container['consentChallenge'] = $data['consentChallenge'] ?? null;
        $this->container['excludeNotBeforeClaim'] = $data['excludeNotBeforeClaim'] ?? null;
        $this->container['expiresAt'] = $data['expiresAt'] ?? null;
        $this->container['extra'] = $data['extra'] ?? null;
        $this->container['headers'] = $data['headers'] ?? null;
        $this->container['idTokenClaims'] = $data['idTokenClaims'] ?? null;
        $this->container['kid'] = $data['kid'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['username'] = $data['username'] ?? null;
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
     * Gets allowedTopLevelClaims
     *
     * @return string[]|null
     */
    public function getAllowedTopLevelClaims()
    {
        return $this->container['allowedTopLevelClaims'];
    }

    /**
     * Sets allowedTopLevelClaims
     *
     * @param string[]|null $allowedTopLevelClaims allowedTopLevelClaims
     *
     * @return self
     */
    public function setAllowedTopLevelClaims($allowedTopLevelClaims)
    {
        $this->container['allowedTopLevelClaims'] = $allowedTopLevelClaims;

        return $this;
    }

    /**
     * Gets clientId
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     *
     * @param string|null $clientId clientId
     *
     * @return self
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets consentChallenge
     *
     * @return string|null
     */
    public function getConsentChallenge()
    {
        return $this->container['consentChallenge'];
    }

    /**
     * Sets consentChallenge
     *
     * @param string|null $consentChallenge consentChallenge
     *
     * @return self
     */
    public function setConsentChallenge($consentChallenge)
    {
        $this->container['consentChallenge'] = $consentChallenge;

        return $this;
    }

    /**
     * Gets excludeNotBeforeClaim
     *
     * @return bool|null
     */
    public function getExcludeNotBeforeClaim()
    {
        return $this->container['excludeNotBeforeClaim'];
    }

    /**
     * Sets excludeNotBeforeClaim
     *
     * @param bool|null $excludeNotBeforeClaim excludeNotBeforeClaim
     *
     * @return self
     */
    public function setExcludeNotBeforeClaim($excludeNotBeforeClaim)
    {
        $this->container['excludeNotBeforeClaim'] = $excludeNotBeforeClaim;

        return $this;
    }

    /**
     * Gets expiresAt
     *
     * @return \Ory\Client\Model\OAuth2ConsentSessionExpiresAt|null
     */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
     * Sets expiresAt
     *
     * @param \Ory\Client\Model\OAuth2ConsentSessionExpiresAt|null $expiresAt expiresAt
     *
     * @return self
     */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;

        return $this;
    }

    /**
     * Gets extra
     *
     * @return array<string,object>|null
     */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
     * Sets extra
     *
     * @param array<string,object>|null $extra extra
     *
     * @return self
     */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return \Ory\Client\Model\Headers|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param \Ory\Client\Model\Headers|null $headers headers
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets idTokenClaims
     *
     * @return \Ory\Client\Model\IDTokenClaims|null
     */
    public function getIdTokenClaims()
    {
        return $this->container['idTokenClaims'];
    }

    /**
     * Sets idTokenClaims
     *
     * @param \Ory\Client\Model\IDTokenClaims|null $idTokenClaims idTokenClaims
     *
     * @return self
     */
    public function setIdTokenClaims($idTokenClaims)
    {
        $this->container['idTokenClaims'] = $idTokenClaims;

        return $this;
    }

    /**
     * Gets kid
     *
     * @return string|null
     */
    public function getKid()
    {
        return $this->container['kid'];
    }

    /**
     * Sets kid
     *
     * @param string|null $kid kid
     *
     * @return self
     */
    public function setKid($kid)
    {
        $this->container['kid'] = $kid;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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


