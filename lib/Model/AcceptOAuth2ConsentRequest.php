<?php
/**
 * AcceptOAuth2ConsentRequest
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
 * Documentation for all public and administrative Ory APIs. Administrative APIs can only be accessed with a valid Personal Access Token. Public APIs are mostly used in browsers.
 *
 * The version of the OpenAPI document: v1.11.12
 * Contact: support@ory.sh
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
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
 * AcceptOAuth2ConsentRequest Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AcceptOAuth2ConsentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'acceptOAuth2ConsentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'context' => 'object',
        'grantAccessTokenAudience' => 'string[]',
        'grantScope' => 'string[]',
        'handledAt' => '\DateTime',
        'remember' => 'bool',
        'rememberFor' => 'int',
        'session' => '\Ory\Client\Model\AcceptOAuth2ConsentRequestSession'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'context' => null,
        'grantAccessTokenAudience' => null,
        'grantScope' => null,
        'handledAt' => 'date-time',
        'remember' => null,
        'rememberFor' => 'int64',
        'session' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'context' => false,
        'grantAccessTokenAudience' => false,
        'grantScope' => false,
        'handledAt' => false,
        'remember' => false,
        'rememberFor' => false,
        'session' => false
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
        'context' => 'context',
        'grantAccessTokenAudience' => 'grant_access_token_audience',
        'grantScope' => 'grant_scope',
        'handledAt' => 'handled_at',
        'remember' => 'remember',
        'rememberFor' => 'remember_for',
        'session' => 'session'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
        'grantAccessTokenAudience' => 'setGrantAccessTokenAudience',
        'grantScope' => 'setGrantScope',
        'handledAt' => 'setHandledAt',
        'remember' => 'setRemember',
        'rememberFor' => 'setRememberFor',
        'session' => 'setSession'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
        'grantAccessTokenAudience' => 'getGrantAccessTokenAudience',
        'grantScope' => 'getGrantScope',
        'handledAt' => 'getHandledAt',
        'remember' => 'getRemember',
        'rememberFor' => 'getRememberFor',
        'session' => 'getSession'
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
        $this->setIfExists('context', $data ?? [], null);
        $this->setIfExists('grantAccessTokenAudience', $data ?? [], null);
        $this->setIfExists('grantScope', $data ?? [], null);
        $this->setIfExists('handledAt', $data ?? [], null);
        $this->setIfExists('remember', $data ?? [], null);
        $this->setIfExists('rememberFor', $data ?? [], null);
        $this->setIfExists('session', $data ?? [], null);
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
     * Gets grantAccessTokenAudience
     *
     * @return string[]|null
     */
    public function getGrantAccessTokenAudience()
    {
        return $this->container['grantAccessTokenAudience'];
    }

    /**
     * Sets grantAccessTokenAudience
     *
     * @param string[]|null $grantAccessTokenAudience grantAccessTokenAudience
     *
     * @return self
     */
    public function setGrantAccessTokenAudience($grantAccessTokenAudience)
    {
        if (is_null($grantAccessTokenAudience)) {
            throw new \InvalidArgumentException('non-nullable grantAccessTokenAudience cannot be null');
        }
        $this->container['grantAccessTokenAudience'] = $grantAccessTokenAudience;

        return $this;
    }

    /**
     * Gets grantScope
     *
     * @return string[]|null
     */
    public function getGrantScope()
    {
        return $this->container['grantScope'];
    }

    /**
     * Sets grantScope
     *
     * @param string[]|null $grantScope grantScope
     *
     * @return self
     */
    public function setGrantScope($grantScope)
    {
        if (is_null($grantScope)) {
            throw new \InvalidArgumentException('non-nullable grantScope cannot be null');
        }
        $this->container['grantScope'] = $grantScope;

        return $this;
    }

    /**
     * Gets handledAt
     *
     * @return \DateTime|null
     */
    public function getHandledAt()
    {
        return $this->container['handledAt'];
    }

    /**
     * Sets handledAt
     *
     * @param \DateTime|null $handledAt handledAt
     *
     * @return self
     */
    public function setHandledAt($handledAt)
    {
        if (is_null($handledAt)) {
            throw new \InvalidArgumentException('non-nullable handledAt cannot be null');
        }
        $this->container['handledAt'] = $handledAt;

        return $this;
    }

    /**
     * Gets remember
     *
     * @return bool|null
     */
    public function getRemember()
    {
        return $this->container['remember'];
    }

    /**
     * Sets remember
     *
     * @param bool|null $remember Remember, if set to true, tells ORY Hydra to remember this consent authorization and reuse it if the same client asks the same user for the same, or a subset of, scope.
     *
     * @return self
     */
    public function setRemember($remember)
    {
        if (is_null($remember)) {
            throw new \InvalidArgumentException('non-nullable remember cannot be null');
        }
        $this->container['remember'] = $remember;

        return $this;
    }

    /**
     * Gets rememberFor
     *
     * @return int|null
     */
    public function getRememberFor()
    {
        return $this->container['rememberFor'];
    }

    /**
     * Sets rememberFor
     *
     * @param int|null $rememberFor RememberFor sets how long the consent authorization should be remembered for in seconds. If set to `0`, the authorization will be remembered indefinitely.
     *
     * @return self
     */
    public function setRememberFor($rememberFor)
    {
        if (is_null($rememberFor)) {
            throw new \InvalidArgumentException('non-nullable rememberFor cannot be null');
        }
        $this->container['rememberFor'] = $rememberFor;

        return $this;
    }

    /**
     * Gets session
     *
     * @return \Ory\Client\Model\AcceptOAuth2ConsentRequestSession|null
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     *
     * @param \Ory\Client\Model\AcceptOAuth2ConsentRequestSession|null $session session
     *
     * @return self
     */
    public function setSession($session)
    {
        if (is_null($session)) {
            throw new \InvalidArgumentException('non-nullable session cannot be null');
        }
        $this->container['session'] = $session;

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


