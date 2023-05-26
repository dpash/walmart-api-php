<?php

/**
 * ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefundRefundChargesRefundChargeInner
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
 * ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefundRefundChargesRefundChargeInner Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerRefundRefundChargesRefundChargeInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'shippingUpdates_200_response_order_orderLines_orderLine_inner_refund_refundCharges_refundCharge_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'refundReason' => 'string',
        'charge' => '\Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerChargesChargeInner'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'refundReason' => null,
        'charge' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'refundReason' => false,
        'charge' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'refundReason' => 'refundReason',
        'charge' => 'charge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'refundReason' => 'setRefundReason',
        'charge' => 'setCharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'refundReason' => 'getRefundReason',
        'charge' => 'getCharge'
    ];


    public const REFUND_REASON_BILLING_ERROR = 'BillingError';

    public const REFUND_REASON_TAX_EXEMPT_CUSTOMER = 'TaxExemptCustomer';

    public const REFUND_REASON_ITEM_NOT_AS_ADVERTISED = 'ItemNotAsAdvertised';

    public const REFUND_REASON_INCORRECT_ITEM_RECEIVED = 'IncorrectItemReceived';

    public const REFUND_REASON_CANCELLED_YET_SHIPPED = 'CancelledYetShipped';

    public const REFUND_REASON_ITEM_NOT_RECEIVED_BY_CUSTOMER = 'ItemNotReceivedByCustomer';

    public const REFUND_REASON_INCORRECT_SHIPPING_PRICE = 'IncorrectShippingPrice';

    public const REFUND_REASON_DAMAGED_ITEM = 'DamagedItem';

    public const REFUND_REASON_DEFECTIVE_ITEM = 'DefectiveItem';

    public const REFUND_REASON_CUSTOMER_CHANGED_MIND = 'CustomerChangedMind';

    public const REFUND_REASON_CUSTOMER_RECEIVED_ITEM_LATE = 'CustomerReceivedItemLate';

    public const REFUND_REASON_MISSING_PARTS___INSTRUCTIONS = 'Missing Parts / Instructions';

    public const REFUND_REASON_FINANCE___GOODWILL = 'Finance -> Goodwill';

    public const REFUND_REASON_FINANCE___ROLLBACK = 'Finance -> Rollback';

    public const REFUND_REASON_BUYER_CANCELED = 'Buyer canceled';

    public const REFUND_REASON_CUSTOMER_RETURNED_ITEM = 'Customer returned item';

    public const REFUND_REASON_GENERAL_ADJUSTMENT = 'General adjustment';

    public const REFUND_REASON_MERCHANDISE_NOT_RECEIVED = 'Merchandise not received';

    public const REFUND_REASON_QUALITY___MISSING_PARTS___INSTRUCTIONS = 'Quality -> Missing Parts / Instructions';

    public const REFUND_REASON_SHIPPING__DELIVERY___DAMAGED = 'Shipping & Delivery -> Damaged';

    public const REFUND_REASON_SHIPPING__DELIVERY___SHIPPING_PRICE_DISCREPANCY = 'Shipping & Delivery -> Shipping Price Discrepancy';

    public const REFUND_REASON_OTHERS = 'Others';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefundReasonAllowableValues()
    {
        return [
            self::REFUND_REASON_BILLING_ERROR,
            self::REFUND_REASON_TAX_EXEMPT_CUSTOMER,
            self::REFUND_REASON_ITEM_NOT_AS_ADVERTISED,
            self::REFUND_REASON_INCORRECT_ITEM_RECEIVED,
            self::REFUND_REASON_CANCELLED_YET_SHIPPED,
            self::REFUND_REASON_ITEM_NOT_RECEIVED_BY_CUSTOMER,
            self::REFUND_REASON_INCORRECT_SHIPPING_PRICE,
            self::REFUND_REASON_DAMAGED_ITEM,
            self::REFUND_REASON_DEFECTIVE_ITEM,
            self::REFUND_REASON_CUSTOMER_CHANGED_MIND,
            self::REFUND_REASON_CUSTOMER_RECEIVED_ITEM_LATE,
            self::REFUND_REASON_MISSING_PARTS___INSTRUCTIONS,
            self::REFUND_REASON_FINANCE___GOODWILL,
            self::REFUND_REASON_FINANCE___ROLLBACK,
            self::REFUND_REASON_BUYER_CANCELED,
            self::REFUND_REASON_CUSTOMER_RETURNED_ITEM,
            self::REFUND_REASON_GENERAL_ADJUSTMENT,
            self::REFUND_REASON_MERCHANDISE_NOT_RECEIVED,
            self::REFUND_REASON_QUALITY___MISSING_PARTS___INSTRUCTIONS,
            self::REFUND_REASON_SHIPPING__DELIVERY___DAMAGED,
            self::REFUND_REASON_SHIPPING__DELIVERY___SHIPPING_PRICE_DISCREPANCY,
            self::REFUND_REASON_OTHERS,
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
        $this->setIfExists('refundReason', $data ?? [], null);
        $this->setIfExists('charge', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['refundReason'] === null) {
            $invalidProperties[] = "'refundReason' can't be null";
        }
        $allowedValues = $this->getRefundReasonAllowableValues();
        if (!is_null($this->container['refundReason']) && !in_array($this->container['refundReason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'refundReason', must be one of '%s'",
                $this->container['refundReason'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['charge'] === null) {
            $invalidProperties[] = "'charge' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets refundReason
     *
     * @return string
    
     */
    public function getRefundReason()
    {
        return $this->container['refundReason'];
    }

    /**
     * Sets refundReason
     *
     * @param string $refundReason refundReason
     *
     * @return self
    
     */
    public function setRefundReason($refundReason)
    {
        if (is_null($refundReason)) {
            throw new \InvalidArgumentException('non-nullable refundReason cannot be null');
        }
        $allowedValues = $this->getRefundReasonAllowableValues();
        if (!in_array($refundReason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'refundReason', must be one of '%s'",
                    $refundReason,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['refundReason'] = $refundReason;
        return $this;
    }

    /**
     * Gets charge
     *
     * @return \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerChargesChargeInner
    
     */
    public function getCharge()
    {
        return $this->container['charge'];
    }

    /**
     * Sets charge
     *
     * @param \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerChargesChargeInner $charge charge
     *
     * @return self
    
     */
    public function setCharge($charge)
    {
        if (is_null($charge)) {
            throw new \InvalidArgumentException('non-nullable charge cannot be null');
        }

        $this->container['charge'] = $charge;
        return $this;
    }
}


