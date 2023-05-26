<?php

/**
 * PostPurchase
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
 * Insights Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Insights;

use Walmart\Model\BaseModel;

/**
 * PostPurchase Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PostPurchase extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PostPurchase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'cancellations' => '\Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsPostPurchaseCancellations',
        'returns' => 'object',
        'issueCount' => 'string',
        'otd' => '\Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsPostPurchaseCancellations'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'cancellations' => null,
        'returns' => null,
        'issueCount' => null,
        'otd' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cancellations' => false,
        'returns' => false,
        'issueCount' => false,
        'otd' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'cancellations' => 'cancellations',
        'returns' => 'returns',
        'issueCount' => 'issueCount',
        'otd' => 'otd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'cancellations' => 'setCancellations',
        'returns' => 'setReturns',
        'issueCount' => 'setIssueCount',
        'otd' => 'setOtd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'cancellations' => 'getCancellations',
        'returns' => 'getReturns',
        'issueCount' => 'getIssueCount',
        'otd' => 'getOtd'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('cancellations', $data ?? [], null);
        $this->setIfExists('returns', $data ?? [], null);
        $this->setIfExists('issueCount', $data ?? [], null);
        $this->setIfExists('otd', $data ?? [], null);
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
     * Gets cancellations
     *
     * @return \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsPostPurchaseCancellations|null
    
     */
    public function getCancellations()
    {
        return $this->container['cancellations'];
    }

    /**
     * Sets cancellations
     *
     * @param \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsPostPurchaseCancellations|null $cancellations cancellations
     *
     * @return self
    
     */
    public function setCancellations($cancellations)
    {
        if (is_null($cancellations)) {
            throw new \InvalidArgumentException('non-nullable cancellations cannot be null');
        }

        $this->container['cancellations'] = $cancellations;
        return $this;
    }

    /**
     * Gets returns
     *
     * @return object|null
    
     */
    public function getReturns()
    {
        return $this->container['returns'];
    }

    /**
     * Sets returns
     *
     * @param object|null $returns returns
     *
     * @return self
    
     */
    public function setReturns($returns)
    {
        if (is_null($returns)) {
            throw new \InvalidArgumentException('non-nullable returns cannot be null');
        }

        $this->container['returns'] = $returns;
        return $this;
    }

    /**
     * Gets issueCount
     *
     * @return string|null
    
     */
    public function getIssueCount()
    {
        return $this->container['issueCount'];
    }

    /**
     * Sets issueCount
     *
     * @param string|null $issueCount issueCount
     *
     * @return self
    
     */
    public function setIssueCount($issueCount)
    {
        if (is_null($issueCount)) {
            throw new \InvalidArgumentException('non-nullable issueCount cannot be null');
        }

        $this->container['issueCount'] = $issueCount;
        return $this;
    }

    /**
     * Gets otd
     *
     * @return \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsPostPurchaseCancellations|null
    
     */
    public function getOtd()
    {
        return $this->container['otd'];
    }

    /**
     * Sets otd
     *
     * @param \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsPostPurchaseCancellations|null $otd otd
     *
     * @return self
    
     */
    public function setOtd($otd)
    {
        if (is_null($otd)) {
            throw new \InvalidArgumentException('non-nullable otd cannot be null');
        }

        $this->container['otd'] = $otd;
        return $this;
    }
}


