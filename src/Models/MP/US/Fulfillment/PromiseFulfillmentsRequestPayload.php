<?php

/**
 * PromiseFulfillmentsRequestPayload
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
 * PromiseFulfillmentsRequestPayload Class Doc Comment
 *
 * @category Class

 * @description Request payload.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PromiseFulfillmentsRequestPayload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'promiseFulfillments_request_payload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'requestId' => 'string',
        'destinations' => '\Walmart\Models\MP\US\Fulfillment\PromiseFulfillmentsRequestPayloadDestinationsInner[]',
        'offerSelections' => '\Walmart\Models\MP\US\Fulfillment\PromiseFulfillmentsRequestPayloadOfferSelectionsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'requestId' => null,
        'destinations' => null,
        'offerSelections' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'requestId' => false,
        'destinations' => false,
        'offerSelections' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'requestId' => 'requestId',
        'destinations' => 'destinations',
        'offerSelections' => 'offerSelections'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'requestId' => 'setRequestId',
        'destinations' => 'setDestinations',
        'offerSelections' => 'setOfferSelections'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'requestId' => 'getRequestId',
        'destinations' => 'getDestinations',
        'offerSelections' => 'getOfferSelections'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('requestId', $data ?? [], null);
        $this->setIfExists('destinations', $data ?? [], null);
        $this->setIfExists('offerSelections', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['requestId'] === null) {
            $invalidProperties[] = "'requestId' can't be null";
        }
        if ($this->container['destinations'] === null) {
            $invalidProperties[] = "'destinations' can't be null";
        }
        if ($this->container['offerSelections'] === null) {
            $invalidProperties[] = "'offerSelections' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets requestId
     *
     * @return string
    
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     *
     * @param string $requestId The identifier to identify the request.
     *
     * @return self
    
     */
    public function setRequestId($requestId)
    {
        if (is_null($requestId)) {
            throw new \InvalidArgumentException('non-nullable requestId cannot be null');
        }

        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
     * Gets destinations
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseFulfillmentsRequestPayloadDestinationsInner[]
    
     */
    public function getDestinations()
    {
        return $this->container['destinations'];
    }

    /**
     * Sets destinations
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseFulfillmentsRequestPayloadDestinationsInner[] $destinations Customer order destination details.
     *
     * @return self
    
     */
    public function setDestinations($destinations)
    {
        if (is_null($destinations)) {
            throw new \InvalidArgumentException('non-nullable destinations cannot be null');
        }

        $this->container['destinations'] = $destinations;
        return $this;
    }

    /**
     * Gets offerSelections
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseFulfillmentsRequestPayloadOfferSelectionsInner[]
    
     */
    public function getOfferSelections()
    {
        return $this->container['offerSelections'];
    }

    /**
     * Sets offerSelections
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseFulfillmentsRequestPayloadOfferSelectionsInner[] $offerSelections Offer Selection details. List of offers - number of offer inside offer selection should be less than or equal to 30.
     *
     * @return self
    
     */
    public function setOfferSelections($offerSelections)
    {
        if (is_null($offerSelections)) {
            throw new \InvalidArgumentException('non-nullable offerSelections cannot be null');
        }

        $this->container['offerSelections'] = $offerSelections;
        return $this;
    }
}


