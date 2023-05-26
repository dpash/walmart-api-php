<?php

/**
 * PartnerConfig
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
 * PartnerConfig Class Doc Comment
 *
 * @category Class

 * @description List of seller configurations like Seller Account & feed throttling values

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PartnerConfig extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PartnerConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'configurationName' => 'string',
        'configuration' => '\Walmart\Models\MP\US\Settings\GetPartnerConfigurations200ResponseConfigurationsInnerAnyOf1Configuration'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'configurationName' => null,
        'configuration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'configurationName' => false,
        'configuration' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'configurationName' => 'configurationName',
        'configuration' => 'configuration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'configurationName' => 'setConfigurationName',
        'configuration' => 'setConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'configurationName' => 'getConfigurationName',
        'configuration' => 'getConfiguration'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('configurationName', $data ?? [], null);
        $this->setIfExists('configuration', $data ?? [], null);
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
     * Gets configurationName
     *
     * @return string|null
    
     */
    public function getConfigurationName()
    {
        return $this->container['configurationName'];
    }

    /**
     * Sets configurationName
     *
     * @param string|null $configurationName Name of the configuration. Allowed value is FEED
     *
     * @return self
    
     */
    public function setConfigurationName($configurationName)
    {
        if (is_null($configurationName)) {
            throw new \InvalidArgumentException('non-nullable configurationName cannot be null');
        }

        $this->container['configurationName'] = $configurationName;
        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \Walmart\Models\MP\US\Settings\GetPartnerConfigurations200ResponseConfigurationsInnerAnyOf1Configuration|null
    
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \Walmart\Models\MP\US\Settings\GetPartnerConfigurations200ResponseConfigurationsInnerAnyOf1Configuration|null $configuration configuration
     *
     * @return self
    
     */
    public function setConfiguration($configuration)
    {
        if (is_null($configuration)) {
            throw new \InvalidArgumentException('non-nullable configuration cannot be null');
        }

        $this->container['configuration'] = $configuration;
        return $this;
    }
}


