<?php

/**
 * MoneyType
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Orders;

use Walmart\Model\BaseModel;

/**
 * MoneyType Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class MoneyType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'MoneyType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'currencyAmount' => 'float',
        'currencyUnit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'currencyAmount' => null,
        'currencyUnit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'currencyAmount' => false,
        'currencyUnit' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'currencyAmount' => 'currencyAmount',
        'currencyUnit' => 'currencyUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'currencyAmount' => 'setCurrencyAmount',
        'currencyUnit' => 'setCurrencyUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'currencyAmount' => 'getCurrencyAmount',
        'currencyUnit' => 'getCurrencyUnit'
    ];


    public const CURRENCY_UNIT_AED = 'AED';

    public const CURRENCY_UNIT_AFN = 'AFN';

    public const CURRENCY_UNIT_ALL = 'ALL';

    public const CURRENCY_UNIT_AMD = 'AMD';

    public const CURRENCY_UNIT_ANG = 'ANG';

    public const CURRENCY_UNIT_AOA = 'AOA';

    public const CURRENCY_UNIT_ARS = 'ARS';

    public const CURRENCY_UNIT_AUD = 'AUD';

    public const CURRENCY_UNIT_AWG = 'AWG';

    public const CURRENCY_UNIT_AZN = 'AZN';

    public const CURRENCY_UNIT_BAM = 'BAM';

    public const CURRENCY_UNIT_BBD = 'BBD';

    public const CURRENCY_UNIT_BDT = 'BDT';

    public const CURRENCY_UNIT_BGN = 'BGN';

    public const CURRENCY_UNIT_BHD = 'BHD';

    public const CURRENCY_UNIT_BIF = 'BIF';

    public const CURRENCY_UNIT_BMD = 'BMD';

    public const CURRENCY_UNIT_BND = 'BND';

    public const CURRENCY_UNIT_BOB = 'BOB';

    public const CURRENCY_UNIT_BRL = 'BRL';

    public const CURRENCY_UNIT_BSD = 'BSD';

    public const CURRENCY_UNIT_BTN = 'BTN';

    public const CURRENCY_UNIT_BWP = 'BWP';

    public const CURRENCY_UNIT_BYR = 'BYR';

    public const CURRENCY_UNIT_BZD = 'BZD';

    public const CURRENCY_UNIT_CAD = 'CAD';

    public const CURRENCY_UNIT_CDF = 'CDF';

    public const CURRENCY_UNIT_CHF = 'CHF';

    public const CURRENCY_UNIT_CLP = 'CLP';

    public const CURRENCY_UNIT_CNY = 'CNY';

    public const CURRENCY_UNIT_COP = 'COP';

    public const CURRENCY_UNIT_CRC = 'CRC';

    public const CURRENCY_UNIT_CUP = 'CUP';

    public const CURRENCY_UNIT_CVE = 'CVE';

    public const CURRENCY_UNIT_CZK = 'CZK';

    public const CURRENCY_UNIT_DJF = 'DJF';

    public const CURRENCY_UNIT_DKK = 'DKK';

    public const CURRENCY_UNIT_DOP = 'DOP';

    public const CURRENCY_UNIT_DZD = 'DZD';

    public const CURRENCY_UNIT_EGP = 'EGP';

    public const CURRENCY_UNIT_ERN = 'ERN';

    public const CURRENCY_UNIT_ETB = 'ETB';

    public const CURRENCY_UNIT_EUR = 'EUR';

    public const CURRENCY_UNIT_FJD = 'FJD';

    public const CURRENCY_UNIT_FKP = 'FKP';

    public const CURRENCY_UNIT_GBP = 'GBP';

    public const CURRENCY_UNIT_GEL = 'GEL';

    public const CURRENCY_UNIT_GHS = 'GHS';

    public const CURRENCY_UNIT_GIP = 'GIP';

    public const CURRENCY_UNIT_GMD = 'GMD';

    public const CURRENCY_UNIT_GNF = 'GNF';

    public const CURRENCY_UNIT_GTQ = 'GTQ';

    public const CURRENCY_UNIT_GYD = 'GYD';

    public const CURRENCY_UNIT_HKD = 'HKD';

    public const CURRENCY_UNIT_HNL = 'HNL';

    public const CURRENCY_UNIT_HRK = 'HRK';

    public const CURRENCY_UNIT_HTG = 'HTG';

    public const CURRENCY_UNIT_HUF = 'HUF';

    public const CURRENCY_UNIT_IDR = 'IDR';

    public const CURRENCY_UNIT_ILS = 'ILS';

    public const CURRENCY_UNIT_INR = 'INR';

    public const CURRENCY_UNIT_IQD = 'IQD';

    public const CURRENCY_UNIT_IRR = 'IRR';

    public const CURRENCY_UNIT_ISK = 'ISK';

    public const CURRENCY_UNIT_JMD = 'JMD';

    public const CURRENCY_UNIT_JOD = 'JOD';

    public const CURRENCY_UNIT_JPY = 'JPY';

    public const CURRENCY_UNIT_KES = 'KES';

    public const CURRENCY_UNIT_KGS = 'KGS';

    public const CURRENCY_UNIT_KHR = 'KHR';

    public const CURRENCY_UNIT_KMF = 'KMF';

    public const CURRENCY_UNIT_KPW = 'KPW';

    public const CURRENCY_UNIT_KRW = 'KRW';

    public const CURRENCY_UNIT_KWD = 'KWD';

    public const CURRENCY_UNIT_KYD = 'KYD';

    public const CURRENCY_UNIT_KZT = 'KZT';

    public const CURRENCY_UNIT_LAK = 'LAK';

    public const CURRENCY_UNIT_LBP = 'LBP';

    public const CURRENCY_UNIT_LKR = 'LKR';

    public const CURRENCY_UNIT_LRD = 'LRD';

    public const CURRENCY_UNIT_LSL = 'LSL';

    public const CURRENCY_UNIT_LTL = 'LTL';

    public const CURRENCY_UNIT_LVL = 'LVL';

    public const CURRENCY_UNIT_LYD = 'LYD';

    public const CURRENCY_UNIT_MAD = 'MAD';

    public const CURRENCY_UNIT_MDL = 'MDL';

    public const CURRENCY_UNIT_MGA = 'MGA';

    public const CURRENCY_UNIT_MKD = 'MKD';

    public const CURRENCY_UNIT_MMK = 'MMK';

    public const CURRENCY_UNIT_MNT = 'MNT';

    public const CURRENCY_UNIT_MOP = 'MOP';

    public const CURRENCY_UNIT_MRO = 'MRO';

    public const CURRENCY_UNIT_MUR = 'MUR';

    public const CURRENCY_UNIT_MVR = 'MVR';

    public const CURRENCY_UNIT_MWK = 'MWK';

    public const CURRENCY_UNIT_MXN = 'MXN';

    public const CURRENCY_UNIT_MYR = 'MYR';

    public const CURRENCY_UNIT_MZN = 'MZN';

    public const CURRENCY_UNIT_NAD = 'NAD';

    public const CURRENCY_UNIT_NGN = 'NGN';

    public const CURRENCY_UNIT_NIO = 'NIO';

    public const CURRENCY_UNIT_NOK = 'NOK';

    public const CURRENCY_UNIT_NPR = 'NPR';

    public const CURRENCY_UNIT_NZD = 'NZD';

    public const CURRENCY_UNIT_OMR = 'OMR';

    public const CURRENCY_UNIT_PAB = 'PAB';

    public const CURRENCY_UNIT_PEN = 'PEN';

    public const CURRENCY_UNIT_PGK = 'PGK';

    public const CURRENCY_UNIT_PHP = 'PHP';

    public const CURRENCY_UNIT_PKR = 'PKR';

    public const CURRENCY_UNIT_PLN = 'PLN';

    public const CURRENCY_UNIT_PYG = 'PYG';

    public const CURRENCY_UNIT_QAR = 'QAR';

    public const CURRENCY_UNIT_RON = 'RON';

    public const CURRENCY_UNIT_RSD = 'RSD';

    public const CURRENCY_UNIT_RUB = 'RUB';

    public const CURRENCY_UNIT_RUR = 'RUR';

    public const CURRENCY_UNIT_RWF = 'RWF';

    public const CURRENCY_UNIT_SAR = 'SAR';

    public const CURRENCY_UNIT_SBD = 'SBD';

    public const CURRENCY_UNIT_SCR = 'SCR';

    public const CURRENCY_UNIT_SDG = 'SDG';

    public const CURRENCY_UNIT_SEK = 'SEK';

    public const CURRENCY_UNIT_SGD = 'SGD';

    public const CURRENCY_UNIT_SHP = 'SHP';

    public const CURRENCY_UNIT_SLL = 'SLL';

    public const CURRENCY_UNIT_SOS = 'SOS';

    public const CURRENCY_UNIT_SRD = 'SRD';

    public const CURRENCY_UNIT_STD = 'STD';

    public const CURRENCY_UNIT_SYP = 'SYP';

    public const CURRENCY_UNIT_SZL = 'SZL';

    public const CURRENCY_UNIT_THB = 'THB';

    public const CURRENCY_UNIT_TJS = 'TJS';

    public const CURRENCY_UNIT_TMT = 'TMT';

    public const CURRENCY_UNIT_TND = 'TND';

    public const CURRENCY_UNIT_TOP = 'TOP';

    public const CURRENCY_UNIT__TRY = 'TRY';

    public const CURRENCY_UNIT_TTD = 'TTD';

    public const CURRENCY_UNIT_TWD = 'TWD';

    public const CURRENCY_UNIT_TZS = 'TZS';

    public const CURRENCY_UNIT_UAH = 'UAH';

    public const CURRENCY_UNIT_UGX = 'UGX';

    public const CURRENCY_UNIT_USD = 'USD';

    public const CURRENCY_UNIT_UYU = 'UYU';

    public const CURRENCY_UNIT_UZS = 'UZS';

    public const CURRENCY_UNIT_VEF = 'VEF';

    public const CURRENCY_UNIT_VND = 'VND';

    public const CURRENCY_UNIT_VUV = 'VUV';

    public const CURRENCY_UNIT_WST = 'WST';

    public const CURRENCY_UNIT_XAF = 'XAF';

    public const CURRENCY_UNIT_XAG = 'XAG';

    public const CURRENCY_UNIT_XAU = 'XAU';

    public const CURRENCY_UNIT_XBA = 'XBA';

    public const CURRENCY_UNIT_XBB = 'XBB';

    public const CURRENCY_UNIT_XBC = 'XBC';

    public const CURRENCY_UNIT_XBD = 'XBD';

    public const CURRENCY_UNIT_XCD = 'XCD';

    public const CURRENCY_UNIT_XDR = 'XDR';

    public const CURRENCY_UNIT_XFU = 'XFU';

    public const CURRENCY_UNIT_XOF = 'XOF';

    public const CURRENCY_UNIT_XPD = 'XPD';

    public const CURRENCY_UNIT_XPF = 'XPF';

    public const CURRENCY_UNIT_XPT = 'XPT';

    public const CURRENCY_UNIT_XTS = 'XTS';

    public const CURRENCY_UNIT_XXX = 'XXX';

    public const CURRENCY_UNIT_YER = 'YER';

    public const CURRENCY_UNIT_ZAR = 'ZAR';

    public const CURRENCY_UNIT_ZMK = 'ZMK';

    public const CURRENCY_UNIT_ZWL = 'ZWL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyUnitAllowableValues()
    {
        return [
            self::CURRENCY_UNIT_AED,
            self::CURRENCY_UNIT_AFN,
            self::CURRENCY_UNIT_ALL,
            self::CURRENCY_UNIT_AMD,
            self::CURRENCY_UNIT_ANG,
            self::CURRENCY_UNIT_AOA,
            self::CURRENCY_UNIT_ARS,
            self::CURRENCY_UNIT_AUD,
            self::CURRENCY_UNIT_AWG,
            self::CURRENCY_UNIT_AZN,
            self::CURRENCY_UNIT_BAM,
            self::CURRENCY_UNIT_BBD,
            self::CURRENCY_UNIT_BDT,
            self::CURRENCY_UNIT_BGN,
            self::CURRENCY_UNIT_BHD,
            self::CURRENCY_UNIT_BIF,
            self::CURRENCY_UNIT_BMD,
            self::CURRENCY_UNIT_BND,
            self::CURRENCY_UNIT_BOB,
            self::CURRENCY_UNIT_BRL,
            self::CURRENCY_UNIT_BSD,
            self::CURRENCY_UNIT_BTN,
            self::CURRENCY_UNIT_BWP,
            self::CURRENCY_UNIT_BYR,
            self::CURRENCY_UNIT_BZD,
            self::CURRENCY_UNIT_CAD,
            self::CURRENCY_UNIT_CDF,
            self::CURRENCY_UNIT_CHF,
            self::CURRENCY_UNIT_CLP,
            self::CURRENCY_UNIT_CNY,
            self::CURRENCY_UNIT_COP,
            self::CURRENCY_UNIT_CRC,
            self::CURRENCY_UNIT_CUP,
            self::CURRENCY_UNIT_CVE,
            self::CURRENCY_UNIT_CZK,
            self::CURRENCY_UNIT_DJF,
            self::CURRENCY_UNIT_DKK,
            self::CURRENCY_UNIT_DOP,
            self::CURRENCY_UNIT_DZD,
            self::CURRENCY_UNIT_EGP,
            self::CURRENCY_UNIT_ERN,
            self::CURRENCY_UNIT_ETB,
            self::CURRENCY_UNIT_EUR,
            self::CURRENCY_UNIT_FJD,
            self::CURRENCY_UNIT_FKP,
            self::CURRENCY_UNIT_GBP,
            self::CURRENCY_UNIT_GEL,
            self::CURRENCY_UNIT_GHS,
            self::CURRENCY_UNIT_GIP,
            self::CURRENCY_UNIT_GMD,
            self::CURRENCY_UNIT_GNF,
            self::CURRENCY_UNIT_GTQ,
            self::CURRENCY_UNIT_GYD,
            self::CURRENCY_UNIT_HKD,
            self::CURRENCY_UNIT_HNL,
            self::CURRENCY_UNIT_HRK,
            self::CURRENCY_UNIT_HTG,
            self::CURRENCY_UNIT_HUF,
            self::CURRENCY_UNIT_IDR,
            self::CURRENCY_UNIT_ILS,
            self::CURRENCY_UNIT_INR,
            self::CURRENCY_UNIT_IQD,
            self::CURRENCY_UNIT_IRR,
            self::CURRENCY_UNIT_ISK,
            self::CURRENCY_UNIT_JMD,
            self::CURRENCY_UNIT_JOD,
            self::CURRENCY_UNIT_JPY,
            self::CURRENCY_UNIT_KES,
            self::CURRENCY_UNIT_KGS,
            self::CURRENCY_UNIT_KHR,
            self::CURRENCY_UNIT_KMF,
            self::CURRENCY_UNIT_KPW,
            self::CURRENCY_UNIT_KRW,
            self::CURRENCY_UNIT_KWD,
            self::CURRENCY_UNIT_KYD,
            self::CURRENCY_UNIT_KZT,
            self::CURRENCY_UNIT_LAK,
            self::CURRENCY_UNIT_LBP,
            self::CURRENCY_UNIT_LKR,
            self::CURRENCY_UNIT_LRD,
            self::CURRENCY_UNIT_LSL,
            self::CURRENCY_UNIT_LTL,
            self::CURRENCY_UNIT_LVL,
            self::CURRENCY_UNIT_LYD,
            self::CURRENCY_UNIT_MAD,
            self::CURRENCY_UNIT_MDL,
            self::CURRENCY_UNIT_MGA,
            self::CURRENCY_UNIT_MKD,
            self::CURRENCY_UNIT_MMK,
            self::CURRENCY_UNIT_MNT,
            self::CURRENCY_UNIT_MOP,
            self::CURRENCY_UNIT_MRO,
            self::CURRENCY_UNIT_MUR,
            self::CURRENCY_UNIT_MVR,
            self::CURRENCY_UNIT_MWK,
            self::CURRENCY_UNIT_MXN,
            self::CURRENCY_UNIT_MYR,
            self::CURRENCY_UNIT_MZN,
            self::CURRENCY_UNIT_NAD,
            self::CURRENCY_UNIT_NGN,
            self::CURRENCY_UNIT_NIO,
            self::CURRENCY_UNIT_NOK,
            self::CURRENCY_UNIT_NPR,
            self::CURRENCY_UNIT_NZD,
            self::CURRENCY_UNIT_OMR,
            self::CURRENCY_UNIT_PAB,
            self::CURRENCY_UNIT_PEN,
            self::CURRENCY_UNIT_PGK,
            self::CURRENCY_UNIT_PHP,
            self::CURRENCY_UNIT_PKR,
            self::CURRENCY_UNIT_PLN,
            self::CURRENCY_UNIT_PYG,
            self::CURRENCY_UNIT_QAR,
            self::CURRENCY_UNIT_RON,
            self::CURRENCY_UNIT_RSD,
            self::CURRENCY_UNIT_RUB,
            self::CURRENCY_UNIT_RUR,
            self::CURRENCY_UNIT_RWF,
            self::CURRENCY_UNIT_SAR,
            self::CURRENCY_UNIT_SBD,
            self::CURRENCY_UNIT_SCR,
            self::CURRENCY_UNIT_SDG,
            self::CURRENCY_UNIT_SEK,
            self::CURRENCY_UNIT_SGD,
            self::CURRENCY_UNIT_SHP,
            self::CURRENCY_UNIT_SLL,
            self::CURRENCY_UNIT_SOS,
            self::CURRENCY_UNIT_SRD,
            self::CURRENCY_UNIT_STD,
            self::CURRENCY_UNIT_SYP,
            self::CURRENCY_UNIT_SZL,
            self::CURRENCY_UNIT_THB,
            self::CURRENCY_UNIT_TJS,
            self::CURRENCY_UNIT_TMT,
            self::CURRENCY_UNIT_TND,
            self::CURRENCY_UNIT_TOP,
            self::CURRENCY_UNIT__TRY,
            self::CURRENCY_UNIT_TTD,
            self::CURRENCY_UNIT_TWD,
            self::CURRENCY_UNIT_TZS,
            self::CURRENCY_UNIT_UAH,
            self::CURRENCY_UNIT_UGX,
            self::CURRENCY_UNIT_USD,
            self::CURRENCY_UNIT_UYU,
            self::CURRENCY_UNIT_UZS,
            self::CURRENCY_UNIT_VEF,
            self::CURRENCY_UNIT_VND,
            self::CURRENCY_UNIT_VUV,
            self::CURRENCY_UNIT_WST,
            self::CURRENCY_UNIT_XAF,
            self::CURRENCY_UNIT_XAG,
            self::CURRENCY_UNIT_XAU,
            self::CURRENCY_UNIT_XBA,
            self::CURRENCY_UNIT_XBB,
            self::CURRENCY_UNIT_XBC,
            self::CURRENCY_UNIT_XBD,
            self::CURRENCY_UNIT_XCD,
            self::CURRENCY_UNIT_XDR,
            self::CURRENCY_UNIT_XFU,
            self::CURRENCY_UNIT_XOF,
            self::CURRENCY_UNIT_XPD,
            self::CURRENCY_UNIT_XPF,
            self::CURRENCY_UNIT_XPT,
            self::CURRENCY_UNIT_XTS,
            self::CURRENCY_UNIT_XXX,
            self::CURRENCY_UNIT_YER,
            self::CURRENCY_UNIT_ZAR,
            self::CURRENCY_UNIT_ZMK,
            self::CURRENCY_UNIT_ZWL,
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
        $this->setIfExists('currencyAmount', $data ?? [], null);
        $this->setIfExists('currencyUnit', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['currencyAmount'] === null) {
            $invalidProperties[] = "'currencyAmount' can't be null";
        }
        if ($this->container['currencyUnit'] === null) {
            $invalidProperties[] = "'currencyUnit' can't be null";
        }
        $allowedValues = $this->getCurrencyUnitAllowableValues();
        if (!is_null($this->container['currencyUnit']) && !in_array($this->container['currencyUnit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'currencyUnit', must be one of '%s'",
                $this->container['currencyUnit'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets currencyAmount
     *
     * @return float
    
     */
    public function getCurrencyAmount()
    {
        return $this->container['currencyAmount'];
    }

    /**
     * Sets currencyAmount
     *
     * @param float $currencyAmount currencyAmount
     *
     * @return self
    
     */
    public function setCurrencyAmount($currencyAmount)
    {
        if (is_null($currencyAmount)) {
            throw new \InvalidArgumentException('non-nullable currencyAmount cannot be null');
        }

        $this->container['currencyAmount'] = $currencyAmount;
        return $this;
    }

    /**
     * Gets currencyUnit
     *
     * @return string
    
     */
    public function getCurrencyUnit()
    {
        return $this->container['currencyUnit'];
    }

    /**
     * Sets currencyUnit
     *
     * @param string $currencyUnit currencyUnit
     *
     * @return self
    
     */
    public function setCurrencyUnit($currencyUnit)
    {
        if (is_null($currencyUnit)) {
            throw new \InvalidArgumentException('non-nullable currencyUnit cannot be null');
        }
        $allowedValues = $this->getCurrencyUnitAllowableValues();
        if (!in_array($currencyUnit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'currencyUnit', must be one of '%s'",
                    $currencyUnit,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['currencyUnit'] = $currencyUnit;
        return $this;
    }
}


