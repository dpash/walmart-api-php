<?php

/**
 * GenericAttributeValue
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
 * GenericAttributeValue Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GenericAttributeValue extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GenericAttributeValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'value' => 'string',
        'group' => 'string',
        'source' => 'string',
        'rank' => 'int',
        'isVariant' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'value' => null,
        'group' => null,
        'source' => null,
        'rank' => 'int32',
        'isVariant' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'value' => false,
        'group' => false,
        'source' => false,
        'rank' => false,
        'isVariant' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'value' => 'value',
        'group' => 'group',
        'source' => 'source',
        'rank' => 'rank',
        'isVariant' => 'isVariant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'value' => 'setValue',
        'group' => 'setGroup',
        'source' => 'setSource',
        'rank' => 'setRank',
        'isVariant' => 'setIsVariant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'value' => 'getValue',
        'group' => 'getGroup',
        'source' => 'getSource',
        'rank' => 'getRank',
        'isVariant' => 'getIsVariant'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('rank', $data ?? [], null);
        $this->setIfExists('isVariant', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets value
     *
     * @return string
    
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value value
     *
     * @return self
    
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }

        $this->container['value'] = $value;
        return $this;
    }

    /**
     * Gets group
     *
     * @return string|null
    
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string|null $group group
     *
     * @return self
    
     */
    public function setGroup($group)
    {
        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }

        $this->container['group'] = $group;
        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
    
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source source
     *
     * @return self
    
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }

        $this->container['source'] = $source;
        return $this;
    }

    /**
     * Gets rank
     *
     * @return int|null
    
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int|null $rank rank
     *
     * @return self
    
     */
    public function setRank($rank)
    {
        if (is_null($rank)) {
            throw new \InvalidArgumentException('non-nullable rank cannot be null');
        }

        $this->container['rank'] = $rank;
        return $this;
    }

    /**
     * Gets isVariant
     *
     * @return bool|null
    
     */
    public function getIsVariant()
    {
        return $this->container['isVariant'];
    }

    /**
     * Sets isVariant
     *
     * @param bool|null $isVariant isVariant
     *
     * @return self
    
     */
    public function setIsVariant($isVariant)
    {
        if (is_null($isVariant)) {
            throw new \InvalidArgumentException('non-nullable isVariant cannot be null');
        }

        $this->container['isVariant'] = $isVariant;
        return $this;
    }
}


