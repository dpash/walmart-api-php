<?php

/**
 * RefundChargesType
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

namespace Walmart\Models\DSV\US\Orders;

use Walmart\Model\BaseModel;

/**
 * RefundChargesType Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class RefundChargesType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RefundChargesType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'refundCharge' => '\Walmart\Models\DSV\US\Orders\ShipOrderLines200ResponseOrderLinesOrderLineInnerRefundRefundChargesRefundChargeInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'refundCharge' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'refundCharge' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'refundCharge' => 'refundCharge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'refundCharge' => 'setRefundCharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'refundCharge' => 'getRefundCharge'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('refundCharge', $data ?? [], null);
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
     * Gets refundCharge
     *
     * @return \Walmart\Models\DSV\US\Orders\ShipOrderLines200ResponseOrderLinesOrderLineInnerRefundRefundChargesRefundChargeInner[]|null
    
     */
    public function getRefundCharge()
    {
        return $this->container['refundCharge'];
    }

    /**
     * Sets refundCharge
     *
     * @param \Walmart\Models\DSV\US\Orders\ShipOrderLines200ResponseOrderLinesOrderLineInnerRefundRefundChargesRefundChargeInner[]|null $refundCharge refundCharge
     *
     * @return self
    
     */
    public function setRefundCharge($refundCharge)
    {
        if (is_null($refundCharge)) {
            throw new \InvalidArgumentException('non-nullable refundCharge cannot be null');
        }

        $this->container['refundCharge'] = $refundCharge;
        return $this;
    }
}


