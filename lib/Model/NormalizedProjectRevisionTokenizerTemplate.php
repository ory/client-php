<?php
/**
 * NormalizedProjectRevisionTokenizerTemplate
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
 * The version of the OpenAPI document: v1.4.9
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
 * NormalizedProjectRevisionTokenizerTemplate Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NormalizedProjectRevisionTokenizerTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'normalizedProjectRevisionTokenizerTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'claimsMapperUrl' => 'string',
        'createdAt' => '\DateTime',
        'id' => 'string',
        'jwksUrl' => 'string',
        'key' => 'string',
        'projectRevisionId' => 'string',
        'ttl' => 'string',
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
        'claimsMapperUrl' => null,
        'createdAt' => 'date-time',
        'id' => 'uuid',
        'jwksUrl' => null,
        'key' => null,
        'projectRevisionId' => 'uuid',
        'ttl' => null,
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
        'claimsMapperUrl' => 'claims_mapper_url',
        'createdAt' => 'created_at',
        'id' => 'id',
        'jwksUrl' => 'jwks_url',
        'key' => 'key',
        'projectRevisionId' => 'project_revision_id',
        'ttl' => 'ttl',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'claimsMapperUrl' => 'setClaimsMapperUrl',
        'createdAt' => 'setCreatedAt',
        'id' => 'setId',
        'jwksUrl' => 'setJwksUrl',
        'key' => 'setKey',
        'projectRevisionId' => 'setProjectRevisionId',
        'ttl' => 'setTtl',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'claimsMapperUrl' => 'getClaimsMapperUrl',
        'createdAt' => 'getCreatedAt',
        'id' => 'getId',
        'jwksUrl' => 'getJwksUrl',
        'key' => 'getKey',
        'projectRevisionId' => 'getProjectRevisionId',
        'ttl' => 'getTtl',
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
        $this->container['claimsMapperUrl'] = $data['claimsMapperUrl'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['jwksUrl'] = $data['jwksUrl'] ?? null;
        $this->container['key'] = $data['key'] ?? null;
        $this->container['projectRevisionId'] = $data['projectRevisionId'] ?? null;
        $this->container['ttl'] = $data['ttl'] ?? '1m';
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

        if (!is_null($this->container['ttl']) && !preg_match("/^[0-9]+(ns|us|ms|s|m|h)$/", $this->container['ttl'])) {
            $invalidProperties[] = "invalid value for 'ttl', must be conform to the pattern /^[0-9]+(ns|us|ms|s|m|h)$/.";
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
     * Gets claimsMapperUrl
     *
     * @return string|null
     */
    public function getClaimsMapperUrl()
    {
        return $this->container['claimsMapperUrl'];
    }

    /**
     * Sets claimsMapperUrl
     *
     * @param string|null $claimsMapperUrl Claims mapper URL
     *
     * @return self
     */
    public function setClaimsMapperUrl($claimsMapperUrl)
    {
        $this->container['claimsMapperUrl'] = $claimsMapperUrl;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt The Project's Revision Creation Date
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The revision ID.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets jwksUrl
     *
     * @return string|null
     */
    public function getJwksUrl()
    {
        return $this->container['jwksUrl'];
    }

    /**
     * Sets jwksUrl
     *
     * @param string|null $jwksUrl JSON Web Key URL
     *
     * @return self
     */
    public function setJwksUrl($jwksUrl)
    {
        $this->container['jwksUrl'] = $jwksUrl;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key The unique key of the template
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets projectRevisionId
     *
     * @return string|null
     */
    public function getProjectRevisionId()
    {
        return $this->container['projectRevisionId'];
    }

    /**
     * Sets projectRevisionId
     *
     * @param string|null $projectRevisionId The Revision's ID this schema belongs to
     *
     * @return self
     */
    public function setProjectRevisionId($projectRevisionId)
    {
        $this->container['projectRevisionId'] = $projectRevisionId;

        return $this;
    }

    /**
     * Gets ttl
     *
     * @return string|null
     */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
     * Sets ttl
     *
     * @param string|null $ttl Token time to live
     *
     * @return self
     */
    public function setTtl($ttl)
    {

        if (!is_null($ttl) && (!preg_match("/^[0-9]+(ns|us|ms|s|m|h)$/", $ttl))) {
            throw new \InvalidArgumentException("invalid value for $ttl when calling NormalizedProjectRevisionTokenizerTemplate., must conform to the pattern /^[0-9]+(ns|us|ms|s|m|h)$/.");
        }

        $this->container['ttl'] = $ttl;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt Last Time Project's Revision was Updated
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


