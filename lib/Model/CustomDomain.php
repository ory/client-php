<?php
/**
 * CustomDomain
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ory APIs
 *
 * # Introduction Documentation for all public and administrative Ory APIs. Administrative APIs can only be accessed with a valid Personal Access Token. Public APIs are mostly used in browsers.  ## SDKs This document describes the APIs available in the Ory Network. The APIs are available as SDKs for the following languages:  | Language       | Download SDK                                                     | Documentation                                                                        | | -------------- | ---------------------------------------------------------------- | ------------------------------------------------------------------------------------ | | Dart           | [pub.dev](https://pub.dev/packages/ory_client)                   | [README](https://github.com/ory/sdk/blob/master/clients/client/dart/README.md)       | | .NET           | [nuget.org](https://www.nuget.org/packages/Ory.Client/)          | [README](https://github.com/ory/sdk/blob/master/clients/client/dotnet/README.md)     | | Elixir         | [hex.pm](https://hex.pm/packages/ory_client)                     | [README](https://github.com/ory/sdk/blob/master/clients/client/elixir/README.md)     | | Go             | [github.com](https://github.com/ory/client-go)                   | [README](https://github.com/ory/sdk/blob/master/clients/client/go/README.md)         | | Java           | [maven.org](https://search.maven.org/artifact/sh.ory/ory-client) | [README](https://github.com/ory/sdk/blob/master/clients/client/java/README.md)       | | JavaScript     | [npmjs.com](https://www.npmjs.com/package/@ory/client)           | [README](https://github.com/ory/sdk/blob/master/clients/client/typescript/README.md) | | JavaScript (With fetch) | [npmjs.com](https://www.npmjs.com/package/@ory/client-fetch)           | [README](https://github.com/ory/sdk/blob/master/clients/client/typescript-fetch/README.md) |  | PHP            | [packagist.org](https://packagist.org/packages/ory/client)       | [README](https://github.com/ory/sdk/blob/master/clients/client/php/README.md)        | | Python         | [pypi.org](https://pypi.org/project/ory-client/)                 | [README](https://github.com/ory/sdk/blob/master/clients/client/python/README.md)     | | Ruby           | [rubygems.org](https://rubygems.org/gems/ory-client)             | [README](https://github.com/ory/sdk/blob/master/clients/client/ruby/README.md)       | | Rust           | [crates.io](https://crates.io/crates/ory-client)                 | [README](https://github.com/ory/sdk/blob/master/clients/client/rust/README.md)       |
 *
 * The version of the OpenAPI document: v1.16.0
 * Contact: support@ory.sh
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
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
 * CustomDomain Class Doc Comment
 *
 * @category Class
 * @description Custom Hostname
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomDomain implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'customDomain';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cookieDomain' => 'string',
        'corsAllowedOrigins' => 'string[]',
        'corsEnabled' => 'bool',
        'createdAt' => '\DateTime',
        'customUiBaseUrl' => 'string',
        'hostname' => 'string',
        'id' => 'string',
        'sslStatus' => 'string',
        'updatedAt' => '\DateTime',
        'verificationErrors' => 'string[]',
        'verificationStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cookieDomain' => null,
        'corsAllowedOrigins' => null,
        'corsEnabled' => null,
        'createdAt' => 'date-time',
        'customUiBaseUrl' => null,
        'hostname' => null,
        'id' => 'uuid',
        'sslStatus' => null,
        'updatedAt' => 'date-time',
        'verificationErrors' => null,
        'verificationStatus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cookieDomain' => false,
        'corsAllowedOrigins' => false,
        'corsEnabled' => false,
        'createdAt' => false,
        'customUiBaseUrl' => false,
        'hostname' => false,
        'id' => false,
        'sslStatus' => false,
        'updatedAt' => false,
        'verificationErrors' => false,
        'verificationStatus' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cookieDomain' => 'cookie_domain',
        'corsAllowedOrigins' => 'cors_allowed_origins',
        'corsEnabled' => 'cors_enabled',
        'createdAt' => 'created_at',
        'customUiBaseUrl' => 'custom_ui_base_url',
        'hostname' => 'hostname',
        'id' => 'id',
        'sslStatus' => 'ssl_status',
        'updatedAt' => 'updated_at',
        'verificationErrors' => 'verification_errors',
        'verificationStatus' => 'verification_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cookieDomain' => 'setCookieDomain',
        'corsAllowedOrigins' => 'setCorsAllowedOrigins',
        'corsEnabled' => 'setCorsEnabled',
        'createdAt' => 'setCreatedAt',
        'customUiBaseUrl' => 'setCustomUiBaseUrl',
        'hostname' => 'setHostname',
        'id' => 'setId',
        'sslStatus' => 'setSslStatus',
        'updatedAt' => 'setUpdatedAt',
        'verificationErrors' => 'setVerificationErrors',
        'verificationStatus' => 'setVerificationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cookieDomain' => 'getCookieDomain',
        'corsAllowedOrigins' => 'getCorsAllowedOrigins',
        'corsEnabled' => 'getCorsEnabled',
        'createdAt' => 'getCreatedAt',
        'customUiBaseUrl' => 'getCustomUiBaseUrl',
        'hostname' => 'getHostname',
        'id' => 'getId',
        'sslStatus' => 'getSslStatus',
        'updatedAt' => 'getUpdatedAt',
        'verificationErrors' => 'getVerificationErrors',
        'verificationStatus' => 'getVerificationStatus'
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

    public const SSL_STATUS_INITIALIZING = 'initializing';
    public const SSL_STATUS_PENDING_VALIDATION = 'pending_validation';
    public const SSL_STATUS_DELETED = 'deleted';
    public const SSL_STATUS_PENDING_ISSUANCE = 'pending_issuance';
    public const SSL_STATUS_PENDING_DEPLOYMENT = 'pending_deployment';
    public const SSL_STATUS_PENDING_DELETION = 'pending_deletion';
    public const SSL_STATUS_PENDING_EXPIRATION = 'pending_expiration';
    public const SSL_STATUS_EXPIRED = 'expired';
    public const SSL_STATUS_ACTIVE = 'active';
    public const SSL_STATUS_INITIALIZING_TIMED_OUT = 'initializing_timed_out';
    public const SSL_STATUS_VALIDATION_TIMED_OUT = 'validation_timed_out';
    public const SSL_STATUS_ISSUANCE_TIMED_OUT = 'issuance_timed_out';
    public const SSL_STATUS_DEPLOYMENT_TIMED_OUT = 'deployment_timed_out';
    public const SSL_STATUS_DELETION_TIMED_OUT = 'deletion_timed_out';
    public const SSL_STATUS_PENDING_CLEANUP = 'pending_cleanup';
    public const SSL_STATUS_STAGING_DEPLOYMENT = 'staging_deployment';
    public const SSL_STATUS_STAGING_ACTIVE = 'staging_active';
    public const SSL_STATUS_DEACTIVATING = 'deactivating';
    public const SSL_STATUS_INACTIVE = 'inactive';
    public const SSL_STATUS_BACKUP_ISSUED = 'backup_issued';
    public const SSL_STATUS_HOLDING_DEPLOYMENT = 'holding_deployment';
    public const SSL_STATUS_EMPTY = '';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSslStatusAllowableValues()
    {
        return [
            self::SSL_STATUS_INITIALIZING,
            self::SSL_STATUS_PENDING_VALIDATION,
            self::SSL_STATUS_DELETED,
            self::SSL_STATUS_PENDING_ISSUANCE,
            self::SSL_STATUS_PENDING_DEPLOYMENT,
            self::SSL_STATUS_PENDING_DELETION,
            self::SSL_STATUS_PENDING_EXPIRATION,
            self::SSL_STATUS_EXPIRED,
            self::SSL_STATUS_ACTIVE,
            self::SSL_STATUS_INITIALIZING_TIMED_OUT,
            self::SSL_STATUS_VALIDATION_TIMED_OUT,
            self::SSL_STATUS_ISSUANCE_TIMED_OUT,
            self::SSL_STATUS_DEPLOYMENT_TIMED_OUT,
            self::SSL_STATUS_DELETION_TIMED_OUT,
            self::SSL_STATUS_PENDING_CLEANUP,
            self::SSL_STATUS_STAGING_DEPLOYMENT,
            self::SSL_STATUS_STAGING_ACTIVE,
            self::SSL_STATUS_DEACTIVATING,
            self::SSL_STATUS_INACTIVE,
            self::SSL_STATUS_BACKUP_ISSUED,
            self::SSL_STATUS_HOLDING_DEPLOYMENT,
            self::SSL_STATUS_EMPTY,
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
        $this->setIfExists('cookieDomain', $data ?? [], null);
        $this->setIfExists('corsAllowedOrigins', $data ?? [], null);
        $this->setIfExists('corsEnabled', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('customUiBaseUrl', $data ?? [], null);
        $this->setIfExists('hostname', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('sslStatus', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('verificationErrors', $data ?? [], null);
        $this->setIfExists('verificationStatus', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSslStatusAllowableValues();
        if (!is_null($this->container['sslStatus']) && !in_array($this->container['sslStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sslStatus', must be one of '%s'",
                $this->container['sslStatus'],
                implode("', '", $allowedValues)
            );
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
     * Gets cookieDomain
     *
     * @return string|null
     */
    public function getCookieDomain()
    {
        return $this->container['cookieDomain'];
    }

    /**
     * Sets cookieDomain
     *
     * @param string|null $cookieDomain cookieDomain
     *
     * @return self
     */
    public function setCookieDomain($cookieDomain)
    {
        if (is_null($cookieDomain)) {
            throw new \InvalidArgumentException('non-nullable cookieDomain cannot be null');
        }
        $this->container['cookieDomain'] = $cookieDomain;

        return $this;
    }

    /**
     * Gets corsAllowedOrigins
     *
     * @return string[]|null
     */
    public function getCorsAllowedOrigins()
    {
        return $this->container['corsAllowedOrigins'];
    }

    /**
     * Sets corsAllowedOrigins
     *
     * @param string[]|null $corsAllowedOrigins corsAllowedOrigins
     *
     * @return self
     */
    public function setCorsAllowedOrigins($corsAllowedOrigins)
    {
        if (is_null($corsAllowedOrigins)) {
            throw new \InvalidArgumentException('non-nullable corsAllowedOrigins cannot be null');
        }
        $this->container['corsAllowedOrigins'] = $corsAllowedOrigins;

        return $this;
    }

    /**
     * Gets corsEnabled
     *
     * @return bool|null
     */
    public function getCorsEnabled()
    {
        return $this->container['corsEnabled'];
    }

    /**
     * Sets corsEnabled
     *
     * @param bool|null $corsEnabled corsEnabled
     *
     * @return self
     */
    public function setCorsEnabled($corsEnabled)
    {
        if (is_null($corsEnabled)) {
            throw new \InvalidArgumentException('non-nullable corsEnabled cannot be null');
        }
        $this->container['corsEnabled'] = $corsEnabled;

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
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($createdAt)) {
            throw new \InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets customUiBaseUrl
     *
     * @return string|null
     */
    public function getCustomUiBaseUrl()
    {
        return $this->container['customUiBaseUrl'];
    }

    /**
     * Sets customUiBaseUrl
     *
     * @param string|null $customUiBaseUrl customUiBaseUrl
     *
     * @return self
     */
    public function setCustomUiBaseUrl($customUiBaseUrl)
    {
        if (is_null($customUiBaseUrl)) {
            throw new \InvalidArgumentException('non-nullable customUiBaseUrl cannot be null');
        }
        $this->container['customUiBaseUrl'] = $customUiBaseUrl;

        return $this;
    }

    /**
     * Gets hostname
     *
     * @return string|null
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string|null $hostname hostname
     *
     * @return self
     */
    public function setHostname($hostname)
    {
        if (is_null($hostname)) {
            throw new \InvalidArgumentException('non-nullable hostname cannot be null');
        }
        $this->container['hostname'] = $hostname;

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
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sslStatus
     *
     * @return string|null
     */
    public function getSslStatus()
    {
        return $this->container['sslStatus'];
    }

    /**
     * Sets sslStatus
     *
     * @param string|null $sslStatus sslStatus
     *
     * @return self
     */
    public function setSslStatus($sslStatus)
    {
        if (is_null($sslStatus)) {
            throw new \InvalidArgumentException('non-nullable sslStatus cannot be null');
        }
        $allowedValues = $this->getSslStatusAllowableValues();
        if (!in_array($sslStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sslStatus', must be one of '%s'",
                    $sslStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sslStatus'] = $sslStatus;

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
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            throw new \InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets verificationErrors
     *
     * @return string[]|null
     */
    public function getVerificationErrors()
    {
        return $this->container['verificationErrors'];
    }

    /**
     * Sets verificationErrors
     *
     * @param string[]|null $verificationErrors verificationErrors
     *
     * @return self
     */
    public function setVerificationErrors($verificationErrors)
    {
        if (is_null($verificationErrors)) {
            throw new \InvalidArgumentException('non-nullable verificationErrors cannot be null');
        }
        $this->container['verificationErrors'] = $verificationErrors;

        return $this;
    }

    /**
     * Gets verificationStatus
     *
     * @return string|null
     */
    public function getVerificationStatus()
    {
        return $this->container['verificationStatus'];
    }

    /**
     * Sets verificationStatus
     *
     * @param string|null $verificationStatus verificationStatus
     *
     * @return self
     */
    public function setVerificationStatus($verificationStatus)
    {
        if (is_null($verificationStatus)) {
            throw new \InvalidArgumentException('non-nullable verificationStatus cannot be null');
        }
        $this->container['verificationStatus'] = $verificationStatus;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


