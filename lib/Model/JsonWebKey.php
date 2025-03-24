<?php
/**
 * JsonWebKey
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
 * The version of the OpenAPI document: v1.19.0
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
 * JsonWebKey Class Doc Comment
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class JsonWebKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'jsonWebKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alg' => 'string',
        'crv' => 'string',
        'd' => 'string',
        'dp' => 'string',
        'dq' => 'string',
        'e' => 'string',
        'k' => 'string',
        'kid' => 'string',
        'kty' => 'string',
        'n' => 'string',
        'p' => 'string',
        'q' => 'string',
        'qi' => 'string',
        'use' => 'string',
        'x' => 'string',
        'x5c' => 'string[]',
        'y' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alg' => null,
        'crv' => null,
        'd' => null,
        'dp' => null,
        'dq' => null,
        'e' => null,
        'k' => null,
        'kid' => null,
        'kty' => null,
        'n' => null,
        'p' => null,
        'q' => null,
        'qi' => null,
        'use' => null,
        'x' => null,
        'x5c' => null,
        'y' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'alg' => false,
        'crv' => false,
        'd' => false,
        'dp' => false,
        'dq' => false,
        'e' => false,
        'k' => false,
        'kid' => false,
        'kty' => false,
        'n' => false,
        'p' => false,
        'q' => false,
        'qi' => false,
        'use' => false,
        'x' => false,
        'x5c' => false,
        'y' => false
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
        'alg' => 'alg',
        'crv' => 'crv',
        'd' => 'd',
        'dp' => 'dp',
        'dq' => 'dq',
        'e' => 'e',
        'k' => 'k',
        'kid' => 'kid',
        'kty' => 'kty',
        'n' => 'n',
        'p' => 'p',
        'q' => 'q',
        'qi' => 'qi',
        'use' => 'use',
        'x' => 'x',
        'x5c' => 'x5c',
        'y' => 'y'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alg' => 'setAlg',
        'crv' => 'setCrv',
        'd' => 'setD',
        'dp' => 'setDp',
        'dq' => 'setDq',
        'e' => 'setE',
        'k' => 'setK',
        'kid' => 'setKid',
        'kty' => 'setKty',
        'n' => 'setN',
        'p' => 'setP',
        'q' => 'setQ',
        'qi' => 'setQi',
        'use' => 'setUse',
        'x' => 'setX',
        'x5c' => 'setX5c',
        'y' => 'setY'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alg' => 'getAlg',
        'crv' => 'getCrv',
        'd' => 'getD',
        'dp' => 'getDp',
        'dq' => 'getDq',
        'e' => 'getE',
        'k' => 'getK',
        'kid' => 'getKid',
        'kty' => 'getKty',
        'n' => 'getN',
        'p' => 'getP',
        'q' => 'getQ',
        'qi' => 'getQi',
        'use' => 'getUse',
        'x' => 'getX',
        'x5c' => 'getX5c',
        'y' => 'getY'
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
        $this->setIfExists('alg', $data ?? [], null);
        $this->setIfExists('crv', $data ?? [], null);
        $this->setIfExists('d', $data ?? [], null);
        $this->setIfExists('dp', $data ?? [], null);
        $this->setIfExists('dq', $data ?? [], null);
        $this->setIfExists('e', $data ?? [], null);
        $this->setIfExists('k', $data ?? [], null);
        $this->setIfExists('kid', $data ?? [], null);
        $this->setIfExists('kty', $data ?? [], null);
        $this->setIfExists('n', $data ?? [], null);
        $this->setIfExists('p', $data ?? [], null);
        $this->setIfExists('q', $data ?? [], null);
        $this->setIfExists('qi', $data ?? [], null);
        $this->setIfExists('use', $data ?? [], null);
        $this->setIfExists('x', $data ?? [], null);
        $this->setIfExists('x5c', $data ?? [], null);
        $this->setIfExists('y', $data ?? [], null);
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

        if ($this->container['alg'] === null) {
            $invalidProperties[] = "'alg' can't be null";
        }
        if ($this->container['kid'] === null) {
            $invalidProperties[] = "'kid' can't be null";
        }
        if ($this->container['kty'] === null) {
            $invalidProperties[] = "'kty' can't be null";
        }
        if ($this->container['use'] === null) {
            $invalidProperties[] = "'use' can't be null";
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
     * Gets alg
     *
     * @return string
     */
    public function getAlg()
    {
        return $this->container['alg'];
    }

    /**
     * Sets alg
     *
     * @param string $alg The \"alg\" (algorithm) parameter identifies the algorithm intended for use with the key.  The values used should either be registered in the IANA \"JSON Web Signature and Encryption Algorithms\" registry established by [JWA] or be a value that contains a Collision- Resistant Name.
     *
     * @return self
     */
    public function setAlg($alg)
    {
        if (is_null($alg)) {
            throw new \InvalidArgumentException('non-nullable alg cannot be null');
        }
        $this->container['alg'] = $alg;

        return $this;
    }

    /**
     * Gets crv
     *
     * @return string|null
     */
    public function getCrv()
    {
        return $this->container['crv'];
    }

    /**
     * Sets crv
     *
     * @param string|null $crv crv
     *
     * @return self
     */
    public function setCrv($crv)
    {
        if (is_null($crv)) {
            throw new \InvalidArgumentException('non-nullable crv cannot be null');
        }
        $this->container['crv'] = $crv;

        return $this;
    }

    /**
     * Gets d
     *
     * @return string|null
     */
    public function getD()
    {
        return $this->container['d'];
    }

    /**
     * Sets d
     *
     * @param string|null $d d
     *
     * @return self
     */
    public function setD($d)
    {
        if (is_null($d)) {
            throw new \InvalidArgumentException('non-nullable d cannot be null');
        }
        $this->container['d'] = $d;

        return $this;
    }

    /**
     * Gets dp
     *
     * @return string|null
     */
    public function getDp()
    {
        return $this->container['dp'];
    }

    /**
     * Sets dp
     *
     * @param string|null $dp dp
     *
     * @return self
     */
    public function setDp($dp)
    {
        if (is_null($dp)) {
            throw new \InvalidArgumentException('non-nullable dp cannot be null');
        }
        $this->container['dp'] = $dp;

        return $this;
    }

    /**
     * Gets dq
     *
     * @return string|null
     */
    public function getDq()
    {
        return $this->container['dq'];
    }

    /**
     * Sets dq
     *
     * @param string|null $dq dq
     *
     * @return self
     */
    public function setDq($dq)
    {
        if (is_null($dq)) {
            throw new \InvalidArgumentException('non-nullable dq cannot be null');
        }
        $this->container['dq'] = $dq;

        return $this;
    }

    /**
     * Gets e
     *
     * @return string|null
     */
    public function getE()
    {
        return $this->container['e'];
    }

    /**
     * Sets e
     *
     * @param string|null $e e
     *
     * @return self
     */
    public function setE($e)
    {
        if (is_null($e)) {
            throw new \InvalidArgumentException('non-nullable e cannot be null');
        }
        $this->container['e'] = $e;

        return $this;
    }

    /**
     * Gets k
     *
     * @return string|null
     */
    public function getK()
    {
        return $this->container['k'];
    }

    /**
     * Sets k
     *
     * @param string|null $k k
     *
     * @return self
     */
    public function setK($k)
    {
        if (is_null($k)) {
            throw new \InvalidArgumentException('non-nullable k cannot be null');
        }
        $this->container['k'] = $k;

        return $this;
    }

    /**
     * Gets kid
     *
     * @return string
     */
    public function getKid()
    {
        return $this->container['kid'];
    }

    /**
     * Sets kid
     *
     * @param string $kid The \"kid\" (key ID) parameter is used to match a specific key.  This is used, for instance, to choose among a set of keys within a JWK Set during key rollover.  The structure of the \"kid\" value is unspecified.  When \"kid\" values are used within a JWK Set, different keys within the JWK Set SHOULD use distinct \"kid\" values.  (One example in which different keys might use the same \"kid\" value is if they have different \"kty\" (key type) values but are considered to be equivalent alternatives by the application using them.)  The \"kid\" value is a case-sensitive string.
     *
     * @return self
     */
    public function setKid($kid)
    {
        if (is_null($kid)) {
            throw new \InvalidArgumentException('non-nullable kid cannot be null');
        }
        $this->container['kid'] = $kid;

        return $this;
    }

    /**
     * Gets kty
     *
     * @return string
     */
    public function getKty()
    {
        return $this->container['kty'];
    }

    /**
     * Sets kty
     *
     * @param string $kty The \"kty\" (key type) parameter identifies the cryptographic algorithm family used with the key, such as \"RSA\" or \"EC\". \"kty\" values should either be registered in the IANA \"JSON Web Key Types\" registry established by [JWA] or be a value that contains a Collision- Resistant Name.  The \"kty\" value is a case-sensitive string.
     *
     * @return self
     */
    public function setKty($kty)
    {
        if (is_null($kty)) {
            throw new \InvalidArgumentException('non-nullable kty cannot be null');
        }
        $this->container['kty'] = $kty;

        return $this;
    }

    /**
     * Gets n
     *
     * @return string|null
     */
    public function getN()
    {
        return $this->container['n'];
    }

    /**
     * Sets n
     *
     * @param string|null $n n
     *
     * @return self
     */
    public function setN($n)
    {
        if (is_null($n)) {
            throw new \InvalidArgumentException('non-nullable n cannot be null');
        }
        $this->container['n'] = $n;

        return $this;
    }

    /**
     * Gets p
     *
     * @return string|null
     */
    public function getP()
    {
        return $this->container['p'];
    }

    /**
     * Sets p
     *
     * @param string|null $p p
     *
     * @return self
     */
    public function setP($p)
    {
        if (is_null($p)) {
            throw new \InvalidArgumentException('non-nullable p cannot be null');
        }
        $this->container['p'] = $p;

        return $this;
    }

    /**
     * Gets q
     *
     * @return string|null
     */
    public function getQ()
    {
        return $this->container['q'];
    }

    /**
     * Sets q
     *
     * @param string|null $q q
     *
     * @return self
     */
    public function setQ($q)
    {
        if (is_null($q)) {
            throw new \InvalidArgumentException('non-nullable q cannot be null');
        }
        $this->container['q'] = $q;

        return $this;
    }

    /**
     * Gets qi
     *
     * @return string|null
     */
    public function getQi()
    {
        return $this->container['qi'];
    }

    /**
     * Sets qi
     *
     * @param string|null $qi qi
     *
     * @return self
     */
    public function setQi($qi)
    {
        if (is_null($qi)) {
            throw new \InvalidArgumentException('non-nullable qi cannot be null');
        }
        $this->container['qi'] = $qi;

        return $this;
    }

    /**
     * Gets use
     *
     * @return string
     */
    public function getUse()
    {
        return $this->container['use'];
    }

    /**
     * Sets use
     *
     * @param string $use Use (\"public key use\") identifies the intended use of the public key. The \"use\" parameter is employed to indicate whether a public key is used for encrypting data or verifying the signature on data. Values are commonly \"sig\" (signature) or \"enc\" (encryption).
     *
     * @return self
     */
    public function setUse($use)
    {
        if (is_null($use)) {
            throw new \InvalidArgumentException('non-nullable use cannot be null');
        }
        $this->container['use'] = $use;

        return $this;
    }

    /**
     * Gets x
     *
     * @return string|null
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param string|null $x x
     *
     * @return self
     */
    public function setX($x)
    {
        if (is_null($x)) {
            throw new \InvalidArgumentException('non-nullable x cannot be null');
        }
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets x5c
     *
     * @return string[]|null
     */
    public function getX5c()
    {
        return $this->container['x5c'];
    }

    /**
     * Sets x5c
     *
     * @param string[]|null $x5c The \"x5c\" (X.509 certificate chain) parameter contains a chain of one or more PKIX certificates [RFC5280].  The certificate chain is represented as a JSON array of certificate value strings.  Each string in the array is a base64-encoded (Section 4 of [RFC4648] -- not base64url-encoded) DER [ITU.X690.1994] PKIX certificate value. The PKIX certificate containing the key value MUST be the first certificate.
     *
     * @return self
     */
    public function setX5c($x5c)
    {
        if (is_null($x5c)) {
            throw new \InvalidArgumentException('non-nullable x5c cannot be null');
        }
        $this->container['x5c'] = $x5c;

        return $this;
    }

    /**
     * Gets y
     *
     * @return string|null
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param string|null $y y
     *
     * @return self
     */
    public function setY($y)
    {
        if (is_null($y)) {
            throw new \InvalidArgumentException('non-nullable y cannot be null');
        }
        $this->container['y'] = $y;

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


