<?php
/**
 * TerminalUpdate
 *
 * PHP version 5
 *
 * @category Class
 * @package  br.com.conductor.pier.api.v2.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace br.com.conductor.pier.api.v2.model;

use \ArrayAccess;
/**
 * TerminalUpdate Class Doc Comment
 *
 * @category    Class
 * @description TerminalUpdate
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TerminalUpdate implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'flag_consulta_extrato' => 'bool',
        'flag_terminal_virtual' => 'bool'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'flag_consulta_extrato' => 'flagConsultaExtrato',
        'flag_terminal_virtual' => 'flagTerminalVirtual'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'flag_consulta_extrato' => 'setFlagConsultaExtrato',
        'flag_terminal_virtual' => 'setFlagTerminalVirtual'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'flag_consulta_extrato' => 'getFlagConsultaExtrato',
        'flag_terminal_virtual' => 'getFlagTerminalVirtual'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $flag_consulta_extrato Flag indicando se o terminal permite consultar extrato, sendo: (true: Sim), (false: N\u00C3\u00A3o)).
      * @var bool
      */
    protected $flag_consulta_extrato;
    
    /**
      * $flag_terminal_virtual Flag indicando se o terminal \u00C3\u00A9 f\u00C3\u00ADsico ou virtual, sendo: (true: Sim), (false: N\u00C3\u00A3o)).
      * @var bool
      */
    protected $flag_terminal_virtual;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->flag_consulta_extrato = $data["flag_consulta_extrato"];
            $this->flag_terminal_virtual = $data["flag_terminal_virtual"];
        }
    }
    
    /**
     * Gets flag_consulta_extrato
     * @return bool
     */
    public function getFlagConsultaExtrato()
    {
        return $this->flag_consulta_extrato;
    }
  
    /**
     * Sets flag_consulta_extrato
     * @param bool $flag_consulta_extrato Flag indicando se o terminal permite consultar extrato, sendo: (true: Sim), (false: N\u00C3\u00A3o)).
     * @return $this
     */
    public function setFlagConsultaExtrato($flag_consulta_extrato)
    {
        
        $this->flag_consulta_extrato = $flag_consulta_extrato;
        return $this;
    }
    
    /**
     * Gets flag_terminal_virtual
     * @return bool
     */
    public function getFlagTerminalVirtual()
    {
        return $this->flag_terminal_virtual;
    }
  
    /**
     * Sets flag_terminal_virtual
     * @param bool $flag_terminal_virtual Flag indicando se o terminal \u00C3\u00A9 f\u00C3\u00ADsico ou virtual, sendo: (true: Sim), (false: N\u00C3\u00A3o)).
     * @return $this
     */
    public function setFlagTerminalVirtual($flag_terminal_virtual)
    {
        
        $this->flag_terminal_virtual = $flag_terminal_virtual;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\br.com.conductor.pier.api.v2.invoker\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
