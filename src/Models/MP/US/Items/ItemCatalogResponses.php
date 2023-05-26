<?php

/**
 * ItemCatalogResponses
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
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Items;

use Walmart\Model\BaseModel;

/**
 * ItemCatalogResponses Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ItemCatalogResponses extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ItemCatalogResponses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'status' => 'string',
        'payload' => '\Walmart\Models\MP\US\Items\GetCatalogSearch200ResponsePayloadInner[]',
        'totalItems' => 'int',
        'limit' => 'int',
        'nextCursor' => 'string',
        'statuss' => 'string'
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
        'payload' => null,
        'totalItems' => 'int64',
        'limit' => 'int32',
        'nextCursor' => null,
        'statuss' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'payload' => false,
        'totalItems' => false,
        'limit' => false,
        'nextCursor' => false,
        'statuss' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'status' => 'status',
        'payload' => 'payload',
        'totalItems' => 'totalItems',
        'limit' => 'limit',
        'nextCursor' => 'nextCursor',
        'statuss' => 'statuss'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'status' => 'setStatus',
        'payload' => 'setPayload',
        'totalItems' => 'setTotalItems',
        'limit' => 'setLimit',
        'nextCursor' => 'setNextCursor',
        'statuss' => 'setStatuss'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'status' => 'getStatus',
        'payload' => 'getPayload',
        'totalItems' => 'getTotalItems',
        'limit' => 'getLimit',
        'nextCursor' => 'getNextCursor',
        'statuss' => 'getStatuss'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('payload', $data ?? [], null);
        $this->setIfExists('totalItems', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('nextCursor', $data ?? [], null);
        $this->setIfExists('statuss', $data ?? [], null);
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
     * Gets status
     *
     * @return string|null
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Response Status
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets payload
     *
     * @return \Walmart\Models\MP\US\Items\GetCatalogSearch200ResponsePayloadInner[]|null
    
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param \Walmart\Models\MP\US\Items\GetCatalogSearch200ResponsePayloadInner[]|null $payload Items included in the response list
     *
     * @return self
    
     */
    public function setPayload($payload)
    {
        if (is_null($payload)) {
            throw new \InvalidArgumentException('non-nullable payload cannot be null');
        }

        $this->container['payload'] = $payload;
        return $this;
    }

    /**
     * Gets totalItems
     *
     * @return int|null
    
     */
    public function getTotalItems()
    {
        return $this->container['totalItems'];
    }

    /**
     * Sets totalItems
     *
     * @param int|null $totalItems Total items for the query
     *
     * @return self
    
     */
    public function setTotalItems($totalItems)
    {
        if (is_null($totalItems)) {
            throw new \InvalidArgumentException('non-nullable totalItems cannot be null');
        }

        $this->container['totalItems'] = $totalItems;
        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
    
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit Number of items shown in this page
     *
     * @return self
    
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }

        $this->container['limit'] = $limit;
        return $this;
    }

    /**
     * Gets nextCursor
     *
     * @return string|null
    
     */
    public function getNextCursor()
    {
        return $this->container['nextCursor'];
    }

    /**
     * Sets nextCursor
     *
     * @param string|null $nextCursor Used for pagination to fetch the next set of items
     *
     * @return self
    
     */
    public function setNextCursor($nextCursor)
    {
        if (is_null($nextCursor)) {
            throw new \InvalidArgumentException('non-nullable nextCursor cannot be null');
        }

        $this->container['nextCursor'] = $nextCursor;
        return $this;
    }

    /**
     * Gets statuss
     *
     * @return string|null
    
     */
    public function getStatuss()
    {
        return $this->container['statuss'];
    }

    /**
     * Sets statuss
     *
     * @param string|null $statuss statuss
     *
     * @return self
    
     */
    public function setStatuss($statuss)
    {
        if (is_null($statuss)) {
            throw new \InvalidArgumentException('non-nullable statuss cannot be null');
        }

        $this->container['statuss'] = $statuss;
        return $this;
    }
}


