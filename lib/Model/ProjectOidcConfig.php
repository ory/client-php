<?php
/**
 * ProjectOidcConfig
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
 * The version of the OpenAPI document: v0.0.1-alpha.55
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
 * ProjectOidcConfig Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProjectOidcConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'projectOidcConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authUrl' => 'string',
        'clientId' => 'string',
        'clientSecret' => 'string',
        'id' => 'string',
        'issuerUrl' => 'string',
        'label' => 'string',
        'mapperUrl' => 'string',
        'provider' => 'string',
        'requestedClaims' => 'object',
        'scope' => 'string[]',
        'string' => 'string',
        'tenant' => 'string',
        'tokenUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authUrl' => null,
        'clientId' => null,
        'clientSecret' => null,
        'id' => null,
        'issuerUrl' => null,
        'label' => null,
        'mapperUrl' => null,
        'provider' => null,
        'requestedClaims' => null,
        'scope' => null,
        'string' => null,
        'tenant' => null,
        'tokenUrl' => null
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
        'authUrl' => 'auth_url',
        'clientId' => 'client_id',
        'clientSecret' => 'client_secret',
        'id' => 'id',
        'issuerUrl' => 'issuer_url',
        'label' => 'label',
        'mapperUrl' => 'mapper_url',
        'provider' => 'provider',
        'requestedClaims' => 'requested_claims',
        'scope' => 'scope',
        'string' => 'string',
        'tenant' => 'tenant',
        'tokenUrl' => 'token_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authUrl' => 'setAuthUrl',
        'clientId' => 'setClientId',
        'clientSecret' => 'setClientSecret',
        'id' => 'setId',
        'issuerUrl' => 'setIssuerUrl',
        'label' => 'setLabel',
        'mapperUrl' => 'setMapperUrl',
        'provider' => 'setProvider',
        'requestedClaims' => 'setRequestedClaims',
        'scope' => 'setScope',
        'string' => 'setString',
        'tenant' => 'setTenant',
        'tokenUrl' => 'setTokenUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authUrl' => 'getAuthUrl',
        'clientId' => 'getClientId',
        'clientSecret' => 'getClientSecret',
        'id' => 'getId',
        'issuerUrl' => 'getIssuerUrl',
        'label' => 'getLabel',
        'mapperUrl' => 'getMapperUrl',
        'provider' => 'getProvider',
        'requestedClaims' => 'getRequestedClaims',
        'scope' => 'getScope',
        'string' => 'getString',
        'tenant' => 'getTenant',
        'tokenUrl' => 'getTokenUrl'
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
        $this->container['authUrl'] = $data['authUrl'] ?? null;
        $this->container['clientId'] = $data['clientId'] ?? null;
        $this->container['clientSecret'] = $data['clientSecret'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['issuerUrl'] = $data['issuerUrl'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['mapperUrl'] = $data['mapperUrl'] ?? null;
        $this->container['provider'] = $data['provider'] ?? null;
        $this->container['requestedClaims'] = $data['requestedClaims'] ?? null;
        $this->container['scope'] = $data['scope'] ?? null;
        $this->container['string'] = $data['string'] ?? null;
        $this->container['tenant'] = $data['tenant'] ?? null;
        $this->container['tokenUrl'] = $data['tokenUrl'] ?? null;
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
     * Gets authUrl
     *
     * @return string|null
     */
    public function getAuthUrl()
    {
        return $this->container['authUrl'];
    }

    /**
     * Sets authUrl
     *
     * @param string|null $authUrl AuthURL is the authorize url, typically something like: https://example.org/oauth2/auth Should only be used when the OAuth2 / OpenID Connect server is not supporting OpenID Connect Discovery and when `provider` is set to `generic`.
     *
     * @return self
     */
    public function setAuthUrl($authUrl)
    {
        $this->container['authUrl'] = $authUrl;

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
     * @param string|null $clientId ClientID is the application's Client ID.
     *
     * @return self
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets clientSecret
     *
     * @return string|null
     */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
     * Sets clientSecret
     *
     * @param string|null $clientSecret ClientSecret is the application's secret.
     *
     * @return self
     */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;

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
     * @param string|null $id ID is the provider's ID
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets issuerUrl
     *
     * @return string|null
     */
    public function getIssuerUrl()
    {
        return $this->container['issuerUrl'];
    }

    /**
     * Sets issuerUrl
     *
     * @param string|null $issuerUrl IssuerURL is the OpenID Connect Server URL. You can leave this empty if `provider` is not set to `generic`. If set, neither `auth_url` nor `token_url` are required.
     *
     * @return self
     */
    public function setIssuerUrl($issuerUrl)
    {
        $this->container['issuerUrl'] = $issuerUrl;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label Label represents an optional label which can be used in the UI generation.
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets mapperUrl
     *
     * @return string|null
     */
    public function getMapperUrl()
    {
        return $this->container['mapperUrl'];
    }

    /**
     * Sets mapperUrl
     *
     * @param string|null $mapperUrl Mapper specifies the JSONNet code snippet which uses the OpenID Connect Provider's data (e.g. GitHub or Google profile information) to hydrate the identity's data.  It can be either a URL (file://, http(s)://, base64://) or an inline JSONNet code snippet.
     *
     * @return self
     */
    public function setMapperUrl($mapperUrl)
    {
        $this->container['mapperUrl'] = $mapperUrl;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string|null
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string|null $provider Provider is either \"generic\" for a generic OAuth 2.0 / OpenID Connect Provider or one of: generic google github gitlab microsoft discord slack facebook vk yandex
     *
     * @return self
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets requestedClaims
     *
     * @return object|null
     */
    public function getRequestedClaims()
    {
        return $this->container['requestedClaims'];
    }

    /**
     * Sets requestedClaims
     *
     * @param object|null $requestedClaims RequestedClaims string encoded json object that specifies claims and optionally their properties which should be included in the id_token or returned from the UserInfo Endpoint.  More information: https://openid.net/specs/openid-connect-core-1_0.html#ClaimsParameter
     *
     * @return self
     */
    public function setRequestedClaims($requestedClaims)
    {
        $this->container['requestedClaims'] = $requestedClaims;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string[]|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string[]|null $scope Scope specifies optional requested permissions.
     *
     * @return self
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets string
     *
     * @return string|null
     */
    public function getString()
    {
        return $this->container['string'];
    }

    /**
     * Sets string
     *
     * @param string|null $string string
     *
     * @return self
     */
    public function setString($string)
    {
        $this->container['string'] = $string;

        return $this;
    }

    /**
     * Gets tenant
     *
     * @return string|null
     */
    public function getTenant()
    {
        return $this->container['tenant'];
    }

    /**
     * Sets tenant
     *
     * @param string|null $tenant Tenant is the Azure AD Tenant to use for authentication, and must be set when `provider` is set to `microsoft`. Can be either `common`, `organizations`, `consumers` for a multitenant application or a specific tenant like `8eaef023-2b34-4da1-9baa-8bc8c9d6a490` or `contoso.onmicrosoft.com`.
     *
     * @return self
     */
    public function setTenant($tenant)
    {
        $this->container['tenant'] = $tenant;

        return $this;
    }

    /**
     * Gets tokenUrl
     *
     * @return string|null
     */
    public function getTokenUrl()
    {
        return $this->container['tokenUrl'];
    }

    /**
     * Sets tokenUrl
     *
     * @param string|null $tokenUrl TokenURL is the token url, typically something like: https://example.org/oauth2/token Should only be used when the OAuth2 / OpenID Connect server is not supporting OpenID Connect Discovery and when `provider` is set to `generic`.
     *
     * @return self
     */
    public function setTokenUrl($tokenUrl)
    {
        $this->container['tokenUrl'] = $tokenUrl;

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


