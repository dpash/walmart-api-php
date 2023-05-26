<?php

/**
 * UpdateStrategy200Response
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
 * Price Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Prices;

use Walmart\Model\BaseModel;
use Walmart\Traits\HasResponseHeaders;

/**
 * UpdateStrategy200Response Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class UpdateStrategy200Response extends BaseModel
{
    use HasResponseHeaders;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'updateStrategy_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'repricerStrategy' => 'string',
        'strategyCollectionId' => 'string',
        'enabled' => 'bool',
        'enableRepricerForPromotion' => 'bool',
        'strategies' => '\Walmart\Models\MP\US\Prices\UpdateStrategyRequestStrategiesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'repricerStrategy' => null,
        'strategyCollectionId' => null,
        'enabled' => null,
        'enableRepricerForPromotion' => null,
        'strategies' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'repricerStrategy' => false,
        'strategyCollectionId' => false,
        'enabled' => false,
        'enableRepricerForPromotion' => false,
        'strategies' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'repricerStrategy' => 'repricerStrategy',
        'strategyCollectionId' => 'strategyCollectionId',
        'enabled' => 'enabled',
        'enableRepricerForPromotion' => 'enableRepricerForPromotion',
        'strategies' => 'strategies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'repricerStrategy' => 'setRepricerStrategy',
        'strategyCollectionId' => 'setStrategyCollectionId',
        'enabled' => 'setEnabled',
        'enableRepricerForPromotion' => 'setEnableRepricerForPromotion',
        'strategies' => 'setStrategies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'repricerStrategy' => 'getRepricerStrategy',
        'strategyCollectionId' => 'getStrategyCollectionId',
        'enabled' => 'getEnabled',
        'enableRepricerForPromotion' => 'getEnableRepricerForPromotion',
        'strategies' => 'getStrategies'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('repricerStrategy', $data ?? [], null);
        $this->setIfExists('strategyCollectionId', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('enableRepricerForPromotion', $data ?? [], null);
        $this->setIfExists('strategies', $data ?? [], null);
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
     * Gets repricerStrategy
     *
     * @return string|null
    
     */
    public function getRepricerStrategy()
    {
        return $this->container['repricerStrategy'];
    }

    /**
     * Sets repricerStrategy
     *
     * @param string|null $repricerStrategy repricerStrategy
     *
     * @return self
    
     */
    public function setRepricerStrategy($repricerStrategy)
    {
        if (is_null($repricerStrategy)) {
            throw new \InvalidArgumentException('non-nullable repricerStrategy cannot be null');
        }

        $this->container['repricerStrategy'] = $repricerStrategy;
        return $this;
    }

    /**
     * Gets strategyCollectionId
     *
     * @return string|null
    
     */
    public function getStrategyCollectionId()
    {
        return $this->container['strategyCollectionId'];
    }

    /**
     * Sets strategyCollectionId
     *
     * @param string|null $strategyCollectionId strategyCollectionId
     *
     * @return self
    
     */
    public function setStrategyCollectionId($strategyCollectionId)
    {
        if (is_null($strategyCollectionId)) {
            throw new \InvalidArgumentException('non-nullable strategyCollectionId cannot be null');
        }

        $this->container['strategyCollectionId'] = $strategyCollectionId;
        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
    
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return self
    
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }

        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
     * Gets enableRepricerForPromotion
     *
     * @return bool|null
    
     */
    public function getEnableRepricerForPromotion()
    {
        return $this->container['enableRepricerForPromotion'];
    }

    /**
     * Sets enableRepricerForPromotion
     *
     * @param bool|null $enableRepricerForPromotion enableRepricerForPromotion
     *
     * @return self
    
     */
    public function setEnableRepricerForPromotion($enableRepricerForPromotion)
    {
        if (is_null($enableRepricerForPromotion)) {
            throw new \InvalidArgumentException('non-nullable enableRepricerForPromotion cannot be null');
        }

        $this->container['enableRepricerForPromotion'] = $enableRepricerForPromotion;
        return $this;
    }

    /**
     * Gets strategies
     *
     * @return \Walmart\Models\MP\US\Prices\UpdateStrategyRequestStrategiesInner[]|null
    
     */
    public function getStrategies()
    {
        return $this->container['strategies'];
    }

    /**
     * Sets strategies
     *
     * @param \Walmart\Models\MP\US\Prices\UpdateStrategyRequestStrategiesInner[]|null $strategies strategies
     *
     * @return self
    
     */
    public function setStrategies($strategies)
    {
        if (is_null($strategies)) {
            throw new \InvalidArgumentException('non-nullable strategies cannot be null');
        }

        $this->container['strategies'] = $strategies;
        return $this;
    }
}


