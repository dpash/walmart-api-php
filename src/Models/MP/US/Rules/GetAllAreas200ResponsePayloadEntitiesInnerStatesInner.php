<?php

/**
 * GetAllAreas200ResponsePayloadEntitiesInnerStatesInner
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
 * Rules Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Rules;

use Walmart\Model\BaseModel;

/**
 * GetAllAreas200ResponsePayloadEntitiesInnerStatesInner Class Doc Comment
 *
 * @category Class

 * @description states.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetAllAreas200ResponsePayloadEntitiesInnerStatesInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getAllAreas_200_response_payload_entities_inner_states_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'stateSubregions' => '\Walmart\Models\MP\US\Rules\GetAllAreas200ResponsePayloadEntitiesInnerStatesInnerStateSubregionsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'stateSubregions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'stateSubregions' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'stateSubregions' => 'stateSubregions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'stateSubregions' => 'setStateSubregions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'stateSubregions' => 'getStateSubregions'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('stateSubregions', $data ?? [], null);
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
     * Gets stateSubregions
     *
     * @return \Walmart\Models\MP\US\Rules\GetAllAreas200ResponsePayloadEntitiesInnerStatesInnerStateSubregionsInner[]|null
    
     */
    public function getStateSubregions()
    {
        return $this->container['stateSubregions'];
    }

    /**
     * Sets stateSubregions
     *
     * @param \Walmart\Models\MP\US\Rules\GetAllAreas200ResponsePayloadEntitiesInnerStatesInnerStateSubregionsInner[]|null $stateSubregions statesubregions
     *
     * @return self
    
     */
    public function setStateSubregions($stateSubregions)
    {
        if (is_null($stateSubregions)) {
            throw new \InvalidArgumentException('non-nullable stateSubregions cannot be null');
        }

        $this->container['stateSubregions'] = $stateSubregions;
        return $this;
    }
}


