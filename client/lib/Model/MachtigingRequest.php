<?php
/**
 * MachtigingRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  P4NL_DATABASE_INTERFACE
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GPN.RegistrerenApi
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace P4NL_DATABASE_INTERFACE\Model;

use \ArrayAccess;
use \P4NL_DATABASE_INTERFACE\ObjectSerializer;

/**
 * MachtigingRequest Class Doc Comment
 *
 * @category Class
 * @package  P4NL_DATABASE_INTERFACE
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MachtigingRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MachtigingRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketingcode' => 'string',
        'literatuurcode' => 'string',
        'initialen' => 'string',
        'voornaam' => 'string',
        'tussenvoegsel' => 'string',
        'achternaam' => 'string',
        'geslacht' => 'string',
        'email' => 'string',
        'registreer_email_niewsbrief' => 'bool',
        'guid' => 'string',
        'geboortedatum' => '\DateTime',
        'telefoonnummer' => 'string',
        'mobielnummer' => 'string',
        'straat' => 'string',
        'huisnummer' => 'string',
        'huisnummertoevoeging' => 'string',
        'postcode' => 'string',
        'woonplaats' => 'string',
        'landcode' => 'string',
        'bedrag' => 'double',
        'rekeningnummer' => 'string',
        'machtigingtype' => 'string',
        'einddatum' => '\DateTime',
        'looptijd' => 'string',
        'extra_informatie' => 'string',
        'contact_guid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'marketingcode' => null,
        'literatuurcode' => null,
        'initialen' => null,
        'voornaam' => null,
        'tussenvoegsel' => null,
        'achternaam' => null,
        'geslacht' => null,
        'email' => null,
        'registreer_email_niewsbrief' => null,
        'guid' => null,
        'geboortedatum' => 'date-time',
        'telefoonnummer' => null,
        'mobielnummer' => null,
        'straat' => null,
        'huisnummer' => null,
        'huisnummertoevoeging' => null,
        'postcode' => null,
        'woonplaats' => null,
        'landcode' => null,
        'bedrag' => 'double',
        'rekeningnummer' => null,
        'machtigingtype' => null,
        'einddatum' => 'date-time',
        'looptijd' => null,
        'extra_informatie' => null,
        'contact_guid' => 'uuid'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketingcode' => 'marketingcode',
        'literatuurcode' => 'literatuurcode',
        'initialen' => 'initialen',
        'voornaam' => 'voornaam',
        'tussenvoegsel' => 'tussenvoegsel',
        'achternaam' => 'achternaam',
        'geslacht' => 'geslacht',
        'email' => 'email',
        'registreer_email_niewsbrief' => 'registreerEmailNiewsbrief',
        'guid' => 'guid',
        'geboortedatum' => 'geboortedatum',
        'telefoonnummer' => 'telefoonnummer',
        'mobielnummer' => 'mobielnummer',
        'straat' => 'straat',
        'huisnummer' => 'huisnummer',
        'huisnummertoevoeging' => 'huisnummertoevoeging',
        'postcode' => 'postcode',
        'woonplaats' => 'woonplaats',
        'landcode' => 'landcode',
        'bedrag' => 'bedrag',
        'rekeningnummer' => 'rekeningnummer',
        'machtigingtype' => 'machtigingtype',
        'einddatum' => 'einddatum',
        'looptijd' => 'looptijd',
        'extra_informatie' => 'extraInformatie',
        'contact_guid' => 'contactGuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketingcode' => 'setMarketingcode',
        'literatuurcode' => 'setLiteratuurcode',
        'initialen' => 'setInitialen',
        'voornaam' => 'setVoornaam',
        'tussenvoegsel' => 'setTussenvoegsel',
        'achternaam' => 'setAchternaam',
        'geslacht' => 'setGeslacht',
        'email' => 'setEmail',
        'registreer_email_niewsbrief' => 'setRegistreerEmailNiewsbrief',
        'guid' => 'setGuid',
        'geboortedatum' => 'setGeboortedatum',
        'telefoonnummer' => 'setTelefoonnummer',
        'mobielnummer' => 'setMobielnummer',
        'straat' => 'setStraat',
        'huisnummer' => 'setHuisnummer',
        'huisnummertoevoeging' => 'setHuisnummertoevoeging',
        'postcode' => 'setPostcode',
        'woonplaats' => 'setWoonplaats',
        'landcode' => 'setLandcode',
        'bedrag' => 'setBedrag',
        'rekeningnummer' => 'setRekeningnummer',
        'machtigingtype' => 'setMachtigingtype',
        'einddatum' => 'setEinddatum',
        'looptijd' => 'setLooptijd',
        'extra_informatie' => 'setExtraInformatie',
        'contact_guid' => 'setContactGuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketingcode' => 'getMarketingcode',
        'literatuurcode' => 'getLiteratuurcode',
        'initialen' => 'getInitialen',
        'voornaam' => 'getVoornaam',
        'tussenvoegsel' => 'getTussenvoegsel',
        'achternaam' => 'getAchternaam',
        'geslacht' => 'getGeslacht',
        'email' => 'getEmail',
        'registreer_email_niewsbrief' => 'getRegistreerEmailNiewsbrief',
        'guid' => 'getGuid',
        'geboortedatum' => 'getGeboortedatum',
        'telefoonnummer' => 'getTelefoonnummer',
        'mobielnummer' => 'getMobielnummer',
        'straat' => 'getStraat',
        'huisnummer' => 'getHuisnummer',
        'huisnummertoevoeging' => 'getHuisnummertoevoeging',
        'postcode' => 'getPostcode',
        'woonplaats' => 'getWoonplaats',
        'landcode' => 'getLandcode',
        'bedrag' => 'getBedrag',
        'rekeningnummer' => 'getRekeningnummer',
        'machtigingtype' => 'getMachtigingtype',
        'einddatum' => 'getEinddatum',
        'looptijd' => 'getLooptijd',
        'extra_informatie' => 'getExtraInformatie',
        'contact_guid' => 'getContactGuid'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['marketingcode'] = isset($data['marketingcode']) ? $data['marketingcode'] : null;
        $this->container['literatuurcode'] = isset($data['literatuurcode']) ? $data['literatuurcode'] : null;
        $this->container['initialen'] = isset($data['initialen']) ? $data['initialen'] : null;
        $this->container['voornaam'] = isset($data['voornaam']) ? $data['voornaam'] : null;
        $this->container['tussenvoegsel'] = isset($data['tussenvoegsel']) ? $data['tussenvoegsel'] : null;
        $this->container['achternaam'] = isset($data['achternaam']) ? $data['achternaam'] : null;
        $this->container['geslacht'] = isset($data['geslacht']) ? $data['geslacht'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['registreer_email_niewsbrief'] = isset($data['registreer_email_niewsbrief']) ? $data['registreer_email_niewsbrief'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['geboortedatum'] = isset($data['geboortedatum']) ? $data['geboortedatum'] : null;
        $this->container['telefoonnummer'] = isset($data['telefoonnummer']) ? $data['telefoonnummer'] : null;
        $this->container['mobielnummer'] = isset($data['mobielnummer']) ? $data['mobielnummer'] : null;
        $this->container['straat'] = isset($data['straat']) ? $data['straat'] : null;
        $this->container['huisnummer'] = isset($data['huisnummer']) ? $data['huisnummer'] : null;
        $this->container['huisnummertoevoeging'] = isset($data['huisnummertoevoeging']) ? $data['huisnummertoevoeging'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['woonplaats'] = isset($data['woonplaats']) ? $data['woonplaats'] : null;
        $this->container['landcode'] = isset($data['landcode']) ? $data['landcode'] : null;
        $this->container['bedrag'] = isset($data['bedrag']) ? $data['bedrag'] : null;
        $this->container['rekeningnummer'] = isset($data['rekeningnummer']) ? $data['rekeningnummer'] : null;
        $this->container['machtigingtype'] = isset($data['machtigingtype']) ? $data['machtigingtype'] : null;
        $this->container['einddatum'] = isset($data['einddatum']) ? $data['einddatum'] : null;
        $this->container['looptijd'] = isset($data['looptijd']) ? $data['looptijd'] : null;
        $this->container['extra_informatie'] = isset($data['extra_informatie']) ? $data['extra_informatie'] : null;
        $this->container['contact_guid'] = isset($data['contact_guid']) ? $data['contact_guid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketingcode'] === null) {
            $invalidProperties[] = "'marketingcode' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets marketingcode
     *
     * @return string
     */
    public function getMarketingcode()
    {
        return $this->container['marketingcode'];
    }

    /**
     * Sets marketingcode
     *
     * @param string $marketingcode marketingcode
     *
     * @return $this
     */
    public function setMarketingcode($marketingcode)
    {
        $this->container['marketingcode'] = $marketingcode;

        return $this;
    }

    /**
     * Gets literatuurcode
     *
     * @return string
     */
    public function getLiteratuurcode()
    {
        return $this->container['literatuurcode'];
    }

    /**
     * Sets literatuurcode
     *
     * @param string $literatuurcode literatuurcode
     *
     * @return $this
     */
    public function setLiteratuurcode($literatuurcode)
    {
        $this->container['literatuurcode'] = $literatuurcode;

        return $this;
    }

    /**
     * Gets initialen
     *
     * @return string
     */
    public function getInitialen()
    {
        return $this->container['initialen'];
    }

    /**
     * Sets initialen
     *
     * @param string $initialen initialen
     *
     * @return $this
     */
    public function setInitialen($initialen)
    {
        $this->container['initialen'] = $initialen;

        return $this;
    }

    /**
     * Gets voornaam
     *
     * @return string
     */
    public function getVoornaam()
    {
        return $this->container['voornaam'];
    }

    /**
     * Sets voornaam
     *
     * @param string $voornaam voornaam
     *
     * @return $this
     */
    public function setVoornaam($voornaam)
    {
        $this->container['voornaam'] = $voornaam;

        return $this;
    }

    /**
     * Gets tussenvoegsel
     *
     * @return string
     */
    public function getTussenvoegsel()
    {
        return $this->container['tussenvoegsel'];
    }

    /**
     * Sets tussenvoegsel
     *
     * @param string $tussenvoegsel tussenvoegsel
     *
     * @return $this
     */
    public function setTussenvoegsel($tussenvoegsel)
    {
        $this->container['tussenvoegsel'] = $tussenvoegsel;

        return $this;
    }

    /**
     * Gets achternaam
     *
     * @return string
     */
    public function getAchternaam()
    {
        return $this->container['achternaam'];
    }

    /**
     * Sets achternaam
     *
     * @param string $achternaam achternaam
     *
     * @return $this
     */
    public function setAchternaam($achternaam)
    {
        $this->container['achternaam'] = $achternaam;

        return $this;
    }

    /**
     * Gets geslacht
     *
     * @return string
     */
    public function getGeslacht()
    {
        return $this->container['geslacht'];
    }

    /**
     * Sets geslacht
     *
     * @param string $geslacht geslacht
     *
     * @return $this
     */
    public function setGeslacht($geslacht)
    {
        $this->container['geslacht'] = $geslacht;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets registreer_email_niewsbrief
     *
     * @return bool
     */
    public function getRegistreerEmailNiewsbrief()
    {
        return $this->container['registreer_email_niewsbrief'];
    }

    /**
     * Sets registreer_email_niewsbrief
     *
     * @param bool $registreer_email_niewsbrief registreer_email_niewsbrief
     *
     * @return $this
     */
    public function setRegistreerEmailNiewsbrief($registreer_email_niewsbrief)
    {
        $this->container['registreer_email_niewsbrief'] = $registreer_email_niewsbrief;

        return $this;
    }

    /**
     * Gets guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
     * Sets guid
     *
     * @param string $guid guid
     *
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

        return $this;
    }

    /**
     * Gets geboortedatum
     *
     * @return \DateTime
     */
    public function getGeboortedatum()
    {
        return $this->container['geboortedatum'];
    }

    /**
     * Sets geboortedatum
     *
     * @param \DateTime $geboortedatum geboortedatum
     *
     * @return $this
     */
    public function setGeboortedatum($geboortedatum)
    {
        $this->container['geboortedatum'] = $geboortedatum;

        return $this;
    }

    /**
     * Gets telefoonnummer
     *
     * @return string
     */
    public function getTelefoonnummer()
    {
        return $this->container['telefoonnummer'];
    }

    /**
     * Sets telefoonnummer
     *
     * @param string $telefoonnummer telefoonnummer
     *
     * @return $this
     */
    public function setTelefoonnummer($telefoonnummer)
    {
        $this->container['telefoonnummer'] = $telefoonnummer;

        return $this;
    }

    /**
     * Gets mobielnummer
     *
     * @return string
     */
    public function getMobielnummer()
    {
        return $this->container['mobielnummer'];
    }

    /**
     * Sets mobielnummer
     *
     * @param string $mobielnummer mobielnummer
     *
     * @return $this
     */
    public function setMobielnummer($mobielnummer)
    {
        $this->container['mobielnummer'] = $mobielnummer;

        return $this;
    }

    /**
     * Gets straat
     *
     * @return string
     */
    public function getStraat()
    {
        return $this->container['straat'];
    }

    /**
     * Sets straat
     *
     * @param string $straat straat
     *
     * @return $this
     */
    public function setStraat($straat)
    {
        $this->container['straat'] = $straat;

        return $this;
    }

    /**
     * Gets huisnummer
     *
     * @return string
     */
    public function getHuisnummer()
    {
        return $this->container['huisnummer'];
    }

    /**
     * Sets huisnummer
     *
     * @param string $huisnummer huisnummer
     *
     * @return $this
     */
    public function setHuisnummer($huisnummer)
    {
        $this->container['huisnummer'] = $huisnummer;

        return $this;
    }

    /**
     * Gets huisnummertoevoeging
     *
     * @return string
     */
    public function getHuisnummertoevoeging()
    {
        return $this->container['huisnummertoevoeging'];
    }

    /**
     * Sets huisnummertoevoeging
     *
     * @param string $huisnummertoevoeging huisnummertoevoeging
     *
     * @return $this
     */
    public function setHuisnummertoevoeging($huisnummertoevoeging)
    {
        $this->container['huisnummertoevoeging'] = $huisnummertoevoeging;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets woonplaats
     *
     * @return string
     */
    public function getWoonplaats()
    {
        return $this->container['woonplaats'];
    }

    /**
     * Sets woonplaats
     *
     * @param string $woonplaats woonplaats
     *
     * @return $this
     */
    public function setWoonplaats($woonplaats)
    {
        $this->container['woonplaats'] = $woonplaats;

        return $this;
    }

    /**
     * Gets landcode
     *
     * @return string
     */
    public function getLandcode()
    {
        return $this->container['landcode'];
    }

    /**
     * Sets landcode
     *
     * @param string $landcode landcode
     *
     * @return $this
     */
    public function setLandcode($landcode)
    {
        $this->container['landcode'] = $landcode;

        return $this;
    }

    /**
     * Gets bedrag
     *
     * @return double
     */
    public function getBedrag()
    {
        return $this->container['bedrag'];
    }

    /**
     * Sets bedrag
     *
     * @param double $bedrag bedrag
     *
     * @return $this
     */
    public function setBedrag($bedrag)
    {
        $this->container['bedrag'] = $bedrag;

        return $this;
    }

    /**
     * Gets rekeningnummer
     *
     * @return string
     */
    public function getRekeningnummer()
    {
        return $this->container['rekeningnummer'];
    }

    /**
     * Sets rekeningnummer
     *
     * @param string $rekeningnummer rekeningnummer
     *
     * @return $this
     */
    public function setRekeningnummer($rekeningnummer)
    {
        $this->container['rekeningnummer'] = $rekeningnummer;

        return $this;
    }

    /**
     * Gets machtigingtype
     *
     * @return string
     */
    public function getMachtigingtype()
    {
        return $this->container['machtigingtype'];
    }

    /**
     * Sets machtigingtype
     *
     * @param string $machtigingtype machtigingtype
     *
     * @return $this
     */
    public function setMachtigingtype($machtigingtype)
    {
        $this->container['machtigingtype'] = $machtigingtype;

        return $this;
    }

    /**
     * Gets einddatum
     *
     * @return \DateTime
     */
    public function getEinddatum()
    {
        return $this->container['einddatum'];
    }

    /**
     * Sets einddatum
     *
     * @param \DateTime $einddatum einddatum
     *
     * @return $this
     */
    public function setEinddatum($einddatum)
    {
        $this->container['einddatum'] = $einddatum;

        return $this;
    }

    /**
     * Gets looptijd
     *
     * @return string
     */
    public function getLooptijd()
    {
        return $this->container['looptijd'];
    }

    /**
     * Sets looptijd
     *
     * @param string $looptijd looptijd
     *
     * @return $this
     */
    public function setLooptijd($looptijd)
    {
        $this->container['looptijd'] = $looptijd;

        return $this;
    }

    /**
     * Gets extra_informatie
     *
     * @return string
     */
    public function getExtraInformatie()
    {
        return $this->container['extra_informatie'];
    }

    /**
     * Sets extra_informatie
     *
     * @param string $extra_informatie extra_informatie
     *
     * @return $this
     */
    public function setExtraInformatie($extra_informatie)
    {
        $this->container['extra_informatie'] = $extra_informatie;

        return $this;
    }

    /**
     * Gets contact_guid
     *
     * @return string
     */
    public function getContactGuid()
    {
        return $this->container['contact_guid'];
    }

    /**
     * Sets contact_guid
     *
     * @param string $contact_guid contact_guid
     *
     * @return $this
     */
    public function setContactGuid($contact_guid)
    {
        $this->container['contact_guid'] = $contact_guid;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


