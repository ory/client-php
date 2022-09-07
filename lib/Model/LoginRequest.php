<?php
/**
 * LoginRequest
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
 * The version of the OpenAPI document: v0.2.0-alpha.32
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
 * LoginRequest Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LoginRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'loginRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'challenge' => 'string',
        'client' => '\Ory\Client\Model\OAuth2Client',
        'oidcContext' => '\Ory\Client\Model\OpenIDConnectContext',
        'requestUrl' => 'string',
        'requestedAccessTokenAudience' => 'string[]',
        'requestedScope' => 'string[]',
        'sessionId' => 'string',
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
        'challenge' => null,
        'client' => null,
        'oidcContext' => null,
        'requestUrl' => null,
        'requestedAccessTokenAudience' => null,
        'requestedScope' => null,
        'sessionId' => null,
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
        'challenge' => 'challenge',
        'client' => 'client',
        'oidcContext' => 'oidc_context',
        'requestUrl' => 'request_url',
        'requestedAccessTokenAudience' => 'requested_access_token_audience',
        'requestedScope' => 'requested_scope',
        'sessionId' => 'session_id',
        'skip' => 'skip',
        'subject' => 'subject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'challenge' => 'setChallenge',
        'client' => 'setClient',
        'oidcContext' => 'setOidcContext',
        'requestUrl' => 'setRequestUrl',
        'requestedAccessTokenAudience' => 'setRequestedAccessTokenAudience',
        'requestedScope' => 'setRequestedScope',
        'sessionId' => 'setSessionId',
        'skip' => 'setSkip',
        'subject' => 'setSubject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'challenge' => 'getChallenge',
        'client' => 'getClient',
        'oidcContext' => 'getOidcContext',
        'requestUrl' => 'getRequestUrl',
        'requestedAccessTokenAudience' => 'getRequestedAccessTokenAudience',
        'requestedScope' => 'getRequestedScope',
        'sessionId' => 'getSessionId',
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
        $this->container['challenge'] = $data['challenge'] ?? null;
        $this->container['client'] = $data['client'] ?? null;
        $this->container['oidcContext'] = $data['oidcContext'] ?? null;
        $this->container['requestUrl'] = $data['requestUrl'] ?? null;
        $this->container['requestedAccessTokenAudience'] = $data['requestedAccessTokenAudience'] ?? null;
        $this->container['requestedScope'] = $data['requestedScope'] ?? null;
        $this->container['sessionId'] = $data['sessionId'] ?? null;
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
        if ($this->container['client'] === null) {
            $invalidProperties[] = "'client' can't be null";
        }
        if ($this->container['requestUrl'] === null) {
            $invalidProperties[] = "'requestUrl' can't be null";
        }
        if ($this->container['requestedAccessTokenAudience'] === null) {
            $invalidProperties[] = "'requestedAccessTokenAudience' can't be null";
        }
        if ($this->container['requestedScope'] === null) {
            $invalidProperties[] = "'requestedScope' can't be null";
        }
        if ($this->container['skip'] === null) {
            $invalidProperties[] = "'skip' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
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
     * @param string $challenge ID is the identifier (\"login challenge\") of the login request. It is used to identify the session.
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
     * @return \Ory\Client\Model\OAuth2Client
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param \Ory\Client\Model\OAuth2Client $client client
     *
     * @return self
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets oidcContext
     *
     * @return \Ory\Client\Model\OpenIDConnectContext|null
     */
    public function getOidcContext()
    {
        return $this->container['oidcContext'];
    }

    /**
     * Sets oidcContext
     *
     * @param \Ory\Client\Model\OpenIDConnectContext|null $oidcContext oidcContext
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
     * @return string
     */
    public function getRequestUrl()
    {
        return $this->container['requestUrl'];
    }

    /**
     * Sets requestUrl
     *
     * @param string $requestUrl RequestURL is the original OAuth 2.0 Authorization URL requested by the OAuth 2.0 client. It is the URL which initiates the OAuth 2.0 Authorization Code or OAuth 2.0 Implicit flow. This URL is typically not needed, but might come in handy if you want to deal with additional request parameters.
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
     * @return string[]
     */
    public function getRequestedAccessTokenAudience()
    {
        return $this->container['requestedAccessTokenAudience'];
    }

    /**
     * Sets requestedAccessTokenAudience
     *
     * @param string[] $requestedAccessTokenAudience requestedAccessTokenAudience
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
     * @return string[]
     */
    public function getRequestedScope()
    {
        return $this->container['requestedScope'];
    }

    /**
     * Sets requestedScope
     *
     * @param string[] $requestedScope requestedScope
     *
     * @return self
     */
    public function setRequestedScope($requestedScope)
    {
        $this->container['requestedScope'] = $requestedScope;

        return $this;
    }

    /**
     * Gets sessionId
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
     * Sets sessionId
     *
     * @param string|null $sessionId SessionID is the login session ID. If the user-agent reuses a login session (via cookie / remember flag) this ID will remain the same. If the user-agent did not have an existing authentication session (e.g. remember is false) this will be a new random value. This value is used as the \"sid\" parameter in the ID Token and in OIDC Front-/Back- channel logout. It's value can generally be used to associate consecutive login requests by a certain user.
     *
     * @return self
     */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return bool
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param bool $skip Skip, if true, implies that the client has requested the same scopes from the same user previously. If true, you can skip asking the user to grant the requested scopes, and simply forward the user to the redirect URL.  This feature allows you to update / set session information.
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
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Subject is the user ID of the end-user that authenticated. Now, that end user needs to grant or deny the scope requested by the OAuth 2.0 client. If this value is set and `skip` is true, you MUST include this subject type when accepting the login request, or the request will fail.
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


