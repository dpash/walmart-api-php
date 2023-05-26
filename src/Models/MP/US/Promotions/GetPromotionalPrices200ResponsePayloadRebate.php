<?php

/**
 * GetPromotionalPrices200ResponsePayloadRebate
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
 * Promotion Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Promotions;

use Walmart\Model\BaseModel;

/**
 * GetPromotionalPrices200ResponsePayloadRebate Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetPromotionalPrices200ResponsePayloadRebate extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getPromotionalPrices_200_response_payload_rebate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'rebateAmt' => '\Walmart\Models\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue',
        'infoUrl' => 'string',
        'rebateType' => 'string',
        'startDate' => '\DateTime',
        'endDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'rebateAmt' => null,
        'infoUrl' => null,
        'rebateType' => null,
        'startDate' => 'date-time',
        'endDate' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'rebateAmt' => false,
        'infoUrl' => false,
        'rebateType' => false,
        'startDate' => false,
        'endDate' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'rebateAmt' => 'rebateAmt',
        'infoUrl' => 'infoUrl',
        'rebateType' => 'rebateType',
        'startDate' => 'startDate',
        'endDate' => 'endDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'rebateAmt' => 'setRebateAmt',
        'infoUrl' => 'setInfoUrl',
        'rebateType' => 'setRebateType',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'rebateAmt' => 'getRebateAmt',
        'infoUrl' => 'getInfoUrl',
        'rebateType' => 'getRebateType',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate'
    ];


    public const REBATE_TYPE_AMOUNT = 'AMOUNT';

    public const REBATE_TYPE_PRODUCT = 'PRODUCT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRebateTypeAllowableValues()
    {
        return [
            self::REBATE_TYPE_AMOUNT,
            self::REBATE_TYPE_PRODUCT,
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
        $this->setIfExists('rebateAmt', $data ?? [], null);
        $this->setIfExists('infoUrl', $data ?? [], null);
        $this->setIfExists('rebateType', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('endDate', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['rebateAmt'] === null) {
            $invalidProperties[] = "'rebateAmt' can't be null";
        }
        $allowedValues = $this->getRebateTypeAllowableValues();
        if (!is_null($this->container['rebateType']) && !in_array($this->container['rebateType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rebateType', must be one of '%s'",
                $this->container['rebateType'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets rebateAmt
     *
     * @return \Walmart\Models\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue
    
     */
    public function getRebateAmt()
    {
        return $this->container['rebateAmt'];
    }

    /**
     * Sets rebateAmt
     *
     * @param \Walmart\Models\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue $rebateAmt rebateAmt
     *
     * @return self
    
     */
    public function setRebateAmt($rebateAmt)
    {
        if (is_null($rebateAmt)) {
            throw new \InvalidArgumentException('non-nullable rebateAmt cannot be null');
        }

        $this->container['rebateAmt'] = $rebateAmt;
        return $this;
    }

    /**
     * Gets infoUrl
     *
     * @return string|null
    
     */
    public function getInfoUrl()
    {
        return $this->container['infoUrl'];
    }

    /**
     * Sets infoUrl
     *
     * @param string|null $infoUrl infoUrl
     *
     * @return self
    
     */
    public function setInfoUrl($infoUrl)
    {
        if (is_null($infoUrl)) {
            throw new \InvalidArgumentException('non-nullable infoUrl cannot be null');
        }

        $this->container['infoUrl'] = $infoUrl;
        return $this;
    }

    /**
     * Gets rebateType
     *
     * @return string|null
    
     */
    public function getRebateType()
    {
        return $this->container['rebateType'];
    }

    /**
     * Sets rebateType
     *
     * @param string|null $rebateType rebateType
     *
     * @return self
    
     */
    public function setRebateType($rebateType)
    {
        if (is_null($rebateType)) {
            throw new \InvalidArgumentException('non-nullable rebateType cannot be null');
        }
        $allowedValues = $this->getRebateTypeAllowableValues();
        if (!in_array($rebateType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rebateType', must be one of '%s'",
                    $rebateType,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['rebateType'] = $rebateType;
        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime|null
    
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate startDate
     *
     * @return self
    
     */
    public function setStartDate($startDate)
    {
        if (is_null($startDate)) {
            throw new \InvalidArgumentException('non-nullable startDate cannot be null');
        }

        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime|null
    
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime|null $endDate endDate
     *
     * @return self
    
     */
    public function setEndDate($endDate)
    {
        if (is_null($endDate)) {
            throw new \InvalidArgumentException('non-nullable endDate cannot be null');
        }

        $this->container['endDate'] = $endDate;
        return $this;
    }
}


