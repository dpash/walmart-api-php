<?php

/**
 * InboundPreviewRequestHeaderHeaderAttributes
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
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Model\BaseModel;

/**
 * InboundPreviewRequestHeaderHeaderAttributes Class Doc Comment
 *
 * @category Class

 * @description Multi Tenant header attributes

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class InboundPreviewRequestHeaderHeaderAttributes extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'inboundPreview_request_header_headerAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'buId' => 'string',
        'martId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'buId' => null,
        'martId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'buId' => false,
        'martId' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'buId' => 'buId',
        'martId' => 'martId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'buId' => 'setBuId',
        'martId' => 'setMartId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'buId' => 'getBuId',
        'martId' => 'getMartId'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('buId', $data ?? [], null);
        $this->setIfExists('martId', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['buId'] === null) {
            $invalidProperties[] = "'buId' can't be null";
        }
        if ($this->container['martId'] === null) {
            $invalidProperties[] = "'martId' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets buId
     *
     * @return string
    
     */
    public function getBuId()
    {
        return $this->container['buId'];
    }

    /**
     * Sets buId
     *
     * @param string $buId Business unit identifier and must be 0 for US market.
     *
     * @return self
    
     */
    public function setBuId($buId)
    {
        if (is_null($buId)) {
            throw new \InvalidArgumentException('non-nullable buId cannot be null');
        }

        $this->container['buId'] = $buId;
        return $this;
    }

    /**
     * Gets martId
     *
     * @return string
    
     */
    public function getMartId()
    {
        return $this->container['martId'];
    }

    /**
     * Sets martId
     *
     * @param string $martId Market identifier and must be 0 for US market.
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
}


