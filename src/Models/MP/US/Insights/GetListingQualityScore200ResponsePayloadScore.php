<?php

/**
 * GetListingQualityScore200ResponsePayloadScore
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
 * GetListingQualityScore200ResponsePayloadScore Class Doc Comment
 *
 * @category Class

 * @description Score

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetListingQualityScore200ResponsePayloadScore extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getListingQualityScore_200_response_payload_score';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'offerScore' => 'float',
        'contentScore' => 'float',
        'ratingReviewScore' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'offerScore' => 'double',
        'contentScore' => 'double',
        'ratingReviewScore' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'offerScore' => false,
        'contentScore' => false,
        'ratingReviewScore' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'offerScore' => 'offerScore',
        'contentScore' => 'contentScore',
        'ratingReviewScore' => 'ratingReviewScore'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'offerScore' => 'setOfferScore',
        'contentScore' => 'setContentScore',
        'ratingReviewScore' => 'setRatingReviewScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'offerScore' => 'getOfferScore',
        'contentScore' => 'getContentScore',
        'ratingReviewScore' => 'getRatingReviewScore'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('offerScore', $data ?? [], null);
        $this->setIfExists('contentScore', $data ?? [], null);
        $this->setIfExists('ratingReviewScore', $data ?? [], null);
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
     * Gets offerScore
     *
     * @return float|null
    
     */
    public function getOfferScore()
    {
        return $this->container['offerScore'];
    }

    /**
     * Sets offerScore
     *
     * @param float|null $offerScore Offer Score
     *
     * @return self
    
     */
    public function setOfferScore($offerScore)
    {
        if (is_null($offerScore)) {
            throw new \InvalidArgumentException('non-nullable offerScore cannot be null');
        }

        $this->container['offerScore'] = $offerScore;
        return $this;
    }

    /**
     * Gets contentScore
     *
     * @return float|null
    
     */
    public function getContentScore()
    {
        return $this->container['contentScore'];
    }

    /**
     * Sets contentScore
     *
     * @param float|null $contentScore Content Score
     *
     * @return self
    
     */
    public function setContentScore($contentScore)
    {
        if (is_null($contentScore)) {
            throw new \InvalidArgumentException('non-nullable contentScore cannot be null');
        }

        $this->container['contentScore'] = $contentScore;
        return $this;
    }

    /**
     * Gets ratingReviewScore
     *
     * @return float|null
    
     */
    public function getRatingReviewScore()
    {
        return $this->container['ratingReviewScore'];
    }

    /**
     * Sets ratingReviewScore
     *
     * @param float|null $ratingReviewScore Rating Review Score
     *
     * @return self
    
     */
    public function setRatingReviewScore($ratingReviewScore)
    {
        if (is_null($ratingReviewScore)) {
            throw new \InvalidArgumentException('non-nullable ratingReviewScore cannot be null');
        }

        $this->container['ratingReviewScore'] = $ratingReviewScore;
        return $this;
    }
}


