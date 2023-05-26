<?php

/**
 * OrderDate
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
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Model\BaseModel;

/**
 * OrderDate Class Doc Comment
 *
 * @category Class

 * @description Shipment dates

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class OrderDate extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderDate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'actualDate' => '\DateTime',
        'dateTypeId' => 'string',
        'expectedDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'actualDate' => 'date-time',
        'dateTypeId' => null,
        'expectedDate' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'actualDate' => false,
        'dateTypeId' => false,
        'expectedDate' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'actualDate' => 'actualDate',
        'dateTypeId' => 'dateTypeId',
        'expectedDate' => 'expectedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'actualDate' => 'setActualDate',
        'dateTypeId' => 'setDateTypeId',
        'expectedDate' => 'setExpectedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'actualDate' => 'getActualDate',
        'dateTypeId' => 'getDateTypeId',
        'expectedDate' => 'getExpectedDate'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('actualDate', $data ?? [], null);
        $this->setIfExists('dateTypeId', $data ?? [], null);
        $this->setIfExists('expectedDate', $data ?? [], null);
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
     * Gets actualDate
     *
     * @return \DateTime|null
    
     */
    public function getActualDate()
    {
        return $this->container['actualDate'];
    }

    /**
     * Sets actualDate
     *
     * @param \DateTime|null $actualDate Actual delivery date of the order
     *
     * @return self
    
     */
    public function setActualDate($actualDate)
    {
        if (is_null($actualDate)) {
            throw new \InvalidArgumentException('non-nullable actualDate cannot be null');
        }

        $this->container['actualDate'] = $actualDate;
        return $this;
    }

    /**
     * Gets dateTypeId
     *
     * @return string|null
    
     */
    public function getDateTypeId()
    {
        return $this->container['dateTypeId'];
    }

    /**
     * Sets dateTypeId
     *
     * @param string|null $dateTypeId Order dateTypeId
     *
     * @return self
    
     */
    public function setDateTypeId($dateTypeId)
    {
        if (is_null($dateTypeId)) {
            throw new \InvalidArgumentException('non-nullable dateTypeId cannot be null');
        }

        $this->container['dateTypeId'] = $dateTypeId;
        return $this;
    }

    /**
     * Gets expectedDate
     *
     * @return \DateTime|null
    
     */
    public function getExpectedDate()
    {
        return $this->container['expectedDate'];
    }

    /**
     * Sets expectedDate
     *
     * @param \DateTime|null $expectedDate Expected delivery date of the order
     *
     * @return self
    
     */
    public function setExpectedDate($expectedDate)
    {
        if (is_null($expectedDate)) {
            throw new \InvalidArgumentException('non-nullable expectedDate cannot be null');
        }

        $this->container['expectedDate'] = $expectedDate;
        return $this;
    }
}


