<?php

/**
 * ShippingSpeed
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
 * ShippingSpeed Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingSpeed extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShippingSpeed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shippingType' => 'string',
        'issueTitle' => 'string',
        'issueDesc' => 'string',
        'score' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shippingType' => null,
        'issueTitle' => null,
        'issueDesc' => null,
        'score' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shippingType' => false,
        'issueTitle' => false,
        'issueDesc' => false,
        'score' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shippingType' => 'shippingType',
        'issueTitle' => 'issueTitle',
        'issueDesc' => 'issueDesc',
        'score' => 'score'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shippingType' => 'setShippingType',
        'issueTitle' => 'setIssueTitle',
        'issueDesc' => 'setIssueDesc',
        'score' => 'setScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shippingType' => 'getShippingType',
        'issueTitle' => 'getIssueTitle',
        'issueDesc' => 'getIssueDesc',
        'score' => 'getScore'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shippingType', $data ?? [], null);
        $this->setIfExists('issueTitle', $data ?? [], null);
        $this->setIfExists('issueDesc', $data ?? [], null);
        $this->setIfExists('score', $data ?? [], null);
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
     * Gets shippingType
     *
     * @return string|null
    
     */
    public function getShippingType()
    {
        return $this->container['shippingType'];
    }

    /**
     * Sets shippingType
     *
     * @param string|null $shippingType shippingType
     *
     * @return self
    
     */
    public function setShippingType($shippingType)
    {
        if (is_null($shippingType)) {
            throw new \InvalidArgumentException('non-nullable shippingType cannot be null');
        }

        $this->container['shippingType'] = $shippingType;
        return $this;
    }

    /**
     * Gets issueTitle
     *
     * @return string|null
    
     */
    public function getIssueTitle()
    {
        return $this->container['issueTitle'];
    }

    /**
     * Sets issueTitle
     *
     * @param string|null $issueTitle issueTitle
     *
     * @return self
    
     */
    public function setIssueTitle($issueTitle)
    {
        if (is_null($issueTitle)) {
            throw new \InvalidArgumentException('non-nullable issueTitle cannot be null');
        }

        $this->container['issueTitle'] = $issueTitle;
        return $this;
    }

    /**
     * Gets issueDesc
     *
     * @return string|null
    
     */
    public function getIssueDesc()
    {
        return $this->container['issueDesc'];
    }

    /**
     * Sets issueDesc
     *
     * @param string|null $issueDesc issueDesc
     *
     * @return self
    
     */
    public function setIssueDesc($issueDesc)
    {
        if (is_null($issueDesc)) {
            throw new \InvalidArgumentException('non-nullable issueDesc cannot be null');
        }

        $this->container['issueDesc'] = $issueDesc;
        return $this;
    }

    /**
     * Gets score
     *
     * @return int|null
    
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param int|null $score score
     *
     * @return self
    
     */
    public function setScore($score)
    {
        if (is_null($score)) {
            throw new \InvalidArgumentException('non-nullable score cannot be null');
        }

        $this->container['score'] = $score;
        return $this;
    }
}


