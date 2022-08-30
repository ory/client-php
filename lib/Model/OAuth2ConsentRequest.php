<?php
/**
 * OAuth2ConsentRequest
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
 * The version of the OpenAPI document: v0.2.0-alpha.24
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
 * OAuth2ConsentRequest Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
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
        'acr' => 'acr',
        'amr' => 'amr',
        'challenge' => 'challenge',
        'client' => 'client',
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
        $this->container['acr'] = $data['acr'] ?? null;
        $this->container['amr'] = $data['amr'] ?? null;
        $this->container['challenge'] = $data['challenge'] ?? null;
        $this->container['client'] = $data['client'] ?? null;
        $this->container['context'] = $data['context'] ?? null;
        $this->container['loginChallenge'] = $data['loginChallenge'] ?? null;
        $this->container['loginSessionId'] = $data['loginSessionId'] ?? null;
        $this->container['oidcContext'] = $data['oidcContext'] ?? null;
        $this->container['requestUrl'] = $data['requestUrl'] ?? null;
        $this->container['requestedAccessTokenAudience'] = $data['requestedAccessTokenAudience'] ?? null;
        $this->container['requestedScope'] = $data['requestedScope'] ?? null;
        $this->container['skip'] = $data['skip'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
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
     * @param string $challenge ID is the identifier (\"authorization challenge\") of the consent authorization request. It is used to identify the session.
     *
     * @return self
     */
    public function setChallenge($challenge)
    {
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
        $this->container['client'] = $client;

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


