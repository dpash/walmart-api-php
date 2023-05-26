<?php

/**
 * MultiNodeInventoryFetchResponseDTO
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
 * Inventory Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Inventory;

use Walmart\Model\BaseModel;

/**
 * MultiNodeInventoryFetchResponseDTO Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class MultiNodeInventoryFetchResponseDTO extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'MultiNodeInventoryFetchResponseDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'meta' => '\Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForAllSkuAndAllShipNodes200ResponseMeta',
        'elements' => '\Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForAllSkuAndAllShipNodes200ResponseElements'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'meta' => null,
        'elements' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'meta' => false,
        'elements' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'meta' => 'meta',
        'elements' => 'elements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'meta' => 'setMeta',
        'elements' => 'setElements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'meta' => 'getMeta',
        'elements' => 'getElements'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('elements', $data ?? [], null);
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
     * Gets meta
     *
     * @return \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForAllSkuAndAllShipNodes200ResponseMeta|null
    
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForAllSkuAndAllShipNodes200ResponseMeta|null $meta meta
     *
     * @return self
    
     */
    public function setMeta($meta)
    {
        if (is_null($meta)) {
            throw new \InvalidArgumentException('non-nullable meta cannot be null');
        }

        $this->container['meta'] = $meta;
        return $this;
    }

    /**
     * Gets elements
     *
     * @return \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForAllSkuAndAllShipNodes200ResponseElements|null
    
     */
    public function getElements()
    {
        return $this->container['elements'];
    }

    /**
     * Sets elements
     *
     * @param \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForAllSkuAndAllShipNodes200ResponseElements|null $elements elements
     *
     * @return self
    
     */
    public function setElements($elements)
    {
        if (is_null($elements)) {
            throw new \InvalidArgumentException('non-nullable elements cannot be null');
        }

        $this->container['elements'] = $elements;
        return $this;
    }
}


