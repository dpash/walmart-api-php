<?php

/**
 * CancelOrderLinesRequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInner
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
 * CancelOrderLinesRequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInner Class Doc Comment
 *
 * @category Class

 * @description List of details about the cancellation status update

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CancelOrderLinesRequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'cancelOrderLines_request_orderLines_orderLine_inner_orderLineStatuses_orderLineStatus_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'status' => 'string',
        'cancellationReason' => 'string',
        'statusQuantity' => '\Walmart\Models\DSV\US\Orders\ShipOrderLinesRequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerStatusQuantity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'status' => null,
        'cancellationReason' => null,
        'statusQuantity' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'cancellationReason' => false,
        'statusQuantity' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'status' => 'status',
        'cancellationReason' => 'cancellationReason',
        'statusQuantity' => 'statusQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'status' => 'setStatus',
        'cancellationReason' => 'setCancellationReason',
        'statusQuantity' => 'setStatusQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'status' => 'getStatus',
        'cancellationReason' => 'getCancellationReason',
        'statusQuantity' => 'getStatusQuantity'
    ];


    public const STATUS_CREATED = 'Created';

    public const STATUS_ACKNOWLEDGED = 'Acknowledged';

    public const STATUS_SHIPPED = 'Shipped';

    public const STATUS_DELIVERED = 'Delivered';

    public const STATUS_CANCELLED = 'Cancelled';

    public const STATUS_REFUND = 'Refund';

    public const CANCELLATION_REASON_CANCEL = 'SUPPLIER_CANCEL';

    public const CANCELLATION_REASON_CANCEL_CUSTOMER_REQUEST = 'SUPPLIER_CANCEL_CUSTOMER_REQUEST';

    public const CANCELLATION_REASON_CANCEL_BACKORDER = 'SUPPLIER_CANCEL_BACKORDER';

    public const CANCELLATION_REASON_CANCEL_DISCONTINUE = 'SUPPLIER_CANCEL_DISCONTINUE';

    public const CANCELLATION_REASON_CANCEL_UNRECOGNIZED = 'SUPPLIER_CANCEL_UNRECOGNIZED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_ACKNOWLEDGED,
            self::STATUS_SHIPPED,
            self::STATUS_DELIVERED,
            self::STATUS_CANCELLED,
            self::STATUS_REFUND,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCancellationReasonAllowableValues()
    {
        return [
            self::CANCELLATION_REASON_CANCEL,
            self::CANCELLATION_REASON_CANCEL_CUSTOMER_REQUEST,
            self::CANCELLATION_REASON_CANCEL_BACKORDER,
            self::CANCELLATION_REASON_CANCEL_DISCONTINUE,
            self::CANCELLATION_REASON_CANCEL_UNRECOGNIZED,
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('cancellationReason', $data ?? [], null);
        $this->setIfExists('statusQuantity', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['cancellationReason'] === null) {
            $invalidProperties[] = "'cancellationReason' can't be null";
        }
        $allowedValues = $this->getCancellationReasonAllowableValues();
        if (!is_null($this->container['cancellationReason']) && !in_array($this->container['cancellationReason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cancellationReason', must be one of '%s'",
                $this->container['cancellationReason'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['statusQuantity'] === null) {
            $invalidProperties[] = "'statusQuantity' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets status
     *
     * @return string
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Use 'Cancelled'
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets cancellationReason
     *
     * @return string
    
     */
    public function getCancellationReason()
    {
        return $this->container['cancellationReason'];
    }

    /**
     * Sets cancellationReason
     *
     * @param string $cancellationReason Reason for cancellation. Example: 'SUPPLIER_CANCEL'
     *
     * @return self
    
     */
    public function setCancellationReason($cancellationReason)
    {
        if (is_null($cancellationReason)) {
            throw new \InvalidArgumentException('non-nullable cancellationReason cannot be null');
        }
        $allowedValues = $this->getCancellationReasonAllowableValues();
        if (!in_array($cancellationReason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cancellationReason', must be one of '%s'",
                    $cancellationReason,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['cancellationReason'] = $cancellationReason;
        return $this;
    }

    /**
     * Gets statusQuantity
     *
     * @return \Walmart\Models\DSV\US\Orders\ShipOrderLinesRequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerStatusQuantity
    
     */
    public function getStatusQuantity()
    {
        return $this->container['statusQuantity'];
    }

    /**
     * Sets statusQuantity
     *
     * @param \Walmart\Models\DSV\US\Orders\ShipOrderLinesRequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerStatusQuantity $statusQuantity statusQuantity
     *
     * @return self
    
     */
    public function setStatusQuantity($statusQuantity)
    {
        if (is_null($statusQuantity)) {
            throw new \InvalidArgumentException('non-nullable statusQuantity cannot be null');
        }

        $this->container['statusQuantity'] = $statusQuantity;
        return $this;
    }
}


