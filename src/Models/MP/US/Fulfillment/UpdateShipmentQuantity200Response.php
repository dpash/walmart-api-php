<?php

/**
 * UpdateShipmentQuantity200Response
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
use Walmart\Traits\HasResponseHeaders;

/**
 * UpdateShipmentQuantity200Response Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class UpdateShipmentQuantity200Response extends BaseModel
{
    use HasResponseHeaders;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'updateShipmentQuantity_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'status' => 'string',
        'header' => '\Walmart\Models\MP\US\Fulfillment\UpdateShipmentQuantity200ResponseHeader',
        'errors' => '\Walmart\Models\MP\US\Fulfillment\UpdateShipmentQuantity200ResponseErrorsInner[]',
        'payload' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'status' => null,
        'header' => null,
        'errors' => null,
        'payload' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'header' => false,
        'errors' => false,
        'payload' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'status' => 'status',
        'header' => 'header',
        'errors' => 'errors',
        'payload' => 'payload'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'status' => 'setStatus',
        'header' => 'setHeader',
        'errors' => 'setErrors',
        'payload' => 'setPayload'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'status' => 'getStatus',
        'header' => 'getHeader',
        'errors' => 'getErrors',
        'payload' => 'getPayload'
    ];


    public const STATUS_OK = 'OK';

    public const STATUS_CREATED = 'CREATED';

    public const STATUS_ACCEPTED = 'ACCEPTED';

    public const STATUS_NO_CONTENT = 'NO_CONTENT';

    public const STATUS_PARTIAL = 'PARTIAL';

    public const STATUS_MOVED_PERMANENT = 'MOVED_PERMANENT';

    public const STATUS_FOUND = 'FOUND';

    public const STATUS_SEE_OTHER = 'SEE_OTHER';

    public const STATUS_NOT_MODIFIED = 'NOT_MODIFIED';

    public const STATUS_TEMPORARY_REDIRECT = 'TEMPORARY_REDIRECT';

    public const STATUS_BAD_REQUEST = 'BAD_REQUEST';

    public const STATUS_UNAUTHORIZED = 'UNAUTHORIZED';

    public const STATUS_FORBIDDEN = 'FORBIDDEN';

    public const STATUS_NOT_FOUND = 'NOT_FOUND';

    public const STATUS_METHOD_NOT_ALLOWED = 'METHOD_NOT_ALLOWED';

    public const STATUS_NOT_ACCEPTABLE = 'NOT_ACCEPTABLE';

    public const STATUS_REQUEST_TIMEOUT = 'REQUEST_TIMEOUT';

    public const STATUS_CONFLICT = 'CONFLICT';

    public const STATUS_REQUEST_ENTITY_TOO_LARGE = 'REQUEST_ENTITY_TOO_LARGE';

    public const STATUS_UNSUPPORTED_MEDIA_TYPE = 'UNSUPPORTED_MEDIA_TYPE';

    public const STATUS_UNPROCESSABLE_ENTITY = 'UNPROCESSABLE_ENTITY';

    public const STATUS_FAIL = 'FAIL';

    public const STATUS_BAD_GATEWAY = 'BAD_GATEWAY';

    public const STATUS_SERVICE_UNAVAILABLE = 'SERVICE_UNAVAILABLE';

    public const STATUS_GATEWAY_TIMEOUT = 'GATEWAY_TIMEOUT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OK,
            self::STATUS_CREATED,
            self::STATUS_ACCEPTED,
            self::STATUS_NO_CONTENT,
            self::STATUS_PARTIAL,
            self::STATUS_MOVED_PERMANENT,
            self::STATUS_FOUND,
            self::STATUS_SEE_OTHER,
            self::STATUS_NOT_MODIFIED,
            self::STATUS_TEMPORARY_REDIRECT,
            self::STATUS_BAD_REQUEST,
            self::STATUS_UNAUTHORIZED,
            self::STATUS_FORBIDDEN,
            self::STATUS_NOT_FOUND,
            self::STATUS_METHOD_NOT_ALLOWED,
            self::STATUS_NOT_ACCEPTABLE,
            self::STATUS_REQUEST_TIMEOUT,
            self::STATUS_CONFLICT,
            self::STATUS_REQUEST_ENTITY_TOO_LARGE,
            self::STATUS_UNSUPPORTED_MEDIA_TYPE,
            self::STATUS_UNPROCESSABLE_ENTITY,
            self::STATUS_FAIL,
            self::STATUS_BAD_GATEWAY,
            self::STATUS_SERVICE_UNAVAILABLE,
            self::STATUS_GATEWAY_TIMEOUT,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('header', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
        $this->setIfExists('payload', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets status
     *
     * @return string
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets header
     *
     * @return \Walmart\Models\MP\US\Fulfillment\UpdateShipmentQuantity200ResponseHeader|null
    
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param \Walmart\Models\MP\US\Fulfillment\UpdateShipmentQuantity200ResponseHeader|null $header header
     *
     * @return self
    
     */
    public function setHeader($header)
    {
        if (is_null($header)) {
            throw new \InvalidArgumentException('non-nullable header cannot be null');
        }

        $this->container['header'] = $header;
        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Walmart\Models\MP\US\Fulfillment\UpdateShipmentQuantity200ResponseErrorsInner[]|null
    
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Walmart\Models\MP\US\Fulfillment\UpdateShipmentQuantity200ResponseErrorsInner[]|null $errors errors
     *
     * @return self
    
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            throw new \InvalidArgumentException('non-nullable errors cannot be null');
        }

        $this->container['errors'] = $errors;
        return $this;
    }

    /**
     * Gets payload
     *
     * @return object|null
    
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param object|null $payload payload
     *
     * @return self
    
     */
    public function setPayload($payload)
    {
        if (is_null($payload)) {
            throw new \InvalidArgumentException('non-nullable payload cannot be null');
        }

        $this->container['payload'] = $payload;
        return $this;
    }
}


