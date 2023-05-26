<?php

/**
 * GetReturns200ResponseReturnOrdersInnerReturnLineGroupsInnerLabelsInner
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
 * GetReturns200ResponseReturnOrdersInnerReturnLineGroupsInnerLabelsInner Class Doc Comment
 *
 * @category Class

 * @description Array of labels

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetReturns200ResponseReturnOrdersInnerReturnLineGroupsInnerLabelsInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getReturns_200_response_returnOrders_inner_returnLineGroups_inner_labels_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'labelImageURL' => 'string',
        'carrierInfoList' => '\Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnLineGroupsInnerLabelsInnerCarrierInfoListInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'labelImageURL' => null,
        'carrierInfoList' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'labelImageURL' => false,
        'carrierInfoList' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'labelImageURL' => 'labelImageURL',
        'carrierInfoList' => 'carrierInfoList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'labelImageURL' => 'setLabelImageURL',
        'carrierInfoList' => 'setCarrierInfoList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'labelImageURL' => 'getLabelImageURL',
        'carrierInfoList' => 'getCarrierInfoList'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('labelImageURL', $data ?? [], null);
        $this->setIfExists('carrierInfoList', $data ?? [], null);
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
     * Gets labelImageURL
     *
     * @return string|null
    
     */
    public function getLabelImageURL()
    {
        return $this->container['labelImageURL'];
    }

    /**
     * Sets labelImageURL
     *
     * @param string|null $labelImageURL Url to get the return label
     *
     * @return self
    
     */
    public function setLabelImageURL($labelImageURL)
    {
        if (is_null($labelImageURL)) {
            throw new \InvalidArgumentException('non-nullable labelImageURL cannot be null');
        }

        $this->container['labelImageURL'] = $labelImageURL;
        return $this;
    }

    /**
     * Gets carrierInfoList
     *
     * @return \Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnLineGroupsInnerLabelsInnerCarrierInfoListInner[]|null
    
     */
    public function getCarrierInfoList()
    {
        return $this->container['carrierInfoList'];
    }

    /**
     * Sets carrierInfoList
     *
     * @param \Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnLineGroupsInnerLabelsInnerCarrierInfoListInner[]|null $carrierInfoList Carrier information for the return
     *
     * @return self
    
     */
    public function setCarrierInfoList($carrierInfoList)
    {
        if (is_null($carrierInfoList)) {
            throw new \InvalidArgumentException('non-nullable carrierInfoList cannot be null');
        }

        $this->container['carrierInfoList'] = $carrierInfoList;
        return $this;
    }
}


