<?php

/**
 * GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerRegionsInner
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
 * GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerRegionsInner Class Doc Comment
 *
 * @category Class

 * @description Supported Regions includes 48 State Street, 48 State – Street Po Box/Street, AK and HI – Street etc

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerRegionsInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getShippingTemplateDetails_200_response_shippingMethods_inner_configurations_inner_regions_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'regionCode' => 'string',
        'regionName' => 'string',
        'subRegions' => '\Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerRegionsInnerSubRegionsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'regionCode' => null,
        'regionName' => null,
        'subRegions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'regionCode' => false,
        'regionName' => false,
        'subRegions' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'regionCode' => 'regionCode',
        'regionName' => 'regionName',
        'subRegions' => 'subRegions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'regionCode' => 'setRegionCode',
        'regionName' => 'setRegionName',
        'subRegions' => 'setSubRegions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'regionCode' => 'getRegionCode',
        'regionName' => 'getRegionName',
        'subRegions' => 'getSubRegions'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('regionCode', $data ?? [], null);
        $this->setIfExists('regionName', $data ?? [], null);
        $this->setIfExists('subRegions', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['regionCode'] === null) {
            $invalidProperties[] = "'regionCode' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets regionCode
     *
     * @return string
    
     */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
     * Sets regionCode
     *
     * @param string $regionCode regionCode
     *
     * @return self
    
     */
    public function setRegionCode($regionCode)
    {
        if (is_null($regionCode)) {
            throw new \InvalidArgumentException('non-nullable regionCode cannot be null');
        }

        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
     * Gets regionName
     *
     * @return string|null
    
     */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
     * Sets regionName
     *
     * @param string|null $regionName regionName
     *
     * @return self
    
     */
    public function setRegionName($regionName)
    {
        if (is_null($regionName)) {
            throw new \InvalidArgumentException('non-nullable regionName cannot be null');
        }

        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
     * Gets subRegions
     *
     * @return \Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerRegionsInnerSubRegionsInner[]|null
    
     */
    public function getSubRegions()
    {
        return $this->container['subRegions'];
    }

    /**
     * Sets subRegions
     *
     * @param \Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInnerConfigurationsInnerRegionsInnerSubRegionsInner[]|null $subRegions subRegions
     *
     * @return self
    
     */
    public function setSubRegions($subRegions)
    {
        if (is_null($subRegions)) {
            throw new \InvalidArgumentException('non-nullable subRegions cannot be null');
        }

        $this->container['subRegions'] = $subRegions;
        return $this;
    }
}


