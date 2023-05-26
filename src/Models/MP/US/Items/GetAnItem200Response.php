<?php

/**
 * GetAnItem200Response
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
use Walmart\Traits\HasResponseHeaders;

/**
 * GetAnItem200Response Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetAnItem200Response extends BaseModel
{
    use HasResponseHeaders;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getAnItem_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'responseRecord' => '\Walmart\Models\MP\US\Items\GetAnItem200ResponseResponseRecord'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'responseRecord' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'responseRecord' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'responseRecord' => 'responseRecord'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'responseRecord' => 'setResponseRecord'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'responseRecord' => 'getResponseRecord'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('responseRecord', $data ?? [], null);
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
     * Gets responseRecord
     *
     * @return \Walmart\Models\MP\US\Items\GetAnItem200ResponseResponseRecord|null
    
     */
    public function getResponseRecord()
    {
        return $this->container['responseRecord'];
    }

    /**
     * Sets responseRecord
     *
     * @param \Walmart\Models\MP\US\Items\GetAnItem200ResponseResponseRecord|null $responseRecord responseRecord
     *
     * @return self
    
     */
    public function setResponseRecord($responseRecord)
    {
        if (is_null($responseRecord)) {
            throw new \InvalidArgumentException('non-nullable responseRecord cannot be null');
        }

        $this->container['responseRecord'] = $responseRecord;
        return $this;
    }
}


