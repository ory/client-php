<?php
/**
 * RegistrationFlow
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
 * The version of the OpenAPI document: v1.16.2
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
 * RegistrationFlow Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RegistrationFlow implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'registrationFlow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'string',
        'expiresAt' => '\DateTime',
        'id' => 'string',
        'issuedAt' => '\DateTime',
        'oauth2LoginChallenge' => 'string',
        'oauth2LoginRequest' => '\Ory\Client\Model\OAuth2LoginRequest',
        'organizationId' => 'string',
        'requestUrl' => 'string',
        'returnTo' => 'string',
        'sessionTokenExchangeCode' => 'string',
        'state' => 'mixed',
        'transientPayload' => 'object',
        'type' => 'string',
        'ui' => '\Ory\Client\Model\UiContainer'
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
        'expiresAt' => 'date-time',
        'id' => 'uuid',
        'issuedAt' => 'date-time',
        'oauth2LoginChallenge' => null,
        'oauth2LoginRequest' => null,
        'organizationId' => 'uuid4',
        'requestUrl' => null,
        'returnTo' => null,
        'sessionTokenExchangeCode' => null,
        'state' => null,
        'transientPayload' => null,
        'type' => null,
        'ui' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'active' => false,
        'expiresAt' => false,
        'id' => false,
        'issuedAt' => false,
        'oauth2LoginChallenge' => false,
        'oauth2LoginRequest' => false,
        'organizationId' => true,
        'requestUrl' => false,
        'returnTo' => false,
        'sessionTokenExchangeCode' => false,
        'state' => true,
        'transientPayload' => false,
        'type' => false,
        'ui' => false
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
        'expiresAt' => 'expires_at',
        'id' => 'id',
        'issuedAt' => 'issued_at',
        'oauth2LoginChallenge' => 'oauth2_login_challenge',
        'oauth2LoginRequest' => 'oauth2_login_request',
        'organizationId' => 'organization_id',
        'requestUrl' => 'request_url',
        'returnTo' => 'return_to',
        'sessionTokenExchangeCode' => 'session_token_exchange_code',
        'state' => 'state',
        'transientPayload' => 'transient_payload',
        'type' => 'type',
        'ui' => 'ui'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'expiresAt' => 'setExpiresAt',
        'id' => 'setId',
        'issuedAt' => 'setIssuedAt',
        'oauth2LoginChallenge' => 'setOauth2LoginChallenge',
        'oauth2LoginRequest' => 'setOauth2LoginRequest',
        'organizationId' => 'setOrganizationId',
        'requestUrl' => 'setRequestUrl',
        'returnTo' => 'setReturnTo',
        'sessionTokenExchangeCode' => 'setSessionTokenExchangeCode',
        'state' => 'setState',
        'transientPayload' => 'setTransientPayload',
        'type' => 'setType',
        'ui' => 'setUi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'expiresAt' => 'getExpiresAt',
        'id' => 'getId',
        'issuedAt' => 'getIssuedAt',
        'oauth2LoginChallenge' => 'getOauth2LoginChallenge',
        'oauth2LoginRequest' => 'getOauth2LoginRequest',
        'organizationId' => 'getOrganizationId',
        'requestUrl' => 'getRequestUrl',
        'returnTo' => 'getReturnTo',
        'sessionTokenExchangeCode' => 'getSessionTokenExchangeCode',
        'state' => 'getState',
        'transientPayload' => 'getTransientPayload',
        'type' => 'getType',
        'ui' => 'getUi'
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

    public const ACTIVE_PASSWORD = 'password';
    public const ACTIVE_OIDC = 'oidc';
    public const ACTIVE_TOTP = 'totp';
    public const ACTIVE_LOOKUP_SECRET = 'lookup_secret';
    public const ACTIVE_WEBAUTHN = 'webauthn';
    public const ACTIVE_CODE = 'code';
    public const ACTIVE_PASSKEY = 'passkey';
    public const ACTIVE_PROFILE = 'profile';
    public const ACTIVE_SAML = 'saml';
    public const ACTIVE_LINK_RECOVERY = 'link_recovery';
    public const ACTIVE_CODE_RECOVERY = 'code_recovery';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActiveAllowableValues()
    {
        return [
            self::ACTIVE_PASSWORD,
            self::ACTIVE_OIDC,
            self::ACTIVE_TOTP,
            self::ACTIVE_LOOKUP_SECRET,
            self::ACTIVE_WEBAUTHN,
            self::ACTIVE_CODE,
            self::ACTIVE_PASSKEY,
            self::ACTIVE_PROFILE,
            self::ACTIVE_SAML,
            self::ACTIVE_LINK_RECOVERY,
            self::ACTIVE_CODE_RECOVERY,
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
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('expiresAt', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('issuedAt', $data ?? [], null);
        $this->setIfExists('oauth2LoginChallenge', $data ?? [], null);
        $this->setIfExists('oauth2LoginRequest', $data ?? [], null);
        $this->setIfExists('organizationId', $data ?? [], null);
        $this->setIfExists('requestUrl', $data ?? [], null);
        $this->setIfExists('returnTo', $data ?? [], null);
        $this->setIfExists('sessionTokenExchangeCode', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('transientPayload', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('ui', $data ?? [], null);
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

        $allowedValues = $this->getActiveAllowableValues();
        if (!is_null($this->container['active']) && !in_array($this->container['active'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'active', must be one of '%s'",
                $this->container['active'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['expiresAt'] === null) {
            $invalidProperties[] = "'expiresAt' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['issuedAt'] === null) {
            $invalidProperties[] = "'issuedAt' can't be null";
        }
        if ($this->container['requestUrl'] === null) {
            $invalidProperties[] = "'requestUrl' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['ui'] === null) {
            $invalidProperties[] = "'ui' can't be null";
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
     * @return string|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param string|null $active Active, if set, contains the registration method that is being used. It is initially not set. password CredentialsTypePassword oidc CredentialsTypeOIDC totp CredentialsTypeTOTP lookup_secret CredentialsTypeLookup webauthn CredentialsTypeWebAuthn code CredentialsTypeCodeAuth passkey CredentialsTypePasskey profile CredentialsTypeProfile saml CredentialsTypeSAML link_recovery CredentialsTypeRecoveryLink  CredentialsTypeRecoveryLink is a special credential type linked to the link strategy (recovery flow).  It is not used within the credentials object itself. code_recovery CredentialsTypeRecoveryCode
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $allowedValues = $this->getActiveAllowableValues();
        if (!in_array($active, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'active', must be one of '%s'",
                    $active,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets expiresAt
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
     * Sets expiresAt
     *
     * @param \DateTime $expiresAt ExpiresAt is the time (UTC) when the flow expires. If the user still wishes to log in, a new flow has to be initiated.
     *
     * @return self
     */
    public function setExpiresAt($expiresAt)
    {
        if (is_null($expiresAt)) {
            throw new \InvalidArgumentException('non-nullable expiresAt cannot be null');
        }
        $this->container['expiresAt'] = $expiresAt;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id ID represents the flow's unique ID. When performing the registration flow, this represents the id in the registration ui's query parameter: http://<selfservice.flows.registration.ui_url>/?flow=<id>
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
     * Gets issuedAt
     *
     * @return \DateTime
     */
    public function getIssuedAt()
    {
        return $this->container['issuedAt'];
    }

    /**
     * Sets issuedAt
     *
     * @param \DateTime $issuedAt IssuedAt is the time (UTC) when the flow occurred.
     *
     * @return self
     */
    public function setIssuedAt($issuedAt)
    {
        if (is_null($issuedAt)) {
            throw new \InvalidArgumentException('non-nullable issuedAt cannot be null');
        }
        $this->container['issuedAt'] = $issuedAt;

        return $this;
    }

    /**
     * Gets oauth2LoginChallenge
     *
     * @return string|null
     */
    public function getOauth2LoginChallenge()
    {
        return $this->container['oauth2LoginChallenge'];
    }

    /**
     * Sets oauth2LoginChallenge
     *
     * @param string|null $oauth2LoginChallenge Ory OAuth 2.0 Login Challenge.  This value is set using the `login_challenge` query parameter of the registration and login endpoints. If set will cooperate with Ory OAuth2 and OpenID to act as an OAuth2 server / OpenID Provider.
     *
     * @return self
     */
    public function setOauth2LoginChallenge($oauth2LoginChallenge)
    {
        if (is_null($oauth2LoginChallenge)) {
            throw new \InvalidArgumentException('non-nullable oauth2LoginChallenge cannot be null');
        }
        $this->container['oauth2LoginChallenge'] = $oauth2LoginChallenge;

        return $this;
    }

    /**
     * Gets oauth2LoginRequest
     *
     * @return \Ory\Client\Model\OAuth2LoginRequest|null
     */
    public function getOauth2LoginRequest()
    {
        return $this->container['oauth2LoginRequest'];
    }

    /**
     * Sets oauth2LoginRequest
     *
     * @param \Ory\Client\Model\OAuth2LoginRequest|null $oauth2LoginRequest oauth2LoginRequest
     *
     * @return self
     */
    public function setOauth2LoginRequest($oauth2LoginRequest)
    {
        if (is_null($oauth2LoginRequest)) {
            throw new \InvalidArgumentException('non-nullable oauth2LoginRequest cannot be null');
        }
        $this->container['oauth2LoginRequest'] = $oauth2LoginRequest;

        return $this;
    }

    /**
     * Gets organizationId
     *
     * @return string|null
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     *
     * @param string|null $organizationId organizationId
     *
     * @return self
     */
    public function setOrganizationId($organizationId)
    {
        if (is_null($organizationId)) {
            array_push($this->openAPINullablesSetToNull, 'organizationId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('organizationId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets requestUrl
     *
     * @return string
     */
    public function getRequestUrl()
    {
        return $this->container['requestUrl'];
    }

    /**
     * Sets requestUrl
     *
     * @param string $requestUrl RequestURL is the initial URL that was requested from Ory Kratos. It can be used to forward information contained in the URL's path or query for example.
     *
     * @return self
     */
    public function setRequestUrl($requestUrl)
    {
        if (is_null($requestUrl)) {
            throw new \InvalidArgumentException('non-nullable requestUrl cannot be null');
        }
        $this->container['requestUrl'] = $requestUrl;

        return $this;
    }

    /**
     * Gets returnTo
     *
     * @return string|null
     */
    public function getReturnTo()
    {
        return $this->container['returnTo'];
    }

    /**
     * Sets returnTo
     *
     * @param string|null $returnTo ReturnTo contains the requested return_to URL.
     *
     * @return self
     */
    public function setReturnTo($returnTo)
    {
        if (is_null($returnTo)) {
            throw new \InvalidArgumentException('non-nullable returnTo cannot be null');
        }
        $this->container['returnTo'] = $returnTo;

        return $this;
    }

    /**
     * Gets sessionTokenExchangeCode
     *
     * @return string|null
     */
    public function getSessionTokenExchangeCode()
    {
        return $this->container['sessionTokenExchangeCode'];
    }

    /**
     * Sets sessionTokenExchangeCode
     *
     * @param string|null $sessionTokenExchangeCode SessionTokenExchangeCode holds the secret code that the client can use to retrieve a session token after the flow has been completed. This is only set if the client has requested a session token exchange code, and if the flow is of type \"api\", and only on creating the flow.
     *
     * @return self
     */
    public function setSessionTokenExchangeCode($sessionTokenExchangeCode)
    {
        if (is_null($sessionTokenExchangeCode)) {
            throw new \InvalidArgumentException('non-nullable sessionTokenExchangeCode cannot be null');
        }
        $this->container['sessionTokenExchangeCode'] = $sessionTokenExchangeCode;

        return $this;
    }

    /**
     * Gets state
     *
     * @return mixed
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param mixed $state State represents the state of this request:  choose_method: ask the user to choose a method (e.g. registration with email) sent_email: the email has been sent to the user passed_challenge: the request was successful and the registration challenge was passed.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            array_push($this->openAPINullablesSetToNull, 'state');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['state'] = $state;

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
     * @param object|null $transientPayload TransientPayload is used to pass data from the registration to a webhook
     *
     * @return self
     */
    public function setTransientPayload($transientPayload)
    {
        if (is_null($transientPayload)) {
            throw new \InvalidArgumentException('non-nullable transientPayload cannot be null');
        }
        $this->container['transientPayload'] = $transientPayload;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The flow type can either be `api` or `browser`.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets ui
     *
     * @return \Ory\Client\Model\UiContainer
     */
    public function getUi()
    {
        return $this->container['ui'];
    }

    /**
     * Sets ui
     *
     * @param \Ory\Client\Model\UiContainer $ui ui
     *
     * @return self
     */
    public function setUi($ui)
    {
        if (is_null($ui)) {
            throw new \InvalidArgumentException('non-nullable ui cannot be null');
        }
        $this->container['ui'] = $ui;

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


