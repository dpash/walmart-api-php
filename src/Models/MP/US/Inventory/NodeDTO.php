<?php

/**
 * NodeDTO
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
 * NodeDTO Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class NodeDTO extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'NodeDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipNode' => 'string',
        'inputQty' => '\Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerInputQty',
        'availToSellQty' => '\Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerAvailToSellQty',
        'errors' => '\Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerErrorsInner[]',
        'reservedQty' => '\Walmart\Models\MP\US\Inventory\GetInventory200ResponseQuantity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipNode' => null,
        'inputQty' => null,
        'availToSellQty' => null,
        'errors' => null,
        'reservedQty' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipNode' => false,
        'inputQty' => false,
        'availToSellQty' => false,
        'errors' => false,
        'reservedQty' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipNode' => 'shipNode',
        'inputQty' => 'inputQty',
        'availToSellQty' => 'availToSellQty',
        'errors' => 'errors',
        'reservedQty' => 'reservedQty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipNode' => 'setShipNode',
        'inputQty' => 'setInputQty',
        'availToSellQty' => 'setAvailToSellQty',
        'errors' => 'setErrors',
        'reservedQty' => 'setReservedQty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipNode' => 'getShipNode',
        'inputQty' => 'getInputQty',
        'availToSellQty' => 'getAvailToSellQty',
        'errors' => 'getErrors',
        'reservedQty' => 'getReservedQty'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipNode', $data ?? [], null);
        $this->setIfExists('inputQty', $data ?? [], null);
        $this->setIfExists('availToSellQty', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
        $this->setIfExists('reservedQty', $data ?? [], null);
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
     * Gets shipNode
     *
     * @return string|null
    
     */
    public function getShipNode()
    {
        return $this->container['shipNode'];
    }

    /**
     * Sets shipNode
     *
     * @param string|null $shipNode ShipNode Id of the ship node for which the inventory is requested
     *
     * @return self
    
     */
    public function setShipNode($shipNode)
    {
        if (is_null($shipNode)) {
            throw new \InvalidArgumentException('non-nullable shipNode cannot be null');
        }

        $this->container['shipNode'] = $shipNode;
        return $this;
    }

    /**
     * Gets inputQty
     *
     * @return \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerInputQty|null
    
     */
    public function getInputQty()
    {
        return $this->container['inputQty'];
    }

    /**
     * Sets inputQty
     *
     * @param \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerInputQty|null $inputQty inputQty
     *
     * @return self
    
     */
    public function setInputQty($inputQty)
    {
        if (is_null($inputQty)) {
            throw new \InvalidArgumentException('non-nullable inputQty cannot be null');
        }

        $this->container['inputQty'] = $inputQty;
        return $this;
    }

    /**
     * Gets availToSellQty
     *
     * @return \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerAvailToSellQty|null
    
     */
    public function getAvailToSellQty()
    {
        return $this->container['availToSellQty'];
    }

    /**
     * Sets availToSellQty
     *
     * @param \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerAvailToSellQty|null $availToSellQty availToSellQty
     *
     * @return self
    
     */
    public function setAvailToSellQty($availToSellQty)
    {
        if (is_null($availToSellQty)) {
            throw new \InvalidArgumentException('non-nullable availToSellQty cannot be null');
        }

        $this->container['availToSellQty'] = $availToSellQty;
        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerErrorsInner[]|null
    
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Walmart\Models\MP\US\Inventory\GetMultiNodeInventoryForSkuAndAllShipnodes200ResponseNodesInnerErrorsInner[]|null $errors errors
     *
     * @return self
    
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            throw new \InvalidArgumentException('non-nullable errors cannot be null');
        }

        $this->container['errors'] = $errors;
        return $this;
    }

    /**
     * Gets reservedQty
     *
     * @return \Walmart\Models\MP\US\Inventory\GetInventory200ResponseQuantity|null
    
     */
    public function getReservedQty()
    {
        return $this->container['reservedQty'];
    }

    /**
     * Sets reservedQty
     *
     * @param \Walmart\Models\MP\US\Inventory\GetInventory200ResponseQuantity|null $reservedQty reservedQty
     *
     * @return self
    
     */
    public function setReservedQty($reservedQty)
    {
        if (is_null($reservedQty)) {
            throw new \InvalidArgumentException('non-nullable reservedQty cannot be null');
        }

        $this->container['reservedQty'] = $reservedQty;
        return $this;
    }
}


