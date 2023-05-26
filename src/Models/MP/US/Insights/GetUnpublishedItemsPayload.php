<?php

/**
 * GetUnpublishedItemsPayload
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
 * GetUnpublishedItemsPayload Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetUnpublishedItemsPayload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetUnpublishedItemsPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'gtin' => 'string',
        'marketPrice' => '\Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferPrice',
        'offerStartDate' => 'string',
        'marketTrending' => 'string',
        'lifecycleStatus' => 'string',
        'unpublishReasons' => 'string',
        'conversionRate' => 'int',
        'productName' => 'string',
        'gmvAmount' => '\Walmart\Models\MP\US\Insights\GetUnpublishedItems200ResponsePayloadInnerGmvAmount',
        'itemId' => 'string',
        'customerRating' => 'string',
        'pageViews' => 'int',
        'price' => '\Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferPrice',
        'unpublishedDate' => 'string',
        'brand' => 'string',
        'sku' => 'string',
        'productType' => 'string',
        'offerEndDate' => 'string',
        'publishStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'gtin' => null,
        'marketPrice' => null,
        'offerStartDate' => null,
        'marketTrending' => null,
        'lifecycleStatus' => null,
        'unpublishReasons' => null,
        'conversionRate' => 'int32',
        'productName' => null,
        'gmvAmount' => null,
        'itemId' => null,
        'customerRating' => null,
        'pageViews' => 'int32',
        'price' => null,
        'unpublishedDate' => null,
        'brand' => null,
        'sku' => null,
        'productType' => null,
        'offerEndDate' => null,
        'publishStatus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'gtin' => false,
        'marketPrice' => false,
        'offerStartDate' => false,
        'marketTrending' => false,
        'lifecycleStatus' => false,
        'unpublishReasons' => false,
        'conversionRate' => false,
        'productName' => false,
        'gmvAmount' => false,
        'itemId' => false,
        'customerRating' => false,
        'pageViews' => false,
        'price' => false,
        'unpublishedDate' => false,
        'brand' => false,
        'sku' => false,
        'productType' => false,
        'offerEndDate' => false,
        'publishStatus' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'gtin' => 'gtin',
        'marketPrice' => 'marketPrice',
        'offerStartDate' => 'offerStartDate',
        'marketTrending' => 'marketTrending',
        'lifecycleStatus' => 'lifecycleStatus',
        'unpublishReasons' => 'unpublishReasons',
        'conversionRate' => 'conversionRate',
        'productName' => 'productName',
        'gmvAmount' => 'gmvAmount',
        'itemId' => 'itemId',
        'customerRating' => 'customerRating',
        'pageViews' => 'pageViews',
        'price' => 'price',
        'unpublishedDate' => 'unpublishedDate',
        'brand' => 'brand',
        'sku' => 'sku',
        'productType' => 'productType',
        'offerEndDate' => 'offerEndDate',
        'publishStatus' => 'publishStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'gtin' => 'setGtin',
        'marketPrice' => 'setMarketPrice',
        'offerStartDate' => 'setOfferStartDate',
        'marketTrending' => 'setMarketTrending',
        'lifecycleStatus' => 'setLifecycleStatus',
        'unpublishReasons' => 'setUnpublishReasons',
        'conversionRate' => 'setConversionRate',
        'productName' => 'setProductName',
        'gmvAmount' => 'setGmvAmount',
        'itemId' => 'setItemId',
        'customerRating' => 'setCustomerRating',
        'pageViews' => 'setPageViews',
        'price' => 'setPrice',
        'unpublishedDate' => 'setUnpublishedDate',
        'brand' => 'setBrand',
        'sku' => 'setSku',
        'productType' => 'setProductType',
        'offerEndDate' => 'setOfferEndDate',
        'publishStatus' => 'setPublishStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'gtin' => 'getGtin',
        'marketPrice' => 'getMarketPrice',
        'offerStartDate' => 'getOfferStartDate',
        'marketTrending' => 'getMarketTrending',
        'lifecycleStatus' => 'getLifecycleStatus',
        'unpublishReasons' => 'getUnpublishReasons',
        'conversionRate' => 'getConversionRate',
        'productName' => 'getProductName',
        'gmvAmount' => 'getGmvAmount',
        'itemId' => 'getItemId',
        'customerRating' => 'getCustomerRating',
        'pageViews' => 'getPageViews',
        'price' => 'getPrice',
        'unpublishedDate' => 'getUnpublishedDate',
        'brand' => 'getBrand',
        'sku' => 'getSku',
        'productType' => 'getProductType',
        'offerEndDate' => 'getOfferEndDate',
        'publishStatus' => 'getPublishStatus'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('gtin', $data ?? [], null);
        $this->setIfExists('marketPrice', $data ?? [], null);
        $this->setIfExists('offerStartDate', $data ?? [], null);
        $this->setIfExists('marketTrending', $data ?? [], null);
        $this->setIfExists('lifecycleStatus', $data ?? [], null);
        $this->setIfExists('unpublishReasons', $data ?? [], null);
        $this->setIfExists('conversionRate', $data ?? [], null);
        $this->setIfExists('productName', $data ?? [], null);
        $this->setIfExists('gmvAmount', $data ?? [], null);
        $this->setIfExists('itemId', $data ?? [], null);
        $this->setIfExists('customerRating', $data ?? [], null);
        $this->setIfExists('pageViews', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('unpublishedDate', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('productType', $data ?? [], null);
        $this->setIfExists('offerEndDate', $data ?? [], null);
        $this->setIfExists('publishStatus', $data ?? [], null);
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
     * Gets gtin
     *
     * @return string|null
    
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string|null $gtin The GTIN-compatible Product ID (i.e. UPC or EAN)
     *
     * @return self
    
     */
    public function setGtin($gtin)
    {
        if (is_null($gtin)) {
            throw new \InvalidArgumentException('non-nullable gtin cannot be null');
        }

        $this->container['gtin'] = $gtin;
        return $this;
    }

    /**
     * Gets marketPrice
     *
     * @return \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferPrice|null
    
     */
    public function getMarketPrice()
    {
        return $this->container['marketPrice'];
    }

    /**
     * Sets marketPrice
     *
     * @param \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferPrice|null $marketPrice marketPrice
     *
     * @return self
    
     */
    public function setMarketPrice($marketPrice)
    {
        if (is_null($marketPrice)) {
            throw new \InvalidArgumentException('non-nullable marketPrice cannot be null');
        }

        $this->container['marketPrice'] = $marketPrice;
        return $this;
    }

    /**
     * Gets offerStartDate
     *
     * @return string|null
    
     */
    public function getOfferStartDate()
    {
        return $this->container['offerStartDate'];
    }

    /**
     * Sets offerStartDate
     *
     * @param string|null $offerStartDate The Date when item becomes available to sell in Walmart
     *
     * @return self
    
     */
    public function setOfferStartDate($offerStartDate)
    {
        if (is_null($offerStartDate)) {
            throw new \InvalidArgumentException('non-nullable offerStartDate cannot be null');
        }

        $this->container['offerStartDate'] = $offerStartDate;
        return $this;
    }

    /**
     * Gets marketTrending
     *
     * @return string|null
    
     */
    public function getMarketTrending()
    {
        return $this->container['marketTrending'];
    }

    /**
     * Sets marketTrending
     *
     * @param string|null $marketTrending If item is trending in walmart
     *
     * @return self
    
     */
    public function setMarketTrending($marketTrending)
    {
        if (is_null($marketTrending)) {
            throw new \InvalidArgumentException('non-nullable marketTrending cannot be null');
        }

        $this->container['marketTrending'] = $marketTrending;
        return $this;
    }

    /**
     * Gets lifecycleStatus
     *
     * @return string|null
    
     */
    public function getLifecycleStatus()
    {
        return $this->container['lifecycleStatus'];
    }

    /**
     * Sets lifecycleStatus
     *
     * @param string|null $lifecycleStatus The lifecycle status of an item describes where the item listing is in the overall lifecycle
     *
     * @return self
    
     */
    public function setLifecycleStatus($lifecycleStatus)
    {
        if (is_null($lifecycleStatus)) {
            throw new \InvalidArgumentException('non-nullable lifecycleStatus cannot be null');
        }

        $this->container['lifecycleStatus'] = $lifecycleStatus;
        return $this;
    }

    /**
     * Gets unpublishReasons
     *
     * @return string|null
    
     */
    public function getUnpublishReasons()
    {
        return $this->container['unpublishReasons'];
    }

    /**
     * Sets unpublishReasons
     *
     * @param string|null $unpublishReasons It outlines the reason for an item when unpublished
     *
     * @return self
    
     */
    public function setUnpublishReasons($unpublishReasons)
    {
        if (is_null($unpublishReasons)) {
            throw new \InvalidArgumentException('non-nullable unpublishReasons cannot be null');
        }

        $this->container['unpublishReasons'] = $unpublishReasons;
        return $this;
    }

    /**
     * Gets conversionRate
     *
     * @return int|null
    
     */
    public function getConversionRate()
    {
        return $this->container['conversionRate'];
    }

    /**
     * Sets conversionRate
     *
     * @param int|null $conversionRate Percentage of number of items that are converted into sales
     *
     * @return self
    
     */
    public function setConversionRate($conversionRate)
    {
        if (is_null($conversionRate)) {
            throw new \InvalidArgumentException('non-nullable conversionRate cannot be null');
        }

        $this->container['conversionRate'] = $conversionRate;
        return $this;
    }

    /**
     * Gets productName
     *
     * @return string|null
    
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string|null $productName A seller-specified, alphanumeric string uniquely identifying the product name
     *
     * @return self
    
     */
    public function setProductName($productName)
    {
        if (is_null($productName)) {
            throw new \InvalidArgumentException('non-nullable productName cannot be null');
        }

        $this->container['productName'] = $productName;
        return $this;
    }

    /**
     * Gets gmvAmount
     *
     * @return \Walmart\Models\MP\US\Insights\GetUnpublishedItems200ResponsePayloadInnerGmvAmount|null
    
     */
    public function getGmvAmount()
    {
        return $this->container['gmvAmount'];
    }

    /**
     * Sets gmvAmount
     *
     * @param \Walmart\Models\MP\US\Insights\GetUnpublishedItems200ResponsePayloadInnerGmvAmount|null $gmvAmount gmvAmount
     *
     * @return self
    
     */
    public function setGmvAmount($gmvAmount)
    {
        if (is_null($gmvAmount)) {
            throw new \InvalidArgumentException('non-nullable gmvAmount cannot be null');
        }

        $this->container['gmvAmount'] = $gmvAmount;
        return $this;
    }

    /**
     * Gets itemId
     *
     * @return string|null
    
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param string|null $itemId Specifies the item identifier generated by Walmart
     *
     * @return self
    
     */
    public function setItemId($itemId)
    {
        if (is_null($itemId)) {
            throw new \InvalidArgumentException('non-nullable itemId cannot be null');
        }

        $this->container['itemId'] = $itemId;
        return $this;
    }

    /**
     * Gets customerRating
     *
     * @return string|null
    
     */
    public function getCustomerRating()
    {
        return $this->container['customerRating'];
    }

    /**
     * Sets customerRating
     *
     * @param string|null $customerRating An average rating number for the item from customers
     *
     * @return self
    
     */
    public function setCustomerRating($customerRating)
    {
        if (is_null($customerRating)) {
            throw new \InvalidArgumentException('non-nullable customerRating cannot be null');
        }

        $this->container['customerRating'] = $customerRating;
        return $this;
    }

    /**
     * Gets pageViews
     *
     * @return int|null
    
     */
    public function getPageViews()
    {
        return $this->container['pageViews'];
    }

    /**
     * Sets pageViews
     *
     * @param int|null $pageViews number of times this item is viewed by customers
     *
     * @return self
    
     */
    public function setPageViews($pageViews)
    {
        if (is_null($pageViews)) {
            throw new \InvalidArgumentException('non-nullable pageViews cannot be null');
        }

        $this->container['pageViews'] = $pageViews;
        return $this;
    }

    /**
     * Gets price
     *
     * @return \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferPrice|null
    
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsOfferPrice|null $price price
     *
     * @return self
    
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        $this->container['price'] = $price;
        return $this;
    }

    /**
     * Gets unpublishedDate
     *
     * @return string|null
    
     */
    public function getUnpublishedDate()
    {
        return $this->container['unpublishedDate'];
    }

    /**
     * Sets unpublishedDate
     *
     * @param string|null $unpublishedDate The Date item becomes to Unpublished
     *
     * @return self
    
     */
    public function setUnpublishedDate($unpublishedDate)
    {
        if (is_null($unpublishedDate)) {
            throw new \InvalidArgumentException('non-nullable unpublishedDate cannot be null');
        }

        $this->container['unpublishedDate'] = $unpublishedDate;
        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
    
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand Specifies the item brand
     *
     * @return self
    
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }

        $this->container['brand'] = $brand;
        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku String of letters and/or numbers a partner uses to identify the item
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }

    /**
     * Gets productType
     *
     * @return string|null
    
     */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
     * Sets productType
     *
     * @param string|null $productType A seller-specified, alphanumeric string uniquely identifying the Product Type
     *
     * @return self
    
     */
    public function setProductType($productType)
    {
        if (is_null($productType)) {
            throw new \InvalidArgumentException('non-nullable productType cannot be null');
        }

        $this->container['productType'] = $productType;
        return $this;
    }

    /**
     * Gets offerEndDate
     *
     * @return string|null
    
     */
    public function getOfferEndDate()
    {
        return $this->container['offerEndDate'];
    }

    /**
     * Sets offerEndDate
     *
     * @param string|null $offerEndDate The Date when item becomes unavailable to sell in Walmart
     *
     * @return self
    
     */
    public function setOfferEndDate($offerEndDate)
    {
        if (is_null($offerEndDate)) {
            throw new \InvalidArgumentException('non-nullable offerEndDate cannot be null');
        }

        $this->container['offerEndDate'] = $offerEndDate;
        return $this;
    }

    /**
     * Gets publishStatus
     *
     * @return string|null
    
     */
    public function getPublishStatus()
    {
        return $this->container['publishStatus'];
    }

    /**
     * Sets publishStatus
     *
     * @param string|null $publishStatus The status of an item when the item is in the submission process
     *
     * @return self
    
     */
    public function setPublishStatus($publishStatus)
    {
        if (is_null($publishStatus)) {
            throw new \InvalidArgumentException('non-nullable publishStatus cannot be null');
        }

        $this->container['publishStatus'] = $publishStatus;
        return $this;
    }
}


