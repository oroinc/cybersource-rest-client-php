<?php
/**
 * Ptsv2paymentsBuyerInformationPersonalIdentification
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
 * Ptsv2paymentsBuyerInformationPersonalIdentification Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsBuyerInformationPersonalIdentification implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_buyerInformation_personalIdentification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'id' => 'string',
        'issuedBy' => 'string',
        'verificationResults' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'id' => null,
        'issuedBy' => null,
        'verificationResults' => null
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
        'type' => 'type',
        'id' => 'id',
        'issuedBy' => 'issuedBy',
        'verificationResults' => 'verificationResults'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'issuedBy' => 'setIssuedBy',
        'verificationResults' => 'setVerificationResults'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'issuedBy' => 'getIssuedBy',
        'verificationResults' => 'getVerificationResults'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['issuedBy'] = isset($data['issuedBy']) ? $data['issuedBy'] : null;
        $this->container['verificationResults'] = isset($data['verificationResults']) ? $data['verificationResults'] : null;
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of the identification.  Possible values:   - `NATIONAL`   - `CPF`   - `CPNJ`   - `CURP`   - `SSN`   - `DRIVER_LICENSE`   - `PASSPORT_NUMBER`   - `PERSONAL_ID`   - `TAX_ID`  This field is supported only on the following processors.  #### ComercioLatino Set this field to the Cadastro de Pessoas Fisicas (CPF).  #### CyberSource Latin American Processing Supported for Redecard in Brazil. Set this field to the Cadastro de Pessoas Fisicas (CPF), which is required for AVS for Redecard in Brazil. **Note** CyberSource Latin American Processing is the name of a specific processing connection that CyberSource supports. In the CyberSource API documentation, CyberSource Latin American Processing does not refer to the general topic of processing in Latin America. The information in this field description is for the specific processing connection called CyberSource Latin American Processing. It is not for any other Latin American processors that CyberSource supports.  For processor-specific information, see the `personal_id` field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The value of the identification type. This field is supported only on the following processors.  #### ComercioLatino Set this field to the Cadastro de Pessoas Fisicas (CPF).  #### CyberSource Latin American Processing Supported for Redecard in Brazil. Set this field to the Cadastro de Pessoas Fisicas (CPF), which is required for AVS for Redecard in Brazil. **Note** CyberSource Latin American Processing is the name of a specific processing connection that CyberSource supports. In the CyberSource API documentation, CyberSource Latin American Processing does not refer to the general topic of processing in Latin America. The information in this field description is for the specific processing connection called CyberSource Latin American Processing. It is not for any other Latin American processors that CyberSource supports.  For processor-specific information, see the `personal_id` field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)    If `type = PASSPORT`, this is the cardholder's passport number. Recommended for Discover ProtectBuy.
     * @return $this
     */
    public function setId($id)
    {

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets issuedBy
     * @return string
     */
    public function getIssuedBy()
    {
        return $this->container['issuedBy'];
    }

    /**
     * Sets issuedBy
     * @param string $issuedBy The government agency that issued the driver's license or passport.  If **type**` = DRIVER_LICENSE`, this is the State or province where the customer’s driver’s license was issued.  If **type**` = PASSPORT`, this is the Issuing country for the cardholder’s passport. Recommended for Discover ProtectBuy.  Use the two-character [State, Province, and Territory Codes for the United States and Canada](https://developer.cybersource.com/library/documentation/sbc/quickref/states_and_provinces.pdf).  #### TeleCheck Contact your TeleCheck representative to find out whether this field is required or optional.  #### All Other Processors Not used.  For details about the country that issued the passport, see `customer_passport_country` field description in [CyberSource Payer Authentication Using the SCMP API] (https://apps.cybersource.com/library/documentation/dev_guides/Payer_Authentication_SCMP_API/html/)  For details about the state or province that issued the passport, see `driver_license_state` field description in [Electronic Check Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/EChecks_SCMP_API/html/)
     * @return $this
     */
    public function setIssuedBy($issuedBy)
    {
        $this->container['issuedBy'] = $issuedBy;

        return $this;
    }

    /**
     * Gets verificationResults
     * @return string
     */
    public function getVerificationResults()
    {
        return $this->container['verificationResults'];
    }

    /**
     * Sets verificationResults
     * @param string $verificationResults Verification results received from Issuer or Card Network for verification transactions. Response Only Field.
     * @return $this
     */
    public function setVerificationResults($verificationResults)
    {
        $this->container['verificationResults'] = $verificationResults;

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


