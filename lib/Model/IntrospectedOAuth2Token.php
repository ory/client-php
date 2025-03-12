<?php
/**
 * IntrospectedOAuth2Token
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
 * The version of the OpenAPI document: v1.18.5
 * Contact: support@ory.sh
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
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
 * IntrospectedOAuth2Token Class Doc Comment
 *
 * @category Class
 * @description Introspection contains an access token&#39;s session data as specified by [IETF RFC 7662](https://tools.ietf.org/html/rfc7662)
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IntrospectedOAuth2Token implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'introspectedOAuth2Token';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'bool',
        'aud' => 'string[]',
        'clientId' => 'string',
        'exp' => 'int',
        'ext' => 'array<string,mixed>',
        'iat' => 'int',
        'iss' => 'string',
        'nbf' => 'int',
        'obfuscatedSubject' => 'string',
        'scope' => 'string',
        'sub' => 'string',
        'tokenType' => 'string',
        'tokenUse' => 'string',
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
        'active' => null,
        'aud' => null,
        'clientId' => null,
        'exp' => 'int64',
        'ext' => null,
        'iat' => 'int64',
        'iss' => null,
        'nbf' => 'int64',
        'obfuscatedSubject' => null,
        'scope' => null,
        'sub' => null,
        'tokenType' => null,
        'tokenUse' => null,
        'username' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'active' => false,
        'aud' => false,
        'clientId' => false,
        'exp' => false,
        'ext' => false,
        'iat' => false,
        'iss' => false,
        'nbf' => false,
        'obfuscatedSubject' => false,
        'scope' => false,
        'sub' => false,
        'tokenType' => false,
        'tokenUse' => false,
        'username' => false
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
        'active' => 'active',
        'aud' => 'aud',
        'clientId' => 'client_id',
        'exp' => 'exp',
        'ext' => 'ext',
        'iat' => 'iat',
        'iss' => 'iss',
        'nbf' => 'nbf',
        'obfuscatedSubject' => 'obfuscated_subject',
        'scope' => 'scope',
        'sub' => 'sub',
        'tokenType' => 'token_type',
        'tokenUse' => 'token_use',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'aud' => 'setAud',
        'clientId' => 'setClientId',
        'exp' => 'setExp',
        'ext' => 'setExt',
        'iat' => 'setIat',
        'iss' => 'setIss',
        'nbf' => 'setNbf',
        'obfuscatedSubject' => 'setObfuscatedSubject',
        'scope' => 'setScope',
        'sub' => 'setSub',
        'tokenType' => 'setTokenType',
        'tokenUse' => 'setTokenUse',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'aud' => 'getAud',
        'clientId' => 'getClientId',
        'exp' => 'getExp',
        'ext' => 'getExt',
        'iat' => 'getIat',
        'iss' => 'getIss',
        'nbf' => 'getNbf',
        'obfuscatedSubject' => 'getObfuscatedSubject',
        'scope' => 'getScope',
        'sub' => 'getSub',
        'tokenType' => 'getTokenType',
        'tokenUse' => 'getTokenUse',
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('aud', $data ?? [], null);
        $this->setIfExists('clientId', $data ?? [], null);
        $this->setIfExists('exp', $data ?? [], null);
        $this->setIfExists('ext', $data ?? [], null);
        $this->setIfExists('iat', $data ?? [], null);
        $this->setIfExists('iss', $data ?? [], null);
        $this->setIfExists('nbf', $data ?? [], null);
        $this->setIfExists('obfuscatedSubject', $data ?? [], null);
        $this->setIfExists('scope', $data ?? [], null);
        $this->setIfExists('sub', $data ?? [], null);
        $this->setIfExists('tokenType', $data ?? [], null);
        $this->setIfExists('tokenUse', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
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

        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
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
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Active is a boolean indicator of whether or not the presented token is currently active.  The specifics of a token's \"active\" state will vary depending on the implementation of the authorization server and the information it keeps about its tokens, but a \"true\" value return for the \"active\" property will generally indicate that a given token has been issued by this authorization server, has not been revoked by the resource owner, and is within its given time window of validity (e.g., after its issuance time and before its expiration time).
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

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
     * @param string[]|null $aud Audience contains a list of the token's intended audiences.
     *
     * @return self
     */
    public function setAud($aud)
    {
        if (is_null($aud)) {
            throw new \InvalidArgumentException('non-nullable aud cannot be null');
        }
        $this->container['aud'] = $aud;

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
     * @param string|null $clientId ID is aclient identifier for the OAuth 2.0 client that requested this token.
     *
     * @return self
     */
    public function setClientId($clientId)
    {
        if (is_null($clientId)) {
            throw new \InvalidArgumentException('non-nullable clientId cannot be null');
        }
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets exp
     *
     * @return int|null
     */
    public function getExp()
    {
        return $this->container['exp'];
    }

    /**
     * Sets exp
     *
     * @param int|null $exp Expires at is an integer timestamp, measured in the number of seconds since January 1 1970 UTC, indicating when this token will expire.
     *
     * @return self
     */
    public function setExp($exp)
    {
        if (is_null($exp)) {
            throw new \InvalidArgumentException('non-nullable exp cannot be null');
        }
        $this->container['exp'] = $exp;

        return $this;
    }

    /**
     * Gets ext
     *
     * @return array<string,mixed>|null
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param array<string,mixed>|null $ext Extra is arbitrary data set by the session.
     *
     * @return self
     */
    public function setExt($ext)
    {
        if (is_null($ext)) {
            throw new \InvalidArgumentException('non-nullable ext cannot be null');
        }
        $this->container['ext'] = $ext;

        return $this;
    }

    /**
     * Gets iat
     *
     * @return int|null
     */
    public function getIat()
    {
        return $this->container['iat'];
    }

    /**
     * Sets iat
     *
     * @param int|null $iat Issued at is an integer timestamp, measured in the number of seconds since January 1 1970 UTC, indicating when this token was originally issued.
     *
     * @return self
     */
    public function setIat($iat)
    {
        if (is_null($iat)) {
            throw new \InvalidArgumentException('non-nullable iat cannot be null');
        }
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
     * @param string|null $iss IssuerURL is a string representing the issuer of this token
     *
     * @return self
     */
    public function setIss($iss)
    {
        if (is_null($iss)) {
            throw new \InvalidArgumentException('non-nullable iss cannot be null');
        }
        $this->container['iss'] = $iss;

        return $this;
    }

    /**
     * Gets nbf
     *
     * @return int|null
     */
    public function getNbf()
    {
        return $this->container['nbf'];
    }

    /**
     * Sets nbf
     *
     * @param int|null $nbf NotBefore is an integer timestamp, measured in the number of seconds since January 1 1970 UTC, indicating when this token is not to be used before.
     *
     * @return self
     */
    public function setNbf($nbf)
    {
        if (is_null($nbf)) {
            throw new \InvalidArgumentException('non-nullable nbf cannot be null');
        }
        $this->container['nbf'] = $nbf;

        return $this;
    }

    /**
     * Gets obfuscatedSubject
     *
     * @return string|null
     */
    public function getObfuscatedSubject()
    {
        return $this->container['obfuscatedSubject'];
    }

    /**
     * Sets obfuscatedSubject
     *
     * @param string|null $obfuscatedSubject ObfuscatedSubject is set when the subject identifier algorithm was set to \"pairwise\" during authorization. It is the `sub` value of the ID Token that was issued.
     *
     * @return self
     */
    public function setObfuscatedSubject($obfuscatedSubject)
    {
        if (is_null($obfuscatedSubject)) {
            throw new \InvalidArgumentException('non-nullable obfuscatedSubject cannot be null');
        }
        $this->container['obfuscatedSubject'] = $obfuscatedSubject;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string|null $scope Scope is a JSON string containing a space-separated list of scopes associated with this token.
     *
     * @return self
     */
    public function setScope($scope)
    {
        if (is_null($scope)) {
            throw new \InvalidArgumentException('non-nullable scope cannot be null');
        }
        $this->container['scope'] = $scope;

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
     * @param string|null $sub Subject of the token, as defined in JWT [RFC7519]. Usually a machine-readable identifier of the resource owner who authorized this token.
     *
     * @return self
     */
    public function setSub($sub)
    {
        if (is_null($sub)) {
            throw new \InvalidArgumentException('non-nullable sub cannot be null');
        }
        $this->container['sub'] = $sub;

        return $this;
    }

    /**
     * Gets tokenType
     *
     * @return string|null
     */
    public function getTokenType()
    {
        return $this->container['tokenType'];
    }

    /**
     * Sets tokenType
     *
     * @param string|null $tokenType TokenType is the introspected token's type, typically `Bearer`.
     *
     * @return self
     */
    public function setTokenType($tokenType)
    {
        if (is_null($tokenType)) {
            throw new \InvalidArgumentException('non-nullable tokenType cannot be null');
        }
        $this->container['tokenType'] = $tokenType;

        return $this;
    }

    /**
     * Gets tokenUse
     *
     * @return string|null
     */
    public function getTokenUse()
    {
        return $this->container['tokenUse'];
    }

    /**
     * Sets tokenUse
     *
     * @param string|null $tokenUse TokenUse is the introspected token's use, for example `access_token` or `refresh_token`.
     *
     * @return self
     */
    public function setTokenUse($tokenUse)
    {
        if (is_null($tokenUse)) {
            throw new \InvalidArgumentException('non-nullable tokenUse cannot be null');
        }
        $this->container['tokenUse'] = $tokenUse;

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
     * @param string|null $username Username is a human-readable identifier for the resource owner who authorized this token.
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
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


