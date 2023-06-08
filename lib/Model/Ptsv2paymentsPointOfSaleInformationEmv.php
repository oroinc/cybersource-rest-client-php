<?php
/**
 * Ptsv2paymentsPointOfSaleInformationEmv
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Ptsv2paymentsPointOfSaleInformationEmv Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsPointOfSaleInformationEmv implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_pointOfSaleInformation_emv';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tags' => 'string',
        'cardholderVerificationMethodUsed' => 'int',
        'cardSequenceNumber' => 'string',
        'fallback' => 'bool',
        'fallbackCondition' => 'int',
        'isRepeat' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tags' => null,
        'cardholderVerificationMethodUsed' => null,
        'cardSequenceNumber' => null,
        'fallback' => null,
        'fallbackCondition' => null,
        'isRepeat' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'tags' => 'tags',
        'cardholderVerificationMethodUsed' => 'cardholderVerificationMethodUsed',
        'cardSequenceNumber' => 'cardSequenceNumber',
        'fallback' => 'fallback',
        'fallbackCondition' => 'fallbackCondition',
        'isRepeat' => 'isRepeat'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'tags' => 'setTags',
        'cardholderVerificationMethodUsed' => 'setCardholderVerificationMethodUsed',
        'cardSequenceNumber' => 'setCardSequenceNumber',
        'fallback' => 'setFallback',
        'fallbackCondition' => 'setFallbackCondition',
        'isRepeat' => 'setIsRepeat'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'tags' => 'getTags',
        'cardholderVerificationMethodUsed' => 'getCardholderVerificationMethodUsed',
        'cardSequenceNumber' => 'getCardSequenceNumber',
        'fallback' => 'getFallback',
        'fallbackCondition' => 'getFallbackCondition',
        'isRepeat' => 'getIsRepeat'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['cardholderVerificationMethodUsed'] = isset($data['cardholderVerificationMethodUsed']) ? $data['cardholderVerificationMethodUsed'] : null;
        $this->container['cardSequenceNumber'] = isset($data['cardSequenceNumber']) ? $data['cardSequenceNumber'] : null;
        $this->container['fallback'] = isset($data['fallback']) ? $data['fallback'] : null;
        $this->container['fallbackCondition'] = isset($data['fallbackCondition']) ? $data['fallbackCondition'] : null;
        $this->container['isRepeat'] = isset($data['isRepeat']) ? $data['isRepeat'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets tags
     * @return string
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string $tags EMV data that is transmitted from the chip card to the issuer, and from the issuer to the chip card. The EMV data is in the tag-length-value format and includes chip card tags, terminal tags, and transaction detail tags.  For information about the individual tags, see the “Application Specification” section in the EMV 4.3 Specifications: http://emvco.com  **Note** Card present information about EMV applies only to credit card processing and PIN debit processing. All other card present information applies only to credit card processing. PIN debit processing is available only on FDC Nashville Global.  **Important** The following tags contain sensitive information and **must not** be included in this field:   - `56`: Track 1 equivalent data  - `57`: Track 2 equivalent data  - `5A`: Application PAN  - `5F20`: Cardholder name  - `5F24`: Application expiration date (This sensitivity has been relaxed for Credit Mutuel-CIC, American Express Direct, FDC Nashville Global, First Data Merchant Solutions, and SIX)  - `99`: Transaction PIN  - `9F0B`: Cardholder name (extended)  - `9F1F`: Track 1 discretionary data  - `9F20`: Track 2 discretionary data  For captures, this field is required for contact EMV transactions. Otherwise, it is optional.  For credits, this field is required for contact EMV stand-alone credits and contactless EMV stand-alone credits. Otherwise, it is optional.  **Important** For contact EMV captures, contact EMV stand-alone credits, and contactless EMV stand-alone credits, you must include the following tags in this field. For all other types of EMV transactions, the following tags are optional.   - `95`: Terminal verification results  - `9F10`: Issuer application data  - `9F26`: Application cryptogram   #### CyberSource through VisaNet - In Japan: 199 bytes - In other countries: String (252)  #### GPX This field only supports transactions from the following card types: - Visa - Mastercard - AMEX - Discover - Diners - JCB - Union Pay International  #### JCN Gateway The following tags must be included: - `4F`: Application identifier - `84`: Dedicated file name  Data length: 199 bytes  #### All other processors: String (999)  #### Used by Authorization: Optional Authorization Reversal: Optional Credit: Optional PIN Debit processing (purchase, credit and reversal): Optional
     * @return $this
     */
    public function setTags($tags)
    {

        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets cardholderVerificationMethodUsed
     * @return int
     */
    public function getCardholderVerificationMethodUsed()
    {
        return $this->container['cardholderVerificationMethodUsed'];
    }

    /**
     * Sets cardholderVerificationMethodUsed
     * @param int $cardholderVerificationMethodUsed Method that was used to verify the cardholder's identity.  Possible values:  - `0`: No verification  - `1`: Signature  This field is supported only on **American Express Direct**.
     * @return $this
     */
    public function setCardholderVerificationMethodUsed($cardholderVerificationMethodUsed)
    {
        $this->container['cardholderVerificationMethodUsed'] = $cardholderVerificationMethodUsed;

        return $this;
    }

    /**
     * Gets cardSequenceNumber
     * @return string
     */
    public function getCardSequenceNumber()
    {
        return $this->container['cardSequenceNumber'];
    }

    /**
     * Sets cardSequenceNumber
     * @param string $cardSequenceNumber Number assigned to a specific card when two or more cards are associated with the same primary account number.  This value enables issuers to distinguish among multiple cards that are linked to the same account.  This value can also act as a tracking tool when reissuing cards.   When this value is available, it is provided by the chip reader.   When the chip reader does not provide this value, do not include this field in your request.  When sequence number is not provided via this API field, the value is extracted from EMV tag 5F34 for Mastercard transactions. To enable this feature please call support.  **Note** Card present information about EMV applies only to credit card processing and PIN debit processing.  All other card present information applies only to credit card processing.   PIN debit processing is available only on CyberSource through VisaNet and FDC Nashville Global.  #### Used by Authorization: Optional PIN Debit processing: Optional  #### GPX  This field only supports transactions from the following card types: - Visa - Mastercard - AMEX - Discover - Diners - JCB - Union Pay International
     * @return $this
     */
    public function setCardSequenceNumber($cardSequenceNumber)
    {

        $this->container['cardSequenceNumber'] = $cardSequenceNumber;

        return $this;
    }

    /**
     * Gets fallback
     * @return bool
     */
    public function getFallback()
    {
        return $this->container['fallback'];
    }

    /**
     * Sets fallback
     * @param bool $fallback Indicates whether a fallback method was used to enter credit card information into the POS terminal. When a technical problem prevents a successful exchange of information between a chip card and a chip-capable terminal:   1. Swipe the card or key the credit card information into the POS terminal.  2. Use the pointOfSaleInformation.entryMode field to indicate whether the information was swiped or keyed.   Possible values: - `true`: Fallback method was used. - `false` (default): Fallback method was not used.  This field is supported only on American Express Direct, Chase Paymentech Solutions, CyberSource through VisaNet, FDC Nashville Global, GPN, JCN Gateway, OmniPay Direct, and SIX.
     * @return $this
     */
    public function setFallback($fallback)
    {
        $this->container['fallback'] = $fallback;

        return $this;
    }

    /**
     * Gets fallbackCondition
     * @return int
     */
    public function getFallbackCondition()
    {
        return $this->container['fallbackCondition'];
    }

    /**
     * Sets fallbackCondition
     * @param int $fallbackCondition Reason for the EMV fallback transaction. An EMV fallback transaction occurs when an EMV transaction fails for one of these reasons:   - Technical failure: the EMV terminal or EMV card cannot read and process chip data.  - Empty candidate list failure: the EMV terminal does not have any applications in common with the EMV card.    EMV terminals are coded to determine whether the terminal and EMV card have any applications in common.    EMV terminals provide this information to you.  Possible values:   - `1`: Transaction was initiated with information from a magnetic stripe, and the previous transaction at the     EMV terminal either used information from a successful chip read or it was not a chip transaction.  - `2`: Transaction was initiated with information from a magnetic stripe, and the previous transaction at the     EMV terminal was an EMV fallback transaction because the attempted chip read was unsuccessful.  This field is supported only on **GPN** and **JCN Gateway**. **NOTE**: This field is required when an EMV transaction fails for a technical reason. Do not include this field when the EMV terminal does not have any applications in common with the EMV card.
     * @return $this
     */
    public function setFallbackCondition($fallbackCondition)
    {
        $this->container['fallbackCondition'] = $fallbackCondition;

        return $this;
    }

    /**
     * Gets isRepeat
     * @return bool
     */
    public function getIsRepeat()
    {
        return $this->container['isRepeat'];
    }

    /**
     * Sets isRepeat
     * @param bool $isRepeat #### Visa Platform Connect Value “true” indicates this transaction is intentionally duplicated . The field contains value “true” which indicates that merchant has intentionally duplicated single tap transaction. Merchant is intentionally sending a duplicate auth request for a single tap txn because the issuer requested a PIN.
     * @return $this
     */
    public function setIsRepeat($isRepeat)
    {
        $this->container['isRepeat'] = $isRepeat;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


