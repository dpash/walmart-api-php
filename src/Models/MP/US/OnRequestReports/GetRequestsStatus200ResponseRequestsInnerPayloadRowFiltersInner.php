<?php

/**
 * GetRequestsStatus200ResponseRequestsInnerPayloadRowFiltersInner
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
 * On-request Report Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\OnRequestReports;

use Walmart\Model\BaseModel;

/**
 * GetRequestsStatus200ResponseRequestsInnerPayloadRowFiltersInner Class Doc Comment
 *
 * @category Class

 * @description Supertype of all row filters.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetRequestsStatus200ResponseRequestsInnerPayloadRowFiltersInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getRequestsStatus_200_response_requests_inner_payload_rowFilters_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'values' => 'string[]',
        'columnName' => 'string',
        'type' => 'string',
        'from' => 'string',
        'to' => 'string',
        'rowFilterType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'values' => null,
        'columnName' => null,
        'type' => null,
        'from' => null,
        'to' => null,
        'rowFilterType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'values' => false,
        'columnName' => false,
        'type' => false,
        'from' => false,
        'to' => false,
        'rowFilterType' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'values' => 'values',
        'columnName' => 'columnName',
        'type' => 'type',
        'from' => 'from',
        'to' => 'to',
        'rowFilterType' => 'rowFilterType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'values' => 'setValues',
        'columnName' => 'setColumnName',
        'type' => 'setType',
        'from' => 'setFrom',
        'to' => 'setTo',
        'rowFilterType' => 'setRowFilterType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'values' => 'getValues',
        'columnName' => 'getColumnName',
        'type' => 'getType',
        'from' => 'getFrom',
        'to' => 'getTo',
        'rowFilterType' => 'getRowFilterType'
    ];


    public const TYPE_RANGE_FILTER = 'rangeFilter';

    public const TYPE_ENUM_FILTER = 'enumFilter';

    public const ROW_FILTER_TYPE_RANGE_FILTER = 'rangeFilter';

    public const ROW_FILTER_TYPE_ENUM_FILTER = 'enumFilter';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_RANGE_FILTER,
            self::TYPE_ENUM_FILTER,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRowFilterTypeAllowableValues()
    {
        return [
            self::ROW_FILTER_TYPE_RANGE_FILTER,
            self::ROW_FILTER_TYPE_ENUM_FILTER,
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
        $this->setIfExists('values', $data ?? [], null);
        $this->setIfExists('columnName', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('rowFilterType', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['columnName'] === null) {
            $invalidProperties[] = "'columnName' can't be null";
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

        if ($this->container['rowFilterType'] === null) {
            $invalidProperties[] = "'rowFilterType' can't be null";
        }
        $allowedValues = $this->getRowFilterTypeAllowableValues();
        if (!is_null($this->container['rowFilterType']) && !in_array($this->container['rowFilterType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rowFilterType', must be one of '%s'",
                $this->container['rowFilterType'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets values
     *
     * @return string[]|null
    
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[]|null $values Enum filter values which has to be included in report
     *
     * @return self
    
     */
    public function setValues($values)
    {
        if (is_null($values)) {
            throw new \InvalidArgumentException('non-nullable values cannot be null');
        }

        $this->container['values'] = $values;
        return $this;
    }

    /**
     * Gets columnName
     *
     * @return string
    
     */
    public function getColumnName()
    {
        return $this->container['columnName'];
    }

    /**
     * Sets columnName
     *
     * @param string $columnName Column on which filter has to be applied
     *
     * @return self
    
     */
    public function setColumnName($columnName)
    {
        if (is_null($columnName)) {
            throw new \InvalidArgumentException('non-nullable columnName cannot be null');
        }

        $this->container['columnName'] = $columnName;
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
     * @param string $type Type of the filter
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
     * Gets from
     *
     * @return string|null
    
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from Filter range start
     *
     * @return self
    
     */
    public function setFrom($from)
    {
        if (is_null($from)) {
            throw new \InvalidArgumentException('non-nullable from cannot be null');
        }

        $this->container['from'] = $from;
        return $this;
    }

    /**
     * Gets to
     *
     * @return string|null
    
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string|null $to Filter range end
     *
     * @return self
    
     */
    public function setTo($to)
    {
        if (is_null($to)) {
            throw new \InvalidArgumentException('non-nullable to cannot be null');
        }

        $this->container['to'] = $to;
        return $this;
    }

    /**
     * Gets rowFilterType
     *
     * @return string
    
     */
    public function getRowFilterType()
    {
        return $this->container['rowFilterType'];
    }

    /**
     * Sets rowFilterType
     *
     * @param string $rowFilterType Type of the filter
     *
     * @return self
    
     */
    public function setRowFilterType($rowFilterType)
    {
        if (is_null($rowFilterType)) {
            throw new \InvalidArgumentException('non-nullable rowFilterType cannot be null');
        }
        $allowedValues = $this->getRowFilterTypeAllowableValues();
        if (!in_array($rowFilterType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rowFilterType', must be one of '%s'",
                    $rowFilterType,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['rowFilterType'] = $rowFilterType;
        return $this;
    }
}


