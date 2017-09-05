<?php
/**
 * FrameworkDataVideoContentInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Community
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * FrameworkDataVideoContentInterface Class Doc Comment
 *
 * @category    Class */
 // @description Video Content data interface
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FrameworkDataVideoContentInterface implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'framework-data-video-content-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'media_type' => 'string',
        'video_provider' => 'string',
        'video_url' => 'string',
        'video_title' => 'string',
        'video_description' => 'string',
        'video_metadata' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'media_type' => 'media_type',
        'video_provider' => 'video_provider',
        'video_url' => 'video_url',
        'video_title' => 'video_title',
        'video_description' => 'video_description',
        'video_metadata' => 'video_metadata'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'media_type' => 'setMediaType',
        'video_provider' => 'setVideoProvider',
        'video_url' => 'setVideoUrl',
        'video_title' => 'setVideoTitle',
        'video_description' => 'setVideoDescription',
        'video_metadata' => 'setVideoMetadata'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'media_type' => 'getMediaType',
        'video_provider' => 'getVideoProvider',
        'video_url' => 'getVideoUrl',
        'video_title' => 'getVideoTitle',
        'video_description' => 'getVideoDescription',
        'video_metadata' => 'getVideoMetadata'
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
        $this->container['media_type'] = isset($data['media_type']) ? $data['media_type'] : null;
        $this->container['video_provider'] = isset($data['video_provider']) ? $data['video_provider'] : null;
        $this->container['video_url'] = isset($data['video_url']) ? $data['video_url'] : null;
        $this->container['video_title'] = isset($data['video_title']) ? $data['video_title'] : null;
        $this->container['video_description'] = isset($data['video_description']) ? $data['video_description'] : null;
        $this->container['video_metadata'] = isset($data['video_metadata']) ? $data['video_metadata'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['media_type'] === null) {
            $invalid_properties[] = "'media_type' can't be null";
        }
        if ($this->container['video_provider'] === null) {
            $invalid_properties[] = "'video_provider' can't be null";
        }
        if ($this->container['video_url'] === null) {
            $invalid_properties[] = "'video_url' can't be null";
        }
        if ($this->container['video_title'] === null) {
            $invalid_properties[] = "'video_title' can't be null";
        }
        if ($this->container['video_description'] === null) {
            $invalid_properties[] = "'video_description' can't be null";
        }
        if ($this->container['video_metadata'] === null) {
            $invalid_properties[] = "'video_metadata' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['media_type'] === null) {
            return false;
        }
        if ($this->container['video_provider'] === null) {
            return false;
        }
        if ($this->container['video_url'] === null) {
            return false;
        }
        if ($this->container['video_title'] === null) {
            return false;
        }
        if ($this->container['video_description'] === null) {
            return false;
        }
        if ($this->container['video_metadata'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets media_type
     * @return string
     */
    public function getMediaType()
    {
        return $this->container['media_type'];
    }

    /**
     * Sets media_type
     * @param string $media_type MIME type
     * @return $this
     */
    public function setMediaType($media_type)
    {
        $this->container['media_type'] = $media_type;

        return $this;
    }

    /**
     * Gets video_provider
     * @return string
     */
    public function getVideoProvider()
    {
        return $this->container['video_provider'];
    }

    /**
     * Sets video_provider
     * @param string $video_provider Provider
     * @return $this
     */
    public function setVideoProvider($video_provider)
    {
        $this->container['video_provider'] = $video_provider;

        return $this;
    }

    /**
     * Gets video_url
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->container['video_url'];
    }

    /**
     * Sets video_url
     * @param string $video_url Video URL
     * @return $this
     */
    public function setVideoUrl($video_url)
    {
        $this->container['video_url'] = $video_url;

        return $this;
    }

    /**
     * Gets video_title
     * @return string
     */
    public function getVideoTitle()
    {
        return $this->container['video_title'];
    }

    /**
     * Sets video_title
     * @param string $video_title Title
     * @return $this
     */
    public function setVideoTitle($video_title)
    {
        $this->container['video_title'] = $video_title;

        return $this;
    }

    /**
     * Gets video_description
     * @return string
     */
    public function getVideoDescription()
    {
        return $this->container['video_description'];
    }

    /**
     * Sets video_description
     * @param string $video_description Video Description
     * @return $this
     */
    public function setVideoDescription($video_description)
    {
        $this->container['video_description'] = $video_description;

        return $this;
    }

    /**
     * Gets video_metadata
     * @return string
     */
    public function getVideoMetadata()
    {
        return $this->container['video_metadata'];
    }

    /**
     * Sets video_metadata
     * @param string $video_metadata Metadata
     * @return $this
     */
    public function setVideoMetadata($video_metadata)
    {
        $this->container['video_metadata'] = $video_metadata;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}