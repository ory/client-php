<?php
/**
 * UiNodeAttributes
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
 * The version of the OpenAPI document: v1.13.1
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
 * UiNodeAttributes Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UiNodeAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'nodeType';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'uiNodeAttributes';

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
        'onload' => 'string',
        'pattern' => 'string',
        'required' => 'bool',
        'type' => 'string',
        'value' => 'mixed',
        'id' => 'string',
        'text' => '\Ory\Client\Model\UiText',
        'height' => 'int',
        'src' => 'string',
        'width' => 'int',
        'href' => 'string',
        'title' => '\Ory\Client\Model\UiText',
        'async' => 'bool',
        'crossorigin' => 'string',
        'integrity' => 'string',
        'nonce' => 'string',
        'referrerpolicy' => 'string'
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
        'onload' => null,
        'pattern' => null,
        'required' => null,
        'type' => null,
        'value' => null,
        'id' => null,
        'text' => null,
        'height' => 'int64',
        'src' => null,
        'width' => 'int64',
        'href' => null,
        'title' => null,
        'async' => null,
        'crossorigin' => null,
        'integrity' => null,
        'nonce' => null,
        'referrerpolicy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'autocomplete' => false,
        'disabled' => false,
        'label' => false,
        'name' => false,
        'nodeType' => false,
        'onclick' => false,
        'onload' => false,
        'pattern' => false,
        'required' => false,
        'type' => false,
        'value' => true,
        'id' => false,
        'text' => false,
        'height' => false,
        'src' => false,
        'width' => false,
        'href' => false,
        'title' => false,
        'async' => false,
        'crossorigin' => false,
        'integrity' => false,
        'nonce' => false,
        'referrerpolicy' => false
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
        'autocomplete' => 'autocomplete',
        'disabled' => 'disabled',
        'label' => 'label',
        'name' => 'name',
        'nodeType' => 'node_type',
        'onclick' => 'onclick',
        'onload' => 'onload',
        'pattern' => 'pattern',
        'required' => 'required',
        'type' => 'type',
        'value' => 'value',
        'id' => 'id',
        'text' => 'text',
        'height' => 'height',
        'src' => 'src',
        'width' => 'width',
        'href' => 'href',
        'title' => 'title',
        'async' => 'async',
        'crossorigin' => 'crossorigin',
        'integrity' => 'integrity',
        'nonce' => 'nonce',
        'referrerpolicy' => 'referrerpolicy'
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
        'onload' => 'setOnload',
        'pattern' => 'setPattern',
        'required' => 'setRequired',
        'type' => 'setType',
        'value' => 'setValue',
        'id' => 'setId',
        'text' => 'setText',
        'height' => 'setHeight',
        'src' => 'setSrc',
        'width' => 'setWidth',
        'href' => 'setHref',
        'title' => 'setTitle',
        'async' => 'setAsync',
        'crossorigin' => 'setCrossorigin',
        'integrity' => 'setIntegrity',
        'nonce' => 'setNonce',
        'referrerpolicy' => 'setReferrerpolicy'
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
        'onload' => 'getOnload',
        'pattern' => 'getPattern',
        'required' => 'getRequired',
        'type' => 'getType',
        'value' => 'getValue',
        'id' => 'getId',
        'text' => 'getText',
        'height' => 'getHeight',
        'src' => 'getSrc',
        'width' => 'getWidth',
        'href' => 'getHref',
        'title' => 'getTitle',
        'async' => 'getAsync',
        'crossorigin' => 'getCrossorigin',
        'integrity' => 'getIntegrity',
        'nonce' => 'getNonce',
        'referrerpolicy' => 'getReferrerpolicy'
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

    public const AUTOCOMPLETE_EMAIL = 'email';
    public const AUTOCOMPLETE_TEL = 'tel';
    public const AUTOCOMPLETE_URL = 'url';
    public const AUTOCOMPLETE_CURRENT_PASSWORD = 'current-password';
    public const AUTOCOMPLETE_NEW_PASSWORD = 'new-password';
    public const AUTOCOMPLETE_ONE_TIME_CODE = 'one-time-code';
    public const NODE_TYPE_TEXT = 'text';
    public const NODE_TYPE_INPUT = 'input';
    public const NODE_TYPE_IMG = 'img';
    public const NODE_TYPE_A = 'a';
    public const NODE_TYPE_SCRIPT = 'script';

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
    public function getNodeTypeAllowableValues()
    {
        return [
            self::NODE_TYPE_TEXT,
            self::NODE_TYPE_INPUT,
            self::NODE_TYPE_IMG,
            self::NODE_TYPE_A,
            self::NODE_TYPE_SCRIPT,
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
        $this->setIfExists('autocomplete', $data ?? [], null);
        $this->setIfExists('disabled', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('nodeType', $data ?? [], null);
        $this->setIfExists('onclick', $data ?? [], null);
        $this->setIfExists('onload', $data ?? [], null);
        $this->setIfExists('pattern', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('src', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('href', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('async', $data ?? [], null);
        $this->setIfExists('crossorigin', $data ?? [], null);
        $this->setIfExists('integrity', $data ?? [], null);
        $this->setIfExists('nonce', $data ?? [], null);
        $this->setIfExists('referrerpolicy', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['nodeType'] = static::$openAPIModelName;
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
        $allowedValues = $this->getNodeTypeAllowableValues();
        if (!is_null($this->container['nodeType']) && !in_array($this->container['nodeType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'nodeType', must be one of '%s'",
                $this->container['nodeType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['src'] === null) {
            $invalidProperties[] = "'src' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['href'] === null) {
            $invalidProperties[] = "'href' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['async'] === null) {
            $invalidProperties[] = "'async' can't be null";
        }
        if ($this->container['crossorigin'] === null) {
            $invalidProperties[] = "'crossorigin' can't be null";
        }
        if ($this->container['integrity'] === null) {
            $invalidProperties[] = "'integrity' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ($this->container['referrerpolicy'] === null) {
            $invalidProperties[] = "'referrerpolicy' can't be null";
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
        if (is_null($autocomplete)) {
            throw new \InvalidArgumentException('non-nullable autocomplete cannot be null');
        }
        $allowedValues = $this->getAutocompleteAllowableValues();
        if (!in_array($autocomplete, $allowedValues, true)) {
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
        if (is_null($disabled)) {
            throw new \InvalidArgumentException('non-nullable disabled cannot be null');
        }
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
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
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
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
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
     * @param string $nodeType NodeType represents this node's types. It is a mirror of `node.type` and is primarily used to allow compatibility with OpenAPI 3.0. In this struct it technically always is \"script\". text Text input Input img Image a Anchor script Script
     *
     * @return self
     */
    public function setNodeType($nodeType)
    {
        if (is_null($nodeType)) {
            throw new \InvalidArgumentException('non-nullable nodeType cannot be null');
        }
        $allowedValues = $this->getNodeTypeAllowableValues();
        if (!in_array($nodeType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'nodeType', must be one of '%s'",
                    $nodeType,
                    implode("', '", $allowedValues)
                )
            );
        }
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
        if (is_null($onclick)) {
            throw new \InvalidArgumentException('non-nullable onclick cannot be null');
        }
        $this->container['onclick'] = $onclick;

        return $this;
    }

    /**
     * Gets onload
     *
     * @return string|null
     */
    public function getOnload()
    {
        return $this->container['onload'];
    }

    /**
     * Sets onload
     *
     * @param string|null $onload OnLoad may contain javascript which should be executed on load. This is primarily used for WebAuthn.
     *
     * @return self
     */
    public function setOnload($onload)
    {
        if (is_null($onload)) {
            throw new \InvalidArgumentException('non-nullable onload cannot be null');
        }
        $this->container['onload'] = $onload;

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
        if (is_null($pattern)) {
            throw new \InvalidArgumentException('non-nullable pattern cannot be null');
        }
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
        if (is_null($required)) {
            throw new \InvalidArgumentException('non-nullable required cannot be null');
        }
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
     * @param string $type The script MIME type
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
        if (is_null($value)) {
            array_push($this->openAPINullablesSetToNull, 'value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['value'] = $value;

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
     * @param string $id A unique identifier
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
     * Gets text
     *
     * @return \Ory\Client\Model\UiText
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param \Ory\Client\Model\UiText $text text
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height Height of the image
     *
     * @return self
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->container['src'];
    }

    /**
     * Sets src
     *
     * @param string $src The script source
     *
     * @return self
     */
    public function setSrc($src)
    {
        if (is_null($src)) {
            throw new \InvalidArgumentException('non-nullable src cannot be null');
        }
        $this->container['src'] = $src;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width Width of the image
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string $href The link's href (destination) URL.  format: uri
     *
     * @return self
     */
    public function setHref($href)
    {
        if (is_null($href)) {
            throw new \InvalidArgumentException('non-nullable href cannot be null');
        }
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets title
     *
     * @return \Ory\Client\Model\UiText
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param \Ory\Client\Model\UiText $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets async
     *
     * @return bool
     */
    public function getAsync()
    {
        return $this->container['async'];
    }

    /**
     * Sets async
     *
     * @param bool $async The script async type
     *
     * @return self
     */
    public function setAsync($async)
    {
        if (is_null($async)) {
            throw new \InvalidArgumentException('non-nullable async cannot be null');
        }
        $this->container['async'] = $async;

        return $this;
    }

    /**
     * Gets crossorigin
     *
     * @return string
     */
    public function getCrossorigin()
    {
        return $this->container['crossorigin'];
    }

    /**
     * Sets crossorigin
     *
     * @param string $crossorigin The script cross origin policy
     *
     * @return self
     */
    public function setCrossorigin($crossorigin)
    {
        if (is_null($crossorigin)) {
            throw new \InvalidArgumentException('non-nullable crossorigin cannot be null');
        }
        $this->container['crossorigin'] = $crossorigin;

        return $this;
    }

    /**
     * Gets integrity
     *
     * @return string
     */
    public function getIntegrity()
    {
        return $this->container['integrity'];
    }

    /**
     * Sets integrity
     *
     * @param string $integrity The script's integrity hash
     *
     * @return self
     */
    public function setIntegrity($integrity)
    {
        if (is_null($integrity)) {
            throw new \InvalidArgumentException('non-nullable integrity cannot be null');
        }
        $this->container['integrity'] = $integrity;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return string
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param string $nonce Nonce for CSP  A nonce you may want to use to improve your Content Security Policy. You do not have to use this value but if you want to improve your CSP policies you may use it. You can also choose to use your own nonce value!
     *
     * @return self
     */
    public function setNonce($nonce)
    {
        if (is_null($nonce)) {
            throw new \InvalidArgumentException('non-nullable nonce cannot be null');
        }
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets referrerpolicy
     *
     * @return string
     */
    public function getReferrerpolicy()
    {
        return $this->container['referrerpolicy'];
    }

    /**
     * Sets referrerpolicy
     *
     * @param string $referrerpolicy The script referrer policy
     *
     * @return self
     */
    public function setReferrerpolicy($referrerpolicy)
    {
        if (is_null($referrerpolicy)) {
            throw new \InvalidArgumentException('non-nullable referrerpolicy cannot be null');
        }
        $this->container['referrerpolicy'] = $referrerpolicy;

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


