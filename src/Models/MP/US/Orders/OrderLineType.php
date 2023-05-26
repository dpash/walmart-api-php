<?php

/**
 * OrderLineType
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
 * OrderLineType Class Doc Comment
 *
 * @category Class

 * @description Purchase Order line information for each item

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class OrderLineType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderLineType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'lineNumber' => 'string',
        'item' => '\Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerItem',
        'charges' => '\Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerCharges',
        'orderLineQuantity' => '\Walmart\Models\MP\US\Orders\ShippingUpdatesRequestOrderShipmentOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerStatusQuantity',
        'statusDate' => 'int',
        'orderLineStatuses' => '\Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerOrderLineStatuses',
        'returnOrderId' => 'string',
        'refund' => '\Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefund',
        'originalCarrierMethod' => 'string',
        'referenceLineId' => 'string',
        'fulfillment' => '\Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerFulfillment',
        'intentToCancel' => 'string',
        'configId' => 'string',
        'sellerOrderId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'lineNumber' => null,
        'item' => null,
        'charges' => null,
        'orderLineQuantity' => null,
        'statusDate' => 'int64',
        'orderLineStatuses' => null,
        'returnOrderId' => null,
        'refund' => null,
        'originalCarrierMethod' => null,
        'referenceLineId' => null,
        'fulfillment' => null,
        'intentToCancel' => null,
        'configId' => null,
        'sellerOrderId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lineNumber' => false,
        'item' => false,
        'charges' => false,
        'orderLineQuantity' => false,
        'statusDate' => false,
        'orderLineStatuses' => false,
        'returnOrderId' => false,
        'refund' => false,
        'originalCarrierMethod' => false,
        'referenceLineId' => false,
        'fulfillment' => false,
        'intentToCancel' => false,
        'configId' => false,
        'sellerOrderId' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'lineNumber' => 'lineNumber',
        'item' => 'item',
        'charges' => 'charges',
        'orderLineQuantity' => 'orderLineQuantity',
        'statusDate' => 'statusDate',
        'orderLineStatuses' => 'orderLineStatuses',
        'returnOrderId' => 'returnOrderId',
        'refund' => 'refund',
        'originalCarrierMethod' => 'originalCarrierMethod',
        'referenceLineId' => 'referenceLineId',
        'fulfillment' => 'fulfillment',
        'intentToCancel' => 'intentToCancel',
        'configId' => 'configId',
        'sellerOrderId' => 'sellerOrderId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'lineNumber' => 'setLineNumber',
        'item' => 'setItem',
        'charges' => 'setCharges',
        'orderLineQuantity' => 'setOrderLineQuantity',
        'statusDate' => 'setStatusDate',
        'orderLineStatuses' => 'setOrderLineStatuses',
        'returnOrderId' => 'setReturnOrderId',
        'refund' => 'setRefund',
        'originalCarrierMethod' => 'setOriginalCarrierMethod',
        'referenceLineId' => 'setReferenceLineId',
        'fulfillment' => 'setFulfillment',
        'intentToCancel' => 'setIntentToCancel',
        'configId' => 'setConfigId',
        'sellerOrderId' => 'setSellerOrderId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'lineNumber' => 'getLineNumber',
        'item' => 'getItem',
        'charges' => 'getCharges',
        'orderLineQuantity' => 'getOrderLineQuantity',
        'statusDate' => 'getStatusDate',
        'orderLineStatuses' => 'getOrderLineStatuses',
        'returnOrderId' => 'getReturnOrderId',
        'refund' => 'getRefund',
        'originalCarrierMethod' => 'getOriginalCarrierMethod',
        'referenceLineId' => 'getReferenceLineId',
        'fulfillment' => 'getFulfillment',
        'intentToCancel' => 'getIntentToCancel',
        'configId' => 'getConfigId',
        'sellerOrderId' => 'getSellerOrderId'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('lineNumber', $data ?? [], null);
        $this->setIfExists('item', $data ?? [], null);
        $this->setIfExists('charges', $data ?? [], null);
        $this->setIfExists('orderLineQuantity', $data ?? [], null);
        $this->setIfExists('statusDate', $data ?? [], null);
        $this->setIfExists('orderLineStatuses', $data ?? [], null);
        $this->setIfExists('returnOrderId', $data ?? [], null);
        $this->setIfExists('refund', $data ?? [], null);
        $this->setIfExists('originalCarrierMethod', $data ?? [], null);
        $this->setIfExists('referenceLineId', $data ?? [], null);
        $this->setIfExists('fulfillment', $data ?? [], null);
        $this->setIfExists('intentToCancel', $data ?? [], null);
        $this->setIfExists('configId', $data ?? [], null);
        $this->setIfExists('sellerOrderId', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lineNumber'] === null) {
            $invalidProperties[] = "'lineNumber' can't be null";
        }
        if ($this->container['item'] === null) {
            $invalidProperties[] = "'item' can't be null";
        }
        if ($this->container['charges'] === null) {
            $invalidProperties[] = "'charges' can't be null";
        }
        if ($this->container['orderLineQuantity'] === null) {
            $invalidProperties[] = "'orderLineQuantity' can't be null";
        }
        if ($this->container['statusDate'] === null) {
            $invalidProperties[] = "'statusDate' can't be null";
        }
        if ($this->container['orderLineStatuses'] === null) {
            $invalidProperties[] = "'orderLineStatuses' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets lineNumber
     *
     * @return string
    
     */
    public function getLineNumber()
    {
        return $this->container['lineNumber'];
    }

    /**
     * Sets lineNumber
     *
     * @param string $lineNumber The line number associated with the details for each individual item in the purchase order
     *
     * @return self
    
     */
    public function setLineNumber($lineNumber)
    {
        if (is_null($lineNumber)) {
            throw new \InvalidArgumentException('non-nullable lineNumber cannot be null');
        }

        $this->container['lineNumber'] = $lineNumber;
        return $this;
    }

    /**
     * Gets item
     *
     * @return \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerItem
    
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerItem $item item
     *
     * @return self
    
     */
    public function setItem($item)
    {
        if (is_null($item)) {
            throw new \InvalidArgumentException('non-nullable item cannot be null');
        }

        $this->container['item'] = $item;
        return $this;
    }

    /**
     * Gets charges
     *
     * @return \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerCharges
    
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     *
     * @param \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerCharges $charges charges
     *
     * @return self
    
     */
    public function setCharges($charges)
    {
        if (is_null($charges)) {
            throw new \InvalidArgumentException('non-nullable charges cannot be null');
        }

        $this->container['charges'] = $charges;
        return $this;
    }

    /**
     * Gets orderLineQuantity
     *
     * @return \Walmart\Models\MP\US\Orders\ShippingUpdatesRequestOrderShipmentOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerStatusQuantity
    
     */
    public function getOrderLineQuantity()
    {
        return $this->container['orderLineQuantity'];
    }

    /**
     * Sets orderLineQuantity
     *
     * @param \Walmart\Models\MP\US\Orders\ShippingUpdatesRequestOrderShipmentOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerStatusQuantity $orderLineQuantity orderLineQuantity
     *
     * @return self
    
     */
    public function setOrderLineQuantity($orderLineQuantity)
    {
        if (is_null($orderLineQuantity)) {
            throw new \InvalidArgumentException('non-nullable orderLineQuantity cannot be null');
        }

        $this->container['orderLineQuantity'] = $orderLineQuantity;
        return $this;
    }

    /**
     * Gets statusDate
     *
     * @return int
    
     */
    public function getStatusDate()
    {
        return $this->container['statusDate'];
    }

    /**
     * Sets statusDate
     *
     * @param int $statusDate The date shown on the recent order status
     *
     * @return self
    
     */
    public function setStatusDate($statusDate)
    {
        if (is_null($statusDate)) {
            throw new \InvalidArgumentException('non-nullable statusDate cannot be null');
        }

        $this->container['statusDate'] = $statusDate;
        return $this;
    }

    /**
     * Gets orderLineStatuses
     *
     * @return \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerOrderLineStatuses
    
     */
    public function getOrderLineStatuses()
    {
        return $this->container['orderLineStatuses'];
    }

    /**
     * Sets orderLineStatuses
     *
     * @param \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerOrderLineStatuses $orderLineStatuses orderLineStatuses
     *
     * @return self
    
     */
    public function setOrderLineStatuses($orderLineStatuses)
    {
        if (is_null($orderLineStatuses)) {
            throw new \InvalidArgumentException('non-nullable orderLineStatuses cannot be null');
        }

        $this->container['orderLineStatuses'] = $orderLineStatuses;
        return $this;
    }

    /**
     * Gets returnOrderId
     *
     * @return string|null
    
     */
    public function getReturnOrderId()
    {
        return $this->container['returnOrderId'];
    }

    /**
     * Sets returnOrderId
     *
     * @param string|null $returnOrderId Id of the return order created in case of a full refund
     *
     * @return self
    
     */
    public function setReturnOrderId($returnOrderId)
    {
        if (is_null($returnOrderId)) {
            throw new \InvalidArgumentException('non-nullable returnOrderId cannot be null');
        }

        $this->container['returnOrderId'] = $returnOrderId;
        return $this;
    }

    /**
     * Gets refund
     *
     * @return \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefund|null
    
     */
    public function getRefund()
    {
        return $this->container['refund'];
    }

    /**
     * Sets refund
     *
     * @param \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefund|null $refund refund
     *
     * @return self
    
     */
    public function setRefund($refund)
    {
        if (is_null($refund)) {
            throw new \InvalidArgumentException('non-nullable refund cannot be null');
        }

        $this->container['refund'] = $refund;
        return $this;
    }

    /**
     * Gets originalCarrierMethod
     *
     * @return string|null
    
     */
    public function getOriginalCarrierMethod()
    {
        return $this->container['originalCarrierMethod'];
    }

    /**
     * Sets originalCarrierMethod
     *
     * @param string|null $originalCarrierMethod Ship method stamped at order line level when order is placed
     *
     * @return self
    
     */
    public function setOriginalCarrierMethod($originalCarrierMethod)
    {
        if (is_null($originalCarrierMethod)) {
            throw new \InvalidArgumentException('non-nullable originalCarrierMethod cannot be null');
        }

        $this->container['originalCarrierMethod'] = $originalCarrierMethod;
        return $this;
    }

    /**
     * Gets referenceLineId
     *
     * @return string|null
    
     */
    public function getReferenceLineId()
    {
        return $this->container['referenceLineId'];
    }

    /**
     * Sets referenceLineId
     *
     * @param string|null $referenceLineId Reference line Id
     *
     * @return self
    
     */
    public function setReferenceLineId($referenceLineId)
    {
        if (is_null($referenceLineId)) {
            throw new \InvalidArgumentException('non-nullable referenceLineId cannot be null');
        }

        $this->container['referenceLineId'] = $referenceLineId;
        return $this;
    }

    /**
     * Gets fulfillment
     *
     * @return \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerFulfillment|null
    
     */
    public function getFulfillment()
    {
        return $this->container['fulfillment'];
    }

    /**
     * Sets fulfillment
     *
     * @param \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerFulfillment|null $fulfillment fulfillment
     *
     * @return self
    
     */
    public function setFulfillment($fulfillment)
    {
        if (is_null($fulfillment)) {
            throw new \InvalidArgumentException('non-nullable fulfillment cannot be null');
        }

        $this->container['fulfillment'] = $fulfillment;
        return $this;
    }

    /**
     * Gets intentToCancel
     *
     * @return string|null
    
     */
    public function getIntentToCancel()
    {
        return $this->container['intentToCancel'];
    }

    /**
     * Sets intentToCancel
     *
     * @param string|null $intentToCancel intentToCancel
     *
     * @return self
    
     */
    public function setIntentToCancel($intentToCancel)
    {
        if (is_null($intentToCancel)) {
            throw new \InvalidArgumentException('non-nullable intentToCancel cannot be null');
        }

        $this->container['intentToCancel'] = $intentToCancel;
        return $this;
    }

    /**
     * Gets configId
     *
     * @return string|null
    
     */
    public function getConfigId()
    {
        return $this->container['configId'];
    }

    /**
     * Sets configId
     *
     * @param string|null $configId Sets ConfigID for Personalised orders
     *
     * @return self
    
     */
    public function setConfigId($configId)
    {
        if (is_null($configId)) {
            throw new \InvalidArgumentException('non-nullable configId cannot be null');
        }

        $this->container['configId'] = $configId;
        return $this;
    }

    /**
     * Gets sellerOrderId
     *
     * @return string|null
    
     */
    public function getSellerOrderId()
    {
        return $this->container['sellerOrderId'];
    }

    /**
     * Sets sellerOrderId
     *
     * @param string|null $sellerOrderId A unique ID associated with the sales order for specified Seller; gives Sellers the ability to print their own custom order ID on the return label; limit of 30 characters
     *
     * @return self
    
     */
    public function setSellerOrderId($sellerOrderId)
    {
        if (is_null($sellerOrderId)) {
            throw new \InvalidArgumentException('non-nullable sellerOrderId cannot be null');
        }

        $this->container['sellerOrderId'] = $sellerOrderId;
        return $this;
    }
}


