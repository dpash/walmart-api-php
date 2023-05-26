<?php

/**
 * CreateLabelRequestFromAddress
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
 * International Shipping
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\InternationalShipping;

use Walmart\Model\BaseModel;

/**
 * CreateLabelRequestFromAddress Class Doc Comment
 *
 * @category Class

 * @description From Address

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CreateLabelRequestFromAddress extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'createLabel_request_fromAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'contactName' => 'string',
        'companyName' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postalCode' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'contactName' => null,
        'companyName' => null,
        'addressLine1' => null,
        'addressLine2' => null,
        'city' => null,
        'state' => null,
        'postalCode' => null,
        'country' => null,
        'phone' => null,
        'email' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contactName' => false,
        'companyName' => false,
        'addressLine1' => false,
        'addressLine2' => false,
        'city' => false,
        'state' => false,
        'postalCode' => false,
        'country' => false,
        'phone' => false,
        'email' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'contactName' => 'contactName',
        'companyName' => 'companyName',
        'addressLine1' => 'addressLine1',
        'addressLine2' => 'addressLine2',
        'city' => 'city',
        'state' => 'state',
        'postalCode' => 'postalCode',
        'country' => 'country',
        'phone' => 'phone',
        'email' => 'email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'contactName' => 'setContactName',
        'companyName' => 'setCompanyName',
        'addressLine1' => 'setAddressLine1',
        'addressLine2' => 'setAddressLine2',
        'city' => 'setCity',
        'state' => 'setState',
        'postalCode' => 'setPostalCode',
        'country' => 'setCountry',
        'phone' => 'setPhone',
        'email' => 'setEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'contactName' => 'getContactName',
        'companyName' => 'getCompanyName',
        'addressLine1' => 'getAddressLine1',
        'addressLine2' => 'getAddressLine2',
        'city' => 'getCity',
        'state' => 'getState',
        'postalCode' => 'getPostalCode',
        'country' => 'getCountry',
        'phone' => 'getPhone',
        'email' => 'getEmail'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('contactName', $data ?? [], null);
        $this->setIfExists('companyName', $data ?? [], null);
        $this->setIfExists('addressLine1', $data ?? [], null);
        $this->setIfExists('addressLine2', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('postalCode', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contactName'] === null) {
            $invalidProperties[] = "'contactName' can't be null";
        }
        if ($this->container['addressLine1'] === null) {
            $invalidProperties[] = "'addressLine1' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['postalCode'] === null) {
            $invalidProperties[] = "'postalCode' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets contactName
     *
     * @return string
    
     */
    public function getContactName()
    {
        return $this->container['contactName'];
    }

    /**
     * Sets contactName
     *
     * @param string $contactName Contact name
     *
     * @return self
    
     */
    public function setContactName($contactName)
    {
        if (is_null($contactName)) {
            throw new \InvalidArgumentException('non-nullable contactName cannot be null');
        }

        $this->container['contactName'] = $contactName;
        return $this;
    }

    /**
     * Gets companyName
     *
     * @return string|null
    
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string|null $companyName Company name
     *
     * @return self
    
     */
    public function setCompanyName($companyName)
    {
        if (is_null($companyName)) {
            throw new \InvalidArgumentException('non-nullable companyName cannot be null');
        }

        $this->container['companyName'] = $companyName;
        return $this;
    }

    /**
     * Gets addressLine1
     *
     * @return string
    
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string $addressLine1 Address Line 1
     *
     * @return self
    
     */
    public function setAddressLine1($addressLine1)
    {
        if (is_null($addressLine1)) {
            throw new \InvalidArgumentException('non-nullable addressLine1 cannot be null');
        }

        $this->container['addressLine1'] = $addressLine1;
        return $this;
    }

    /**
     * Gets addressLine2
     *
     * @return string|null
    
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     *
     * @param string|null $addressLine2 Address Line 2
     *
     * @return self
    
     */
    public function setAddressLine2($addressLine2)
    {
        if (is_null($addressLine2)) {
            throw new \InvalidArgumentException('non-nullable addressLine2 cannot be null');
        }

        $this->container['addressLine2'] = $addressLine2;
        return $this;
    }

    /**
     * Gets city
     *
     * @return string
    
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return self
    
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }

        $this->container['city'] = $city;
        return $this;
    }

    /**
     * Gets state
     *
     * @return string
    
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return self
    
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }

        $this->container['state'] = $state;
        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string
    
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string $postalCode postal code
     *
     * @return self
    
     */
    public function setPostalCode($postalCode)
    {
        if (is_null($postalCode)) {
            throw new \InvalidArgumentException('non-nullable postalCode cannot be null');
        }

        $this->container['postalCode'] = $postalCode;
        return $this;
    }

    /**
     * Gets country
     *
     * @return string
    
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return self
    
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }

        $this->container['country'] = $country;
        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
    
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return self
    
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }

        $this->container['phone'] = $phone;
        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
    
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
    
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }

        $this->container['email'] = $email;
        return $this;
    }
}


