<?php
/**
 * ContentTranslation
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  EC\CNS\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CNS REST-API
 *
 * Version v1.2.0 of Corporate Notification System (CNS) REST API.
 *
 * The version of the OpenAPI document: v1.2.0
 * Contact: DIGIT-CNS-SUPPORT@ec.europa.eu
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EC\CNS\Client\Model;

use \ArrayAccess;
use \EC\CNS\Client\ObjectSerializer;

/**
 * ContentTranslation Class Doc Comment
 *
 * @category Class
 * @description The internationalizable part of a notification.
 * @package  EC\CNS\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContentTranslation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContentTranslation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subject' => 'string',
        'summary' => 'string',
        'body' => 'string',
        'language' => 'string',
        'links' => '\EC\CNS\Client\Model\Link[]',
        'category_label' => 'string',
        'attachments' => '\EC\CNS\Client\Model\Attachment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'subject' => null,
        'summary' => null,
        'body' => null,
        'language' => null,
        'links' => null,
        'category_label' => null,
        'attachments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'subject' => false,
		'summary' => false,
		'body' => false,
		'language' => false,
		'links' => false,
		'category_label' => false,
		'attachments' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'subject' => 'subject',
        'summary' => 'summary',
        'body' => 'body',
        'language' => 'language',
        'links' => 'links',
        'category_label' => 'categoryLabel',
        'attachments' => 'attachments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subject' => 'setSubject',
        'summary' => 'setSummary',
        'body' => 'setBody',
        'language' => 'setLanguage',
        'links' => 'setLinks',
        'category_label' => 'setCategoryLabel',
        'attachments' => 'setAttachments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subject' => 'getSubject',
        'summary' => 'getSummary',
        'body' => 'getBody',
        'language' => 'getLanguage',
        'links' => 'getLinks',
        'category_label' => 'getCategoryLabel',
        'attachments' => 'getAttachments'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('body', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('links', $data ?? [], null);
        $this->setIfExists('category_label', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject The notification's subject.
     *
     * @return self
     */
    public function setSubject($subject)
    {

        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string|null $summary A summary of the notification.
     *
     * @return self
     */
    public function setSummary($summary)
    {

        if (is_null($summary)) {
            throw new \InvalidArgumentException('non-nullable summary cannot be null');
        }

        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body The text of the notification.
     *
     * @return self
     */
    public function setBody($body)
    {

        if (is_null($body)) {
            throw new \InvalidArgumentException('non-nullable body cannot be null');
        }

        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language The language of the content. Can be one of EN, FR or DE.
     *
     * @return self
     */
    public function setLanguage($language)
    {

        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }

        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \EC\CNS\Client\Model\Link[]|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \EC\CNS\Client\Model\Link[]|null $links Optional list of URLs.
     *
     * @return self
     */
    public function setLinks($links)
    {

        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }

        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets category_label
     *
     * @return string|null
     */
    public function getCategoryLabel()
    {
        return $this->container['category_label'];
    }

    /**
     * Sets category_label
     *
     * @param string|null $category_label Optional category for a notification (free text).
     *
     * @return self
     */
    public function setCategoryLabel($category_label)
    {

        if (is_null($category_label)) {
            throw new \InvalidArgumentException('non-nullable category_label cannot be null');
        }

        $this->container['category_label'] = $category_label;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \EC\CNS\Client\Model\Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \EC\CNS\Client\Model\Attachment[]|null $attachments Optional list of attachments. Total length of all attachments is limited to 30MB. If maximum value is excedeed, an error is reported.
     *
     * @return self
     */
    public function setAttachments($attachments)
    {

        if (is_null($attachments)) {
            throw new \InvalidArgumentException('non-nullable attachments cannot be null');
        }

        $this->container['attachments'] = $attachments;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


