<?php
/**
 * QuotaUsage
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
 * The version of the OpenAPI document: v1.15.5
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
 * QuotaUsage Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class QuotaUsage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'quotaUsage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additionalPrice' => 'string',
        'canUseMore' => 'bool',
        'feature' => 'string',
        'featureAvailable' => 'bool',
        'included' => 'int',
        'used' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additionalPrice' => null,
        'canUseMore' => null,
        'feature' => null,
        'featureAvailable' => null,
        'included' => 'int64',
        'used' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'additionalPrice' => false,
        'canUseMore' => false,
        'feature' => false,
        'featureAvailable' => false,
        'included' => false,
        'used' => false
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
        'additionalPrice' => 'additional_price',
        'canUseMore' => 'can_use_more',
        'feature' => 'feature',
        'featureAvailable' => 'feature_available',
        'included' => 'included',
        'used' => 'used'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additionalPrice' => 'setAdditionalPrice',
        'canUseMore' => 'setCanUseMore',
        'feature' => 'setFeature',
        'featureAvailable' => 'setFeatureAvailable',
        'included' => 'setIncluded',
        'used' => 'setUsed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additionalPrice' => 'getAdditionalPrice',
        'canUseMore' => 'getCanUseMore',
        'feature' => 'getFeature',
        'featureAvailable' => 'getFeatureAvailable',
        'included' => 'getIncluded',
        'used' => 'getUsed'
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

    public const FEATURE_PRODUCTION_PROJECTS = 'production_projects';
    public const FEATURE_STAGING_PROJECTS = 'staging_projects';
    public const FEATURE_DEVELOPMENT_PROJECTS = 'development_projects';
    public const FEATURE_DAILY_ACTIVE_USERS = 'daily_active_users';
    public const FEATURE_CUSTOM_DOMAINS = 'custom_domains';
    public const FEATURE_EVENT_STREAMS = 'event_streams';
    public const FEATURE_EVENT_STREAM_EVENTS = 'event_stream_events';
    public const FEATURE_SLA = 'sla';
    public const FEATURE_COLLABORATOR_SEATS = 'collaborator_seats';
    public const FEATURE_EDGE_CACHE = 'edge_cache';
    public const FEATURE_BRANDING_THEMES = 'branding_themes';
    public const FEATURE_ZENDESK_SUPPORT = 'zendesk_support';
    public const FEATURE_PROJECT_METRICS = 'project_metrics';
    public const FEATURE_PROJECT_METRICS_TIME_WINDOW = 'project_metrics_time_window';
    public const FEATURE_PROJECT_METRICS_EVENTS_HISTORY = 'project_metrics_events_history';
    public const FEATURE_ORGANIZATIONS = 'organizations';
    public const FEATURE_ROP_GRANT = 'rop_grant';
    public const FEATURE_CONCIERGE_ONBOARDING = 'concierge_onboarding';
    public const FEATURE_CREDIT = 'credit';
    public const FEATURE_DATA_LOCATION_GLOBAL = 'data_location_global';
    public const FEATURE_DATA_LOCATION_US = 'data_location_us';
    public const FEATURE_M2M_TOKEN_ISSUANCE = 'm2m_token_issuance';
    public const FEATURE_PERMISSION_CHECKS = 'permission_checks';
    public const FEATURE_CAPTCHA = 'captcha';
    public const FEATURE_DATA_LOCATION_REGIONAL = 'data_location_regional';
    public const FEATURE_RATE_LIMIT_TIER = 'rate_limit_tier';
    public const FEATURE_SESSION_RATE_LIMIT_TIER = 'session_rate_limit_tier';
    public const FEATURE_IDENTITIES_LIST_RATE_LIMIT_TIER = 'identities_list_rate_limit_tier';
    public const FEATURE_PERMISSION_CHECKS_RATE_LIMIT_TIER = 'permission_checks_rate_limit_tier';
    public const FEATURE_OAUTH2_INTROSPECT_RATE_LIMIT_TIER = 'oauth2_introspect_rate_limit_tier';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeatureAllowableValues()
    {
        return [
            self::FEATURE_PRODUCTION_PROJECTS,
            self::FEATURE_STAGING_PROJECTS,
            self::FEATURE_DEVELOPMENT_PROJECTS,
            self::FEATURE_DAILY_ACTIVE_USERS,
            self::FEATURE_CUSTOM_DOMAINS,
            self::FEATURE_EVENT_STREAMS,
            self::FEATURE_EVENT_STREAM_EVENTS,
            self::FEATURE_SLA,
            self::FEATURE_COLLABORATOR_SEATS,
            self::FEATURE_EDGE_CACHE,
            self::FEATURE_BRANDING_THEMES,
            self::FEATURE_ZENDESK_SUPPORT,
            self::FEATURE_PROJECT_METRICS,
            self::FEATURE_PROJECT_METRICS_TIME_WINDOW,
            self::FEATURE_PROJECT_METRICS_EVENTS_HISTORY,
            self::FEATURE_ORGANIZATIONS,
            self::FEATURE_ROP_GRANT,
            self::FEATURE_CONCIERGE_ONBOARDING,
            self::FEATURE_CREDIT,
            self::FEATURE_DATA_LOCATION_GLOBAL,
            self::FEATURE_DATA_LOCATION_US,
            self::FEATURE_M2M_TOKEN_ISSUANCE,
            self::FEATURE_PERMISSION_CHECKS,
            self::FEATURE_CAPTCHA,
            self::FEATURE_DATA_LOCATION_REGIONAL,
            self::FEATURE_RATE_LIMIT_TIER,
            self::FEATURE_SESSION_RATE_LIMIT_TIER,
            self::FEATURE_IDENTITIES_LIST_RATE_LIMIT_TIER,
            self::FEATURE_PERMISSION_CHECKS_RATE_LIMIT_TIER,
            self::FEATURE_OAUTH2_INTROSPECT_RATE_LIMIT_TIER,
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
        $this->setIfExists('additionalPrice', $data ?? [], null);
        $this->setIfExists('canUseMore', $data ?? [], null);
        $this->setIfExists('feature', $data ?? [], null);
        $this->setIfExists('featureAvailable', $data ?? [], null);
        $this->setIfExists('included', $data ?? [], null);
        $this->setIfExists('used', $data ?? [], null);
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

        if ($this->container['additionalPrice'] === null) {
            $invalidProperties[] = "'additionalPrice' can't be null";
        }
        if ($this->container['canUseMore'] === null) {
            $invalidProperties[] = "'canUseMore' can't be null";
        }
        if ($this->container['feature'] === null) {
            $invalidProperties[] = "'feature' can't be null";
        }
        $allowedValues = $this->getFeatureAllowableValues();
        if (!is_null($this->container['feature']) && !in_array($this->container['feature'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'feature', must be one of '%s'",
                $this->container['feature'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['featureAvailable'] === null) {
            $invalidProperties[] = "'featureAvailable' can't be null";
        }
        if ($this->container['included'] === null) {
            $invalidProperties[] = "'included' can't be null";
        }
        if ($this->container['used'] === null) {
            $invalidProperties[] = "'used' can't be null";
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
     * Gets additionalPrice
     *
     * @return string
     */
    public function getAdditionalPrice()
    {
        return $this->container['additionalPrice'];
    }

    /**
     * Sets additionalPrice
     *
     * @param string $additionalPrice The additional price per unit in cents.
     *
     * @return self
     */
    public function setAdditionalPrice($additionalPrice)
    {
        if (is_null($additionalPrice)) {
            throw new \InvalidArgumentException('non-nullable additionalPrice cannot be null');
        }
        $this->container['additionalPrice'] = $additionalPrice;

        return $this;
    }

    /**
     * Gets canUseMore
     *
     * @return bool
     */
    public function getCanUseMore()
    {
        return $this->container['canUseMore'];
    }

    /**
     * Sets canUseMore
     *
     * @param bool $canUseMore canUseMore
     *
     * @return self
     */
    public function setCanUseMore($canUseMore)
    {
        if (is_null($canUseMore)) {
            throw new \InvalidArgumentException('non-nullable canUseMore cannot be null');
        }
        $this->container['canUseMore'] = $canUseMore;

        return $this;
    }

    /**
     * Gets feature
     *
     * @return string
     */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
     * Sets feature
     *
     * @param string $feature production_projects ProductionProjects staging_projects StagingProjects development_projects DevelopmentProjects daily_active_users DailyActiveUsers custom_domains CustomDomains event_streams EventStreams event_stream_events EventStreamEvents sla SLA collaborator_seats CollaboratorSeats edge_cache EdgeCache branding_themes BrandingThemes zendesk_support ZendeskSupport project_metrics ProjectMetrics project_metrics_time_window ProjectMetricsTimeWindow project_metrics_events_history ProjectMetricsEventsHistory organizations Organizations rop_grant ResourceOwnerPasswordGrant concierge_onboarding ConciergeOnboarding credit Credit data_location_global DataLocationGlobal data_location_us DataLocationUS m2m_token_issuance M2MTokenIssuance permission_checks PermissionChecks captcha Captcha data_location_regional DataLocationRegional  Required Features rate_limit_tier RateLimitTier session_rate_limit_tier RateLimitTierSessions identities_list_rate_limit_tier RateLimitTierIdentitiesList permission_checks_rate_limit_tier RateLimitTierPermissionChecks oauth2_introspect_rate_limit_tier RateLimitTierOAuth2Introspect
     *
     * @return self
     */
    public function setFeature($feature)
    {
        if (is_null($feature)) {
            throw new \InvalidArgumentException('non-nullable feature cannot be null');
        }
        $allowedValues = $this->getFeatureAllowableValues();
        if (!in_array($feature, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'feature', must be one of '%s'",
                    $feature,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['feature'] = $feature;

        return $this;
    }

    /**
     * Gets featureAvailable
     *
     * @return bool
     */
    public function getFeatureAvailable()
    {
        return $this->container['featureAvailable'];
    }

    /**
     * Sets featureAvailable
     *
     * @param bool $featureAvailable featureAvailable
     *
     * @return self
     */
    public function setFeatureAvailable($featureAvailable)
    {
        if (is_null($featureAvailable)) {
            throw new \InvalidArgumentException('non-nullable featureAvailable cannot be null');
        }
        $this->container['featureAvailable'] = $featureAvailable;

        return $this;
    }

    /**
     * Gets included
     *
     * @return int
     */
    public function getIncluded()
    {
        return $this->container['included'];
    }

    /**
     * Sets included
     *
     * @param int $included included
     *
     * @return self
     */
    public function setIncluded($included)
    {
        if (is_null($included)) {
            throw new \InvalidArgumentException('non-nullable included cannot be null');
        }
        $this->container['included'] = $included;

        return $this;
    }

    /**
     * Gets used
     *
     * @return int
     */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
     * Sets used
     *
     * @param int $used used
     *
     * @return self
     */
    public function setUsed($used)
    {
        if (is_null($used)) {
            throw new \InvalidArgumentException('non-nullable used cannot be null');
        }
        $this->container['used'] = $used;

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


