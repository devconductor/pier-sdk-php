<?php
/**
 * MaquinetaUpdate
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
 * MaquinetaUpdate Class Doc Comment
 *
 * @category    Class
 * @description {{{maquineta_update_description}}}
 * @package     br.com.conductor.pier.api.v2.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MaquinetaUpdate implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_terminal' => 'int',
        'id_tipo_maquineta' => 'int',
        'valor' => 'Number',
        'data_hora_implantacao' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_terminal' => 'idTerminal',
        'id_tipo_maquineta' => 'idTipoMaquineta',
        'valor' => 'valor',
        'data_hora_implantacao' => 'dataHoraImplantacao'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_terminal' => 'setIdTerminal',
        'id_tipo_maquineta' => 'setIdTipoMaquineta',
        'valor' => 'setValor',
        'data_hora_implantacao' => 'setDataHoraImplantacao'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_terminal' => 'getIdTerminal',
        'id_tipo_maquineta' => 'getIdTipoMaquineta',
        'valor' => 'getValor',
        'data_hora_implantacao' => 'getDataHoraImplantacao'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id_terminal {{{maquineta_update_id_terminal_value}}}
      * @var int
      */
    protected $id_terminal;
    
    /**
      * $id_tipo_maquineta {{{maquineta_update_id_tipo_maquineta_value}}}
      * @var int
      */
    protected $id_tipo_maquineta;
    
    /**
      * $valor {{{maquineta_update_valor_value}}}
      * @var Number
      */
    protected $valor;
    
    /**
      * $data_hora_implantacao {{{maquineta_update_data_hora_implantacao_value}}}
      * @var string
      */
    protected $data_hora_implantacao;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id_terminal = $data["id_terminal"];
            $this->id_tipo_maquineta = $data["id_tipo_maquineta"];
            $this->valor = $data["valor"];
            $this->data_hora_implantacao = $data["data_hora_implantacao"];
        }
    }
    
    /**
     * Gets id_terminal
     * @return int
     */
    public function getIdTerminal()
    {
        return $this->id_terminal;
    }
  
    /**
     * Sets id_terminal
     * @param int $id_terminal {{{maquineta_update_id_terminal_value}}}
     * @return $this
     */
    public function setIdTerminal($id_terminal)
    {
        
        $this->id_terminal = $id_terminal;
        return $this;
    }
    
    /**
     * Gets id_tipo_maquineta
     * @return int
     */
    public function getIdTipoMaquineta()
    {
        return $this->id_tipo_maquineta;
    }
  
    /**
     * Sets id_tipo_maquineta
     * @param int $id_tipo_maquineta {{{maquineta_update_id_tipo_maquineta_value}}}
     * @return $this
     */
    public function setIdTipoMaquineta($id_tipo_maquineta)
    {
        
        $this->id_tipo_maquineta = $id_tipo_maquineta;
        return $this;
    }
    
    /**
     * Gets valor
     * @return Number
     */
    public function getValor()
    {
        return $this->valor;
    }
  
    /**
     * Sets valor
     * @param Number $valor {{{maquineta_update_valor_value}}}
     * @return $this
     */
    public function setValor($valor)
    {
        
        $this->valor = $valor;
        return $this;
    }
    
    /**
     * Gets data_hora_implantacao
     * @return string
     */
    public function getDataHoraImplantacao()
    {
        return $this->data_hora_implantacao;
    }
  
    /**
     * Sets data_hora_implantacao
     * @param string $data_hora_implantacao {{{maquineta_update_data_hora_implantacao_value}}}
     * @return $this
     */
    public function setDataHoraImplantacao($data_hora_implantacao)
    {
        
        $this->data_hora_implantacao = $data_hora_implantacao;
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
