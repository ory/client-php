<?php
/**
 * IdentityCredentialsType
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
 * The version of the OpenAPI document: v1.1.39-alpha.0
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
use \Ory\Client\ObjectSerializer;

/**
 * IdentityCredentialsType Class Doc Comment
 *
 * @category Class
 * @description and so on.
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IdentityCredentialsType
{
    /**
     * Possible values of this enum
     */
    const PASSWORD = 'password';

    const TOTP = 'totp';

    const OIDC = 'oidc';

    const WEBAUTHN = 'webauthn';

    const LOOKUP_SECRET = 'lookup_secret';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PASSWORD,
            self::TOTP,
            self::OIDC,
            self::WEBAUTHN,
            self::LOOKUP_SECRET
        ];
    }
}


