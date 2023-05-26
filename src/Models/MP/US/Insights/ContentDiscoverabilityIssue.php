<?php

/**
 * ContentDiscoverabilityIssue
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
 * ContentDiscoverabilityIssue Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ContentDiscoverabilityIssue extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ContentDiscoverabilityIssue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'score' => 'float',
        'isEditable' => 'bool',
        'attributeValue' => 'string',
        'isSpecAttribute' => 'bool',
        'attributeName' => 'string',
        'issueCount' => 'int',
        'issues' => '\Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsContentAndDiscoverabilityIssuesInnerIssuesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'score' => 'double',
        'isEditable' => null,
        'attributeValue' => null,
        'isSpecAttribute' => null,
        'attributeName' => null,
        'issueCount' => 'int32',
        'issues' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'score' => false,
        'isEditable' => false,
        'attributeValue' => false,
        'isSpecAttribute' => false,
        'attributeName' => false,
        'issueCount' => false,
        'issues' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'score' => 'score',
        'isEditable' => 'isEditable',
        'attributeValue' => 'attributeValue',
        'isSpecAttribute' => 'isSpecAttribute',
        'attributeName' => 'attributeName',
        'issueCount' => 'issueCount',
        'issues' => 'issues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'score' => 'setScore',
        'isEditable' => 'setIsEditable',
        'attributeValue' => 'setAttributeValue',
        'isSpecAttribute' => 'setIsSpecAttribute',
        'attributeName' => 'setAttributeName',
        'issueCount' => 'setIssueCount',
        'issues' => 'setIssues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'score' => 'getScore',
        'isEditable' => 'getIsEditable',
        'attributeValue' => 'getAttributeValue',
        'isSpecAttribute' => 'getIsSpecAttribute',
        'attributeName' => 'getAttributeName',
        'issueCount' => 'getIssueCount',
        'issues' => 'getIssues'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('score', $data ?? [], null);
        $this->setIfExists('isEditable', $data ?? [], null);
        $this->setIfExists('attributeValue', $data ?? [], null);
        $this->setIfExists('isSpecAttribute', $data ?? [], null);
        $this->setIfExists('attributeName', $data ?? [], null);
        $this->setIfExists('issueCount', $data ?? [], null);
        $this->setIfExists('issues', $data ?? [], null);
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
     * Gets score
     *
     * @return float|null
    
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param float|null $score score
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

    /**
     * Gets isEditable
     *
     * @return bool|null
    
     */
    public function getIsEditable()
    {
        return $this->container['isEditable'];
    }

    /**
     * Sets isEditable
     *
     * @param bool|null $isEditable isEditable
     *
     * @return self
    
     */
    public function setIsEditable($isEditable)
    {
        if (is_null($isEditable)) {
            throw new \InvalidArgumentException('non-nullable isEditable cannot be null');
        }

        $this->container['isEditable'] = $isEditable;
        return $this;
    }

    /**
     * Gets attributeValue
     *
     * @return string|null
    
     */
    public function getAttributeValue()
    {
        return $this->container['attributeValue'];
    }

    /**
     * Sets attributeValue
     *
     * @param string|null $attributeValue attributeValue
     *
     * @return self
    
     */
    public function setAttributeValue($attributeValue)
    {
        if (is_null($attributeValue)) {
            throw new \InvalidArgumentException('non-nullable attributeValue cannot be null');
        }

        $this->container['attributeValue'] = $attributeValue;
        return $this;
    }

    /**
     * Gets isSpecAttribute
     *
     * @return bool|null
    
     */
    public function getIsSpecAttribute()
    {
        return $this->container['isSpecAttribute'];
    }

    /**
     * Sets isSpecAttribute
     *
     * @param bool|null $isSpecAttribute isSpecAttribute
     *
     * @return self
    
     */
    public function setIsSpecAttribute($isSpecAttribute)
    {
        if (is_null($isSpecAttribute)) {
            throw new \InvalidArgumentException('non-nullable isSpecAttribute cannot be null');
        }

        $this->container['isSpecAttribute'] = $isSpecAttribute;
        return $this;
    }

    /**
     * Gets attributeName
     *
     * @return string|null
    
     */
    public function getAttributeName()
    {
        return $this->container['attributeName'];
    }

    /**
     * Sets attributeName
     *
     * @param string|null $attributeName attributeName
     *
     * @return self
    
     */
    public function setAttributeName($attributeName)
    {
        if (is_null($attributeName)) {
            throw new \InvalidArgumentException('non-nullable attributeName cannot be null');
        }

        $this->container['attributeName'] = $attributeName;
        return $this;
    }

    /**
     * Gets issueCount
     *
     * @return int|null
    
     */
    public function getIssueCount()
    {
        return $this->container['issueCount'];
    }

    /**
     * Sets issueCount
     *
     * @param int|null $issueCount issueCount
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
     * Gets issues
     *
     * @return \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsContentAndDiscoverabilityIssuesInnerIssuesInner[]|null
    
     */
    public function getIssues()
    {
        return $this->container['issues'];
    }

    /**
     * Sets issues
     *
     * @param \Walmart\Models\MP\US\Insights\ItemsDetailsForListing200ResponsePayloadInnerScoreDetailsContentAndDiscoverabilityIssuesInnerIssuesInner[]|null $issues issues
     *
     * @return self
    
     */
    public function setIssues($issues)
    {
        if (is_null($issues)) {
            throw new \InvalidArgumentException('non-nullable issues cannot be null');
        }

        $this->container['issues'] = $issues;
        return $this;
    }
}


