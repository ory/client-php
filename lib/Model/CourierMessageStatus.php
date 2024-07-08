<?php
/**
 * CourierMessageStatus
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
 * The version of the OpenAPI document: v1.13.10
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
use \Ory\Client\ObjectSerializer;

/**
 * CourierMessageStatus Class Doc Comment
 *
 * @category Class
 * @description A Message&#39;s Status
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CourierMessageStatus
{
    /**
     * Possible values of this enum
     */
    public const QUEUED = 'queued';

    public const SENT = 'sent';

    public const PROCESSING = 'processing';

    public const ABANDONED = 'abandoned';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::QUEUED,
            self::SENT,
            self::PROCESSING,
            self::ABANDONED
        ];
    }
}


