<?php
/**
 * NormalizedProjectRevisionThirdPartyProvider
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
 * The version of the OpenAPI document: v0.0.1-alpha.164
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
 * NormalizedProjectRevisionThirdPartyProvider Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NormalizedProjectRevisionThirdPartyProvider implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'normalizedProjectRevisionThirdPartyProvider';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applePrivateKey' => 'string',
        'applePrivateKeyId' => 'string',
        'appleTeamId' => 'string',
        'authUrl' => 'string',
        'azureTenant' => 'string',
        'clientId' => 'string',
        'clientSecret' => 'string',
        'createdAt' => '\DateTime',
        'id' => 'string',
        'issuerUrl' => 'string',
        'label' => 'string',
        'mapperUrl' => 'string',
        'projectRevisionId' => 'string',
        'provider' => 'string',
        'providerId' => 'string',
        'requestedClaims' => 'object',
        'scope' => 'string[]',
        'tokenUrl' => 'string',
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
        'applePrivateKey' => null,
        'applePrivateKeyId' => null,
        'appleTeamId' => null,
        'authUrl' => null,
        'azureTenant' => null,
        'clientId' => null,
        'clientSecret' => null,
        'createdAt' => 'date-time',
        'id' => 'uuid4',
        'issuerUrl' => null,
        'label' => null,
        'mapperUrl' => null,
        'projectRevisionId' => 'uuid4',
        'provider' => null,
        'providerId' => null,
        'requestedClaims' => null,
        'scope' => null,
        'tokenUrl' => null,
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
        'applePrivateKey' => 'apple_private_key',
        'applePrivateKeyId' => 'apple_private_key_id',
        'appleTeamId' => 'apple_team_id',
        'authUrl' => 'auth_url',
        'azureTenant' => 'azure_tenant',
        'clientId' => 'client_id',
        'clientSecret' => 'client_secret',
        'createdAt' => 'created_at',
        'id' => 'id',
        'issuerUrl' => 'issuer_url',
        'label' => 'label',
        'mapperUrl' => 'mapper_url',
        'projectRevisionId' => 'project_revision_id',
        'provider' => 'provider',
        'providerId' => 'provider_id',
        'requestedClaims' => 'requested_claims',
        'scope' => 'scope',
        'tokenUrl' => 'token_url',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applePrivateKey' => 'setApplePrivateKey',
        'applePrivateKeyId' => 'setApplePrivateKeyId',
        'appleTeamId' => 'setAppleTeamId',
        'authUrl' => 'setAuthUrl',
        'azureTenant' => 'setAzureTenant',
        'clientId' => 'setClientId',
        'clientSecret' => 'setClientSecret',
        'createdAt' => 'setCreatedAt',
        'id' => 'setId',
        'issuerUrl' => 'setIssuerUrl',
        'label' => 'setLabel',
        'mapperUrl' => 'setMapperUrl',
        'projectRevisionId' => 'setProjectRevisionId',
        'provider' => 'setProvider',
        'providerId' => 'setProviderId',
        'requestedClaims' => 'setRequestedClaims',
        'scope' => 'setScope',
        'tokenUrl' => 'setTokenUrl',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applePrivateKey' => 'getApplePrivateKey',
        'applePrivateKeyId' => 'getApplePrivateKeyId',
        'appleTeamId' => 'getAppleTeamId',
        'authUrl' => 'getAuthUrl',
        'azureTenant' => 'getAzureTenant',
        'clientId' => 'getClientId',
        'clientSecret' => 'getClientSecret',
        'createdAt' => 'getCreatedAt',
        'id' => 'getId',
        'issuerUrl' => 'getIssuerUrl',
        'label' => 'getLabel',
        'mapperUrl' => 'getMapperUrl',
        'projectRevisionId' => 'getProjectRevisionId',
        'provider' => 'getProvider',
        'providerId' => 'getProviderId',
        'requestedClaims' => 'getRequestedClaims',
        'scope' => 'getScope',
        'tokenUrl' => 'getTokenUrl',
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
        $this->container['applePrivateKey'] = $data['applePrivateKey'] ?? null;
        $this->container['applePrivateKeyId'] = $data['applePrivateKeyId'] ?? null;
        $this->container['appleTeamId'] = $data['appleTeamId'] ?? null;
        $this->container['authUrl'] = $data['authUrl'] ?? null;
        $this->container['azureTenant'] = $data['azureTenant'] ?? null;
        $this->container['clientId'] = $data['clientId'] ?? null;
        $this->container['clientSecret'] = $data['clientSecret'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['issuerUrl'] = $data['issuerUrl'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['mapperUrl'] = $data['mapperUrl'] ?? null;
        $this->container['projectRevisionId'] = $data['projectRevisionId'] ?? null;
        $this->container['provider'] = $data['provider'] ?? null;
        $this->container['providerId'] = $data['providerId'] ?? null;
        $this->container['requestedClaims'] = $data['requestedClaims'] ?? null;
        $this->container['scope'] = $data['scope'] ?? null;
        $this->container['tokenUrl'] = $data['tokenUrl'] ?? null;
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
     * Gets applePrivateKey
     *
     * @return string|null
     */
    public function getApplePrivateKey()
    {
        return $this->container['applePrivateKey'];
    }

    /**
     * Sets applePrivateKey
     *
     * @param string|null $applePrivateKey applePrivateKey
     *
     * @return self
     */
    public function setApplePrivateKey($applePrivateKey)
    {
        $this->container['applePrivateKey'] = $applePrivateKey;

        return $this;
    }

    /**
     * Gets applePrivateKeyId
     *
     * @return string|null
     */
    public function getApplePrivateKeyId()
    {
        return $this->container['applePrivateKeyId'];
    }

    /**
     * Sets applePrivateKeyId
     *
     * @param string|null $applePrivateKeyId Apple Private Key Identifier  Sign In with Apple Private Key Identifier needed for generating a JWT token for client secret
     *
     * @return self
     */
    public function setApplePrivateKeyId($applePrivateKeyId)
    {
        $this->container['applePrivateKeyId'] = $applePrivateKeyId;

        return $this;
    }

    /**
     * Gets appleTeamId
     *
     * @return string|null
     */
    public function getAppleTeamId()
    {
        return $this->container['appleTeamId'];
    }

    /**
     * Sets appleTeamId
     *
     * @param string|null $appleTeamId Apple Developer Team ID  Apple Developer Team ID needed for generating a JWT token for client secret
     *
     * @return self
     */
    public function setAppleTeamId($appleTeamId)
    {
        $this->container['appleTeamId'] = $appleTeamId;

        return $this;
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
     * Gets azureTenant
     *
     * @return string|null
     */
    public function getAzureTenant()
    {
        return $this->container['azureTenant'];
    }

    /**
     * Sets azureTenant
     *
     * @param string|null $azureTenant Tenant is the Azure AD Tenant to use for authentication, and must be set when `provider` is set to `microsoft`.  Can be either `common`, `organizations`, `consumers` for a multitenant application or a specific tenant like `8eaef023-2b34-4da1-9baa-8bc8c9d6a490` or `contoso.onmicrosoft.com`.
     *
     * @return self
     */
    public function setAzureTenant($azureTenant)
    {
        $this->container['azureTenant'] = $azureTenant;

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
     * @param string|null $clientSecret clientSecret
     *
     * @return self
     */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;

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
     * @param string|null $id id
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
     * @param string|null $projectRevisionId projectRevisionId
     *
     * @return self
     */
    public function setProjectRevisionId($projectRevisionId)
    {
        $this->container['projectRevisionId'] = $projectRevisionId;

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
     * @param string|null $provider Provider is either \"generic\" for a generic OAuth 2.0 / OpenID Connect Provider or one of: generic google github gitlab microsoft discord slack facebook vk yandex apple
     *
     * @return self
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets providerId
     *
     * @return string|null
     */
    public function getProviderId()
    {
        return $this->container['providerId'];
    }

    /**
     * Sets providerId
     *
     * @param string|null $providerId ID is the provider's ID
     *
     * @return self
     */
    public function setProviderId($providerId)
    {
        $this->container['providerId'] = $providerId;

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
     * @param object|null $requestedClaims requestedClaims
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
     * @param string[]|null $scope scope
     *
     * @return self
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

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
     * @param string|null $tokenUrl TokenURL is the token url, typically something like: https://example.org/oauth2/token  Should only be used when the OAuth2 / OpenID Connect server is not supporting OpenID Connect Discovery and when `provider` is set to `generic`.
     *
     * @return self
     */
    public function setTokenUrl($tokenUrl)
    {
        $this->container['tokenUrl'] = $tokenUrl;

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


