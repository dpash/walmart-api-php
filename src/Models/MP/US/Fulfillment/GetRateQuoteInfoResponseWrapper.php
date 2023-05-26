<?php

/**
 * GetRateQuoteInfoResponseWrapper
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
 * GetRateQuoteInfoResponseWrapper Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetRateQuoteInfoResponseWrapper extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetRateQuoteInfoResponseWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipmentId' => 'string',
        'quoteId' => 'string',
        'estimatedDeliveryDateTime' => '\DateTime',
        'quoteCreationDate' => '\DateTime',
        'carrier' => '\Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseCarrier',
        'rateQuote' => '\Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseRateQuote',
        'shipmentPackages' => '\Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseShipmentPackagesInner[]',
        'originLocation' => '\Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseOriginLocation',
        'destinationLocation' => '\Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseOriginLocation',
        'returnLocation' => '\Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseReturnLocation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipmentId' => null,
        'quoteId' => null,
        'estimatedDeliveryDateTime' => 'date-time',
        'quoteCreationDate' => 'date-time',
        'carrier' => null,
        'rateQuote' => null,
        'shipmentPackages' => null,
        'originLocation' => null,
        'destinationLocation' => null,
        'returnLocation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipmentId' => false,
        'quoteId' => false,
        'estimatedDeliveryDateTime' => false,
        'quoteCreationDate' => false,
        'carrier' => false,
        'rateQuote' => false,
        'shipmentPackages' => false,
        'originLocation' => false,
        'destinationLocation' => false,
        'returnLocation' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipmentId' => 'shipmentId',
        'quoteId' => 'quoteId',
        'estimatedDeliveryDateTime' => 'estimatedDeliveryDateTime',
        'quoteCreationDate' => 'quoteCreationDate',
        'carrier' => 'carrier',
        'rateQuote' => 'rateQuote',
        'shipmentPackages' => 'shipmentPackages',
        'originLocation' => 'originLocation',
        'destinationLocation' => 'destinationLocation',
        'returnLocation' => 'returnLocation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipmentId' => 'setShipmentId',
        'quoteId' => 'setQuoteId',
        'estimatedDeliveryDateTime' => 'setEstimatedDeliveryDateTime',
        'quoteCreationDate' => 'setQuoteCreationDate',
        'carrier' => 'setCarrier',
        'rateQuote' => 'setRateQuote',
        'shipmentPackages' => 'setShipmentPackages',
        'originLocation' => 'setOriginLocation',
        'destinationLocation' => 'setDestinationLocation',
        'returnLocation' => 'setReturnLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipmentId' => 'getShipmentId',
        'quoteId' => 'getQuoteId',
        'estimatedDeliveryDateTime' => 'getEstimatedDeliveryDateTime',
        'quoteCreationDate' => 'getQuoteCreationDate',
        'carrier' => 'getCarrier',
        'rateQuote' => 'getRateQuote',
        'shipmentPackages' => 'getShipmentPackages',
        'originLocation' => 'getOriginLocation',
        'destinationLocation' => 'getDestinationLocation',
        'returnLocation' => 'getReturnLocation'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipmentId', $data ?? [], null);
        $this->setIfExists('quoteId', $data ?? [], null);
        $this->setIfExists('estimatedDeliveryDateTime', $data ?? [], null);
        $this->setIfExists('quoteCreationDate', $data ?? [], null);
        $this->setIfExists('carrier', $data ?? [], null);
        $this->setIfExists('rateQuote', $data ?? [], null);
        $this->setIfExists('shipmentPackages', $data ?? [], null);
        $this->setIfExists('originLocation', $data ?? [], null);
        $this->setIfExists('destinationLocation', $data ?? [], null);
        $this->setIfExists('returnLocation', $data ?? [], null);
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
     * Gets shipmentId
     *
     * @return string|null
    
     */
    public function getShipmentId()
    {
        return $this->container['shipmentId'];
    }

    /**
     * Sets shipmentId
     *
     * @param string|null $shipmentId shipmentId
     *
     * @return self
    
     */
    public function setShipmentId($shipmentId)
    {
        if (is_null($shipmentId)) {
            throw new \InvalidArgumentException('non-nullable shipmentId cannot be null');
        }

        $this->container['shipmentId'] = $shipmentId;
        return $this;
    }

    /**
     * Gets quoteId
     *
     * @return string|null
    
     */
    public function getQuoteId()
    {
        return $this->container['quoteId'];
    }

    /**
     * Sets quoteId
     *
     * @param string|null $quoteId quoteId
     *
     * @return self
    
     */
    public function setQuoteId($quoteId)
    {
        if (is_null($quoteId)) {
            throw new \InvalidArgumentException('non-nullable quoteId cannot be null');
        }

        $this->container['quoteId'] = $quoteId;
        return $this;
    }

    /**
     * Gets estimatedDeliveryDateTime
     *
     * @return \DateTime|null
    
     */
    public function getEstimatedDeliveryDateTime()
    {
        return $this->container['estimatedDeliveryDateTime'];
    }

    /**
     * Sets estimatedDeliveryDateTime
     *
     * @param \DateTime|null $estimatedDeliveryDateTime estimatedDeliveryDateTime
     *
     * @return self
    
     */
    public function setEstimatedDeliveryDateTime($estimatedDeliveryDateTime)
    {
        if (is_null($estimatedDeliveryDateTime)) {
            throw new \InvalidArgumentException('non-nullable estimatedDeliveryDateTime cannot be null');
        }

        $this->container['estimatedDeliveryDateTime'] = $estimatedDeliveryDateTime;
        return $this;
    }

    /**
     * Gets quoteCreationDate
     *
     * @return \DateTime|null
    
     */
    public function getQuoteCreationDate()
    {
        return $this->container['quoteCreationDate'];
    }

    /**
     * Sets quoteCreationDate
     *
     * @param \DateTime|null $quoteCreationDate quoteCreationDate
     *
     * @return self
    
     */
    public function setQuoteCreationDate($quoteCreationDate)
    {
        if (is_null($quoteCreationDate)) {
            throw new \InvalidArgumentException('non-nullable quoteCreationDate cannot be null');
        }

        $this->container['quoteCreationDate'] = $quoteCreationDate;
        return $this;
    }

    /**
     * Gets carrier
     *
     * @return \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseCarrier|null
    
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseCarrier|null $carrier carrier
     *
     * @return self
    
     */
    public function setCarrier($carrier)
    {
        if (is_null($carrier)) {
            throw new \InvalidArgumentException('non-nullable carrier cannot be null');
        }

        $this->container['carrier'] = $carrier;
        return $this;
    }

    /**
     * Gets rateQuote
     *
     * @return \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseRateQuote|null
    
     */
    public function getRateQuote()
    {
        return $this->container['rateQuote'];
    }

    /**
     * Sets rateQuote
     *
     * @param \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseRateQuote|null $rateQuote rateQuote
     *
     * @return self
    
     */
    public function setRateQuote($rateQuote)
    {
        if (is_null($rateQuote)) {
            throw new \InvalidArgumentException('non-nullable rateQuote cannot be null');
        }

        $this->container['rateQuote'] = $rateQuote;
        return $this;
    }

    /**
     * Gets shipmentPackages
     *
     * @return \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseShipmentPackagesInner[]|null
    
     */
    public function getShipmentPackages()
    {
        return $this->container['shipmentPackages'];
    }

    /**
     * Sets shipmentPackages
     *
     * @param \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseShipmentPackagesInner[]|null $shipmentPackages shipmentPackages
     *
     * @return self
    
     */
    public function setShipmentPackages($shipmentPackages)
    {
        if (is_null($shipmentPackages)) {
            throw new \InvalidArgumentException('non-nullable shipmentPackages cannot be null');
        }

        $this->container['shipmentPackages'] = $shipmentPackages;
        return $this;
    }

    /**
     * Gets originLocation
     *
     * @return \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseOriginLocation|null
    
     */
    public function getOriginLocation()
    {
        return $this->container['originLocation'];
    }

    /**
     * Sets originLocation
     *
     * @param \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseOriginLocation|null $originLocation originLocation
     *
     * @return self
    
     */
    public function setOriginLocation($originLocation)
    {
        if (is_null($originLocation)) {
            throw new \InvalidArgumentException('non-nullable originLocation cannot be null');
        }

        $this->container['originLocation'] = $originLocation;
        return $this;
    }

    /**
     * Gets destinationLocation
     *
     * @return \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseOriginLocation|null
    
     */
    public function getDestinationLocation()
    {
        return $this->container['destinationLocation'];
    }

    /**
     * Sets destinationLocation
     *
     * @param \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseOriginLocation|null $destinationLocation destinationLocation
     *
     * @return self
    
     */
    public function setDestinationLocation($destinationLocation)
    {
        if (is_null($destinationLocation)) {
            throw new \InvalidArgumentException('non-nullable destinationLocation cannot be null');
        }

        $this->container['destinationLocation'] = $destinationLocation;
        return $this;
    }

    /**
     * Gets returnLocation
     *
     * @return \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseReturnLocation|null
    
     */
    public function getReturnLocation()
    {
        return $this->container['returnLocation'];
    }

    /**
     * Sets returnLocation
     *
     * @param \Walmart\Models\MP\US\Fulfillment\GetCarrierRateQuote200ResponseReturnLocation|null $returnLocation returnLocation
     *
     * @return self
    
     */
    public function setReturnLocation($returnLocation)
    {
        if (is_null($returnLocation)) {
            throw new \InvalidArgumentException('non-nullable returnLocation cannot be null');
        }

        $this->container['returnLocation'] = $returnLocation;
        return $this;
    }
}


