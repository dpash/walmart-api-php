<?php

/**
 * GetFeedItemStatus200ResponseIngestionErrors
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
 * Feed Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Feeds;

use Walmart\Model\BaseModel;

/**
 * GetFeedItemStatus200ResponseIngestionErrors Class Doc Comment
 *
 * @category Class

 * @description List of errors for an item

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetFeedItemStatus200ResponseIngestionErrors extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getFeedItemStatus_200_response_ingestionErrors';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'ingestionError' => '\Walmart\Models\MP\US\Feeds\GetFeedItemStatus200ResponseIngestionErrorsIngestionErrorInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ingestionError' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ingestionError' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'ingestionError' => 'ingestionError'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'ingestionError' => 'setIngestionError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'ingestionError' => 'getIngestionError'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('ingestionError', $data ?? [], null);
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
     * Gets ingestionError
     *
     * @return \Walmart\Models\MP\US\Feeds\GetFeedItemStatus200ResponseIngestionErrorsIngestionErrorInner[]|null
    
     */
    public function getIngestionError()
    {
        return $this->container['ingestionError'];
    }

    /**
     * Sets ingestionError
     *
     * @param \Walmart\Models\MP\US\Feeds\GetFeedItemStatus200ResponseIngestionErrorsIngestionErrorInner[]|null $ingestionError ingestionError
     *
     * @return self
    
     */
    public function setIngestionError($ingestionError)
    {
        if (is_null($ingestionError)) {
            throw new \InvalidArgumentException('non-nullable ingestionError cannot be null');
        }

        $this->container['ingestionError'] = $ingestionError;
        return $this;
    }
}


