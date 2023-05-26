<?php

/**
 * CarrierWeekendCalendar
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
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;

use Walmart\Model\BaseModel;

/**
 * CarrierWeekendCalendar Class Doc Comment
 *
 * @category Class

 * @description Operating Schedule for the carrier

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CarrierWeekendCalendar extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CarrierWeekendCalendar';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sunday' => '\Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerCalendarDayConfigurationCarrierWeekendCalendarSunday',
        'saturday' => '\Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerCalendarDayConfigurationCarrierWeekendCalendarSunday'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sunday' => null,
        'saturday' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sunday' => false,
        'saturday' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sunday' => 'sunday',
        'saturday' => 'saturday'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sunday' => 'setSunday',
        'saturday' => 'setSaturday'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sunday' => 'getSunday',
        'saturday' => 'getSaturday'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('sunday', $data ?? [], null);
        $this->setIfExists('saturday', $data ?? [], null);
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
     * Gets sunday
     *
     * @return \Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerCalendarDayConfigurationCarrierWeekendCalendarSunday|null
    
     */
    public function getSunday()
    {
        return $this->container['sunday'];
    }

    /**
     * Sets sunday
     *
     * @param \Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerCalendarDayConfigurationCarrierWeekendCalendarSunday|null $sunday sunday
     *
     * @return self
    
     */
    public function setSunday($sunday)
    {
        if (is_null($sunday)) {
            throw new \InvalidArgumentException('non-nullable sunday cannot be null');
        }

        $this->container['sunday'] = $sunday;
        return $this;
    }

    /**
     * Gets saturday
     *
     * @return \Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerCalendarDayConfigurationCarrierWeekendCalendarSunday|null
    
     */
    public function getSaturday()
    {
        return $this->container['saturday'];
    }

    /**
     * Sets saturday
     *
     * @param \Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerCalendarDayConfigurationCarrierWeekendCalendarSunday|null $saturday saturday
     *
     * @return self
    
     */
    public function setSaturday($saturday)
    {
        if (is_null($saturday)) {
            throw new \InvalidArgumentException('non-nullable saturday cannot be null');
        }

        $this->container['saturday'] = $saturday;
        return $this;
    }
}


