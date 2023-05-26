<?php

/**
 * ReturnLocation
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
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Model\BaseModel;

/**
 * ReturnLocation Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ReturnLocation extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ReturnLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'locationName' => 'string',
        'address' => '\Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseOriginLocationAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'locationName' => null,
        'address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'locationName' => false,
        'address' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'locationName' => 'locationName',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'locationName' => 'setLocationName',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'locationName' => 'getLocationName',
        'address' => 'getAddress'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('locationName', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['locationName'] === null) {
            $invalidProperties[] = "'locationName' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets locationName
     *
     * @return string
    
     */
    public function getLocationName()
    {
        return $this->container['locationName'];
    }

    /**
     * Sets locationName
     *
     * @param string $locationName locationName
     *
     * @return self
    
     */
    public function setLocationName($locationName)
    {
        if (is_null($locationName)) {
            throw new \InvalidArgumentException('non-nullable locationName cannot be null');
        }

        $this->container['locationName'] = $locationName;
        return $this;
    }

    /**
     * Gets address
     *
     * @return \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseOriginLocationAddress
    
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseOriginLocationAddress $address address
     *
     * @return self
    
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }

        $this->container['address'] = $address;
        return $this;
    }
}


