<?php

/**
 * CapProgramResponse
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
 * Price Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Prices;

use Walmart\Model\BaseModel;

/**
 * CapProgramResponse Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CapProgramResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CapProgramResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'martId' => 'string',
        'statusInfo' => '\Walmart\Models\MP\US\Prices\OptCapProgramInPriceRequest'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'martId' => null,
        'statusInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'martId' => false,
        'statusInfo' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'martId' => 'martId',
        'statusInfo' => 'statusInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'martId' => 'setMartId',
        'statusInfo' => 'setStatusInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'martId' => 'getMartId',
        'statusInfo' => 'getStatusInfo'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('martId', $data ?? [], null);
        $this->setIfExists('statusInfo', $data ?? [], null);
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
     * Gets martId
     *
     * @return string|null
    
     */
    public function getMartId()
    {
        return $this->container['martId'];
    }

    /**
     * Sets martId
     *
     * @param string|null $martId A unique ID that a user or seller uses for a marketplace.
     *
     * @return self
    
     */
    public function setMartId($martId)
    {
        if (is_null($martId)) {
            throw new \InvalidArgumentException('non-nullable martId cannot be null');
        }

        $this->container['martId'] = $martId;
        return $this;
    }

    /**
     * Gets statusInfo
     *
     * @return \Walmart\Models\MP\US\Prices\OptCapProgramInPriceRequest|null
    
     */
    public function getStatusInfo()
    {
        return $this->container['statusInfo'];
    }

    /**
     * Sets statusInfo
     *
     * @param \Walmart\Models\MP\US\Prices\OptCapProgramInPriceRequest|null $statusInfo statusInfo
     *
     * @return self
    
     */
    public function setStatusInfo($statusInfo)
    {
        if (is_null($statusInfo)) {
            throw new \InvalidArgumentException('non-nullable statusInfo cannot be null');
        }

        $this->container['statusInfo'] = $statusInfo;
        return $this;
    }
}


