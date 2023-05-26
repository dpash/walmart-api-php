<?php

/**
 * Association
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
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Items;

use Walmart\Model\BaseModel;

/**
 * Association Class Doc Comment
 *
 * @category Class

 * @description Item Associations like shippingTemplate, shipNode.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Association extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Association';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shippingTemplate' => '\Walmart\Models\MP\US\Items\GetItemAssociations200ResponseItemsInnerAssociationsInnerShippingTemplate',
        'shipNodeName' => 'string',
        'shipNode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shippingTemplate' => null,
        'shipNodeName' => null,
        'shipNode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shippingTemplate' => false,
        'shipNodeName' => false,
        'shipNode' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shippingTemplate' => 'shippingTemplate',
        'shipNodeName' => 'shipNodeName',
        'shipNode' => 'shipNode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shippingTemplate' => 'setShippingTemplate',
        'shipNodeName' => 'setShipNodeName',
        'shipNode' => 'setShipNode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shippingTemplate' => 'getShippingTemplate',
        'shipNodeName' => 'getShipNodeName',
        'shipNode' => 'getShipNode'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shippingTemplate', $data ?? [], null);
        $this->setIfExists('shipNodeName', $data ?? [], null);
        $this->setIfExists('shipNode', $data ?? [], null);
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
     * Gets shippingTemplate
     *
     * @return \Walmart\Models\MP\US\Items\GetItemAssociations200ResponseItemsInnerAssociationsInnerShippingTemplate|null
    
     */
    public function getShippingTemplate()
    {
        return $this->container['shippingTemplate'];
    }

    /**
     * Sets shippingTemplate
     *
     * @param \Walmart\Models\MP\US\Items\GetItemAssociations200ResponseItemsInnerAssociationsInnerShippingTemplate|null $shippingTemplate shippingTemplate
     *
     * @return self
    
     */
    public function setShippingTemplate($shippingTemplate)
    {
        if (is_null($shippingTemplate)) {
            throw new \InvalidArgumentException('non-nullable shippingTemplate cannot be null');
        }

        $this->container['shippingTemplate'] = $shippingTemplate;
        return $this;
    }

    /**
     * Gets shipNodeName
     *
     * @return string|null
    
     */
    public function getShipNodeName()
    {
        return $this->container['shipNodeName'];
    }

    /**
     * Sets shipNodeName
     *
     * @param string|null $shipNodeName Name of the fulfillment center.
     *
     * @return self
    
     */
    public function setShipNodeName($shipNodeName)
    {
        if (is_null($shipNodeName)) {
            throw new \InvalidArgumentException('non-nullable shipNodeName cannot be null');
        }

        $this->container['shipNodeName'] = $shipNodeName;
        return $this;
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
     * @param string|null $shipNode The fulfillment center or ship node Id which uniquely identifies each facility and is autogenerated during the creation of fulfillment center. Every time a facility is added, a new ship node id is generated.
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
}


