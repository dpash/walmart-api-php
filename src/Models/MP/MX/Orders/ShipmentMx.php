<?php

/**
 * ShipmentMx
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\Orders;

use Walmart\Model\BaseModel;

/**
 * ShipmentMx Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShipmentMx extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipmentMx';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipments' => '\Walmart\Models\MP\MX\Orders\ShippingUpdatesRequestShipmentsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipments' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipments' => 'shipments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipments' => 'setShipments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipments' => 'getShipments'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipments', $data ?? [], null);
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
     * Gets shipments
     *
     * @return \Walmart\Models\MP\MX\Orders\ShippingUpdatesRequestShipmentsInner[]|null
    
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     *
     * @param \Walmart\Models\MP\MX\Orders\ShippingUpdatesRequestShipmentsInner[]|null $shipments List of shipments associated with the order
     *
     * @return self
    
     */
    public function setShipments($shipments)
    {
        if (is_null($shipments)) {
            throw new \InvalidArgumentException('non-nullable shipments cannot be null');
        }

        $this->container['shipments'] = $shipments;
        return $this;
    }
}


