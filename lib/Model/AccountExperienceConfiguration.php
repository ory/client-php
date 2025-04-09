<?php
/**
 * AccountExperienceConfiguration
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
 * The version of the OpenAPI document: v1.20.6
 * Contact: support@ory.sh
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
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
 * AccountExperienceConfiguration Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountExperienceConfiguration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'accountExperienceConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'defaultRedirectUrl' => 'string',
        'errorUiUrl' => 'string',
        'faviconDarkUrl' => 'string',
        'faviconLightUrl' => 'string',
        'loginUiUrl' => 'string',
        'logoDarkUrl' => 'string',
        'logoLightUrl' => 'string',
        'name' => 'string',
        'recoveryEnabled' => 'bool',
        'recoveryUiUrl' => 'string',
        'registrationEnabled' => 'bool',
        'registrationUiUrl' => 'string',
        'settingsUiUrl' => 'string',
        'stylesheet' => 'string',
        'verificationEnabled' => 'bool',
        'verificationUiUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'defaultRedirectUrl' => null,
        'errorUiUrl' => null,
        'faviconDarkUrl' => null,
        'faviconLightUrl' => null,
        'loginUiUrl' => null,
        'logoDarkUrl' => null,
        'logoLightUrl' => null,
        'name' => null,
        'recoveryEnabled' => null,
        'recoveryUiUrl' => null,
        'registrationEnabled' => null,
        'registrationUiUrl' => null,
        'settingsUiUrl' => null,
        'stylesheet' => null,
        'verificationEnabled' => null,
        'verificationUiUrl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'defaultRedirectUrl' => false,
        'errorUiUrl' => false,
        'faviconDarkUrl' => false,
        'faviconLightUrl' => false,
        'loginUiUrl' => false,
        'logoDarkUrl' => false,
        'logoLightUrl' => false,
        'name' => false,
        'recoveryEnabled' => false,
        'recoveryUiUrl' => false,
        'registrationEnabled' => false,
        'registrationUiUrl' => false,
        'settingsUiUrl' => false,
        'stylesheet' => false,
        'verificationEnabled' => false,
        'verificationUiUrl' => false
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
        'defaultRedirectUrl' => 'default_redirect_url',
        'errorUiUrl' => 'error_ui_url',
        'faviconDarkUrl' => 'favicon_dark_url',
        'faviconLightUrl' => 'favicon_light_url',
        'loginUiUrl' => 'login_ui_url',
        'logoDarkUrl' => 'logo_dark_url',
        'logoLightUrl' => 'logo_light_url',
        'name' => 'name',
        'recoveryEnabled' => 'recovery_enabled',
        'recoveryUiUrl' => 'recovery_ui_url',
        'registrationEnabled' => 'registration_enabled',
        'registrationUiUrl' => 'registration_ui_url',
        'settingsUiUrl' => 'settings_ui_url',
        'stylesheet' => 'stylesheet',
        'verificationEnabled' => 'verification_enabled',
        'verificationUiUrl' => 'verification_ui_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defaultRedirectUrl' => 'setDefaultRedirectUrl',
        'errorUiUrl' => 'setErrorUiUrl',
        'faviconDarkUrl' => 'setFaviconDarkUrl',
        'faviconLightUrl' => 'setFaviconLightUrl',
        'loginUiUrl' => 'setLoginUiUrl',
        'logoDarkUrl' => 'setLogoDarkUrl',
        'logoLightUrl' => 'setLogoLightUrl',
        'name' => 'setName',
        'recoveryEnabled' => 'setRecoveryEnabled',
        'recoveryUiUrl' => 'setRecoveryUiUrl',
        'registrationEnabled' => 'setRegistrationEnabled',
        'registrationUiUrl' => 'setRegistrationUiUrl',
        'settingsUiUrl' => 'setSettingsUiUrl',
        'stylesheet' => 'setStylesheet',
        'verificationEnabled' => 'setVerificationEnabled',
        'verificationUiUrl' => 'setVerificationUiUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defaultRedirectUrl' => 'getDefaultRedirectUrl',
        'errorUiUrl' => 'getErrorUiUrl',
        'faviconDarkUrl' => 'getFaviconDarkUrl',
        'faviconLightUrl' => 'getFaviconLightUrl',
        'loginUiUrl' => 'getLoginUiUrl',
        'logoDarkUrl' => 'getLogoDarkUrl',
        'logoLightUrl' => 'getLogoLightUrl',
        'name' => 'getName',
        'recoveryEnabled' => 'getRecoveryEnabled',
        'recoveryUiUrl' => 'getRecoveryUiUrl',
        'registrationEnabled' => 'getRegistrationEnabled',
        'registrationUiUrl' => 'getRegistrationUiUrl',
        'settingsUiUrl' => 'getSettingsUiUrl',
        'stylesheet' => 'getStylesheet',
        'verificationEnabled' => 'getVerificationEnabled',
        'verificationUiUrl' => 'getVerificationUiUrl'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('defaultRedirectUrl', $data ?? [], null);
        $this->setIfExists('errorUiUrl', $data ?? [], null);
        $this->setIfExists('faviconDarkUrl', $data ?? [], null);
        $this->setIfExists('faviconLightUrl', $data ?? [], null);
        $this->setIfExists('loginUiUrl', $data ?? [], null);
        $this->setIfExists('logoDarkUrl', $data ?? [], null);
        $this->setIfExists('logoLightUrl', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('recoveryEnabled', $data ?? [], null);
        $this->setIfExists('recoveryUiUrl', $data ?? [], null);
        $this->setIfExists('registrationEnabled', $data ?? [], null);
        $this->setIfExists('registrationUiUrl', $data ?? [], null);
        $this->setIfExists('settingsUiUrl', $data ?? [], null);
        $this->setIfExists('stylesheet', $data ?? [], null);
        $this->setIfExists('verificationEnabled', $data ?? [], null);
        $this->setIfExists('verificationUiUrl', $data ?? [], null);
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

        if ($this->container['defaultRedirectUrl'] === null) {
            $invalidProperties[] = "'defaultRedirectUrl' can't be null";
        }
        if ($this->container['errorUiUrl'] === null) {
            $invalidProperties[] = "'errorUiUrl' can't be null";
        }
        if ($this->container['loginUiUrl'] === null) {
            $invalidProperties[] = "'loginUiUrl' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['recoveryEnabled'] === null) {
            $invalidProperties[] = "'recoveryEnabled' can't be null";
        }
        if ($this->container['recoveryUiUrl'] === null) {
            $invalidProperties[] = "'recoveryUiUrl' can't be null";
        }
        if ($this->container['registrationEnabled'] === null) {
            $invalidProperties[] = "'registrationEnabled' can't be null";
        }
        if ($this->container['registrationUiUrl'] === null) {
            $invalidProperties[] = "'registrationUiUrl' can't be null";
        }
        if ($this->container['settingsUiUrl'] === null) {
            $invalidProperties[] = "'settingsUiUrl' can't be null";
        }
        if ($this->container['verificationEnabled'] === null) {
            $invalidProperties[] = "'verificationEnabled' can't be null";
        }
        if ($this->container['verificationUiUrl'] === null) {
            $invalidProperties[] = "'verificationUiUrl' can't be null";
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
     * Gets defaultRedirectUrl
     *
     * @return string
     */
    public function getDefaultRedirectUrl()
    {
        return $this->container['defaultRedirectUrl'];
    }

    /**
     * Sets defaultRedirectUrl
     *
     * @param string $defaultRedirectUrl defaultRedirectUrl
     *
     * @return self
     */
    public function setDefaultRedirectUrl($defaultRedirectUrl)
    {
        if (is_null($defaultRedirectUrl)) {
            throw new \InvalidArgumentException('non-nullable defaultRedirectUrl cannot be null');
        }
        $this->container['defaultRedirectUrl'] = $defaultRedirectUrl;

        return $this;
    }

    /**
     * Gets errorUiUrl
     *
     * @return string
     */
    public function getErrorUiUrl()
    {
        return $this->container['errorUiUrl'];
    }

    /**
     * Sets errorUiUrl
     *
     * @param string $errorUiUrl errorUiUrl
     *
     * @return self
     */
    public function setErrorUiUrl($errorUiUrl)
    {
        if (is_null($errorUiUrl)) {
            throw new \InvalidArgumentException('non-nullable errorUiUrl cannot be null');
        }
        $this->container['errorUiUrl'] = $errorUiUrl;

        return $this;
    }

    /**
     * Gets faviconDarkUrl
     *
     * @return string|null
     */
    public function getFaviconDarkUrl()
    {
        return $this->container['faviconDarkUrl'];
    }

    /**
     * Sets faviconDarkUrl
     *
     * @param string|null $faviconDarkUrl faviconDarkUrl
     *
     * @return self
     */
    public function setFaviconDarkUrl($faviconDarkUrl)
    {
        if (is_null($faviconDarkUrl)) {
            throw new \InvalidArgumentException('non-nullable faviconDarkUrl cannot be null');
        }
        $this->container['faviconDarkUrl'] = $faviconDarkUrl;

        return $this;
    }

    /**
     * Gets faviconLightUrl
     *
     * @return string|null
     */
    public function getFaviconLightUrl()
    {
        return $this->container['faviconLightUrl'];
    }

    /**
     * Sets faviconLightUrl
     *
     * @param string|null $faviconLightUrl faviconLightUrl
     *
     * @return self
     */
    public function setFaviconLightUrl($faviconLightUrl)
    {
        if (is_null($faviconLightUrl)) {
            throw new \InvalidArgumentException('non-nullable faviconLightUrl cannot be null');
        }
        $this->container['faviconLightUrl'] = $faviconLightUrl;

        return $this;
    }

    /**
     * Gets loginUiUrl
     *
     * @return string
     */
    public function getLoginUiUrl()
    {
        return $this->container['loginUiUrl'];
    }

    /**
     * Sets loginUiUrl
     *
     * @param string $loginUiUrl loginUiUrl
     *
     * @return self
     */
    public function setLoginUiUrl($loginUiUrl)
    {
        if (is_null($loginUiUrl)) {
            throw new \InvalidArgumentException('non-nullable loginUiUrl cannot be null');
        }
        $this->container['loginUiUrl'] = $loginUiUrl;

        return $this;
    }

    /**
     * Gets logoDarkUrl
     *
     * @return string|null
     */
    public function getLogoDarkUrl()
    {
        return $this->container['logoDarkUrl'];
    }

    /**
     * Sets logoDarkUrl
     *
     * @param string|null $logoDarkUrl logoDarkUrl
     *
     * @return self
     */
    public function setLogoDarkUrl($logoDarkUrl)
    {
        if (is_null($logoDarkUrl)) {
            throw new \InvalidArgumentException('non-nullable logoDarkUrl cannot be null');
        }
        $this->container['logoDarkUrl'] = $logoDarkUrl;

        return $this;
    }

    /**
     * Gets logoLightUrl
     *
     * @return string|null
     */
    public function getLogoLightUrl()
    {
        return $this->container['logoLightUrl'];
    }

    /**
     * Sets logoLightUrl
     *
     * @param string|null $logoLightUrl logoLightUrl
     *
     * @return self
     */
    public function setLogoLightUrl($logoLightUrl)
    {
        if (is_null($logoLightUrl)) {
            throw new \InvalidArgumentException('non-nullable logoLightUrl cannot be null');
        }
        $this->container['logoLightUrl'] = $logoLightUrl;

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
     * @param string $name name
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
     * Gets recoveryEnabled
     *
     * @return bool
     */
    public function getRecoveryEnabled()
    {
        return $this->container['recoveryEnabled'];
    }

    /**
     * Sets recoveryEnabled
     *
     * @param bool $recoveryEnabled recoveryEnabled
     *
     * @return self
     */
    public function setRecoveryEnabled($recoveryEnabled)
    {
        if (is_null($recoveryEnabled)) {
            throw new \InvalidArgumentException('non-nullable recoveryEnabled cannot be null');
        }
        $this->container['recoveryEnabled'] = $recoveryEnabled;

        return $this;
    }

    /**
     * Gets recoveryUiUrl
     *
     * @return string
     */
    public function getRecoveryUiUrl()
    {
        return $this->container['recoveryUiUrl'];
    }

    /**
     * Sets recoveryUiUrl
     *
     * @param string $recoveryUiUrl recoveryUiUrl
     *
     * @return self
     */
    public function setRecoveryUiUrl($recoveryUiUrl)
    {
        if (is_null($recoveryUiUrl)) {
            throw new \InvalidArgumentException('non-nullable recoveryUiUrl cannot be null');
        }
        $this->container['recoveryUiUrl'] = $recoveryUiUrl;

        return $this;
    }

    /**
     * Gets registrationEnabled
     *
     * @return bool
     */
    public function getRegistrationEnabled()
    {
        return $this->container['registrationEnabled'];
    }

    /**
     * Sets registrationEnabled
     *
     * @param bool $registrationEnabled registrationEnabled
     *
     * @return self
     */
    public function setRegistrationEnabled($registrationEnabled)
    {
        if (is_null($registrationEnabled)) {
            throw new \InvalidArgumentException('non-nullable registrationEnabled cannot be null');
        }
        $this->container['registrationEnabled'] = $registrationEnabled;

        return $this;
    }

    /**
     * Gets registrationUiUrl
     *
     * @return string
     */
    public function getRegistrationUiUrl()
    {
        return $this->container['registrationUiUrl'];
    }

    /**
     * Sets registrationUiUrl
     *
     * @param string $registrationUiUrl registrationUiUrl
     *
     * @return self
     */
    public function setRegistrationUiUrl($registrationUiUrl)
    {
        if (is_null($registrationUiUrl)) {
            throw new \InvalidArgumentException('non-nullable registrationUiUrl cannot be null');
        }
        $this->container['registrationUiUrl'] = $registrationUiUrl;

        return $this;
    }

    /**
     * Gets settingsUiUrl
     *
     * @return string
     */
    public function getSettingsUiUrl()
    {
        return $this->container['settingsUiUrl'];
    }

    /**
     * Sets settingsUiUrl
     *
     * @param string $settingsUiUrl settingsUiUrl
     *
     * @return self
     */
    public function setSettingsUiUrl($settingsUiUrl)
    {
        if (is_null($settingsUiUrl)) {
            throw new \InvalidArgumentException('non-nullable settingsUiUrl cannot be null');
        }
        $this->container['settingsUiUrl'] = $settingsUiUrl;

        return $this;
    }

    /**
     * Gets stylesheet
     *
     * @return string|null
     */
    public function getStylesheet()
    {
        return $this->container['stylesheet'];
    }

    /**
     * Sets stylesheet
     *
     * @param string|null $stylesheet stylesheet
     *
     * @return self
     */
    public function setStylesheet($stylesheet)
    {
        if (is_null($stylesheet)) {
            throw new \InvalidArgumentException('non-nullable stylesheet cannot be null');
        }
        $this->container['stylesheet'] = $stylesheet;

        return $this;
    }

    /**
     * Gets verificationEnabled
     *
     * @return bool
     */
    public function getVerificationEnabled()
    {
        return $this->container['verificationEnabled'];
    }

    /**
     * Sets verificationEnabled
     *
     * @param bool $verificationEnabled verificationEnabled
     *
     * @return self
     */
    public function setVerificationEnabled($verificationEnabled)
    {
        if (is_null($verificationEnabled)) {
            throw new \InvalidArgumentException('non-nullable verificationEnabled cannot be null');
        }
        $this->container['verificationEnabled'] = $verificationEnabled;

        return $this;
    }

    /**
     * Gets verificationUiUrl
     *
     * @return string
     */
    public function getVerificationUiUrl()
    {
        return $this->container['verificationUiUrl'];
    }

    /**
     * Sets verificationUiUrl
     *
     * @param string $verificationUiUrl verificationUiUrl
     *
     * @return self
     */
    public function setVerificationUiUrl($verificationUiUrl)
    {
        if (is_null($verificationUiUrl)) {
            throw new \InvalidArgumentException('non-nullable verificationUiUrl cannot be null');
        }
        $this->container['verificationUiUrl'] = $verificationUiUrl;

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


