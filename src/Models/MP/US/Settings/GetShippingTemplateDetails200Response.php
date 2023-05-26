<?php

/**
 * GetShippingTemplateDetails200Response
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
use Walmart\Traits\HasResponseHeaders;

/**
 * GetShippingTemplateDetails200Response Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetShippingTemplateDetails200Response extends BaseModel
{
    use HasResponseHeaders;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getShippingTemplateDetails_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'type' => 'string',
        'rateModelType' => 'string',
        'status' => 'string',
        'shippingMethods' => '\Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInner[]',
        'createdBy' => 'string',
        'modifiedBy' => 'string',
        'createdDate' => 'float',
        'modifiedDate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'rateModelType' => null,
        'status' => null,
        'shippingMethods' => null,
        'createdBy' => null,
        'modifiedBy' => null,
        'createdDate' => null,
        'modifiedDate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'type' => false,
        'rateModelType' => false,
        'status' => false,
        'shippingMethods' => false,
        'createdBy' => false,
        'modifiedBy' => false,
        'createdDate' => false,
        'modifiedDate' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'type' => 'type',
        'rateModelType' => 'rateModelType',
        'status' => 'status',
        'shippingMethods' => 'shippingMethods',
        'createdBy' => 'createdBy',
        'modifiedBy' => 'modifiedBy',
        'createdDate' => 'createdDate',
        'modifiedDate' => 'modifiedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type' => 'setType',
        'rateModelType' => 'setRateModelType',
        'status' => 'setStatus',
        'shippingMethods' => 'setShippingMethods',
        'createdBy' => 'setCreatedBy',
        'modifiedBy' => 'setModifiedBy',
        'createdDate' => 'setCreatedDate',
        'modifiedDate' => 'setModifiedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type' => 'getType',
        'rateModelType' => 'getRateModelType',
        'status' => 'getStatus',
        'shippingMethods' => 'getShippingMethods',
        'createdBy' => 'getCreatedBy',
        'modifiedBy' => 'getModifiedBy',
        'createdDate' => 'getCreatedDate',
        'modifiedDate' => 'getModifiedDate'
    ];


    public const TYPE__DEFAULT = 'DEFAULT';

    public const TYPE_CUSTOM = 'CUSTOM';

    public const TYPE_DELIVERR = 'DELIVERR';

    public const RATE_MODEL_TYPE_TIERED_PRICING = 'TIERED_PRICING';

    public const RATE_MODEL_TYPE_PER_SHIPMENT_PRICING = 'PER_SHIPMENT_PRICING';

    public const STATUS_ACTIVE = 'ACTIVE';

    public const STATUS_INACTIVE = 'INACTIVE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__DEFAULT,
            self::TYPE_CUSTOM,
            self::TYPE_DELIVERR,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRateModelTypeAllowableValues()
    {
        return [
            self::RATE_MODEL_TYPE_TIERED_PRICING,
            self::RATE_MODEL_TYPE_PER_SHIPMENT_PRICING,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('rateModelType', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('shippingMethods', $data ?? [], null);
        $this->setIfExists('createdBy', $data ?? [], null);
        $this->setIfExists('modifiedBy', $data ?? [], null);
        $this->setIfExists('createdDate', $data ?? [], null);
        $this->setIfExists('modifiedDate', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }




        if (!preg_match("/^[A-Za-z0-9\\s]+$/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z0-9\\s]+$/.";
        }



        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['rateModelType'] === null) {
            $invalidProperties[] = "'rateModelType' can't be null";
        }
        $allowedValues = $this->getRateModelTypeAllowableValues();
        if (!is_null($this->container['rateModelType']) && !in_array($this->container['rateModelType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rateModelType', must be one of '%s'",
                $this->container['rateModelType'],
                implode("', '", $allowedValues)
            );
        }

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

        if ($this->container['shippingMethods'] === null) {
            $invalidProperties[] = "'shippingMethods' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets id
     *
     * @return string|null
    
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Shipping Template ID
     *
     * @return self
    
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;
        return $this;
    }

    /**
     * Gets name
     *
     * @return string
    
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Shipping Template Name
     *
     * @return self
    
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }




        if ((!preg_match("/^[A-Za-z0-9\\s]+$/", $name))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling GetShippingTemplateDetails200Response., must conform to the pattern /^[A-Za-z0-9\\s]+$/.");
        }



        $this->container['name'] = $name;
        return $this;
    }

    /**
     * Gets type
     *
     * @return string
    
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Shipping Template Type, should be CUSTOM or 3PL Specific
     *
     * @return self
    
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['type'] = $type;
        return $this;
    }

    /**
     * Gets rateModelType
     *
     * @return string
    
     */
    public function getRateModelType()
    {
        return $this->container['rateModelType'];
    }

    /**
     * Sets rateModelType
     *
     * @param string $rateModelType This is the shipping model type. TIERED_PRICING: This model means that you charge shipping based on the price of the item PER_SHIPMENT_PRICING: This model means that you charge shipping based on the weight of your items (per pound), or you charge shipping based on the number of items purchased in an order
     *
     * @return self
    
     */
    public function setRateModelType($rateModelType)
    {
        if (is_null($rateModelType)) {
            throw new \InvalidArgumentException('non-nullable rateModelType cannot be null');
        }
        $allowedValues = $this->getRateModelTypeAllowableValues();
        if (!in_array($rateModelType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rateModelType', must be one of '%s'",
                    $rateModelType,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['rateModelType'] = $rateModelType;
        return $this;
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
     * @param string $status Shipping Template Status, Can be ACTIVE or INACTIVE status
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
     * Gets shippingMethods
     *
     * @return \Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInner[]
    
     */
    public function getShippingMethods()
    {
        return $this->container['shippingMethods'];
    }

    /**
     * Sets shippingMethods
     *
     * @param \Walmart\Models\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInner[] $shippingMethods Array of different ship methods of a Shipping Template
     *
     * @return self
    
     */
    public function setShippingMethods($shippingMethods)
    {
        if (is_null($shippingMethods)) {
            throw new \InvalidArgumentException('non-nullable shippingMethods cannot be null');
        }

        $this->container['shippingMethods'] = $shippingMethods;
        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return string|null
    
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param string|null $createdBy createdBy
     *
     * @return self
    
     */
    public function setCreatedBy($createdBy)
    {
        if (is_null($createdBy)) {
            throw new \InvalidArgumentException('non-nullable createdBy cannot be null');
        }

        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
     * Gets modifiedBy
     *
     * @return string|null
    
     */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
     * Sets modifiedBy
     *
     * @param string|null $modifiedBy modifiedBy
     *
     * @return self
    
     */
    public function setModifiedBy($modifiedBy)
    {
        if (is_null($modifiedBy)) {
            throw new \InvalidArgumentException('non-nullable modifiedBy cannot be null');
        }

        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
     * Gets createdDate
     *
     * @return float|null
    
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param float|null $createdDate createdDate
     *
     * @return self
    
     */
    public function setCreatedDate($createdDate)
    {
        if (is_null($createdDate)) {
            throw new \InvalidArgumentException('non-nullable createdDate cannot be null');
        }

        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
     * Gets modifiedDate
     *
     * @return float|null
    
     */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
     * Sets modifiedDate
     *
     * @param float|null $modifiedDate modifiedDate
     *
     * @return self
    
     */
    public function setModifiedDate($modifiedDate)
    {
        if (is_null($modifiedDate)) {
            throw new \InvalidArgumentException('non-nullable modifiedDate cannot be null');
        }

        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }
}


