<?php

/**
 * ShippingUpdates200ResponseOrderShippingInfo
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

namespace Walmart\Models\MP\US\Orders;

use Walmart\Model\BaseModel;

/**
 * ShippingUpdates200ResponseOrderShippingInfo Class Doc Comment
 *
 * @category Class

 * @description The shipping information provided by the customer to the seller

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingUpdates200ResponseOrderShippingInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'shippingUpdates_200_response_order_shippingInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'phone' => 'string',
        'estimatedDeliveryDate' => 'int',
        'estimatedShipDate' => 'int',
        'methodCode' => 'string',
        'postalAddress' => '\Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderShippingInfoPostalAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'phone' => null,
        'estimatedDeliveryDate' => 'int64',
        'estimatedShipDate' => 'int64',
        'methodCode' => null,
        'postalAddress' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'phone' => false,
        'estimatedDeliveryDate' => false,
        'estimatedShipDate' => false,
        'methodCode' => false,
        'postalAddress' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'phone' => 'phone',
        'estimatedDeliveryDate' => 'estimatedDeliveryDate',
        'estimatedShipDate' => 'estimatedShipDate',
        'methodCode' => 'methodCode',
        'postalAddress' => 'postalAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'phone' => 'setPhone',
        'estimatedDeliveryDate' => 'setEstimatedDeliveryDate',
        'estimatedShipDate' => 'setEstimatedShipDate',
        'methodCode' => 'setMethodCode',
        'postalAddress' => 'setPostalAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'phone' => 'getPhone',
        'estimatedDeliveryDate' => 'getEstimatedDeliveryDate',
        'estimatedShipDate' => 'getEstimatedShipDate',
        'methodCode' => 'getMethodCode',
        'postalAddress' => 'getPostalAddress'
    ];


    public const METHOD_CODE_STANDARD = 'Standard';

    public const METHOD_CODE_EXPRESS = 'Express';

    public const METHOD_CODE_ONE_DAY = 'OneDay';

    public const METHOD_CODE_FREIGHT = 'Freight';

    public const METHOD_CODE_WHITE_GLOVE = 'WhiteGlove';

    public const METHOD_CODE_VALUE = 'Value';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodCodeAllowableValues()
    {
        return [
            self::METHOD_CODE_STANDARD,
            self::METHOD_CODE_EXPRESS,
            self::METHOD_CODE_ONE_DAY,
            self::METHOD_CODE_FREIGHT,
            self::METHOD_CODE_WHITE_GLOVE,
            self::METHOD_CODE_VALUE,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('estimatedDeliveryDate', $data ?? [], null);
        $this->setIfExists('estimatedShipDate', $data ?? [], null);
        $this->setIfExists('methodCode', $data ?? [], null);
        $this->setIfExists('postalAddress', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ($this->container['estimatedDeliveryDate'] === null) {
            $invalidProperties[] = "'estimatedDeliveryDate' can't be null";
        }
        if ($this->container['estimatedShipDate'] === null) {
            $invalidProperties[] = "'estimatedShipDate' can't be null";
        }
        if ($this->container['methodCode'] === null) {
            $invalidProperties[] = "'methodCode' can't be null";
        }
        $allowedValues = $this->getMethodCodeAllowableValues();
        if (!is_null($this->container['methodCode']) && !in_array($this->container['methodCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'methodCode', must be one of '%s'",
                $this->container['methodCode'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['postalAddress'] === null) {
            $invalidProperties[] = "'postalAddress' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets phone
     *
     * @return string
    
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone The customer's phone number
     *
     * @return self
    
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }

        $this->container['phone'] = $phone;
        return $this;
    }

    /**
     * Gets estimatedDeliveryDate
     *
     * @return int
    
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimatedDeliveryDate'];
    }

    /**
     * Sets estimatedDeliveryDate
     *
     * @param int $estimatedDeliveryDate The estimated time and date for the delivery of the item. Format: yyyy-MM-ddThh:MM:ssZ Example: '2020-06-15T06:00:00Z'
     *
     * @return self
    
     */
    public function setEstimatedDeliveryDate($estimatedDeliveryDate)
    {
        if (is_null($estimatedDeliveryDate)) {
            throw new \InvalidArgumentException('non-nullable estimatedDeliveryDate cannot be null');
        }

        $this->container['estimatedDeliveryDate'] = $estimatedDeliveryDate;
        return $this;
    }

    /**
     * Gets estimatedShipDate
     *
     * @return int
    
     */
    public function getEstimatedShipDate()
    {
        return $this->container['estimatedShipDate'];
    }

    /**
     * Sets estimatedShipDate
     *
     * @param int $estimatedShipDate The estimated time and date when the item will be shipped. Format: yyyy-MM-ddThh:MM:ssZ Example: '2020-06-15T06:00:00Z'
     *
     * @return self
    
     */
    public function setEstimatedShipDate($estimatedShipDate)
    {
        if (is_null($estimatedShipDate)) {
            throw new \InvalidArgumentException('non-nullable estimatedShipDate cannot be null');
        }

        $this->container['estimatedShipDate'] = $estimatedShipDate;
        return $this;
    }

    /**
     * Gets methodCode
     *
     * @return string
    
     */
    public function getMethodCode()
    {
        return $this->container['methodCode'];
    }

    /**
     * Sets methodCode
     *
     * @param string $methodCode The shipping method. Can be one of the following: Standard, Express, OneDay, WhiteGlove, Value or Freight
     *
     * @return self
    
     */
    public function setMethodCode($methodCode)
    {
        if (is_null($methodCode)) {
            throw new \InvalidArgumentException('non-nullable methodCode cannot be null');
        }
        $allowedValues = $this->getMethodCodeAllowableValues();
        if (!in_array($methodCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'methodCode', must be one of '%s'",
                    $methodCode,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['methodCode'] = $methodCode;
        return $this;
    }

    /**
     * Gets postalAddress
     *
     * @return \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderShippingInfoPostalAddress
    
     */
    public function getPostalAddress()
    {
        return $this->container['postalAddress'];
    }

    /**
     * Sets postalAddress
     *
     * @param \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderShippingInfoPostalAddress $postalAddress postalAddress
     *
     * @return self
    
     */
    public function setPostalAddress($postalAddress)
    {
        if (is_null($postalAddress)) {
            throw new \InvalidArgumentException('non-nullable postalAddress cannot be null');
        }

        $this->container['postalAddress'] = $postalAddress;
        return $this;
    }
}


