<?php
/**
 * ProjectBrandingColors
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
 * The version of the OpenAPI document: v1.2.7
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
 * ProjectBrandingColors Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProjectBrandingColors implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'projectBrandingColors';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accentDefaultColor' => 'string',
        'accentDisabledColor' => 'string',
        'accentEmphasisColor' => 'string',
        'accentMutedColor' => 'string',
        'accentSubtleColor' => 'string',
        'backgroundCanvasColor' => 'string',
        'backgroundSubtleColor' => 'string',
        'backgroundSurfaceColor' => 'string',
        'borderDefaultColor' => 'string',
        'errorDefaultColor' => 'string',
        'errorEmphasisColor' => 'string',
        'errorMutedColor' => 'string',
        'errorSubtleColor' => 'string',
        'foregroundDefaultColor' => 'string',
        'foregroundDisabledColor' => 'string',
        'foregroundMutedColor' => 'string',
        'foregroundOnAccentColor' => 'string',
        'foregroundOnDarkColor' => 'string',
        'foregroundOnDisabledColor' => 'string',
        'foregroundSubtleColor' => 'string',
        'inputBackgroundColor' => 'string',
        'inputDisabledColor' => 'string',
        'inputPlaceholderColor' => 'string',
        'inputTextColor' => 'string',
        'primaryColor' => 'string',
        'secondaryColor' => 'string',
        'successEmphasisColor' => 'string',
        'textDefaultColor' => 'string',
        'textDisabledColor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accentDefaultColor' => null,
        'accentDisabledColor' => null,
        'accentEmphasisColor' => null,
        'accentMutedColor' => null,
        'accentSubtleColor' => null,
        'backgroundCanvasColor' => null,
        'backgroundSubtleColor' => null,
        'backgroundSurfaceColor' => null,
        'borderDefaultColor' => null,
        'errorDefaultColor' => null,
        'errorEmphasisColor' => null,
        'errorMutedColor' => null,
        'errorSubtleColor' => null,
        'foregroundDefaultColor' => null,
        'foregroundDisabledColor' => null,
        'foregroundMutedColor' => null,
        'foregroundOnAccentColor' => null,
        'foregroundOnDarkColor' => null,
        'foregroundOnDisabledColor' => null,
        'foregroundSubtleColor' => null,
        'inputBackgroundColor' => null,
        'inputDisabledColor' => null,
        'inputPlaceholderColor' => null,
        'inputTextColor' => null,
        'primaryColor' => null,
        'secondaryColor' => null,
        'successEmphasisColor' => null,
        'textDefaultColor' => null,
        'textDisabledColor' => null
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
        'accentDefaultColor' => 'accent_default_color',
        'accentDisabledColor' => 'accent_disabled_color',
        'accentEmphasisColor' => 'accent_emphasis_color',
        'accentMutedColor' => 'accent_muted_color',
        'accentSubtleColor' => 'accent_subtle_color',
        'backgroundCanvasColor' => 'background_canvas_color',
        'backgroundSubtleColor' => 'background_subtle_color',
        'backgroundSurfaceColor' => 'background_surface_color',
        'borderDefaultColor' => 'border_default_color',
        'errorDefaultColor' => 'error_default_color',
        'errorEmphasisColor' => 'error_emphasis_color',
        'errorMutedColor' => 'error_muted_color',
        'errorSubtleColor' => 'error_subtle_color',
        'foregroundDefaultColor' => 'foreground_default_color',
        'foregroundDisabledColor' => 'foreground_disabled_color',
        'foregroundMutedColor' => 'foreground_muted_color',
        'foregroundOnAccentColor' => 'foreground_on_accent_color',
        'foregroundOnDarkColor' => 'foreground_on_dark_color',
        'foregroundOnDisabledColor' => 'foreground_on_disabled_color',
        'foregroundSubtleColor' => 'foreground_subtle_color',
        'inputBackgroundColor' => 'input_background_color',
        'inputDisabledColor' => 'input_disabled_color',
        'inputPlaceholderColor' => 'input_placeholder_color',
        'inputTextColor' => 'input_text_color',
        'primaryColor' => 'primary_color',
        'secondaryColor' => 'secondary_color',
        'successEmphasisColor' => 'success_emphasis_color',
        'textDefaultColor' => 'text_default_color',
        'textDisabledColor' => 'text_disabled_color'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accentDefaultColor' => 'setAccentDefaultColor',
        'accentDisabledColor' => 'setAccentDisabledColor',
        'accentEmphasisColor' => 'setAccentEmphasisColor',
        'accentMutedColor' => 'setAccentMutedColor',
        'accentSubtleColor' => 'setAccentSubtleColor',
        'backgroundCanvasColor' => 'setBackgroundCanvasColor',
        'backgroundSubtleColor' => 'setBackgroundSubtleColor',
        'backgroundSurfaceColor' => 'setBackgroundSurfaceColor',
        'borderDefaultColor' => 'setBorderDefaultColor',
        'errorDefaultColor' => 'setErrorDefaultColor',
        'errorEmphasisColor' => 'setErrorEmphasisColor',
        'errorMutedColor' => 'setErrorMutedColor',
        'errorSubtleColor' => 'setErrorSubtleColor',
        'foregroundDefaultColor' => 'setForegroundDefaultColor',
        'foregroundDisabledColor' => 'setForegroundDisabledColor',
        'foregroundMutedColor' => 'setForegroundMutedColor',
        'foregroundOnAccentColor' => 'setForegroundOnAccentColor',
        'foregroundOnDarkColor' => 'setForegroundOnDarkColor',
        'foregroundOnDisabledColor' => 'setForegroundOnDisabledColor',
        'foregroundSubtleColor' => 'setForegroundSubtleColor',
        'inputBackgroundColor' => 'setInputBackgroundColor',
        'inputDisabledColor' => 'setInputDisabledColor',
        'inputPlaceholderColor' => 'setInputPlaceholderColor',
        'inputTextColor' => 'setInputTextColor',
        'primaryColor' => 'setPrimaryColor',
        'secondaryColor' => 'setSecondaryColor',
        'successEmphasisColor' => 'setSuccessEmphasisColor',
        'textDefaultColor' => 'setTextDefaultColor',
        'textDisabledColor' => 'setTextDisabledColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accentDefaultColor' => 'getAccentDefaultColor',
        'accentDisabledColor' => 'getAccentDisabledColor',
        'accentEmphasisColor' => 'getAccentEmphasisColor',
        'accentMutedColor' => 'getAccentMutedColor',
        'accentSubtleColor' => 'getAccentSubtleColor',
        'backgroundCanvasColor' => 'getBackgroundCanvasColor',
        'backgroundSubtleColor' => 'getBackgroundSubtleColor',
        'backgroundSurfaceColor' => 'getBackgroundSurfaceColor',
        'borderDefaultColor' => 'getBorderDefaultColor',
        'errorDefaultColor' => 'getErrorDefaultColor',
        'errorEmphasisColor' => 'getErrorEmphasisColor',
        'errorMutedColor' => 'getErrorMutedColor',
        'errorSubtleColor' => 'getErrorSubtleColor',
        'foregroundDefaultColor' => 'getForegroundDefaultColor',
        'foregroundDisabledColor' => 'getForegroundDisabledColor',
        'foregroundMutedColor' => 'getForegroundMutedColor',
        'foregroundOnAccentColor' => 'getForegroundOnAccentColor',
        'foregroundOnDarkColor' => 'getForegroundOnDarkColor',
        'foregroundOnDisabledColor' => 'getForegroundOnDisabledColor',
        'foregroundSubtleColor' => 'getForegroundSubtleColor',
        'inputBackgroundColor' => 'getInputBackgroundColor',
        'inputDisabledColor' => 'getInputDisabledColor',
        'inputPlaceholderColor' => 'getInputPlaceholderColor',
        'inputTextColor' => 'getInputTextColor',
        'primaryColor' => 'getPrimaryColor',
        'secondaryColor' => 'getSecondaryColor',
        'successEmphasisColor' => 'getSuccessEmphasisColor',
        'textDefaultColor' => 'getTextDefaultColor',
        'textDisabledColor' => 'getTextDisabledColor'
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
        $this->container['accentDefaultColor'] = $data['accentDefaultColor'] ?? null;
        $this->container['accentDisabledColor'] = $data['accentDisabledColor'] ?? null;
        $this->container['accentEmphasisColor'] = $data['accentEmphasisColor'] ?? null;
        $this->container['accentMutedColor'] = $data['accentMutedColor'] ?? null;
        $this->container['accentSubtleColor'] = $data['accentSubtleColor'] ?? null;
        $this->container['backgroundCanvasColor'] = $data['backgroundCanvasColor'] ?? null;
        $this->container['backgroundSubtleColor'] = $data['backgroundSubtleColor'] ?? null;
        $this->container['backgroundSurfaceColor'] = $data['backgroundSurfaceColor'] ?? null;
        $this->container['borderDefaultColor'] = $data['borderDefaultColor'] ?? null;
        $this->container['errorDefaultColor'] = $data['errorDefaultColor'] ?? null;
        $this->container['errorEmphasisColor'] = $data['errorEmphasisColor'] ?? null;
        $this->container['errorMutedColor'] = $data['errorMutedColor'] ?? null;
        $this->container['errorSubtleColor'] = $data['errorSubtleColor'] ?? null;
        $this->container['foregroundDefaultColor'] = $data['foregroundDefaultColor'] ?? null;
        $this->container['foregroundDisabledColor'] = $data['foregroundDisabledColor'] ?? null;
        $this->container['foregroundMutedColor'] = $data['foregroundMutedColor'] ?? null;
        $this->container['foregroundOnAccentColor'] = $data['foregroundOnAccentColor'] ?? null;
        $this->container['foregroundOnDarkColor'] = $data['foregroundOnDarkColor'] ?? null;
        $this->container['foregroundOnDisabledColor'] = $data['foregroundOnDisabledColor'] ?? null;
        $this->container['foregroundSubtleColor'] = $data['foregroundSubtleColor'] ?? null;
        $this->container['inputBackgroundColor'] = $data['inputBackgroundColor'] ?? null;
        $this->container['inputDisabledColor'] = $data['inputDisabledColor'] ?? null;
        $this->container['inputPlaceholderColor'] = $data['inputPlaceholderColor'] ?? null;
        $this->container['inputTextColor'] = $data['inputTextColor'] ?? null;
        $this->container['primaryColor'] = $data['primaryColor'] ?? null;
        $this->container['secondaryColor'] = $data['secondaryColor'] ?? null;
        $this->container['successEmphasisColor'] = $data['successEmphasisColor'] ?? null;
        $this->container['textDefaultColor'] = $data['textDefaultColor'] ?? null;
        $this->container['textDisabledColor'] = $data['textDisabledColor'] ?? null;
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
     * Gets accentDefaultColor
     *
     * @return string|null
     */
    public function getAccentDefaultColor()
    {
        return $this->container['accentDefaultColor'];
    }

    /**
     * Sets accentDefaultColor
     *
     * @param string|null $accentDefaultColor AccentDefaultColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setAccentDefaultColor($accentDefaultColor)
    {
        $this->container['accentDefaultColor'] = $accentDefaultColor;

        return $this;
    }

    /**
     * Gets accentDisabledColor
     *
     * @return string|null
     */
    public function getAccentDisabledColor()
    {
        return $this->container['accentDisabledColor'];
    }

    /**
     * Sets accentDisabledColor
     *
     * @param string|null $accentDisabledColor AccentDisabledColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setAccentDisabledColor($accentDisabledColor)
    {
        $this->container['accentDisabledColor'] = $accentDisabledColor;

        return $this;
    }

    /**
     * Gets accentEmphasisColor
     *
     * @return string|null
     */
    public function getAccentEmphasisColor()
    {
        return $this->container['accentEmphasisColor'];
    }

    /**
     * Sets accentEmphasisColor
     *
     * @param string|null $accentEmphasisColor AccentEmphasisColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setAccentEmphasisColor($accentEmphasisColor)
    {
        $this->container['accentEmphasisColor'] = $accentEmphasisColor;

        return $this;
    }

    /**
     * Gets accentMutedColor
     *
     * @return string|null
     */
    public function getAccentMutedColor()
    {
        return $this->container['accentMutedColor'];
    }

    /**
     * Sets accentMutedColor
     *
     * @param string|null $accentMutedColor AccentMutedColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setAccentMutedColor($accentMutedColor)
    {
        $this->container['accentMutedColor'] = $accentMutedColor;

        return $this;
    }

    /**
     * Gets accentSubtleColor
     *
     * @return string|null
     */
    public function getAccentSubtleColor()
    {
        return $this->container['accentSubtleColor'];
    }

    /**
     * Sets accentSubtleColor
     *
     * @param string|null $accentSubtleColor AccentSubtleColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setAccentSubtleColor($accentSubtleColor)
    {
        $this->container['accentSubtleColor'] = $accentSubtleColor;

        return $this;
    }

    /**
     * Gets backgroundCanvasColor
     *
     * @return string|null
     */
    public function getBackgroundCanvasColor()
    {
        return $this->container['backgroundCanvasColor'];
    }

    /**
     * Sets backgroundCanvasColor
     *
     * @param string|null $backgroundCanvasColor BackgroundCanvasColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setBackgroundCanvasColor($backgroundCanvasColor)
    {
        $this->container['backgroundCanvasColor'] = $backgroundCanvasColor;

        return $this;
    }

    /**
     * Gets backgroundSubtleColor
     *
     * @return string|null
     */
    public function getBackgroundSubtleColor()
    {
        return $this->container['backgroundSubtleColor'];
    }

    /**
     * Sets backgroundSubtleColor
     *
     * @param string|null $backgroundSubtleColor BackgroundSubtleColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setBackgroundSubtleColor($backgroundSubtleColor)
    {
        $this->container['backgroundSubtleColor'] = $backgroundSubtleColor;

        return $this;
    }

    /**
     * Gets backgroundSurfaceColor
     *
     * @return string|null
     */
    public function getBackgroundSurfaceColor()
    {
        return $this->container['backgroundSurfaceColor'];
    }

    /**
     * Sets backgroundSurfaceColor
     *
     * @param string|null $backgroundSurfaceColor BackgroundSurfaceColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setBackgroundSurfaceColor($backgroundSurfaceColor)
    {
        $this->container['backgroundSurfaceColor'] = $backgroundSurfaceColor;

        return $this;
    }

    /**
     * Gets borderDefaultColor
     *
     * @return string|null
     */
    public function getBorderDefaultColor()
    {
        return $this->container['borderDefaultColor'];
    }

    /**
     * Sets borderDefaultColor
     *
     * @param string|null $borderDefaultColor BorderDefaultColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setBorderDefaultColor($borderDefaultColor)
    {
        $this->container['borderDefaultColor'] = $borderDefaultColor;

        return $this;
    }

    /**
     * Gets errorDefaultColor
     *
     * @return string|null
     */
    public function getErrorDefaultColor()
    {
        return $this->container['errorDefaultColor'];
    }

    /**
     * Sets errorDefaultColor
     *
     * @param string|null $errorDefaultColor ErrorDefaultColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setErrorDefaultColor($errorDefaultColor)
    {
        $this->container['errorDefaultColor'] = $errorDefaultColor;

        return $this;
    }

    /**
     * Gets errorEmphasisColor
     *
     * @return string|null
     */
    public function getErrorEmphasisColor()
    {
        return $this->container['errorEmphasisColor'];
    }

    /**
     * Sets errorEmphasisColor
     *
     * @param string|null $errorEmphasisColor ErrorEmphasisColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setErrorEmphasisColor($errorEmphasisColor)
    {
        $this->container['errorEmphasisColor'] = $errorEmphasisColor;

        return $this;
    }

    /**
     * Gets errorMutedColor
     *
     * @return string|null
     */
    public function getErrorMutedColor()
    {
        return $this->container['errorMutedColor'];
    }

    /**
     * Sets errorMutedColor
     *
     * @param string|null $errorMutedColor ErrorMutedColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setErrorMutedColor($errorMutedColor)
    {
        $this->container['errorMutedColor'] = $errorMutedColor;

        return $this;
    }

    /**
     * Gets errorSubtleColor
     *
     * @return string|null
     */
    public function getErrorSubtleColor()
    {
        return $this->container['errorSubtleColor'];
    }

    /**
     * Sets errorSubtleColor
     *
     * @param string|null $errorSubtleColor ErrorSubtleColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setErrorSubtleColor($errorSubtleColor)
    {
        $this->container['errorSubtleColor'] = $errorSubtleColor;

        return $this;
    }

    /**
     * Gets foregroundDefaultColor
     *
     * @return string|null
     */
    public function getForegroundDefaultColor()
    {
        return $this->container['foregroundDefaultColor'];
    }

    /**
     * Sets foregroundDefaultColor
     *
     * @param string|null $foregroundDefaultColor ForegroundDefaultColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setForegroundDefaultColor($foregroundDefaultColor)
    {
        $this->container['foregroundDefaultColor'] = $foregroundDefaultColor;

        return $this;
    }

    /**
     * Gets foregroundDisabledColor
     *
     * @return string|null
     */
    public function getForegroundDisabledColor()
    {
        return $this->container['foregroundDisabledColor'];
    }

    /**
     * Sets foregroundDisabledColor
     *
     * @param string|null $foregroundDisabledColor ForegroundDisabledColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setForegroundDisabledColor($foregroundDisabledColor)
    {
        $this->container['foregroundDisabledColor'] = $foregroundDisabledColor;

        return $this;
    }

    /**
     * Gets foregroundMutedColor
     *
     * @return string|null
     */
    public function getForegroundMutedColor()
    {
        return $this->container['foregroundMutedColor'];
    }

    /**
     * Sets foregroundMutedColor
     *
     * @param string|null $foregroundMutedColor ForegroundMutedColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setForegroundMutedColor($foregroundMutedColor)
    {
        $this->container['foregroundMutedColor'] = $foregroundMutedColor;

        return $this;
    }

    /**
     * Gets foregroundOnAccentColor
     *
     * @return string|null
     */
    public function getForegroundOnAccentColor()
    {
        return $this->container['foregroundOnAccentColor'];
    }

    /**
     * Sets foregroundOnAccentColor
     *
     * @param string|null $foregroundOnAccentColor ForegroundOnAccentColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setForegroundOnAccentColor($foregroundOnAccentColor)
    {
        $this->container['foregroundOnAccentColor'] = $foregroundOnAccentColor;

        return $this;
    }

    /**
     * Gets foregroundOnDarkColor
     *
     * @return string|null
     */
    public function getForegroundOnDarkColor()
    {
        return $this->container['foregroundOnDarkColor'];
    }

    /**
     * Sets foregroundOnDarkColor
     *
     * @param string|null $foregroundOnDarkColor ForegroundOnDarkColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setForegroundOnDarkColor($foregroundOnDarkColor)
    {
        $this->container['foregroundOnDarkColor'] = $foregroundOnDarkColor;

        return $this;
    }

    /**
     * Gets foregroundOnDisabledColor
     *
     * @return string|null
     */
    public function getForegroundOnDisabledColor()
    {
        return $this->container['foregroundOnDisabledColor'];
    }

    /**
     * Sets foregroundOnDisabledColor
     *
     * @param string|null $foregroundOnDisabledColor ForegroundOnDisabledColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setForegroundOnDisabledColor($foregroundOnDisabledColor)
    {
        $this->container['foregroundOnDisabledColor'] = $foregroundOnDisabledColor;

        return $this;
    }

    /**
     * Gets foregroundSubtleColor
     *
     * @return string|null
     */
    public function getForegroundSubtleColor()
    {
        return $this->container['foregroundSubtleColor'];
    }

    /**
     * Sets foregroundSubtleColor
     *
     * @param string|null $foregroundSubtleColor ForegroundSubtleColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setForegroundSubtleColor($foregroundSubtleColor)
    {
        $this->container['foregroundSubtleColor'] = $foregroundSubtleColor;

        return $this;
    }

    /**
     * Gets inputBackgroundColor
     *
     * @return string|null
     */
    public function getInputBackgroundColor()
    {
        return $this->container['inputBackgroundColor'];
    }

    /**
     * Sets inputBackgroundColor
     *
     * @param string|null $inputBackgroundColor InputBackgroundColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setInputBackgroundColor($inputBackgroundColor)
    {
        $this->container['inputBackgroundColor'] = $inputBackgroundColor;

        return $this;
    }

    /**
     * Gets inputDisabledColor
     *
     * @return string|null
     */
    public function getInputDisabledColor()
    {
        return $this->container['inputDisabledColor'];
    }

    /**
     * Sets inputDisabledColor
     *
     * @param string|null $inputDisabledColor InputDisabledColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setInputDisabledColor($inputDisabledColor)
    {
        $this->container['inputDisabledColor'] = $inputDisabledColor;

        return $this;
    }

    /**
     * Gets inputPlaceholderColor
     *
     * @return string|null
     */
    public function getInputPlaceholderColor()
    {
        return $this->container['inputPlaceholderColor'];
    }

    /**
     * Sets inputPlaceholderColor
     *
     * @param string|null $inputPlaceholderColor InputPlaceholderColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setInputPlaceholderColor($inputPlaceholderColor)
    {
        $this->container['inputPlaceholderColor'] = $inputPlaceholderColor;

        return $this;
    }

    /**
     * Gets inputTextColor
     *
     * @return string|null
     */
    public function getInputTextColor()
    {
        return $this->container['inputTextColor'];
    }

    /**
     * Sets inputTextColor
     *
     * @param string|null $inputTextColor InputTextColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setInputTextColor($inputTextColor)
    {
        $this->container['inputTextColor'] = $inputTextColor;

        return $this;
    }

    /**
     * Gets primaryColor
     *
     * @return string|null
     */
    public function getPrimaryColor()
    {
        return $this->container['primaryColor'];
    }

    /**
     * Sets primaryColor
     *
     * @param string|null $primaryColor Primary color is an hsla color value used to derive the other colors from for the Ory Account Experience theme.
     *
     * @return self
     */
    public function setPrimaryColor($primaryColor)
    {
        $this->container['primaryColor'] = $primaryColor;

        return $this;
    }

    /**
     * Gets secondaryColor
     *
     * @return string|null
     */
    public function getSecondaryColor()
    {
        return $this->container['secondaryColor'];
    }

    /**
     * Sets secondaryColor
     *
     * @param string|null $secondaryColor Secondary color is a hsla color code used to derive the other colors from for the Ory Account Experience theme.
     *
     * @return self
     */
    public function setSecondaryColor($secondaryColor)
    {
        $this->container['secondaryColor'] = $secondaryColor;

        return $this;
    }

    /**
     * Gets successEmphasisColor
     *
     * @return string|null
     */
    public function getSuccessEmphasisColor()
    {
        return $this->container['successEmphasisColor'];
    }

    /**
     * Sets successEmphasisColor
     *
     * @param string|null $successEmphasisColor SuccessEmphasisColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setSuccessEmphasisColor($successEmphasisColor)
    {
        $this->container['successEmphasisColor'] = $successEmphasisColor;

        return $this;
    }

    /**
     * Gets textDefaultColor
     *
     * @return string|null
     */
    public function getTextDefaultColor()
    {
        return $this->container['textDefaultColor'];
    }

    /**
     * Sets textDefaultColor
     *
     * @param string|null $textDefaultColor TextDefaultColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setTextDefaultColor($textDefaultColor)
    {
        $this->container['textDefaultColor'] = $textDefaultColor;

        return $this;
    }

    /**
     * Gets textDisabledColor
     *
     * @return string|null
     */
    public function getTextDisabledColor()
    {
        return $this->container['textDisabledColor'];
    }

    /**
     * Sets textDisabledColor
     *
     * @param string|null $textDisabledColor TextDisabledColor is a hex color code used by the Ory Account Experience theme.
     *
     * @return self
     */
    public function setTextDisabledColor($textDisabledColor)
    {
        $this->container['textDisabledColor'] = $textDisabledColor;

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


