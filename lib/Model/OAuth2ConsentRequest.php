<?php
/**
 * OAuth2ConsentRequest
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
 * The version of the OpenAPI document: v1.17.2
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
 * OAuth2ConsentRequest Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OAuth2ConsentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'oAuth2ConsentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acr' => 'string',
        'amr' => 'string[]',
        'challenge' => 'string',
        'client' => '\Ory\Client\Model\OAuth2Client',
        'consentRequestId' => 'string',
        'context' => 'object',
        'loginChallenge' => 'string',
        'loginSessionId' => 'string',
        'oidcContext' => '\Ory\Client\Model\OAuth2ConsentRequestOpenIDConnectContext',
        'requestUrl' => 'string',
        'requestedAccessTokenAudience' => 'string[]',
        'requestedScope' => 'string[]',
        'skip' => 'bool',
        'subject' => 'string'
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
        'challenge' => null,
        'client' => null,
        'consentRequestId' => null,
        'context' => null,
        'loginChallenge' => null,
        'loginSessionId' => null,
        'oidcContext' => null,
        'requestUrl' => null,
        'requestedAccessTokenAudience' => null,
        'requestedScope' => null,
        'skip' => null,
        'subject' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'acr' => false,
        'amr' => false,
        'challenge' => false,
        'client' => false,
        'consentRequestId' => false,
        'context' => false,
        'loginChallenge' => false,
        'loginSessionId' => false,
        'oidcContext' => false,
        'requestUrl' => false,
        'requestedAccessTokenAudience' => false,
        'requestedScope' => false,
        'skip' => false,
        'subject' => false
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
        'acr' => 'acr',
        'amr' => 'amr',
        'challenge' => 'challenge',
        'client' => 'client',
        'consentRequestId' => 'consent_request_id',
        'context' => 'context',
        'loginChallenge' => 'login_challenge',
        'loginSessionId' => 'login_session_id',
        'oidcContext' => 'oidc_context',
        'requestUrl' => 'request_url',
        'requestedAccessTokenAudience' => 'requested_access_token_audience',
        'requestedScope' => 'requested_scope',
        'skip' => 'skip',
        'subject' => 'subject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acr' => 'setAcr',
        'amr' => 'setAmr',
        'challenge' => 'setChallenge',
        'client' => 'setClient',
        'consentRequestId' => 'setConsentRequestId',
        'context' => 'setContext',
        'loginChallenge' => 'setLoginChallenge',
        'loginSessionId' => 'setLoginSessionId',
        'oidcContext' => 'setOidcContext',
        'requestUrl' => 'setRequestUrl',
        'requestedAccessTokenAudience' => 'setRequestedAccessTokenAudience',
        'requestedScope' => 'setRequestedScope',
        'skip' => 'setSkip',
        'subject' => 'setSubject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acr' => 'getAcr',
        'amr' => 'getAmr',
        'challenge' => 'getChallenge',
        'client' => 'getClient',
        'consentRequestId' => 'getConsentRequestId',
        'context' => 'getContext',
        'loginChallenge' => 'getLoginChallenge',
        'loginSessionId' => 'getLoginSessionId',
        'oidcContext' => 'getOidcContext',
        'requestUrl' => 'getRequestUrl',
        'requestedAccessTokenAudience' => 'getRequestedAccessTokenAudience',
        'requestedScope' => 'getRequestedScope',
        'skip' => 'getSkip',
        'subject' => 'getSubject'
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
        $this->setIfExists('acr', $data ?? [], null);
        $this->setIfExists('amr', $data ?? [], null);
        $this->setIfExists('challenge', $data ?? [], null);
        $this->setIfExists('client', $data ?? [], null);
        $this->setIfExists('consentRequestId', $data ?? [], null);
        $this->setIfExists('context', $data ?? [], null);
        $this->setIfExists('loginChallenge', $data ?? [], null);
        $this->setIfExists('loginSessionId', $data ?? [], null);
        $this->setIfExists('oidcContext', $data ?? [], null);
        $this->setIfExists('requestUrl', $data ?? [], null);
        $this->setIfExists('requestedAccessTokenAudience', $data ?? [], null);
        $this->setIfExists('requestedScope', $data ?? [], null);
        $this->setIfExists('skip', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
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

        if ($this->container['challenge'] === null) {
            $invalidProperties[] = "'challenge' can't be null";
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
     * @param string|null $acr ACR represents the Authentication AuthorizationContext Class Reference value for this authentication session. You can use it to express that, for example, a user authenticated using two factor authentication.
     *
     * @return self
     */
    public function setAcr($acr)
    {
        if (is_null($acr)) {
            throw new \InvalidArgumentException('non-nullable acr cannot be null');
        }
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
        if (is_null($amr)) {
            throw new \InvalidArgumentException('non-nullable amr cannot be null');
        }
        $this->container['amr'] = $amr;

        return $this;
    }

    /**
     * Gets challenge
     *
     * @return string
     */
    public function getChallenge()
    {
        return $this->container['challenge'];
    }

    /**
     * Sets challenge
     *
     * @param string $challenge Challenge is used to retrieve/accept/deny the consent request.
     *
     * @return self
     */
    public function setChallenge($challenge)
    {
        if (is_null($challenge)) {
            throw new \InvalidArgumentException('non-nullable challenge cannot be null');
        }
        $this->container['challenge'] = $challenge;

        return $this;
    }

    /**
     * Gets client
     *
     * @return \Ory\Client\Model\OAuth2Client|null
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param \Ory\Client\Model\OAuth2Client|null $client client
     *
     * @return self
     */
    public function setClient($client)
    {
        if (is_null($client)) {
            throw new \InvalidArgumentException('non-nullable client cannot be null');
        }
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets consentRequestId
     *
     * @return string|null
     */
    public function getConsentRequestId()
    {
        return $this->container['consentRequestId'];
    }

    /**
     * Sets consentRequestId
     *
     * @param string|null $consentRequestId ConsentRequestID is the ID of the consent request.
     *
     * @return self
     */
    public function setConsentRequestId($consentRequestId)
    {
        if (is_null($consentRequestId)) {
            throw new \InvalidArgumentException('non-nullable consentRequestId cannot be null');
        }
        $this->container['consentRequestId'] = $consentRequestId;

        return $this;
    }

    /**
     * Gets context
     *
     * @return object|null
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param object|null $context context
     *
     * @return self
     */
    public function setContext($context)
    {
        if (is_null($context)) {
            throw new \InvalidArgumentException('non-nullable context cannot be null');
        }
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets loginChallenge
     *
     * @return string|null
     */
    public function getLoginChallenge()
    {
        return $this->container['loginChallenge'];
    }

    /**
     * Sets loginChallenge
     *
     * @param string|null $loginChallenge LoginChallenge is the login challenge this consent challenge belongs to. It can be used to associate a login and consent request in the login & consent app.
     *
     * @return self
     */
    public function setLoginChallenge($loginChallenge)
    {
        if (is_null($loginChallenge)) {
            throw new \InvalidArgumentException('non-nullable loginChallenge cannot be null');
        }
        $this->container['loginChallenge'] = $loginChallenge;

        return $this;
    }

    /**
     * Gets loginSessionId
     *
     * @return string|null
     */
    public function getLoginSessionId()
    {
        return $this->container['loginSessionId'];
    }

    /**
     * Sets loginSessionId
     *
     * @param string|null $loginSessionId LoginSessionID is the login session ID. If the user-agent reuses a login session (via cookie / remember flag) this ID will remain the same. If the user-agent did not have an existing authentication session (e.g. remember is false) this will be a new random value. This value is used as the \"sid\" parameter in the ID Token and in OIDC Front-/Back- channel logout. It's value can generally be used to associate consecutive login requests by a certain user.
     *
     * @return self
     */
    public function setLoginSessionId($loginSessionId)
    {
        if (is_null($loginSessionId)) {
            throw new \InvalidArgumentException('non-nullable loginSessionId cannot be null');
        }
        $this->container['loginSessionId'] = $loginSessionId;

        return $this;
    }

    /**
     * Gets oidcContext
     *
     * @return \Ory\Client\Model\OAuth2ConsentRequestOpenIDConnectContext|null
     */
    public function getOidcContext()
    {
        return $this->container['oidcContext'];
    }

    /**
     * Sets oidcContext
     *
     * @param \Ory\Client\Model\OAuth2ConsentRequestOpenIDConnectContext|null $oidcContext oidcContext
     *
     * @return self
     */
    public function setOidcContext($oidcContext)
    {
        if (is_null($oidcContext)) {
            throw new \InvalidArgumentException('non-nullable oidcContext cannot be null');
        }
        $this->container['oidcContext'] = $oidcContext;

        return $this;
    }

    /**
     * Gets requestUrl
     *
     * @return string|null
     */
    public function getRequestUrl()
    {
        return $this->container['requestUrl'];
    }

    /**
     * Sets requestUrl
     *
     * @param string|null $requestUrl RequestURL is the original OAuth 2.0 Authorization URL requested by the OAuth 2.0 client. It is the URL which initiates the OAuth 2.0 Authorization Code or OAuth 2.0 Implicit flow. This URL is typically not needed, but might come in handy if you want to deal with additional request parameters.
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
     * Gets requestedAccessTokenAudience
     *
     * @return string[]|null
     */
    public function getRequestedAccessTokenAudience()
    {
        return $this->container['requestedAccessTokenAudience'];
    }

    /**
     * Sets requestedAccessTokenAudience
     *
     * @param string[]|null $requestedAccessTokenAudience requestedAccessTokenAudience
     *
     * @return self
     */
    public function setRequestedAccessTokenAudience($requestedAccessTokenAudience)
    {
        if (is_null($requestedAccessTokenAudience)) {
            throw new \InvalidArgumentException('non-nullable requestedAccessTokenAudience cannot be null');
        }
        $this->container['requestedAccessTokenAudience'] = $requestedAccessTokenAudience;

        return $this;
    }

    /**
     * Gets requestedScope
     *
     * @return string[]|null
     */
    public function getRequestedScope()
    {
        return $this->container['requestedScope'];
    }

    /**
     * Sets requestedScope
     *
     * @param string[]|null $requestedScope requestedScope
     *
     * @return self
     */
    public function setRequestedScope($requestedScope)
    {
        if (is_null($requestedScope)) {
            throw new \InvalidArgumentException('non-nullable requestedScope cannot be null');
        }
        $this->container['requestedScope'] = $requestedScope;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return bool|null
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param bool|null $skip Skip, if true, implies that the client has requested the same scopes from the same user previously. If true, you must not ask the user to grant the requested scopes. You must however either allow or deny the consent request using the usual API call.
     *
     * @return self
     */
    public function setSkip($skip)
    {
        if (is_null($skip)) {
            throw new \InvalidArgumentException('non-nullable skip cannot be null');
        }
        $this->container['skip'] = $skip;

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
     * @param string|null $subject Subject is the user ID of the end-user that authenticated. Now, that end user needs to grant or deny the scope requested by the OAuth 2.0 client.
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        $this->container['subject'] = $subject;

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


