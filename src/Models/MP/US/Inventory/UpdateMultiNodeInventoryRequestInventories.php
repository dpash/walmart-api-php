<?php

/**
 * UpdateMultiNodeInventoryRequestInventories
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
 * UpdateMultiNodeInventoryRequestInventories Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class UpdateMultiNodeInventoryRequestInventories extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'updateMultiNodeInventory_request_inventories';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'nodes' => '\Walmart\Models\MP\US\Inventory\UpdateMultiNodeInventoryRequestInventoriesNodesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'nodes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'nodes' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'nodes' => 'nodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'nodes' => 'setNodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
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

        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets nodes
     *
     * @return \Walmart\Models\MP\US\Inventory\UpdateMultiNodeInventoryRequestInventoriesNodesInner[]
    
     */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
     * Sets nodes
     *
     * @param \Walmart\Models\MP\US\Inventory\UpdateMultiNodeInventoryRequestInventoriesNodesInner[] $nodes nodes
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


