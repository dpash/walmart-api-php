<?php

/**
 * Elements
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
 * Elements Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Elements extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Elements';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'inventories' => '\Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForAllSkuAndAllShipNodes200ResponseElementsInventoriesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'inventories' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inventories' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'inventories' => 'inventories'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'inventories' => 'setInventories'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'inventories' => 'getInventories'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('inventories', $data ?? [], null);
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
     * Gets inventories
     *
     * @return \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForAllSkuAndAllShipNodes200ResponseElementsInventoriesInner[]|null
    
     */
    public function getInventories()
    {
        return $this->container['inventories'];
    }

    /**
     * Sets inventories
     *
     * @param \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForAllSkuAndAllShipNodes200ResponseElementsInventoriesInner[]|null $inventories inventories
     *
     * @return self
    
     */
    public function setInventories($inventories)
    {
        if (is_null($inventories)) {
            throw new \InvalidArgumentException('non-nullable inventories cannot be null');
        }

        $this->container['inventories'] = $inventories;
        return $this;
    }
}


