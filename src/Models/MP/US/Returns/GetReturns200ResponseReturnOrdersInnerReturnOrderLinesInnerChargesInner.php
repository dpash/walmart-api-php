<?php

/**
 * GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInner
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

namespace Walmart\Models\MP\US\Returns;

use Walmart\Model\BaseModel;

/**
 * GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInner Class Doc Comment
 *
 * @category Class

 * @description Information relating to the charge for the orderLine

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getReturns_200_response_returnOrders_inner_returnOrderLines_inner_charges_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'chargeCategory' => 'string',
        'chargeName' => 'string',
        'chargePerUnit' => '\Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerTotalRefundAmount',
        'isDiscount' => 'bool',
        'isBillable' => 'bool',
        'tax' => '\Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInnerTaxInner[]',
        'excessCharge' => '\Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerTotalRefundAmount',
        'references' => '\Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInnerReferencesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'chargeCategory' => null,
        'chargeName' => null,
        'chargePerUnit' => null,
        'isDiscount' => null,
        'isBillable' => null,
        'tax' => null,
        'excessCharge' => null,
        'references' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'chargeCategory' => false,
        'chargeName' => false,
        'chargePerUnit' => false,
        'isDiscount' => false,
        'isBillable' => false,
        'tax' => false,
        'excessCharge' => false,
        'references' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'chargeCategory' => 'chargeCategory',
        'chargeName' => 'chargeName',
        'chargePerUnit' => 'chargePerUnit',
        'isDiscount' => 'isDiscount',
        'isBillable' => 'isBillable',
        'tax' => 'tax',
        'excessCharge' => 'excessCharge',
        'references' => 'references'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'chargeCategory' => 'setChargeCategory',
        'chargeName' => 'setChargeName',
        'chargePerUnit' => 'setChargePerUnit',
        'isDiscount' => 'setIsDiscount',
        'isBillable' => 'setIsBillable',
        'tax' => 'setTax',
        'excessCharge' => 'setExcessCharge',
        'references' => 'setReferences'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'chargeCategory' => 'getChargeCategory',
        'chargeName' => 'getChargeName',
        'chargePerUnit' => 'getChargePerUnit',
        'isDiscount' => 'getIsDiscount',
        'isBillable' => 'getIsBillable',
        'tax' => 'getTax',
        'excessCharge' => 'getExcessCharge',
        'references' => 'getReferences'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('chargeCategory', $data ?? [], null);
        $this->setIfExists('chargeName', $data ?? [], null);
        $this->setIfExists('chargePerUnit', $data ?? [], null);
        $this->setIfExists('isDiscount', $data ?? [], null);
        $this->setIfExists('isBillable', $data ?? [], null);
        $this->setIfExists('tax', $data ?? [], null);
        $this->setIfExists('excessCharge', $data ?? [], null);
        $this->setIfExists('references', $data ?? [], null);
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
     * Gets chargeCategory
     *
     * @return string|null
    
     */
    public function getChargeCategory()
    {
        return $this->container['chargeCategory'];
    }

    /**
     * Sets chargeCategory
     *
     * @param string|null $chargeCategory The category type. (e.g., 'PRODUCT' or 'FEE')
     *
     * @return self
    
     */
    public function setChargeCategory($chargeCategory)
    {
        if (is_null($chargeCategory)) {
            throw new \InvalidArgumentException('non-nullable chargeCategory cannot be null');
        }

        $this->container['chargeCategory'] = $chargeCategory;
        return $this;
    }

    /**
     * Gets chargeName
     *
     * @return string|null
    
     */
    public function getChargeName()
    {
        return $this->container['chargeName'];
    }

    /**
     * Sets chargeName
     *
     * @param string|null $chargeName If chargeType is PRODUCT, chargeName is ItemPrice. If chargeType is PRODUCT and includes a chargeName as SubscriptionDiscount, these are subscription orders with a discount. If chargeType is SHIPPING, chargeName is Shipping
     *
     * @return self
    
     */
    public function setChargeName($chargeName)
    {
        if (is_null($chargeName)) {
            throw new \InvalidArgumentException('non-nullable chargeName cannot be null');
        }

        $this->container['chargeName'] = $chargeName;
        return $this;
    }

    /**
     * Gets chargePerUnit
     *
     * @return \Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerTotalRefundAmount|null
    
     */
    public function getChargePerUnit()
    {
        return $this->container['chargePerUnit'];
    }

    /**
     * Sets chargePerUnit
     *
     * @param \Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerTotalRefundAmount|null $chargePerUnit chargePerUnit
     *
     * @return self
    
     */
    public function setChargePerUnit($chargePerUnit)
    {
        if (is_null($chargePerUnit)) {
            throw new \InvalidArgumentException('non-nullable chargePerUnit cannot be null');
        }

        $this->container['chargePerUnit'] = $chargePerUnit;
        return $this;
    }

    /**
     * Gets isDiscount
     *
     * @return bool|null
    
     */
    public function getIsDiscount()
    {
        return $this->container['isDiscount'];
    }

    /**
     * Sets isDiscount
     *
     * @param bool|null $isDiscount Is this charge a discount, which then needs to be subtracted from the refund
     *
     * @return self
    
     */
    public function setIsDiscount($isDiscount)
    {
        if (is_null($isDiscount)) {
            throw new \InvalidArgumentException('non-nullable isDiscount cannot be null');
        }

        $this->container['isDiscount'] = $isDiscount;
        return $this;
    }

    /**
     * Gets isBillable
     *
     * @return bool|null
    
     */
    public function getIsBillable()
    {
        return $this->container['isBillable'];
    }

    /**
     * Sets isBillable
     *
     * @param bool|null $isBillable Should this charge be included in the refund computation
     *
     * @return self
    
     */
    public function setIsBillable($isBillable)
    {
        if (is_null($isBillable)) {
            throw new \InvalidArgumentException('non-nullable isBillable cannot be null');
        }

        $this->container['isBillable'] = $isBillable;
        return $this;
    }

    /**
     * Gets tax
     *
     * @return \Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInnerTaxInner[]|null
    
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInnerTaxInner[]|null $tax Taxes for each charge
     *
     * @return self
    
     */
    public function setTax($tax)
    {
        if (is_null($tax)) {
            throw new \InvalidArgumentException('non-nullable tax cannot be null');
        }

        $this->container['tax'] = $tax;
        return $this;
    }

    /**
     * Gets excessCharge
     *
     * @return \Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerTotalRefundAmount|null
    
     */
    public function getExcessCharge()
    {
        return $this->container['excessCharge'];
    }

    /**
     * Sets excessCharge
     *
     * @param \Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerTotalRefundAmount|null $excessCharge excessCharge
     *
     * @return self
    
     */
    public function setExcessCharge($excessCharge)
    {
        if (is_null($excessCharge)) {
            throw new \InvalidArgumentException('non-nullable excessCharge cannot be null');
        }

        $this->container['excessCharge'] = $excessCharge;
        return $this;
    }

    /**
     * Gets references
     *
     * @return \Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInnerReferencesInner[]|null
    
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param \Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInnerReferencesInner[]|null $references Used only for OG
     *
     * @return self
    
     */
    public function setReferences($references)
    {
        if (is_null($references)) {
            throw new \InvalidArgumentException('non-nullable references cannot be null');
        }

        $this->container['references'] = $references;
        return $this;
    }
}


