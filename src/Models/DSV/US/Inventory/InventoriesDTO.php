<?php

/**
 * InventoriesDTO
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

namespace Walmart\Models\DSV\US\Inventory;

use Walmart\Model\BaseModel;

/**
 * InventoriesDTO Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class InventoriesDTO extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InventoriesDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sku' => 'string',
        'gtin' => 'string',
        'nodes' => '\Walmart\Models\DSV\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sku' => null,
        'gtin' => null,
        'nodes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sku' => false,
        'gtin' => false,
        'nodes' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sku' => 'sku',
        'gtin' => 'gtin',
        'nodes' => 'nodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sku' => 'setSku',
        'gtin' => 'setGtin',
        'nodes' => 'setNodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sku' => 'getSku',
        'gtin' => 'getGtin',
        'nodes' => 'getNodes'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('gtin', $data ?? [], null);
        $this->setIfExists('nodes', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['gtin'] === null) {
            $invalidProperties[] = "'gtin' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets sku
     *
     * @return string
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku Indicates the stock keeping unit (SKU) item identifier.    This is a product identifier provided by the drop ship vendor (DSV) to identify each item.
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string
    
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string $gtin Indicates the global trade item number (GTIN) item identifier.
     *
     * @return self
    
     */
    public function setGtin($gtin)
    {
        if (is_null($gtin)) {
            throw new \InvalidArgumentException('non-nullable gtin cannot be null');
        }

        $this->container['gtin'] = $gtin;
        return $this;
    }

    /**
     * Gets nodes
     *
     * @return \Walmart\Models\DSV\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInner[]|null
    
     */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
     * Sets nodes
     *
     * @param \Walmart\Models\DSV\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInner[]|null $nodes Indicates an array for nodes, to include ship node and allocated quantity.
     *
     * @return self
    
     */
    public function setNodes($nodes)
    {
        if (is_null($nodes)) {
            throw new \InvalidArgumentException('non-nullable nodes cannot be null');
        }

        $this->container['nodes'] = $nodes;
        return $this;
    }
}


