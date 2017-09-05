<?php
/**
 * CatalogDataProductCustomOptionInterface
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
 * CatalogDataProductCustomOptionInterface Class Doc Comment
 *
 * @category    Class */
 // @description 
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CatalogDataProductCustomOptionInterface implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'catalog-data-product-custom-option-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_sku' => 'string',
        'option_id' => 'int',
        'title' => 'string',
        'type' => 'string',
        'sort_order' => 'int',
        'is_require' => 'bool',
        'price' => 'float',
        'price_type' => 'string',
        'sku' => 'string',
        'file_extension' => 'string',
        'max_characters' => 'int',
        'image_size_x' => 'int',
        'image_size_y' => 'int',
        'values' => '\Swagger\Client\Model\CatalogDataProductCustomOptionValuesInterface[]',
        'extension_attributes' => '\Swagger\Client\Model\CatalogDataProductCustomOptionExtensionInterface'
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
        'product_sku' => 'product_sku',
        'option_id' => 'option_id',
        'title' => 'title',
        'type' => 'type',
        'sort_order' => 'sort_order',
        'is_require' => 'is_require',
        'price' => 'price',
        'price_type' => 'price_type',
        'sku' => 'sku',
        'file_extension' => 'file_extension',
        'max_characters' => 'max_characters',
        'image_size_x' => 'image_size_x',
        'image_size_y' => 'image_size_y',
        'values' => 'values',
        'extension_attributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'product_sku' => 'setProductSku',
        'option_id' => 'setOptionId',
        'title' => 'setTitle',
        'type' => 'setType',
        'sort_order' => 'setSortOrder',
        'is_require' => 'setIsRequire',
        'price' => 'setPrice',
        'price_type' => 'setPriceType',
        'sku' => 'setSku',
        'file_extension' => 'setFileExtension',
        'max_characters' => 'setMaxCharacters',
        'image_size_x' => 'setImageSizeX',
        'image_size_y' => 'setImageSizeY',
        'values' => 'setValues',
        'extension_attributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'product_sku' => 'getProductSku',
        'option_id' => 'getOptionId',
        'title' => 'getTitle',
        'type' => 'getType',
        'sort_order' => 'getSortOrder',
        'is_require' => 'getIsRequire',
        'price' => 'getPrice',
        'price_type' => 'getPriceType',
        'sku' => 'getSku',
        'file_extension' => 'getFileExtension',
        'max_characters' => 'getMaxCharacters',
        'image_size_x' => 'getImageSizeX',
        'image_size_y' => 'getImageSizeY',
        'values' => 'getValues',
        'extension_attributes' => 'getExtensionAttributes'
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
        $this->container['product_sku'] = isset($data['product_sku']) ? $data['product_sku'] : null;
        $this->container['option_id'] = isset($data['option_id']) ? $data['option_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['is_require'] = isset($data['is_require']) ? $data['is_require'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_type'] = isset($data['price_type']) ? $data['price_type'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['file_extension'] = isset($data['file_extension']) ? $data['file_extension'] : null;
        $this->container['max_characters'] = isset($data['max_characters']) ? $data['max_characters'] : null;
        $this->container['image_size_x'] = isset($data['image_size_x']) ? $data['image_size_x'] : null;
        $this->container['image_size_y'] = isset($data['image_size_y']) ? $data['image_size_y'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['product_sku'] === null) {
            $invalid_properties[] = "'product_sku' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['sort_order'] === null) {
            $invalid_properties[] = "'sort_order' can't be null";
        }
        if ($this->container['is_require'] === null) {
            $invalid_properties[] = "'is_require' can't be null";
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
        if ($this->container['product_sku'] === null) {
            return false;
        }
        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['sort_order'] === null) {
            return false;
        }
        if ($this->container['is_require'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets product_sku
     * @return string
     */
    public function getProductSku()
    {
        return $this->container['product_sku'];
    }

    /**
     * Sets product_sku
     * @param string $product_sku Product SKU
     * @return $this
     */
    public function setProductSku($product_sku)
    {
        $this->container['product_sku'] = $product_sku;

        return $this;
    }

    /**
     * Gets option_id
     * @return int
     */
    public function getOptionId()
    {
        return $this->container['option_id'];
    }

    /**
     * Sets option_id
     * @param int $option_id Option id
     * @return $this
     */
    public function setOptionId($option_id)
    {
        $this->container['option_id'] = $option_id;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Option title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
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
     * @param string $type Option type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets sort_order
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     * @param int $sort_order Sort order
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets is_require
     * @return bool
     */
    public function getIsRequire()
    {
        return $this->container['is_require'];
    }

    /**
     * Sets is_require
     * @param bool $is_require Is require
     * @return $this
     */
    public function setIsRequire($is_require)
    {
        $this->container['is_require'] = $is_require;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price Price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_type
     * @return string
     */
    public function getPriceType()
    {
        return $this->container['price_type'];
    }

    /**
     * Sets price_type
     * @param string $price_type Price type
     * @return $this
     */
    public function setPriceType($price_type)
    {
        $this->container['price_type'] = $price_type;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku Sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets file_extension
     * @return string
     */
    public function getFileExtension()
    {
        return $this->container['file_extension'];
    }

    /**
     * Sets file_extension
     * @param string $file_extension
     * @return $this
     */
    public function setFileExtension($file_extension)
    {
        $this->container['file_extension'] = $file_extension;

        return $this;
    }

    /**
     * Gets max_characters
     * @return int
     */
    public function getMaxCharacters()
    {
        return $this->container['max_characters'];
    }

    /**
     * Sets max_characters
     * @param int $max_characters
     * @return $this
     */
    public function setMaxCharacters($max_characters)
    {
        $this->container['max_characters'] = $max_characters;

        return $this;
    }

    /**
     * Gets image_size_x
     * @return int
     */
    public function getImageSizeX()
    {
        return $this->container['image_size_x'];
    }

    /**
     * Sets image_size_x
     * @param int $image_size_x
     * @return $this
     */
    public function setImageSizeX($image_size_x)
    {
        $this->container['image_size_x'] = $image_size_x;

        return $this;
    }

    /**
     * Gets image_size_y
     * @return int
     */
    public function getImageSizeY()
    {
        return $this->container['image_size_y'];
    }

    /**
     * Sets image_size_y
     * @param int $image_size_y
     * @return $this
     */
    public function setImageSizeY($image_size_y)
    {
        $this->container['image_size_y'] = $image_size_y;

        return $this;
    }

    /**
     * Gets values
     * @return \Swagger\Client\Model\CatalogDataProductCustomOptionValuesInterface[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     * @param \Swagger\Client\Model\CatalogDataProductCustomOptionValuesInterface[] $values
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Client\Model\CatalogDataProductCustomOptionExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Client\Model\CatalogDataProductCustomOptionExtensionInterface $extension_attributes
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

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
