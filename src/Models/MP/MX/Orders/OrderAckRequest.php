<?php

/**
 * OrderAckRequest
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
 * OrderAckRequest Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class OrderAckRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderAckRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'orderAcknowledge' => '\Walmart\Models\MP\MX\Orders\AcknowledgeOrdersRequestOrderAcknowledge'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'orderAcknowledge' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orderAcknowledge' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'orderAcknowledge' => 'orderAcknowledge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'orderAcknowledge' => 'setOrderAcknowledge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'orderAcknowledge' => 'getOrderAcknowledge'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('orderAcknowledge', $data ?? [], null);
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
     * Gets orderAcknowledge
     *
     * @return \Walmart\Models\MP\MX\Orders\AcknowledgeOrdersRequestOrderAcknowledge|null
    
     */
    public function getOrderAcknowledge()
    {
        return $this->container['orderAcknowledge'];
    }

    /**
     * Sets orderAcknowledge
     *
     * @param \Walmart\Models\MP\MX\Orders\AcknowledgeOrdersRequestOrderAcknowledge|null $orderAcknowledge orderAcknowledge
     *
     * @return self
    
     */
    public function setOrderAcknowledge($orderAcknowledge)
    {
        if (is_null($orderAcknowledge)) {
            throw new \InvalidArgumentException('non-nullable orderAcknowledge cannot be null');
        }

        $this->container['orderAcknowledge'] = $orderAcknowledge;
        return $this;
    }
}


