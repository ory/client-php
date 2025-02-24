<?php
/**
 * UpdateLoginFlowBody
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
 * The version of the OpenAPI document: v1.16.10
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
 * UpdateLoginFlowBody Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateLoginFlowBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'method';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'updateLoginFlowBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'csrfToken' => 'string',
        'identifier' => 'string',
        'method' => 'string',
        'password' => 'string',
        'passwordIdentifier' => 'string',
        'transientPayload' => 'object',
        'idToken' => 'string',
        'idTokenNonce' => 'string',
        'provider' => 'string',
        'traits' => 'object',
        'upstreamParameters' => 'object',
        'totpCode' => 'string',
        'webauthnLogin' => 'string',
        'lookupSecret' => 'string',
        'address' => 'string',
        'code' => 'string',
        'resend' => 'string',
        'passkeyLogin' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'csrfToken' => null,
        'identifier' => null,
        'method' => null,
        'password' => null,
        'passwordIdentifier' => null,
        'transientPayload' => null,
        'idToken' => null,
        'idTokenNonce' => null,
        'provider' => null,
        'traits' => null,
        'upstreamParameters' => null,
        'totpCode' => null,
        'webauthnLogin' => null,
        'lookupSecret' => null,
        'address' => null,
        'code' => null,
        'resend' => null,
        'passkeyLogin' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'csrfToken' => false,
        'identifier' => false,
        'method' => false,
        'password' => false,
        'passwordIdentifier' => false,
        'transientPayload' => false,
        'idToken' => false,
        'idTokenNonce' => false,
        'provider' => false,
        'traits' => false,
        'upstreamParameters' => false,
        'totpCode' => false,
        'webauthnLogin' => false,
        'lookupSecret' => false,
        'address' => false,
        'code' => false,
        'resend' => false,
        'passkeyLogin' => false
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
        'csrfToken' => 'csrf_token',
        'identifier' => 'identifier',
        'method' => 'method',
        'password' => 'password',
        'passwordIdentifier' => 'password_identifier',
        'transientPayload' => 'transient_payload',
        'idToken' => 'id_token',
        'idTokenNonce' => 'id_token_nonce',
        'provider' => 'provider',
        'traits' => 'traits',
        'upstreamParameters' => 'upstream_parameters',
        'totpCode' => 'totp_code',
        'webauthnLogin' => 'webauthn_login',
        'lookupSecret' => 'lookup_secret',
        'address' => 'address',
        'code' => 'code',
        'resend' => 'resend',
        'passkeyLogin' => 'passkey_login'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'csrfToken' => 'setCsrfToken',
        'identifier' => 'setIdentifier',
        'method' => 'setMethod',
        'password' => 'setPassword',
        'passwordIdentifier' => 'setPasswordIdentifier',
        'transientPayload' => 'setTransientPayload',
        'idToken' => 'setIdToken',
        'idTokenNonce' => 'setIdTokenNonce',
        'provider' => 'setProvider',
        'traits' => 'setTraits',
        'upstreamParameters' => 'setUpstreamParameters',
        'totpCode' => 'setTotpCode',
        'webauthnLogin' => 'setWebauthnLogin',
        'lookupSecret' => 'setLookupSecret',
        'address' => 'setAddress',
        'code' => 'setCode',
        'resend' => 'setResend',
        'passkeyLogin' => 'setPasskeyLogin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'csrfToken' => 'getCsrfToken',
        'identifier' => 'getIdentifier',
        'method' => 'getMethod',
        'password' => 'getPassword',
        'passwordIdentifier' => 'getPasswordIdentifier',
        'transientPayload' => 'getTransientPayload',
        'idToken' => 'getIdToken',
        'idTokenNonce' => 'getIdTokenNonce',
        'provider' => 'getProvider',
        'traits' => 'getTraits',
        'upstreamParameters' => 'getUpstreamParameters',
        'totpCode' => 'getTotpCode',
        'webauthnLogin' => 'getWebauthnLogin',
        'lookupSecret' => 'getLookupSecret',
        'address' => 'getAddress',
        'code' => 'getCode',
        'resend' => 'getResend',
        'passkeyLogin' => 'getPasskeyLogin'
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
        $this->setIfExists('csrfToken', $data ?? [], null);
        $this->setIfExists('identifier', $data ?? [], null);
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('passwordIdentifier', $data ?? [], null);
        $this->setIfExists('transientPayload', $data ?? [], null);
        $this->setIfExists('idToken', $data ?? [], null);
        $this->setIfExists('idTokenNonce', $data ?? [], null);
        $this->setIfExists('provider', $data ?? [], null);
        $this->setIfExists('traits', $data ?? [], null);
        $this->setIfExists('upstreamParameters', $data ?? [], null);
        $this->setIfExists('totpCode', $data ?? [], null);
        $this->setIfExists('webauthnLogin', $data ?? [], null);
        $this->setIfExists('lookupSecret', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('resend', $data ?? [], null);
        $this->setIfExists('passkeyLogin', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['method'] = static::$openAPIModelName;
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

        if ($this->container['csrfToken'] === null) {
            $invalidProperties[] = "'csrfToken' can't be null";
        }
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
        if ($this->container['totpCode'] === null) {
            $invalidProperties[] = "'totpCode' can't be null";
        }
        if ($this->container['lookupSecret'] === null) {
            $invalidProperties[] = "'lookupSecret' can't be null";
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
     * Gets csrfToken
     *
     * @return string
     */
    public function getCsrfToken()
    {
        return $this->container['csrfToken'];
    }

    /**
     * Sets csrfToken
     *
     * @param string $csrfToken Sending the anti-csrf token is only required for browser login flows.
     *
     * @return self
     */
    public function setCsrfToken($csrfToken)
    {
        if (is_null($csrfToken)) {
            throw new \InvalidArgumentException('non-nullable csrfToken cannot be null');
        }
        $this->container['csrfToken'] = $csrfToken;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier Identifier is the email or username of the user trying to log in.
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        if (is_null($identifier)) {
            throw new \InvalidArgumentException('non-nullable identifier cannot be null');
        }
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method Method should be set to \"password\" when logging in using the identifier and password strategy.
     *
     * @return self
     */
    public function setMethod($method)
    {
        if (is_null($method)) {
            throw new \InvalidArgumentException('non-nullable method cannot be null');
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password The user's password.
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets passwordIdentifier
     *
     * @return string|null
     */
    public function getPasswordIdentifier()
    {
        return $this->container['passwordIdentifier'];
    }

    /**
     * Sets passwordIdentifier
     *
     * @param string|null $passwordIdentifier Identifier is the email or username of the user trying to log in. This field is deprecated!
     *
     * @return self
     */
    public function setPasswordIdentifier($passwordIdentifier)
    {
        if (is_null($passwordIdentifier)) {
            throw new \InvalidArgumentException('non-nullable passwordIdentifier cannot be null');
        }
        $this->container['passwordIdentifier'] = $passwordIdentifier;

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
     * @param object|null $transientPayload Transient data to pass along to any webhooks
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
     * Gets idToken
     *
     * @return string|null
     */
    public function getIdToken()
    {
        return $this->container['idToken'];
    }

    /**
     * Sets idToken
     *
     * @param string|null $idToken IDToken is an optional id token provided by an OIDC provider  If submitted, it is verified using the OIDC provider's public key set and the claims are used to populate the OIDC credentials of the identity. If the OIDC provider does not store additional claims (such as name, etc.) in the IDToken itself, you can use the `traits` field to populate the identity's traits. Note, that Apple only includes the users email in the IDToken.  Supported providers are Apple Google
     *
     * @return self
     */
    public function setIdToken($idToken)
    {
        if (is_null($idToken)) {
            throw new \InvalidArgumentException('non-nullable idToken cannot be null');
        }
        $this->container['idToken'] = $idToken;

        return $this;
    }

    /**
     * Gets idTokenNonce
     *
     * @return string|null
     */
    public function getIdTokenNonce()
    {
        return $this->container['idTokenNonce'];
    }

    /**
     * Sets idTokenNonce
     *
     * @param string|null $idTokenNonce IDTokenNonce is the nonce, used when generating the IDToken. If the provider supports nonce validation, the nonce will be validated against this value and required.
     *
     * @return self
     */
    public function setIdTokenNonce($idTokenNonce)
    {
        if (is_null($idTokenNonce)) {
            throw new \InvalidArgumentException('non-nullable idTokenNonce cannot be null');
        }
        $this->container['idTokenNonce'] = $idTokenNonce;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider The provider to register with
     *
     * @return self
     */
    public function setProvider($provider)
    {
        if (is_null($provider)) {
            throw new \InvalidArgumentException('non-nullable provider cannot be null');
        }
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets traits
     *
     * @return object|null
     */
    public function getTraits()
    {
        return $this->container['traits'];
    }

    /**
     * Sets traits
     *
     * @param object|null $traits The identity traits. This is a placeholder for the registration flow.
     *
     * @return self
     */
    public function setTraits($traits)
    {
        if (is_null($traits)) {
            throw new \InvalidArgumentException('non-nullable traits cannot be null');
        }
        $this->container['traits'] = $traits;

        return $this;
    }

    /**
     * Gets upstreamParameters
     *
     * @return object|null
     */
    public function getUpstreamParameters()
    {
        return $this->container['upstreamParameters'];
    }

    /**
     * Sets upstreamParameters
     *
     * @param object|null $upstreamParameters UpstreamParameters are the parameters that are passed to the upstream identity provider.  These parameters are optional and depend on what the upstream identity provider supports. Supported parameters are: `login_hint` (string): The `login_hint` parameter suppresses the account chooser and either pre-fills the email box on the sign-in form, or selects the proper session. `hd` (string): The `hd` parameter limits the login/registration process to a Google Organization, e.g. `mycollege.edu`. `prompt` (string): The `prompt` specifies whether the Authorization Server prompts the End-User for reauthentication and consent, e.g. `select_account`.
     *
     * @return self
     */
    public function setUpstreamParameters($upstreamParameters)
    {
        if (is_null($upstreamParameters)) {
            throw new \InvalidArgumentException('non-nullable upstreamParameters cannot be null');
        }
        $this->container['upstreamParameters'] = $upstreamParameters;

        return $this;
    }

    /**
     * Gets totpCode
     *
     * @return string
     */
    public function getTotpCode()
    {
        return $this->container['totpCode'];
    }

    /**
     * Sets totpCode
     *
     * @param string $totpCode The TOTP code.
     *
     * @return self
     */
    public function setTotpCode($totpCode)
    {
        if (is_null($totpCode)) {
            throw new \InvalidArgumentException('non-nullable totpCode cannot be null');
        }
        $this->container['totpCode'] = $totpCode;

        return $this;
    }

    /**
     * Gets webauthnLogin
     *
     * @return string|null
     */
    public function getWebauthnLogin()
    {
        return $this->container['webauthnLogin'];
    }

    /**
     * Sets webauthnLogin
     *
     * @param string|null $webauthnLogin Login a WebAuthn Security Key  This must contain the ID of the WebAuthN connection.
     *
     * @return self
     */
    public function setWebauthnLogin($webauthnLogin)
    {
        if (is_null($webauthnLogin)) {
            throw new \InvalidArgumentException('non-nullable webauthnLogin cannot be null');
        }
        $this->container['webauthnLogin'] = $webauthnLogin;

        return $this;
    }

    /**
     * Gets lookupSecret
     *
     * @return string
     */
    public function getLookupSecret()
    {
        return $this->container['lookupSecret'];
    }

    /**
     * Sets lookupSecret
     *
     * @param string $lookupSecret The lookup secret.
     *
     * @return self
     */
    public function setLookupSecret($lookupSecret)
    {
        if (is_null($lookupSecret)) {
            throw new \InvalidArgumentException('non-nullable lookupSecret cannot be null');
        }
        $this->container['lookupSecret'] = $lookupSecret;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Address is the address to send the code to, in case that there are multiple addresses. This field is only used in two-factor flows and is ineffective for passwordless flows.
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Code is the 6 digits code sent to the user
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets resend
     *
     * @return string|null
     */
    public function getResend()
    {
        return $this->container['resend'];
    }

    /**
     * Sets resend
     *
     * @param string|null $resend Resend is set when the user wants to resend the code
     *
     * @return self
     */
    public function setResend($resend)
    {
        if (is_null($resend)) {
            throw new \InvalidArgumentException('non-nullable resend cannot be null');
        }
        $this->container['resend'] = $resend;

        return $this;
    }

    /**
     * Gets passkeyLogin
     *
     * @return string|null
     */
    public function getPasskeyLogin()
    {
        return $this->container['passkeyLogin'];
    }

    /**
     * Sets passkeyLogin
     *
     * @param string|null $passkeyLogin Login a WebAuthn Security Key  This must contain the ID of the WebAuthN connection.
     *
     * @return self
     */
    public function setPasskeyLogin($passkeyLogin)
    {
        if (is_null($passkeyLogin)) {
            throw new \InvalidArgumentException('non-nullable passkeyLogin cannot be null');
        }
        $this->container['passkeyLogin'] = $passkeyLogin;

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


