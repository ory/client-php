<?php
/**
 * NormalizedProjectRevisionIdentitySchema
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
 * The version of the OpenAPI document: v0.2.0-alpha.38
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
 * NormalizedProjectRevisionIdentitySchema Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NormalizedProjectRevisionIdentitySchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'normalizedProjectRevisionIdentitySchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'createdAt' => '\DateTime',
        'id' => 'string',
        'identitySchema' => '\Ory\Client\Model\ManagedIdentitySchema',
        'identitySchemaId' => 'string',
        'importId' => 'string',
        'importUrl' => 'string',
        'isDefault' => 'bool',
        'preset' => 'string',
        'projectRevisionId' => 'string',
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
        'id' => 'uuid',
        'identitySchema' => null,
        'identitySchemaId' => 'uuid4',
        'importId' => null,
        'importUrl' => null,
        'isDefault' => null,
        'preset' => null,
        'projectRevisionId' => 'uuid',
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
        'id' => 'id',
        'identitySchema' => 'identity_schema',
        'identitySchemaId' => 'identity_schema_id',
        'importId' => 'import_id',
        'importUrl' => 'import_url',
        'isDefault' => 'is_default',
        'preset' => 'preset',
        'projectRevisionId' => 'project_revision_id',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createdAt' => 'setCreatedAt',
        'id' => 'setId',
        'identitySchema' => 'setIdentitySchema',
        'identitySchemaId' => 'setIdentitySchemaId',
        'importId' => 'setImportId',
        'importUrl' => 'setImportUrl',
        'isDefault' => 'setIsDefault',
        'preset' => 'setPreset',
        'projectRevisionId' => 'setProjectRevisionId',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createdAt' => 'getCreatedAt',
        'id' => 'getId',
        'identitySchema' => 'getIdentitySchema',
        'identitySchemaId' => 'getIdentitySchemaId',
        'importId' => 'getImportId',
        'importUrl' => 'getImportUrl',
        'isDefault' => 'getIsDefault',
        'preset' => 'getPreset',
        'projectRevisionId' => 'getProjectRevisionId',
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
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['identitySchema'] = $data['identitySchema'] ?? null;
        $this->container['identitySchemaId'] = $data['identitySchemaId'] ?? null;
        $this->container['importId'] = $data['importId'] ?? null;
        $this->container['importUrl'] = $data['importUrl'] ?? null;
        $this->container['isDefault'] = $data['isDefault'] ?? null;
        $this->container['preset'] = $data['preset'] ?? null;
        $this->container['projectRevisionId'] = $data['projectRevisionId'] ?? null;
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
     * @param string|null $id The unique ID of this entry.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets identitySchema
     *
     * @return \Ory\Client\Model\ManagedIdentitySchema|null
     */
    public function getIdentitySchema()
    {
        return $this->container['identitySchema'];
    }

    /**
     * Sets identitySchema
     *
     * @param \Ory\Client\Model\ManagedIdentitySchema|null $identitySchema identitySchema
     *
     * @return self
     */
    public function setIdentitySchema($identitySchema)
    {
        $this->container['identitySchema'] = $identitySchema;

        return $this;
    }

    /**
     * Gets identitySchemaId
     *
     * @return string|null
     */
    public function getIdentitySchemaId()
    {
        return $this->container['identitySchemaId'];
    }

    /**
     * Sets identitySchemaId
     *
     * @param string|null $identitySchemaId identitySchemaId
     *
     * @return self
     */
    public function setIdentitySchemaId($identitySchemaId)
    {
        $this->container['identitySchemaId'] = $identitySchemaId;

        return $this;
    }

    /**
     * Gets importId
     *
     * @return string|null
     */
    public function getImportId()
    {
        return $this->container['importId'];
    }

    /**
     * Sets importId
     *
     * @param string|null $importId The imported (named) ID of the Identity Schema referenced in the Ory Kratos config.
     *
     * @return self
     */
    public function setImportId($importId)
    {
        $this->container['importId'] = $importId;

        return $this;
    }

    /**
     * Gets importUrl
     *
     * @return string|null
     */
    public function getImportUrl()
    {
        return $this->container['importUrl'];
    }

    /**
     * Sets importUrl
     *
     * @param string|null $importUrl The ImportURL can be used to import an Identity Schema from a bse64 encoded string. In the future, this key also support HTTPS and other sources!  If you import an Ory Kratos configuration, this would be akin to the `identity.schemas.#.url` key.  The configuration will always return the import URL when you fetch it from the API.
     *
     * @return self
     */
    public function setImportUrl($importUrl)
    {
        $this->container['importUrl'] = $importUrl;

        return $this;
    }

    /**
     * Gets isDefault
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
     * Sets isDefault
     *
     * @param bool|null $isDefault If true sets the default schema for identities  Only one schema can ever be the default schema. If you try to add two schemas with default to true, the request will fail.
     *
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;

        return $this;
    }

    /**
     * Gets preset
     *
     * @return string|null
     */
    public function getPreset()
    {
        return $this->container['preset'];
    }

    /**
     * Sets preset
     *
     * @param string|null $preset Use a preset instead of a custom identity schema.
     *
     * @return self
     */
    public function setPreset($preset)
    {
        $this->container['preset'] = $preset;

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


