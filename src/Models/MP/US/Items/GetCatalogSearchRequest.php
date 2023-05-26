<?php

/**
 * GetCatalogSearchRequest
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
 * GetCatalogSearchRequest Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetCatalogSearchRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getCatalogSearch_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'query' => '\Walmart\Models\MP\US\Items\GetCatalogSearchRequestQuery',
        'filters' => '\Walmart\Models\MP\US\Items\GetCatalogSearchRequestFiltersInner[]',
        'sort' => '\Walmart\Models\MP\US\Items\GetCatalogSearchRequestSort'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'query' => null,
        'filters' => null,
        'sort' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'query' => false,
        'filters' => false,
        'sort' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'query' => 'query',
        'filters' => 'filters',
        'sort' => 'sort'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'query' => 'setQuery',
        'filters' => 'setFilters',
        'sort' => 'setSort'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'query' => 'getQuery',
        'filters' => 'getFilters',
        'sort' => 'getSort'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('query', $data ?? [], null);
        $this->setIfExists('filters', $data ?? [], null);
        $this->setIfExists('sort', $data ?? [], null);
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
     * Gets query
     *
     * @return \Walmart\Models\MP\US\Items\GetCatalogSearchRequestQuery|null
    
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param \Walmart\Models\MP\US\Items\GetCatalogSearchRequestQuery|null $query query
     *
     * @return self
    
     */
    public function setQuery($query)
    {
        if (is_null($query)) {
            throw new \InvalidArgumentException('non-nullable query cannot be null');
        }

        $this->container['query'] = $query;
        return $this;
    }

    /**
     * Gets filters
     *
     * @return \Walmart\Models\MP\US\Items\GetCatalogSearchRequestFiltersInner[]|null
    
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Walmart\Models\MP\US\Items\GetCatalogSearchRequestFiltersInner[]|null $filters filters
     *
     * @return self
    
     */
    public function setFilters($filters)
    {
        if (is_null($filters)) {
            throw new \InvalidArgumentException('non-nullable filters cannot be null');
        }

        $this->container['filters'] = $filters;
        return $this;
    }

    /**
     * Gets sort
     *
     * @return \Walmart\Models\MP\US\Items\GetCatalogSearchRequestSort|null
    
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param \Walmart\Models\MP\US\Items\GetCatalogSearchRequestSort|null $sort sort
     *
     * @return self
    
     */
    public function setSort($sort)
    {
        if (is_null($sort)) {
            throw new \InvalidArgumentException('non-nullable sort cannot be null');
        }

        $this->container['sort'] = $sort;
        return $this;
    }
}


