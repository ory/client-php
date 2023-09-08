<?php
/**
 * CreateProjectBranding
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
 * The version of the OpenAPI document: v1.2.2
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
 * CreateProjectBranding Class Doc Comment
 *
 * @category Class
 * @description Create a Project Branding
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateProjectBranding implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createProjectBranding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'faviconType' => 'string',
        'faviconUrl' => 'string',
        'logoType' => 'string',
        'logoUrl' => 'string',
        'name' => 'string',
        'theme' => '\Ory\Client\Model\ProjectBrandingColors'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'faviconType' => null,
        'faviconUrl' => null,
        'logoType' => null,
        'logoUrl' => null,
        'name' => null,
        'theme' => null
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
        'faviconType' => 'favicon_type',
        'faviconUrl' => 'favicon_url',
        'logoType' => 'logo_type',
        'logoUrl' => 'logo_url',
        'name' => 'name',
        'theme' => 'theme'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'faviconType' => 'setFaviconType',
        'faviconUrl' => 'setFaviconUrl',
        'logoType' => 'setLogoType',
        'logoUrl' => 'setLogoUrl',
        'name' => 'setName',
        'theme' => 'setTheme'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'faviconType' => 'getFaviconType',
        'faviconUrl' => 'getFaviconUrl',
        'logoType' => 'getLogoType',
        'logoUrl' => 'getLogoUrl',
        'name' => 'getName',
        'theme' => 'getTheme'
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
        $this->container['faviconType'] = $data['faviconType'] ?? null;
        $this->container['faviconUrl'] = $data['faviconUrl'] ?? null;
        $this->container['logoType'] = $data['logoType'] ?? null;
        $this->container['logoUrl'] = $data['logoUrl'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['theme'] = $data['theme'] ?? null;
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
     * Gets faviconType
     *
     * @return string|null
     */
    public function getFaviconType()
    {
        return $this->container['faviconType'];
    }

    /**
     * Sets faviconType
     *
     * @param string|null $faviconType faviconType
     *
     * @return self
     */
    public function setFaviconType($faviconType)
    {
        $this->container['faviconType'] = $faviconType;

        return $this;
    }

    /**
     * Gets faviconUrl
     *
     * @return string|null
     */
    public function getFaviconUrl()
    {
        return $this->container['faviconUrl'];
    }

    /**
     * Sets faviconUrl
     *
     * @param string|null $faviconUrl faviconUrl
     *
     * @return self
     */
    public function setFaviconUrl($faviconUrl)
    {
        $this->container['faviconUrl'] = $faviconUrl;

        return $this;
    }

    /**
     * Gets logoType
     *
     * @return string|null
     */
    public function getLogoType()
    {
        return $this->container['logoType'];
    }

    /**
     * Sets logoType
     *
     * @param string|null $logoType logoType
     *
     * @return self
     */
    public function setLogoType($logoType)
    {
        $this->container['logoType'] = $logoType;

        return $this;
    }

    /**
     * Gets logoUrl
     *
     * @return string|null
     */
    public function getLogoUrl()
    {
        return $this->container['logoUrl'];
    }

    /**
     * Sets logoUrl
     *
     * @param string|null $logoUrl logoUrl
     *
     * @return self
     */
    public function setLogoUrl($logoUrl)
    {
        $this->container['logoUrl'] = $logoUrl;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return \Ory\Client\Model\ProjectBrandingColors|null
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param \Ory\Client\Model\ProjectBrandingColors|null $theme theme
     *
     * @return self
     */
    public function setTheme($theme)
    {
        $this->container['theme'] = $theme;

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


