<?php
/**
 * Attachment
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
 * Attachment Class Doc Comment
 *
 * @category Class
 * @description Attachment for a notification.
 * @package  EC\CNS\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Attachment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Attachment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attachment_id' => 'int',
        'name' => 'string',
        'length' => 'int',
        'mime_type' => 'string',
        'inline' => 'bool',
        'content' => 'string',
        'content_base64' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attachment_id' => 'int64',
        'name' => null,
        'length' => 'int64',
        'mime_type' => null,
        'inline' => null,
        'content' => null,
        'content_base64' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attachment_id' => false,
		'name' => false,
		'length' => false,
		'mime_type' => false,
		'inline' => false,
		'content' => false,
		'content_base64' => false
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
        'attachment_id' => 'attachmentId',
        'name' => 'name',
        'length' => 'length',
        'mime_type' => 'mimeType',
        'inline' => 'inline',
        'content' => 'content',
        'content_base64' => 'contentBase64'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachment_id' => 'setAttachmentId',
        'name' => 'setName',
        'length' => 'setLength',
        'mime_type' => 'setMimeType',
        'inline' => 'setInline',
        'content' => 'setContent',
        'content_base64' => 'setContentBase64'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachment_id' => 'getAttachmentId',
        'name' => 'getName',
        'length' => 'getLength',
        'mime_type' => 'getMimeType',
        'inline' => 'getInline',
        'content' => 'getContent',
        'content_base64' => 'getContentBase64'
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
        $this->setIfExists('attachment_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('mime_type', $data ?? [], null);
        $this->setIfExists('inline', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('content_base64', $data ?? [], null);
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
     * Gets attachment_id
     *
     * @return int|null
     */
    public function getAttachmentId()
    {
        return $this->container['attachment_id'];
    }

    /**
     * Sets attachment_id
     *
     * @param int|null $attachment_id The unique attachment identifier. Ignored when submitting a notification, present when retrieving a notification.
     *
     * @return self
     */
    public function setAttachmentId($attachment_id)
    {

        if (is_null($attachment_id)) {
            throw new \InvalidArgumentException('non-nullable attachment_id cannot be null');
        }

        $this->container['attachment_id'] = $attachment_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Attachment file name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int|null $length The attachment's size. Currently, the maximum allowed size is 10MB.
     *
     * @return self
     */
    public function setLength($length)
    {

        if (is_null($length)) {
            throw new \InvalidArgumentException('non-nullable length cannot be null');
        }

        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets mime_type
     *
     * @return string|null
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     *
     * @param string|null $mime_type The content's mime type, such as application/pdf.
     *
     * @return self
     */
    public function setMimeType($mime_type)
    {

        if (is_null($mime_type)) {
            throw new \InvalidArgumentException('non-nullable mime_type cannot be null');
        }

        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets inline
     *
     * @return bool|null
     */
    public function getInline()
    {
        return $this->container['inline'];
    }

    /**
     * Sets inline
     *
     * @param bool|null $inline Whether the attachment is inline (e.g. inline image) or not.
     *
     * @return self
     */
    public function setInline($inline)
    {

        if (is_null($inline)) {
            throw new \InvalidArgumentException('non-nullable inline cannot be null');
        }

        $this->container['inline'] = $inline;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content The attachment's content. Used when submitting a string attachment (it will not be included when retrieving notifications). This field is deprecated and the contentBase64 should be used instead (by encoding any provided data in Base64).
     *
     * @return self
     */
    public function setContent($content)
    {

        if (is_null($content)) {
            throw new \InvalidArgumentException('non-nullable content cannot be null');
        }

        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets content_base64
     *
     * @return string|null
     */
    public function getContentBase64()
    {
        return $this->container['content_base64'];
    }

    /**
     * Sets content_base64
     *
     * @param string|null $content_base64 The attachment's content encoded as base64 (for a non-text content). It's mandatory when submitting a binary attachment (it will not be included when retrieving notifications). To add string to the attachment use: contentBase64 = base64.encode(original_string).
     *
     * @return self
     */
    public function setContentBase64($content_base64)
    {

        if (is_null($content_base64)) {
            throw new \InvalidArgumentException('non-nullable content_base64 cannot be null');
        }

        $this->container['content_base64'] = $content_base64;

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


