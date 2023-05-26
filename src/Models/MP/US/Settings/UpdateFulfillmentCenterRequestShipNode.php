<?php

/**
 * UpdateFulfillmentCenterRequestShipNode
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
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;

use Walmart\Model\BaseModel;

/**
 * UpdateFulfillmentCenterRequestShipNode Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class UpdateFulfillmentCenterRequestShipNode extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'updateFulfillmentCenter_request_shipNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipNode' => 'string',
        'shipNodeName' => 'string',
        'status' => 'string',
        'timeZone' => 'string',
        'distributorSupportedServices' => 'string[]',
        'customNodeId' => 'string',
        'postalAddress' => '\Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerPostalAddress',
        'shippingDetails' => '\Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerShippingDetailsInner[]',
        'calendarDayConfiguration' => '\Walmart\Models\MP\US\Settings\UpdateFulfillmentCenterRequestShipNodeCalendarDayConfiguration'
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
        'shipNodeName' => null,
        'status' => null,
        'timeZone' => null,
        'distributorSupportedServices' => null,
        'customNodeId' => null,
        'postalAddress' => null,
        'shippingDetails' => null,
        'calendarDayConfiguration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipNode' => false,
        'shipNodeName' => false,
        'status' => false,
        'timeZone' => false,
        'distributorSupportedServices' => false,
        'customNodeId' => false,
        'postalAddress' => false,
        'shippingDetails' => false,
        'calendarDayConfiguration' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipNode' => 'shipNode',
        'shipNodeName' => 'shipNodeName',
        'status' => 'status',
        'timeZone' => 'timeZone',
        'distributorSupportedServices' => 'distributorSupportedServices',
        'customNodeId' => 'customNodeId',
        'postalAddress' => 'postalAddress',
        'shippingDetails' => 'shippingDetails',
        'calendarDayConfiguration' => 'calendarDayConfiguration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipNode' => 'setShipNode',
        'shipNodeName' => 'setShipNodeName',
        'status' => 'setStatus',
        'timeZone' => 'setTimeZone',
        'distributorSupportedServices' => 'setDistributorSupportedServices',
        'customNodeId' => 'setCustomNodeId',
        'postalAddress' => 'setPostalAddress',
        'shippingDetails' => 'setShippingDetails',
        'calendarDayConfiguration' => 'setCalendarDayConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipNode' => 'getShipNode',
        'shipNodeName' => 'getShipNodeName',
        'status' => 'getStatus',
        'timeZone' => 'getTimeZone',
        'distributorSupportedServices' => 'getDistributorSupportedServices',
        'customNodeId' => 'getCustomNodeId',
        'postalAddress' => 'getPostalAddress',
        'shippingDetails' => 'getShippingDetails',
        'calendarDayConfiguration' => 'getCalendarDayConfiguration'
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
        $this->setIfExists('shipNodeName', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('timeZone', $data ?? [], null);
        $this->setIfExists('distributorSupportedServices', $data ?? [], null);
        $this->setIfExists('customNodeId', $data ?? [], null);
        $this->setIfExists('postalAddress', $data ?? [], null);
        $this->setIfExists('shippingDetails', $data ?? [], null);
        $this->setIfExists('calendarDayConfiguration', $data ?? [], null);
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
     * Gets status
     *
     * @return string|null
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of fulfillment center. Allowed values: ACTIVE, INACTIVE..
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets timeZone
     *
     * @return string|null
    
     */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
     * Sets timeZone
     *
     * @param string|null $timeZone Time zone that the seller ships from.Allowed timezones are PST, EST, CST, MST.
     *
     * @return self
    
     */
    public function setTimeZone($timeZone)
    {
        if (is_null($timeZone)) {
            throw new \InvalidArgumentException('non-nullable timeZone cannot be null');
        }

        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
     * Gets distributorSupportedServices
     *
     * @return string[]|null
    
     */
    public function getDistributorSupportedServices()
    {
        return $this->container['distributorSupportedServices'];
    }

    /**
     * Sets distributorSupportedServices
     *
     * @param string[]|null $distributorSupportedServices The services supported by the defined physical ship node . The allowed values: TWO_DAY_DELIVERY.
     *
     * @return self
    
     */
    public function setDistributorSupportedServices($distributorSupportedServices)
    {
        if (is_null($distributorSupportedServices)) {
            throw new \InvalidArgumentException('non-nullable distributorSupportedServices cannot be null');
        }

        $this->container['distributorSupportedServices'] = $distributorSupportedServices;
        return $this;
    }

    /**
     * Gets customNodeId
     *
     * @return string|null
    
     */
    public function getCustomNodeId()
    {
        return $this->container['customNodeId'];
    }

    /**
     * Sets customNodeId
     *
     * @param string|null $customNodeId Custom node identifier provided by seller. Allowed values are alphanumeric | String
     *
     * @return self
    
     */
    public function setCustomNodeId($customNodeId)
    {
        if (is_null($customNodeId)) {
            throw new \InvalidArgumentException('non-nullable customNodeId cannot be null');
        }

        $this->container['customNodeId'] = $customNodeId;
        return $this;
    }

    /**
     * Gets postalAddress
     *
     * @return \Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerPostalAddress|null
    
     */
    public function getPostalAddress()
    {
        return $this->container['postalAddress'];
    }

    /**
     * Sets postalAddress
     *
     * @param \Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerPostalAddress|null $postalAddress postalAddress
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

    /**
     * Gets shippingDetails
     *
     * @return \Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerShippingDetailsInner[]|null
    
     */
    public function getShippingDetails()
    {
        return $this->container['shippingDetails'];
    }

    /**
     * Sets shippingDetails
     *
     * @param \Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerShippingDetailsInner[]|null $shippingDetails Shipping Details.
     *
     * @return self
    
     */
    public function setShippingDetails($shippingDetails)
    {
        if (is_null($shippingDetails)) {
            throw new \InvalidArgumentException('non-nullable shippingDetails cannot be null');
        }

        $this->container['shippingDetails'] = $shippingDetails;
        return $this;
    }

    /**
     * Gets calendarDayConfiguration
     *
     * @return \Walmart\Models\MP\US\Settings\UpdateFulfillmentCenterRequestShipNodeCalendarDayConfiguration|null
    
     */
    public function getCalendarDayConfiguration()
    {
        return $this->container['calendarDayConfiguration'];
    }

    /**
     * Sets calendarDayConfiguration
     *
     * @param \Walmart\Models\MP\US\Settings\UpdateFulfillmentCenterRequestShipNodeCalendarDayConfiguration|null $calendarDayConfiguration calendarDayConfiguration
     *
     * @return self
    
     */
    public function setCalendarDayConfiguration($calendarDayConfiguration)
    {
        if (is_null($calendarDayConfiguration)) {
            throw new \InvalidArgumentException('non-nullable calendarDayConfiguration cannot be null');
        }

        $this->container['calendarDayConfiguration'] = $calendarDayConfiguration;
        return $this;
    }
}


