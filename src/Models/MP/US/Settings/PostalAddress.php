<?php

/**
 * PostalAddress
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;

use Walmart\Model\BaseModel;

/**
 * PostalAddress Class Doc Comment
 *
 * @category Class

 * @description Postal code of the fulfillment center.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PostalAddress extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PostalAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'addressLine1' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country' => 'string',
        'postalCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'addressLine1' => null,
        'city' => null,
        'state' => null,
        'country' => null,
        'postalCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'addressLine1' => false,
        'city' => false,
        'state' => false,
        'country' => false,
        'postalCode' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'addressLine1' => 'addressLine1',
        'city' => 'city',
        'state' => 'state',
        'country' => 'country',
        'postalCode' => 'postalCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'addressLine1' => 'setAddressLine1',
        'city' => 'setCity',
        'state' => 'setState',
        'country' => 'setCountry',
        'postalCode' => 'setPostalCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'addressLine1' => 'getAddressLine1',
        'city' => 'getCity',
        'state' => 'getState',
        'country' => 'getCountry',
        'postalCode' => 'getPostalCode'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('addressLine1', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('postalCode', $data ?? [], null);
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
     * Gets addressLine1
     *
     * @return string|null
    
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string|null $addressLine1 Street address of the fulfillment center.
     *
     * @return self
    
     */
    public function setAddressLine1($addressLine1)
    {
        if (is_null($addressLine1)) {
            throw new \InvalidArgumentException('non-nullable addressLine1 cannot be null');
        }

        $this->container['addressLine1'] = $addressLine1;
        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
    
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City of the fulfillment center.
     *
     * @return self
    
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }

        $this->container['city'] = $city;
        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
    
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State of the fulfillment center.
     *
     * @return self
    
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }

        $this->container['state'] = $state;
        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
    
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country of the fulfillment center.
     *
     * @return self
    
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }

        $this->container['country'] = $country;
        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string|null
    
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string|null $postalCode Postal code of the fulfillment center.
     *
     * @return self
    
     */
    public function setPostalCode($postalCode)
    {
        if (is_null($postalCode)) {
            throw new \InvalidArgumentException('non-nullable postalCode cannot be null');
        }

        $this->container['postalCode'] = $postalCode;
        return $this;
    }
}


