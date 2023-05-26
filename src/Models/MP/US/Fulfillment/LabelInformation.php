<?php

/**
 * LabelInformation
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
 * LabelInformation Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class LabelInformation extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LabelInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'labelData' => 'string',
        'labelFormat' => 'string',
        'trackingCode' => 'string',
        'referenceTrackingCode' => 'string',
        'epTrackerId' => 'string',
        'shipmentId' => 'string',
        'packageAsn' => 'string',
        'masterTrackingCode' => 'string',
        'master' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'labelData' => null,
        'labelFormat' => null,
        'trackingCode' => null,
        'referenceTrackingCode' => null,
        'epTrackerId' => null,
        'shipmentId' => null,
        'packageAsn' => null,
        'masterTrackingCode' => null,
        'master' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'labelData' => false,
        'labelFormat' => false,
        'trackingCode' => false,
        'referenceTrackingCode' => false,
        'epTrackerId' => false,
        'shipmentId' => false,
        'packageAsn' => false,
        'masterTrackingCode' => false,
        'master' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'labelData' => 'labelData',
        'labelFormat' => 'labelFormat',
        'trackingCode' => 'trackingCode',
        'referenceTrackingCode' => 'referenceTrackingCode',
        'epTrackerId' => 'epTrackerId',
        'shipmentId' => 'shipmentId',
        'packageAsn' => 'packageAsn',
        'masterTrackingCode' => 'masterTrackingCode',
        'master' => 'master'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'labelData' => 'setLabelData',
        'labelFormat' => 'setLabelFormat',
        'trackingCode' => 'setTrackingCode',
        'referenceTrackingCode' => 'setReferenceTrackingCode',
        'epTrackerId' => 'setEpTrackerId',
        'shipmentId' => 'setShipmentId',
        'packageAsn' => 'setPackageAsn',
        'masterTrackingCode' => 'setMasterTrackingCode',
        'master' => 'setMaster'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'labelData' => 'getLabelData',
        'labelFormat' => 'getLabelFormat',
        'trackingCode' => 'getTrackingCode',
        'referenceTrackingCode' => 'getReferenceTrackingCode',
        'epTrackerId' => 'getEpTrackerId',
        'shipmentId' => 'getShipmentId',
        'packageAsn' => 'getPackageAsn',
        'masterTrackingCode' => 'getMasterTrackingCode',
        'master' => 'getMaster'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('labelData', $data ?? [], null);
        $this->setIfExists('labelFormat', $data ?? [], null);
        $this->setIfExists('trackingCode', $data ?? [], null);
        $this->setIfExists('referenceTrackingCode', $data ?? [], null);
        $this->setIfExists('epTrackerId', $data ?? [], null);
        $this->setIfExists('shipmentId', $data ?? [], null);
        $this->setIfExists('packageAsn', $data ?? [], null);
        $this->setIfExists('masterTrackingCode', $data ?? [], null);
        $this->setIfExists('master', $data ?? [], null);
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
     * Gets labelData
     *
     * @return string|null
    
     */
    public function getLabelData()
    {
        return $this->container['labelData'];
    }

    /**
     * Sets labelData
     *
     * @param string|null $labelData labelData
     *
     * @return self
    
     */
    public function setLabelData($labelData)
    {
        if (is_null($labelData)) {
            throw new \InvalidArgumentException('non-nullable labelData cannot be null');
        }

        $this->container['labelData'] = $labelData;
        return $this;
    }

    /**
     * Gets labelFormat
     *
     * @return string|null
    
     */
    public function getLabelFormat()
    {
        return $this->container['labelFormat'];
    }

    /**
     * Sets labelFormat
     *
     * @param string|null $labelFormat labelFormat
     *
     * @return self
    
     */
    public function setLabelFormat($labelFormat)
    {
        if (is_null($labelFormat)) {
            throw new \InvalidArgumentException('non-nullable labelFormat cannot be null');
        }

        $this->container['labelFormat'] = $labelFormat;
        return $this;
    }

    /**
     * Gets trackingCode
     *
     * @return string|null
    
     */
    public function getTrackingCode()
    {
        return $this->container['trackingCode'];
    }

    /**
     * Sets trackingCode
     *
     * @param string|null $trackingCode trackingCode
     *
     * @return self
    
     */
    public function setTrackingCode($trackingCode)
    {
        if (is_null($trackingCode)) {
            throw new \InvalidArgumentException('non-nullable trackingCode cannot be null');
        }

        $this->container['trackingCode'] = $trackingCode;
        return $this;
    }

    /**
     * Gets referenceTrackingCode
     *
     * @return string|null
    
     */
    public function getReferenceTrackingCode()
    {
        return $this->container['referenceTrackingCode'];
    }

    /**
     * Sets referenceTrackingCode
     *
     * @param string|null $referenceTrackingCode referenceTrackingCode
     *
     * @return self
    
     */
    public function setReferenceTrackingCode($referenceTrackingCode)
    {
        if (is_null($referenceTrackingCode)) {
            throw new \InvalidArgumentException('non-nullable referenceTrackingCode cannot be null');
        }

        $this->container['referenceTrackingCode'] = $referenceTrackingCode;
        return $this;
    }

    /**
     * Gets epTrackerId
     *
     * @return string|null
    
     */
    public function getEpTrackerId()
    {
        return $this->container['epTrackerId'];
    }

    /**
     * Sets epTrackerId
     *
     * @param string|null $epTrackerId epTrackerId
     *
     * @return self
    
     */
    public function setEpTrackerId($epTrackerId)
    {
        if (is_null($epTrackerId)) {
            throw new \InvalidArgumentException('non-nullable epTrackerId cannot be null');
        }

        $this->container['epTrackerId'] = $epTrackerId;
        return $this;
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
     * Gets packageAsn
     *
     * @return string|null
    
     */
    public function getPackageAsn()
    {
        return $this->container['packageAsn'];
    }

    /**
     * Sets packageAsn
     *
     * @param string|null $packageAsn packageAsn
     *
     * @return self
    
     */
    public function setPackageAsn($packageAsn)
    {
        if (is_null($packageAsn)) {
            throw new \InvalidArgumentException('non-nullable packageAsn cannot be null');
        }

        $this->container['packageAsn'] = $packageAsn;
        return $this;
    }

    /**
     * Gets masterTrackingCode
     *
     * @return string|null
    
     */
    public function getMasterTrackingCode()
    {
        return $this->container['masterTrackingCode'];
    }

    /**
     * Sets masterTrackingCode
     *
     * @param string|null $masterTrackingCode masterTrackingCode
     *
     * @return self
    
     */
    public function setMasterTrackingCode($masterTrackingCode)
    {
        if (is_null($masterTrackingCode)) {
            throw new \InvalidArgumentException('non-nullable masterTrackingCode cannot be null');
        }

        $this->container['masterTrackingCode'] = $masterTrackingCode;
        return $this;
    }

    /**
     * Gets master
     *
     * @return bool|null
    
     */
    public function getMaster()
    {
        return $this->container['master'];
    }

    /**
     * Sets master
     *
     * @param bool|null $master master
     *
     * @return self
    
     */
    public function setMaster($master)
    {
        if (is_null($master)) {
            throw new \InvalidArgumentException('non-nullable master cannot be null');
        }

        $this->container['master'] = $master;
        return $this;
    }
}


