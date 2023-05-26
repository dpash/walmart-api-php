<?php

/**
 * Shipment
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
 * Returns Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\Returns;

use Walmart\Model\BaseModel;

/**
 * Shipment Class Doc Comment
 *
 * @category Class

 * @description The shipments for return orders

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Shipment extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipmentLines' => '\Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderShipmentsInnerShipmentLinesInner[]',
        'shipmentNo' => 'string',
        'status' => 'string',
        'packageNo' => 'string',
        'isSellerOwnedShipment' => 'string',
        'shipDateTime' => 'string',
        'carrier' => 'string',
        'methodCode' => 'string',
        'carrierMethodCode' => 'string',
        'trackingNumber' => 'string',
        'trackingUrl' => 'string',
        'shipmentAdditionalDate' => '\Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderShipmentsInnerShipmentAdditionalDate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipmentLines' => null,
        'shipmentNo' => null,
        'status' => null,
        'packageNo' => null,
        'isSellerOwnedShipment' => null,
        'shipDateTime' => null,
        'carrier' => null,
        'methodCode' => null,
        'carrierMethodCode' => null,
        'trackingNumber' => null,
        'trackingUrl' => null,
        'shipmentAdditionalDate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipmentLines' => false,
        'shipmentNo' => false,
        'status' => false,
        'packageNo' => false,
        'isSellerOwnedShipment' => false,
        'shipDateTime' => false,
        'carrier' => false,
        'methodCode' => false,
        'carrierMethodCode' => false,
        'trackingNumber' => false,
        'trackingUrl' => false,
        'shipmentAdditionalDate' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipmentLines' => 'shipmentLines',
        'shipmentNo' => 'shipmentNo',
        'status' => 'status',
        'packageNo' => 'packageNo',
        'isSellerOwnedShipment' => 'isSellerOwnedShipment',
        'shipDateTime' => 'shipDateTime',
        'carrier' => 'carrier',
        'methodCode' => 'methodCode',
        'carrierMethodCode' => 'carrierMethodCode',
        'trackingNumber' => 'trackingNumber',
        'trackingUrl' => 'trackingUrl',
        'shipmentAdditionalDate' => 'shipmentAdditionalDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipmentLines' => 'setShipmentLines',
        'shipmentNo' => 'setShipmentNo',
        'status' => 'setStatus',
        'packageNo' => 'setPackageNo',
        'isSellerOwnedShipment' => 'setIsSellerOwnedShipment',
        'shipDateTime' => 'setShipDateTime',
        'carrier' => 'setCarrier',
        'methodCode' => 'setMethodCode',
        'carrierMethodCode' => 'setCarrierMethodCode',
        'trackingNumber' => 'setTrackingNumber',
        'trackingUrl' => 'setTrackingUrl',
        'shipmentAdditionalDate' => 'setShipmentAdditionalDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipmentLines' => 'getShipmentLines',
        'shipmentNo' => 'getShipmentNo',
        'status' => 'getStatus',
        'packageNo' => 'getPackageNo',
        'isSellerOwnedShipment' => 'getIsSellerOwnedShipment',
        'shipDateTime' => 'getShipDateTime',
        'carrier' => 'getCarrier',
        'methodCode' => 'getMethodCode',
        'carrierMethodCode' => 'getCarrierMethodCode',
        'trackingNumber' => 'getTrackingNumber',
        'trackingUrl' => 'getTrackingUrl',
        'shipmentAdditionalDate' => 'getShipmentAdditionalDate'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipmentLines', $data ?? [], null);
        $this->setIfExists('shipmentNo', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('packageNo', $data ?? [], null);
        $this->setIfExists('isSellerOwnedShipment', $data ?? [], null);
        $this->setIfExists('shipDateTime', $data ?? [], null);
        $this->setIfExists('carrier', $data ?? [], null);
        $this->setIfExists('methodCode', $data ?? [], null);
        $this->setIfExists('carrierMethodCode', $data ?? [], null);
        $this->setIfExists('trackingNumber', $data ?? [], null);
        $this->setIfExists('trackingUrl', $data ?? [], null);
        $this->setIfExists('shipmentAdditionalDate', $data ?? [], null);
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
     * Gets shipmentLines
     *
     * @return \Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderShipmentsInnerShipmentLinesInner[]|null
    
     */
    public function getShipmentLines()
    {
        return $this->container['shipmentLines'];
    }

    /**
     * Sets shipmentLines
     *
     * @param \Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderShipmentsInnerShipmentLinesInner[]|null $shipmentLines shipmentLines
     *
     * @return self
    
     */
    public function setShipmentLines($shipmentLines)
    {
        if (is_null($shipmentLines)) {
            throw new \InvalidArgumentException('non-nullable shipmentLines cannot be null');
        }

        $this->container['shipmentLines'] = $shipmentLines;
        return $this;
    }

    /**
     * Gets shipmentNo
     *
     * @return string|null
    
     */
    public function getShipmentNo()
    {
        return $this->container['shipmentNo'];
    }

    /**
     * Sets shipmentNo
     *
     * @param string|null $shipmentNo shipmentNo
     *
     * @return self
    
     */
    public function setShipmentNo($shipmentNo)
    {
        if (is_null($shipmentNo)) {
            throw new \InvalidArgumentException('non-nullable shipmentNo cannot be null');
        }

        $this->container['shipmentNo'] = $shipmentNo;
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
     * @param string|null $status status
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
     * Gets packageNo
     *
     * @return string|null
    
     */
    public function getPackageNo()
    {
        return $this->container['packageNo'];
    }

    /**
     * Sets packageNo
     *
     * @param string|null $packageNo packageNo
     *
     * @return self
    
     */
    public function setPackageNo($packageNo)
    {
        if (is_null($packageNo)) {
            throw new \InvalidArgumentException('non-nullable packageNo cannot be null');
        }

        $this->container['packageNo'] = $packageNo;
        return $this;
    }

    /**
     * Gets isSellerOwnedShipment
     *
     * @return string|null
    
     */
    public function getIsSellerOwnedShipment()
    {
        return $this->container['isSellerOwnedShipment'];
    }

    /**
     * Sets isSellerOwnedShipment
     *
     * @param string|null $isSellerOwnedShipment isSellerOwnedShipment
     *
     * @return self
    
     */
    public function setIsSellerOwnedShipment($isSellerOwnedShipment)
    {
        if (is_null($isSellerOwnedShipment)) {
            throw new \InvalidArgumentException('non-nullable isSellerOwnedShipment cannot be null');
        }

        $this->container['isSellerOwnedShipment'] = $isSellerOwnedShipment;
        return $this;
    }

    /**
     * Gets shipDateTime
     *
     * @return string|null
    
     */
    public function getShipDateTime()
    {
        return $this->container['shipDateTime'];
    }

    /**
     * Sets shipDateTime
     *
     * @param string|null $shipDateTime shipDateTime
     *
     * @return self
    
     */
    public function setShipDateTime($shipDateTime)
    {
        if (is_null($shipDateTime)) {
            throw new \InvalidArgumentException('non-nullable shipDateTime cannot be null');
        }

        $this->container['shipDateTime'] = $shipDateTime;
        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string|null
    
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string|null $carrier carrier
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
     * Gets methodCode
     *
     * @return string|null
    
     */
    public function getMethodCode()
    {
        return $this->container['methodCode'];
    }

    /**
     * Sets methodCode
     *
     * @param string|null $methodCode methodCode
     *
     * @return self
    
     */
    public function setMethodCode($methodCode)
    {
        if (is_null($methodCode)) {
            throw new \InvalidArgumentException('non-nullable methodCode cannot be null');
        }

        $this->container['methodCode'] = $methodCode;
        return $this;
    }

    /**
     * Gets carrierMethodCode
     *
     * @return string|null
    
     */
    public function getCarrierMethodCode()
    {
        return $this->container['carrierMethodCode'];
    }

    /**
     * Sets carrierMethodCode
     *
     * @param string|null $carrierMethodCode carrierMethodCode
     *
     * @return self
    
     */
    public function setCarrierMethodCode($carrierMethodCode)
    {
        if (is_null($carrierMethodCode)) {
            throw new \InvalidArgumentException('non-nullable carrierMethodCode cannot be null');
        }

        $this->container['carrierMethodCode'] = $carrierMethodCode;
        return $this;
    }

    /**
     * Gets trackingNumber
     *
     * @return string|null
    
     */
    public function getTrackingNumber()
    {
        return $this->container['trackingNumber'];
    }

    /**
     * Sets trackingNumber
     *
     * @param string|null $trackingNumber trackingNumber
     *
     * @return self
    
     */
    public function setTrackingNumber($trackingNumber)
    {
        if (is_null($trackingNumber)) {
            throw new \InvalidArgumentException('non-nullable trackingNumber cannot be null');
        }

        $this->container['trackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Gets trackingUrl
     *
     * @return string|null
    
     */
    public function getTrackingUrl()
    {
        return $this->container['trackingUrl'];
    }

    /**
     * Sets trackingUrl
     *
     * @param string|null $trackingUrl trackingUrl
     *
     * @return self
    
     */
    public function setTrackingUrl($trackingUrl)
    {
        if (is_null($trackingUrl)) {
            throw new \InvalidArgumentException('non-nullable trackingUrl cannot be null');
        }

        $this->container['trackingUrl'] = $trackingUrl;
        return $this;
    }

    /**
     * Gets shipmentAdditionalDate
     *
     * @return \Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderShipmentsInnerShipmentAdditionalDate|null
    
     */
    public function getShipmentAdditionalDate()
    {
        return $this->container['shipmentAdditionalDate'];
    }

    /**
     * Sets shipmentAdditionalDate
     *
     * @param \Walmart\Models\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderShipmentsInnerShipmentAdditionalDate|null $shipmentAdditionalDate shipmentAdditionalDate
     *
     * @return self
    
     */
    public function setShipmentAdditionalDate($shipmentAdditionalDate)
    {
        if (is_null($shipmentAdditionalDate)) {
            throw new \InvalidArgumentException('non-nullable shipmentAdditionalDate cannot be null');
        }

        $this->container['shipmentAdditionalDate'] = $shipmentAdditionalDate;
        return $this;
    }
}


