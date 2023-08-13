<?php
/**
 * UiNodeInputAttributes
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
 * The version of the OpenAPI document: v1.1.45
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
 * UiNodeInputAttributes Class Doc Comment
 *
 * @category Class
 * @description InputAttributes represents the attributes of an input node
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UiNodeInputAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'uiNodeInputAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'autocomplete' => 'string',
        'disabled' => 'bool',
        'label' => '\Ory\Client\Model\UiText',
        'name' => 'string',
        'nodeType' => 'string',
        'onclick' => 'string',
        'pattern' => 'string',
        'required' => 'bool',
        'type' => 'string',
        'value' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'autocomplete' => null,
        'disabled' => null,
        'label' => null,
        'name' => null,
        'nodeType' => null,
        'onclick' => null,
        'pattern' => null,
        'required' => null,
        'type' => null,
        'value' => null
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
        'autocomplete' => 'autocomplete',
        'disabled' => 'disabled',
        'label' => 'label',
        'name' => 'name',
        'nodeType' => 'node_type',
        'onclick' => 'onclick',
        'pattern' => 'pattern',
        'required' => 'required',
        'type' => 'type',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'autocomplete' => 'setAutocomplete',
        'disabled' => 'setDisabled',
        'label' => 'setLabel',
        'name' => 'setName',
        'nodeType' => 'setNodeType',
        'onclick' => 'setOnclick',
        'pattern' => 'setPattern',
        'required' => 'setRequired',
        'type' => 'setType',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'autocomplete' => 'getAutocomplete',
        'disabled' => 'getDisabled',
        'label' => 'getLabel',
        'name' => 'getName',
        'nodeType' => 'getNodeType',
        'onclick' => 'getOnclick',
        'pattern' => 'getPattern',
        'required' => 'getRequired',
        'type' => 'getType',
        'value' => 'getValue'
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

    const AUTOCOMPLETE_EMAIL = 'email';
    const AUTOCOMPLETE_TEL = 'tel';
    const AUTOCOMPLETE_URL = 'url';
    const AUTOCOMPLETE_CURRENT_PASSWORD = 'current-password';
    const AUTOCOMPLETE_NEW_PASSWORD = 'new-password';
    const AUTOCOMPLETE_ONE_TIME_CODE = 'one-time-code';
    const TYPE_TEXT = 'text';
    const TYPE_PASSWORD = 'password';
    const TYPE_NUMBER = 'number';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_HIDDEN = 'hidden';
    const TYPE_EMAIL = 'email';
    const TYPE_TEL = 'tel';
    const TYPE_SUBMIT = 'submit';
    const TYPE_BUTTON = 'button';
    const TYPE_DATETIME_LOCAL = 'datetime-local';
    const TYPE_DATE = 'date';
    const TYPE_URL = 'url';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAutocompleteAllowableValues()
    {
        return [
            self::AUTOCOMPLETE_EMAIL,
            self::AUTOCOMPLETE_TEL,
            self::AUTOCOMPLETE_URL,
            self::AUTOCOMPLETE_CURRENT_PASSWORD,
            self::AUTOCOMPLETE_NEW_PASSWORD,
            self::AUTOCOMPLETE_ONE_TIME_CODE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TEXT,
            self::TYPE_PASSWORD,
            self::TYPE_NUMBER,
            self::TYPE_CHECKBOX,
            self::TYPE_HIDDEN,
            self::TYPE_EMAIL,
            self::TYPE_TEL,
            self::TYPE_SUBMIT,
            self::TYPE_BUTTON,
            self::TYPE_DATETIME_LOCAL,
            self::TYPE_DATE,
            self::TYPE_URL,
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
        $this->container['autocomplete'] = $data['autocomplete'] ?? null;
        $this->container['disabled'] = $data['disabled'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['nodeType'] = $data['nodeType'] ?? null;
        $this->container['onclick'] = $data['onclick'] ?? null;
        $this->container['pattern'] = $data['pattern'] ?? null;
        $this->container['required'] = $data['required'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAutocompleteAllowableValues();
        if (!is_null($this->container['autocomplete']) && !in_array($this->container['autocomplete'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'autocomplete', must be one of '%s'",
                $this->container['autocomplete'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['disabled'] === null) {
            $invalidProperties[] = "'disabled' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['nodeType'] === null) {
            $invalidProperties[] = "'nodeType' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets autocomplete
     *
     * @return string|null
     */
    public function getAutocomplete()
    {
        return $this->container['autocomplete'];
    }

    /**
     * Sets autocomplete
     *
     * @param string|null $autocomplete The autocomplete attribute for the input. email InputAttributeAutocompleteEmail tel InputAttributeAutocompleteTel url InputAttributeAutocompleteUrl current-password InputAttributeAutocompleteCurrentPassword new-password InputAttributeAutocompleteNewPassword one-time-code InputAttributeAutocompleteOneTimeCode
     *
     * @return self
     */
    public function setAutocomplete($autocomplete)
    {
        $allowedValues = $this->getAutocompleteAllowableValues();
        if (!is_null($autocomplete) && !in_array($autocomplete, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'autocomplete', must be one of '%s'",
                    $autocomplete,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['autocomplete'] = $autocomplete;

        return $this;
    }

    /**
     * Gets disabled
     *
     * @return bool
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     *
     * @param bool $disabled Sets the input's disabled field to true or false.
     *
     * @return self
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets label
     *
     * @return \Ory\Client\Model\UiText|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \Ory\Client\Model\UiText|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The input's element name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets nodeType
     *
     * @return string
     */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
     * Sets nodeType
     *
     * @param string $nodeType NodeType represents this node's types. It is a mirror of `node.type` and is primarily used to allow compatibility with OpenAPI 3.0.  In this struct it technically always is \"input\".
     *
     * @return self
     */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;

        return $this;
    }

    /**
     * Gets onclick
     *
     * @return string|null
     */
    public function getOnclick()
    {
        return $this->container['onclick'];
    }

    /**
     * Sets onclick
     *
     * @param string|null $onclick OnClick may contain javascript which should be executed on click. This is primarily used for WebAuthn.
     *
     * @return self
     */
    public function setOnclick($onclick)
    {
        $this->container['onclick'] = $onclick;

        return $this;
    }

    /**
     * Gets pattern
     *
     * @return string|null
     */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
     * Sets pattern
     *
     * @param string|null $pattern The input's pattern.
     *
     * @return self
     */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool|null $required Mark this input field as required.
     *
     * @return self
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

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
     * @param string $type The input's element type. text InputAttributeTypeText password InputAttributeTypePassword number InputAttributeTypeNumber checkbox InputAttributeTypeCheckbox hidden InputAttributeTypeHidden email InputAttributeTypeEmail tel InputAttributeTypeTel submit InputAttributeTypeSubmit button InputAttributeTypeButton datetime-local InputAttributeTypeDateTimeLocal date InputAttributeTypeDate url InputAttributeTypeURI
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets value
     *
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param mixed|null $value The input's value.
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


